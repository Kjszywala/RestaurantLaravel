<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
/**
 * This class serves as the controller for user-related actions and functionalities.
 * It extends the base Controller class provided by Laravel.
 */
class UserController extends Controller
{
    /**
     * Displays the settings page for the current user.
     * This method is responsible for retrieving the current user based on the session user ID
     * and returning a view that displays the settings page. The retrieved user object is passed
     * to the view as the 'user' variable, allowing access to the user's information in the view.
     * @return \Illuminate\View\View
     */
    public function index(){
        $user = User::find(session('user_id'));
        return view('settings', ['user' => $user]);
    }

    /**
     * Saves the user's updated information.
     * This method is responsible for updating the current user's information based on the provided request data.
     * It retrieves the current user based on the session user ID, updates the relevant fields with the new values,
     * and saves the changes to the database. It also handles password updates if a new password is provided.
     * After the update, it returns a view displaying the updated user information along with a message indicating
     * the success or failure of the update operation.
     */
    public function save(Request $request){
        $current_user = User::find(session('user_id'));
        $current_user->login = $request->input('login');
        $current_user->updated_at = now();
        $current_user->name = $request->input('name');
        $current_user->surname = $request->input('surname');
        $current_user->phone = $request->input('phone');
        $current_user->email = $request->input('email');
        $current_user->age = $request->input('age');
        $current_user->gender = $request->input('gender');
        $new_password = $request->input('password');
        $temp = $current_user->password;
        if(!empty($new_password)){
            if(!password_verify($new_password, $temp) && !empty($new_password)){
                $current_user->password = password_hash($new_password, PASSWORD_BCRYPT);
            } 
        } else {
            $current_user->password = $temp;
        }
        if($current_user->save()){
            $message = "Updated successfully.";
            $type = "success";
        } else {
            $message = "Something went wrong.";
            $type = "error";
        }
        return view('settings', ['user' => $current_user])->with('message', $message)->with('type', $type);
    }
}
