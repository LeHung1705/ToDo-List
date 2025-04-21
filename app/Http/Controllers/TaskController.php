<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    public function index()
    {
        if(!Auth::check()) {
            return redirect()->route('login');
        }

        $tasks = Task::where('user_id', Auth::id())->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $request->validate(['title' => 'required|string|max:255']);
        Task::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
