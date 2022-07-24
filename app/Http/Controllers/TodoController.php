<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $items = task::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, task::$rules);
        $form = $request->all();
        task::create($form);
        return redirect('/');
    }
}
