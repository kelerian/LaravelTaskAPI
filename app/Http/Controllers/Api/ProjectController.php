<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Функция контроллера возвращающая список всех проектов.
     */
    public function index()
    {
        $projects = Projects::all();
        return response()->json($projects,201);
    }
    /**
     * Функция контроллера создающая новый проект.
     */
    public function store(Request $request)
    {
        $project = Projects::create($request->all());
        return response()->json($project, 201);
    }
}
