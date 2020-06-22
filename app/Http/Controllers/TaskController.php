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

  public function edit($id) {
    $task = Task::findOrFail($id);
    $employees = Employee::all();

    return view('edit_task', compact('task', 'employees'));
  }

  public function update(Request $request, $id) {
    $validatedData = $request -> validate([
      'name' => 'required',
      'description' => 'required',
      'deadline' => 'required',
      'employee_id' => 'required'
    ]);

    Task::whereId($id) -> update($validatedData);

    return redirect() -> route('home');
  }

  public function delete($id) {
    $task = Task::findOrFail($id);

    $task -> delete();

    return redirect() -> route('home');
  }
}
