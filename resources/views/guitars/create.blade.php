@extends('layout')
@section('title','Guitars')
@section('content')
    <br>
     <form method="post" action="{{ route('guitars.store') }}">
        @csrf

        <div>
            <label for="guitar-name"> Guitar Name</label>
            <input type="text" id="guitar-name" name="name">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="Brand"> Brand </label>
            <input type="text" id="brand" name="brand">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="year"> Year</label>
            <input type="text" id="year" name="year">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection