<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class tasks_controller extends Controller
{
    //
    public function index(){
        $tasks = Task::all();
        return view('user-page', compact('tasks'));
    }

    public function store(Request $request){

        //dd($request->all());

        $title = $request->validate([
            'title' => 'required',
        ]);

        if (empty($title)) {
            return redirect()->route('user-page')->withErrors('error', 'bad request');
        }

        $userId = Auth::id();
        $isDone = false;

        $data = [
            'title' => $title['title'],
            'isDone' => $isDone,
            'user_id' => $userId
        ];

        Task::create($data);

        return redirect()->route('user-page')->with('message', 'iboselai indiota');
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('user-page')->with('message', 'task deleted');
    }

    public function update($id){
        $task = Task::find($id);
        $task->isDone = !$task->isDone;
        $task->save();
        return redirect()->route('user-page')->with('message', 'task is done');
    }
}
