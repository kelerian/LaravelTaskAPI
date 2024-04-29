<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * маршруты для взаимодействия с таблицей Projects
 */
Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::post('project', [ProjectController::class, 'store']);

/**
 * маршруты для взаимодействия с таблицей Tasks
 */
Route::get('/tasks/{project_id}', [TaskController::class, 'index']);
Route::post('/tasks/{project_id}', [TaskController::class, 'store']);
Route::put('/task/{task_id}', [TaskController::class, 'update']);
Route::delete('/task/{task_id}', [TaskController::class, 'destroy']);




