<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class PagesController extends Controller
{
    public function store(Request $request){
        //Input validate
        $this->validate($request,[
            'task'=>'required|max:100|min:5',
        ]);
       

        $task = new Task;
        $task->task = $request->task; //Get data from the form;
        $task->save();

        $data=Task::all();
        // return view('task')->with('tasks',$data);
        return back()->with('tasks',$data);
        // return  redirect()->back();
    }

    public function updateTaskAsCompleted($id){
        $task = Task::find($id);
        $task->iscompleted = 1;
        $task->save();
        return redirect()->back();
    }

    public function updateTaskAsNotCompleted($id){
        $task = Task::find($id);
        $task->iscompleted = 0;
        $task->save();
        return redirect()->back();
    }

    public function deleteTask($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function updateTaskView($id){
        $task = Task::find($id);
        return view('viewUpdate')->with('taskdata',$task);
    }

    public function updateTaskValue(Request $req){
       $id = $req->taskId;
       $taskValue = $req->taskValue;
       $data = Task::find($id);
       $data->task = $taskValue; 
       $data->save();
       $allData=Task::all();
       return view('task')->with('tasks', $allData);
    }
}
