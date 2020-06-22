<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class TaskController extends Controller
{
  public function index() {
    $tasks = Task::all();

    return view('home', compact('tasks'));
  }
}
