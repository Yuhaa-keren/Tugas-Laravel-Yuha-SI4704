<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // ambil semua data projects
        return view('dashboard', compact('projects')); // kirim ke view dashboard
    }
}