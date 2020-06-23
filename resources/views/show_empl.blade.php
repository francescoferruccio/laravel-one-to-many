@extends('layouts.main_layout')

@section('content')
  <h1>Employee {{ $employee['id'] }}</h1>
  <div>
    NAME: {{ $employee['firstname'] }} {{ $employee['lastname'] }} <br>
    DATE OF BIRTH: {{ $employee['dateOfBirth'] }} <br>
    ROLE: {{ $employee['role'] }}
  </div>
  <h1>LOCATIONS</h1>
  <div>
    @foreach ($employee -> locations as $location)
      {{ $location['city']}} -
      {{ $location['street']}} -
      {{ $location['state']}} <br>
    @endforeach
  </div>
  <a href="{{ route('edit_empl', $employee['id']) }}">EDIT EMPLOYEE</a>
  <a href="{{ route('delete_empl', $employee['id']) }}">DELETE EMPLOYEE</a>
  <a href="{{ route('home') }}">HOME</a>
  <a href="{{ route('home_loc') }}">LOCATIONS</a>
@endsection
