<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;
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
