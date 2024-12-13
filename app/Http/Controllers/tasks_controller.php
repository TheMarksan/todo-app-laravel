<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class tasks_controller extends Controller
{
    //
    public function index(){
        $tasks = Task::all();
        return view('user-page', compact('tasks'));
    }
}
