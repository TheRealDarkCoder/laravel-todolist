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
}
