<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class PageController extends Controller
{
    public function index() {

        $projects = Project::all();

        return view('index', compact('projects'));
    }

    public function show($id) {

        $project = Project::findOrFail($id);

        return view('auth.show', compact('project'));
    }
}
