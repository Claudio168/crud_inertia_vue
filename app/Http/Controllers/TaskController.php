<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Task;

class TaskController extends Controller
{
    

public function index()
{
    $tasks = Task::orderBy('created_at', 'desc')->get();
    return Inertia::render('Tasks/Index', ['tasks' => $tasks]);
}

public function create()
{
    return Inertia::render('Tasks/Create');
}

public function store(Request $request)
{
    //Task::create($request->all());
    $task = new Task();
    $task->title = $request->input('title');
    $task->completed = "No";
    $task->save();
    return redirect()->route('tasks.index');
}

public function edit(Task $task)
{
    return Inertia::render('Tasks/Edit', ['task' => $task]);
}

public function update(Request $request, Task $task)
{
    $task->update($request->all());
    return redirect()->route('tasks.index');
}

public function destroy(Task $task)
{
    $task->delete();
    return redirect()->route('tasks.index');
}

}
