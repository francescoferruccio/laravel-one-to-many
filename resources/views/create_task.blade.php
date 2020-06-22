@extends('layouts.main_layout')

@section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('store_task') }}" method="post">
    @csrf
    @method('POST')

    <label for="name">NAME</label>
    <input type="text" name="name" value=""> <br>
    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" value=""> <br>
    <label for="deadline">DEADLINE</label>
    <input type="date" name="deadline" value=""> <br>
    <label for="employee_id">EMPLOYEE</label>
    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{ $employee['id'] }}">
          {{ $employee['firstname'] }} {{ $employee['lastname'] }}
        </option>
      @endforeach
    </select> <br>

    <input type="submit" name="submit" value="CREATE">
  </form>
@endsection
