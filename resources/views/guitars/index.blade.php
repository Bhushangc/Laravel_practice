@extends('layout')
@section('title','Guitars')
@section('content')
    @if(count($guitars)>0)
        @foreach ($guitars as $guitar)
            <div>
                <h3> 
                <a href="{{ route( 'guitars.show',['guitar' => $guitar['id'] ] ) }}">{{$guitar['name']}} </a>    
                </h3>
                <ul>
                    <li> Made By:  {{$guitar['brand']}}</li>
                    <li> Year:  {{$guitar['year_made']}}</li>
                </ul>
            </div>

        @endforeach
        <div>
            User Input: {{$user_input}}
        </div>
    @else   
        <h2>There are no guitars</h2>
    @endif
@endsection