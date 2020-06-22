@extends('layouts.main_layout')

@section('content')
  @if ($errors->any())
      <div class="error">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('update_task', $task['id']) }}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value="{{ $task['name'] }}"> <br>
    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" value="{{ $task['description'] }}"> <br>
    <label for="deadline">DEADLINE</label>
    <input type="date" name="deadline" value="{{ $task['deadline'] }}"> <br>
    <label for="employee_id">EMPLOYEE</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{ $employee['id'] }}"
        @if ($task['employee_id'] == $employee['id'])
          selected
        @endif
        >
        {{ $employee['firstname'] }} {{ $employee['lastname'] }}
      </option>
      @endforeach
    </select> <br>

    <input type="submit" name="submit" value="UPDATE">
  </form>
@endsection
