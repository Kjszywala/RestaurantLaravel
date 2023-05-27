<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * This class serves as the controller for the user registration process in the application.
 * It extends the base Controller class provided by Laravel.
 */
class RegisterController extends Controller
{
    /**
     * Display the registration form by returning the 'register' view and passing a new user object to it.
     */
    public function index(){
        $user = new User();
        return view("register", ['user'=>$user]);
    }

    /**
     * The addUser() method handles the registration of a new user.
     * It retrieves the input data from the request, creates a new user object, 
     * sets the user's properties, including hashing the password, and saves the user to the database. 
     * If the user is successfully saved, it redirects to the 'mainwindow' view with a success message. 
     * Otherwise, it redirects back to the 'register' view with an error message.
     */
    public function AddUser(Request $request, User $user){
        $user = new User();
        $user->login = $request->input('login');
        $password = $request->input('password');
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user->password = $hashedPassword;
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        if($user->save()){
            $type = "success";
            $message = "User registered successfully.";
            return view('mainwindow')->with('message', $message)->with('type', $type);
        } else {
            $type = "error";
            $message = "Something went wrong.";
            return view('register')->with('message', $message)->with('type', $type);
        }
        
    }
}
