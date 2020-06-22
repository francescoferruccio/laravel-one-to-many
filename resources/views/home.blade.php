@extends('layouts.main_layout')

@section('content')
  <h1>Tasks</h1>

  <ul>
    @foreach ($tasks as $task)
      <li>
        NAME: {{ $task['name'] }} <br>
        DESCRIPTION: {{ $task['description'] }} <br>
        DEADLINE: {{ $task['deadline'] }} <br>
        EMPLOYEE: {{ $task -> employee -> firstname }}
        {{ $task -> employee -> lastname }} <br> <br>
        <a href="{{ route('edit_task', $task['id']) }}">EDIT TASK</a> <br> <br>
      </li>
    @endforeach
  </ul>
@endsection
