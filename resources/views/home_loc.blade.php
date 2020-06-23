@extends('layouts.main_layout')

@section('content')
  <h1>LOCATIONS</h1>
  @foreach ($locations as $location)
    <div class='locations'>
      <h2>{{ $location['city'] }} - {{ $location['street'] }} - {{ $location['state'] }}</h2>
      <a href="{{ route('delete_loc', $location['id']) }}">DELETE LOCATION</a>
      <div class='locations-list'>
        <ul>
          @foreach ($location -> employees as $employee)
            <li>Employee:
              <a href="{{ route('show_empl', $employee['id']) }}">
                {{ $employee['firstname'] }} {{ $employee['lastname'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  @endforeach
  <a href="{{ route('home') }}">HOME</a>
@endsection
