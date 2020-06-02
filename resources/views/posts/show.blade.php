@extends('layouts.app')
@section('content')
<div class="card mb-3">
    <img style="max-height: 400px; max-width: 1000%;"class="card-img-top h-100" src="/storage/cover_image/{{$post->cover_image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->body}}</p>
      <p class="card-text"><small class="text-muted">written on {{$post->created_at}} by {{$post->user->name}}</small></p>
    </div>
  </div>
    <a href="/posts"class="btn btn-primary">Back</a>
@endsection
