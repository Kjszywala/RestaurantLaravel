<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * The AboutController class has a single method index() that displays the "about us" page. 
 * When this method is called, it returns the corresponding view, which in this case is "aboutus".
 */
class AboutController extends Controller
{
    public function index(){
        return view("aboutus");
    }
}
