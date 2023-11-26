<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Kamrul Hasan'; // Replace with your actual name
        $skills = ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS']; // Replace with your actual skills

        return view('home');
    }
}
