<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name = "Kamrul Hasan";
        $bio = "I am a passionate web developer with a love for coding and building things.";

 
        return view('about', compact('name', 'bio'));
    }
}
    