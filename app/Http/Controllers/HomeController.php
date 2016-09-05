<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        $completed = $tasks->filter(function ($task) {
            return $task->status == true;
        });

        $pending = $tasks->filter(function ($task) {
            return $task->status == false;
        });

        return view('home', compact('pending', 'completed'));
    }
}
