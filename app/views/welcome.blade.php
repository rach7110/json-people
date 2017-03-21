@extends('layouts.master')

@section('title')
  welcome
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

      <div class="people-link">
        <a href="{{route('people')}}">Y'alls Inputs</a>
      </div>

    </form>
  </div>
@stop
