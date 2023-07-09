<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todoList = Todo::orderBy('id','ASC')->paginate(5);

        return view('Todo.index',compact('todoList'))->with('i');
    }


    public function create()
    {
        return view('Todo.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','string']
        ]);
        Todo::create($validatedData);
        return redirect()->route('todo.index');
    }


    public function show(Todo $todo)
    {
        return view('Todo.show',compact('todo'));
    }


    public function edit(Todo $todo)
    {
        return view('Todo.edit',compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'title'=>['required','string']
        ]);
        $todo->update($validatedData);
        return redirect()->route('todo.index');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
