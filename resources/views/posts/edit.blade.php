@extends('layouts.app')
@section('content')
@if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

<form method="post" action="{{action('PostsController@update',$post->id)}}" class="py-2">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <div class="form-group row">
        <label for="titleid" class="col-sm-3 col-form-label">Title</label>
        <div class="col-sm-9">
            <input name="title" type="text" value="{{$post->title}}" class="form-control" id="titleid" placeholder=" Title" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="publisherid" class="col-sm-3 col-form-label">Content</label>
        <div class="col-sm-9">
            <textarea name="body" class="form-control" id="publisherid" placeholder="Content of Post" required>{{$post->body}}</textarea>
        </div>
    </div>
  <!--  <div class="form-group row">
        <label for="gameimageid" class="col-sm-3 col-form-label">Game Image</label>
        <div class="col-sm-9">
            <input name="image" type="file" id="gameimageid" class="custom-file-input" required>
            <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
        </div>
    </div> -->
    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Edit Post</button>
        </div>
    </div>
</form>
@endsection
