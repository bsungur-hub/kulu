<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $Projects = Project::with('images')->latest()->get();
        return view('home', compact('Projects'));
    }
}
