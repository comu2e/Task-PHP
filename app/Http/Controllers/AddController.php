<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.add',['items'=>$tasks]);
    }

    public function add(Request $request){
        $tasks = Task::all();
        return view('task.add',['items'=>$tasks]);

    }
    public function create(Request $request){
        $this -> validate($request,Task::$rules);
        $task = new Task;
        $form = $request -> all();
        unset($form['_token']);
        $task -> status = '作業中';
        $task -> fill($form)-> save();
        return redirect('/task');
    }

}
