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
<form method="post" action="/posts" enctype="multipart/form-data" class="py-2">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="titleid" class="col-sm-3 col-form-label">Title</label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="titleid" placeholder=" Title" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="publisherid" class="col-sm-3 col-form-label">Content</label>
        <div class="col-sm-9">
            <textarea name="body" class="form-control" id="publisherid" placeholder="Content of Post" required></textarea>
        </div>
    </div>

  <div class="form-group row">
        <label for="customFile" class="col-sm-3 col-form-label">Cover Image</label>
        <div class="col-sm-9">
            <div class="custom-file">
                <input name="cover_image" type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </div>
    </div>
</form>
@endsection
