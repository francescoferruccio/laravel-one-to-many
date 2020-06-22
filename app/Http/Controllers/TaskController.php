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

  public function create() {
    $employees = Employee::all();

    return view('create_task', compact('employees'));
  }

  public function store(Request $request) {
    $validatedData = $request -> validate([
      'name' => 'required',
      'description' => 'required',
      'deadline' => 'required',
      'employee_id' => 'required'
    ]);

    $task = new Task;

    $task['name'] = $validatedData['name'];
    $task['description'] = $validatedData['description'];
    $task['deadline'] = $validatedData['deadline'];
    $task['employee_id'] = $validatedData['employee_id'];

    $task -> save();

    return redirect() -> route('home');
  }
}
