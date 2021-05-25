<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Text;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    //
    public function index(){
        $slides = Slide::all();
        $sections = Text::all();
        
        // dd($slides);
        return view('welcome',compact('slides','sections'));


    }
}
