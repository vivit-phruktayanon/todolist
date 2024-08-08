<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('todolists', compact('tasks'));
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
    public function clear()
    {
        Task::truncate();
        return redirect()->back();
    }
}
