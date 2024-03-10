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
            'todos' => Todo::all()
        ]);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
