<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $Projects = Project::with('images')->latest()->get();

        return view('projects', compact('Projects'));
    }
}
