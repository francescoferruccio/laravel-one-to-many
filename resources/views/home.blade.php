@extends('layouts.main_layout')

@section('content')
  <h1>Tasks</h1>

  <h3><a href="{{ route('create_task') }}">CREATE NEW TASK</a></h3>

  <ul>
    @foreach ($tasks as $task)
      <li>
        NAME: {{ $task['name'] }} <br>
        DESCRIPTION: {{ $task['description'] }} <br>
        DEADLINE: {{ $task['deadline'] }} <br>
        EMPLOYEE: {{ $task -> employee -> firstname }}
        {{ $task -> employee -> lastname }} <br> <br>
        <a href="{{ route('edit_task', $task['id']) }}">EDIT TASK</a> <br>
        <a href="{{ route('delete_task', $task['id']) }}">DELETE TASK</a> <br> <br>
      </li>
    @endforeach
  </ul>
@endsection
