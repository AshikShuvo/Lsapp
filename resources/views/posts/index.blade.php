@extends('layouts.app')
@section('content')
    <h2>Posts</h2>
    @if (count($posts)>0)

        @foreach ($posts as $post)
        <div class="card" style="max-width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5" style="background: #868e96;">
                    <img src="/storage/cover_image/{{$post->cover_image}}" class="card-img-top h-100" alt="...">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                        <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <a href="/posts/{{$post->id}}" class="btn btn-primary stretched-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @endif
@endsection
