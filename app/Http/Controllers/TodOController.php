<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class TodOController extends Controller
{
    //
    public function index(){
        $todos = ToDo::all();
        return view('todo.index', ['todo' => $todos]);
    }
    public function create(){
        return view('todo.create');
    }
    public function store(Request $request){
       $data = $request->validate([
        'todo'=>'required',
        'status'=>'required'
       ]);
       $newToDo = ToDo::create($data);
       return redirect(route('todo.index'));
    }
    public function edit(ToDo $todo){
        return view('todo.edit', ['todo'=>$todo]);
    }
    public function update(ToDo $todo, Request $request){
        $data = $request->validate([
          'todo'=>'required',
          'status'=>'required'
        ]);
        $todo->update($data);
        return redirect(route('todo.index'));

    }
    public function destroy(ToDo $todo){
        $todo->delete();
        return redirect(route('todo.index'))->with('success');
    }
}

