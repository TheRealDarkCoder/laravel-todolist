<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{
    public function index(){
        $todolist = Todolist::all();
        return view('welcome', ['todolist'=>$todolist]);
    }

    public function create(Request $request){
        $input = $request->all();
        
        $todo = new Todolist;
        $todo->title = $input['title'];
        $todo->save();
        
        return redirect('/');
    }
}
