<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** 
 * The GalleryController class serves as the controller for the gallery functionality in the application. 
 * It extends the base Controller class provided by Laravel.
*/
class GalleryController extends Controller
{
    /**
     * The index() method is responsible for displaying the gallery view. 
     * It simply returns the 'gallery' view, which will be rendered and displayed to the user.
     */
    public function index(){
        return view("gallery");
    }
}
