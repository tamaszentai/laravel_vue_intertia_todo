<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Inertia::render("Index", [
            'todos' => Todo::all(),
        ]);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        Todo::create($request->validate([
            'name' => 'required',
            'isCompleted' => 'required',
        ]));
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->isCompleted = $request->isCompleted;
        $todo->save();

        return $todo;
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $todo = Todo::find($id);
        // return $todo;
        $todo->delete();
        return response(status: 202);
    }
}
