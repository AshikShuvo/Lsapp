@extends('layouts.app')
@section('content')
    <h1>This is from services</h1>
    <h2>{{$title}}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid veritatis eos quae eveniet ex delectus possimus dolorum dolorem voluptatibus totam?</p>
    @if ($services)
    <ul>
        @foreach ($services as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    @endif
@endsection
