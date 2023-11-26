<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Kamrul Hasan'; 
        $skills = ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS'];

        return view('home');
    }
}
