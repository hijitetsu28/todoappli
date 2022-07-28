<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = Task::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $form = $request->all();
        Task::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, Task::$rules);
        $edit = $request->all();
        unset($edit['_token']);
        Task::where('id', $request->id)->update($edit);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        $remove = $request->all();
        unset($remove['_token']);
        Task::where('id', $remove)->delete();
        return redirect('/');
    }
}