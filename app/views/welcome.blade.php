@extends('layouts.master')

  @section('title')
    Laravel PHP Framework
  @stop


@section('content')
  <div class="welcome">
    <h1>Hello</h1>
    <form action="{{ route('people') }}" method="post">
      
      <div>
        <label>Please enter your json object</label>
      </div>

      <div>
        <textarea name="people" rows="10" cols="30"></textarea>
      </div>

      <input type="submit" val="submit">

    </form>
  </div>
@stop
