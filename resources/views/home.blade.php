@extends('layouts.main_layout')

@section('content')
  @if (session('status'))
      <div class='success'>
          <h1>{{ session('status') }}</h1>
      </div>
  @endif
  <a href="{{ route('home_loc') }}">VIEW LOCATIONS</a>
  <h1>Tasks</h1>

  <h3><a href="{{ route('create_task') }}">CREATE NEW TASK</a></h3>

  <ul>
    @foreach ($tasks as $task)
      <li>
        NAME: {{ $task['name'] }}<br>
        DESCRIPTION: {{ $task['description'] }} <br>
        DEADLINE: {{ $task['deadline'] }} <br>
        EMPLOYEE: <a href="{{ route('show_empl', $task -> employee -> id) }}">
          {{ $task -> employee -> firstname }}
          {{ $task -> employee -> lastname }}
        </a><br><br>
        <a href="{{ route('edit_task', $task['id']) }}">EDIT TASK</a> <br>
        <a href="{{ route('delete_task', $task['id']) }}">DELETE TASK</a> <br> <br>
      </li>
    @endforeach
  </ul>
@endsection
