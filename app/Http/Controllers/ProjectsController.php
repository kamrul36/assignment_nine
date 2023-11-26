<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Portfolio', 'description' => 'This is my first portfolio'],
            ['title' => 'E_procurement', 'description' => 'Online tending marketplace'],
        ];

        return view('projects', compact('projects'));
    }
}
