<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

/**
 * This class serves as the controller for the logout functionality in the application.
 * It extends the base Controller class provided by Laravel.
 */
class LogoutController extends Controller
{
    /**
     * The index() method is responsible for performing the logout action. 
     * It flushes the session, clearing all session data, and then redirects to the 'mainwindow' view, 
     * which represents the main window of the application.
     */
    public function index() {
        Session::flush();
        return view("mainwindow");
    }
}
