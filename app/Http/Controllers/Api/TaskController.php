<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Функция контроллера возвращающая Задачу из таблицы
     * Tasks соответствующие номеру проекта из связанной
     * таблицы по полю project_id.
     */
    public function index($project_id)
    {
        $tasks = Tasks::where('project_id', $project_id)->get();
        return response()->json($tasks);
    }

    /**
     * Функция контроллера обрабатывающая метод POST,
     * принимает id проекта, для создания задачи для
     * указываемого проекта, и достает из request все
     * требуемые поля для экземпляра таблицы Tasks(все поля обязательные)
     */
    public function store(Request $request, $project_id)
    {
        $task = new Tasks();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->project_id = $project_id;
        $task->status_id = $request->input('status_id');
        $task->type_id = $request->input('type_id');
        $task->save();

        return response()->json($task, 201);
    }

    /**
     * Функция контроллера изменяющая выбранную задачу,
     * изменяет только указанные поля(кроме поля project_id,
     * так как задача создается под проект).
     */
    public function update(Request $request, $task_id)
    {
        $task = Tasks::findOrFail($task_id);
        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }
        $task->fill($request->all());
        $task->save();


        return response()->json($task);
    }

    /**
     * удаление выбранной задачи
     */
    public function destroy($task_id)
    {
        $task = Tasks::findOrFail($task_id);
        $task->delete();

        return response()->json(null, 204);
    }
}
