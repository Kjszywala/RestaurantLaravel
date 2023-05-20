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
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->gender = $request->input('gender');
        var_dump($user);
        $user->save();
        return redirect('/');
    }
}
