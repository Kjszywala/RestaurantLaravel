<?php
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }
	
	public function login(Request $request){
		$login = $request->input('login');
        $password = $request->input('password');

        $user = User::where('login', $login)->first();
        var_dump($user);
        if ($user) {
            if (password_verify($user->password,  $password)) {
                // User login successful
                $message = "User successfully logged in.";
                $type = "success";
                $_SESSION["login"] = true;
                $_SESSION["name"] = $user->name;
                var_dump($_SESSION["login"]);
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
