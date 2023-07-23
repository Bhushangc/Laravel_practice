@extends('layout')
@section('title','Guitars')
@section('content')
    <br>
     <form method="post" action="{{ route('guitars.update',['guitar' =>$guitar->id]) }}">
        @csrf
        @method('put')

        <div>
            <label for="guitar-name"> Guitar Name</label>
            <input type="text" id="guitar-name" value={{$guitar->name}} name="name">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="Brand"> Brand </label>
            <input type="text" id="brand" value={{$guitar->brand}} name="brand">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div>
            <label for="year"> Year</label>
            <input type="text" id="year" value={{$guitar->year_made}} name="year">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection