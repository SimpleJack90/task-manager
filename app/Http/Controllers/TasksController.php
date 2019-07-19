<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //

    public function index(){

        $tasks=Task::all();

        return view('tasks.index')->with('tasks',$tasks);
    }
    public function show(Task $task){



        return view('tasks.show')->with('task',$task);
    }

    public function create(){

        return view('tasks.create');
    }

    public function store(Request $request){

      //  dd(request());

        $this->validate($request,[
            'name'=>'required|min:6|max:12',
            'description'=>'required'
        ]);

        $data=$request->all();

        $task=new Task();

        $task->name=$data['name'];
        $task->description=$data['description'];
        $task->completed=false;

        $task->save();

        session()->flash('success','Task created successfully');



        return redirect('/tasks');
    }
    public function edit(Task $task){



        return view('tasks.edit')->with('task',$task);
    }
    public function update(Task $task){

        $this->validate(request(),[
            'name'=>'required|min:6',
            'description'=>'required'
        ]);

        $data=request()->all();



        $task->name=$data['name'];
        $task->description=$data['description'];

        $task->save();

        session()->flash('success','Task updated successfully');

        return redirect('/tasks');
    }

    public function destroy(Task $task){



        $task->delete();

        session()->flash('success','Task deleted successfully');
        return redirect('/tasks');
    }

    public function complete(Task $task){
        $task->completed=true;

        $task->save();

        session()->flash('success','Task completed successfully');

        return redirect('/tasks');
    }
}
