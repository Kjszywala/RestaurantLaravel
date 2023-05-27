<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

/**
 * This class serves as the controller for the login functionality in the application.
 * It extends the base Controller class provided by Laravel.
 */
class LoginController extends Controller
{
    /**
     * The index() method is responsible for displaying the login view.
     */
    public function index(){
        return view("login");
    }
	
    /**
     * The login() method is used to perform the user login. It takes a Request object as a parameter,
     * which contains the user's login and password. It verifies the provided credentials 
     * against the stored user data. If the login is successful, it sets the necessary 
     * session data and redirects to the 'mainwindow' view. If the login fails, 
     * it returns the 'login' view with an appropriate error message.
     */
	public function login(Request $request){
		$login = $request->input('login');
        $password = $request->input('password');

        $user = User::where('login', $login)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                // User login successful
                $message = "User successfully logged in.";
                $type = "success";
                Session::put('login', true);
                Session::put('name', $user->name);
                Session::put('user_id', $user->id);
            } else {
                // Incorrect password
                $message = "Incorrect password.";
                $type = "error";
                return view('login')->with('message', $message)->with('type', $type);
            }
        } else {
            // User does not exist
            $message = "User does not exist.";
            $type = "error";
            return view('login')->with('message', $message)->with('type', $type);
        }
        return view('mainwindow')->with('message', $message)->with('type', $type);
    }
}
