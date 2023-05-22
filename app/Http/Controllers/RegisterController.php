<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $user = new User();
        return view("register", ['user'=>$user]);
    }

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
