<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;

class EmployeeController extends Controller
{
  public function show($id) {
    $employee = Employee::findOrFail($id);

    return view('show_empl', compact('employee'));
  }

  public function edit($id) {
    $employee = Employee::findOrFail($id);
    $locations = Location::all();

    return view('edit_empl', compact('employee', 'locations'));
  }

  public function update(Request $request, $id) {
    $validatedData = $request -> validate([
      'firstname' => 'required',
      'lastname' => 'required',
      'dateOfBirth' => 'required',
      'role' => 'required',
      'locations' => 'array'
    ]);

    if (!array_key_exists('locations', $validatedData)) {
      $validatedData['locations'] = [];
    }

    $employee = Employee::findOrFail($id);

    $employee['firstname'] = $validatedData['firstname'];
    $employee['lastname'] = $validatedData['lastname'];
    $employee['dateOfBirth'] = $validatedData['dateOfBirth'];
    $employee['role'] = $validatedData['role'];

    $employee -> save();

    $employee -> locations() -> sync($validatedData['locations']);

    return redirect() -> route('show_empl', $id);
  }
}