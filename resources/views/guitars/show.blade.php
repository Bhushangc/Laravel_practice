@extends('layout')
@section('title','Guitars')
@section('content')

    <div>
        <h3> {{$guitar['name']}} </h3>
        <ul>
            <li> Made By:  {{$guitar['brand']}}</li>
            <li> Year:  {{$guitar['year_made']}}</li>
        </ul>
    </div>
@endsection