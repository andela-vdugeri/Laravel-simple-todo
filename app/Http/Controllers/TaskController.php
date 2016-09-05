<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tasks.new');
    }

    public function store(Request $req)
    {
        $user = auth()->user();
        Task::create([
            'body' => $req->get('task'),
            'user_id' => $user->id,
            'status' => false
        ]);

        return redirect('/home');
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->status = true;
        $task->save();
        return redirect('/home');
    }

    public function undo($id, Request $request)
    {
        $task = Task::find($id);
        $task->status = false;
        $task->save();
        return redirect('/home');
    }

    public function destroy($id, Request $request)
    {
        Task::find($id)->delete();
        return redirect('/home');
    }
}
