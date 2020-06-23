<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
  public function index() {
    $locations = Location::all();

    return view('home_loc', compact('locations'));
  }

  public function delete($id) {
    $location = Location::findOrFail($id);

    $location -> delete();

    return redirect() -> route('home_loc');
  }
}
