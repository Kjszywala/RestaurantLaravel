<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * This class serves as the controller for the menu functionality in the application.
 * It extends the base Controller class provided by Laravel.
 */
class MenuController extends Controller
{
    /**
     * The index() method is responsible for displaying the menu. 
     * It returns the 'menu' view, which is responsible for rendering and displaying the menu content.
     */
    public function index(){
        return view("menu");
    }
}
