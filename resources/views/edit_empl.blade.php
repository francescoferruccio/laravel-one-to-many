@extends('layouts.main_layout')

@section('content')
  <div class="">
    <h1>EDIT EMPLOYEE {{ $employee['id'] }}</h1> <br>
    <form action="{{ route('update_empl', $employee['id']) }}" method="post">
      @csrf
      @method('POST')

      <label for="firstname">FIRSTNAME</label>
      <input type="text" name="firstname" value="{{ $employee['firstname'] }}"> <br>
      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value="{{ $employee['lastname'] }}"> <br>
      <label for="dateOfBirth">DATEOFBIRTH</label>
      <input type="date" name="dateOfBirth" value="{{ $employee['dateOfBirth'] }}"> <br>
      <label for="role">ROLE</label>
      <input type="text" name="role" value="{{ $employee['role'] }}"> <br>
      <label for="locations[]">LOCATIONS</label> <br>
      @foreach ($locations as $location)
        <input type="checkbox" name="locations[]" value="{{ $location['id'] }}"
        @foreach ($employee -> locations as $empl_location)
          @if ($location['id'] == $empl_location['id'])
            checked
          @endif
        @endforeach
        > {{ $location['city'] }} - {{ $location['street'] }} - {{ $location['state'] }} <br>
      @endforeach
      <br>
      <input type="submit" name="submit" value="UPDATE">
    </form>
  </div>
@endsection
