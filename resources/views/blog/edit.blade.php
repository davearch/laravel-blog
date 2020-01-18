@extends('layouts.base')
@section('title', 'edit')

@section('content')
<form action="{{ route('update_blogpost_path', ['id' => $blogpost->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $blogpost->title }}">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea id="summernote" name="content" rows="10" class="form-control">{{ $blogpost->content }}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Edit blog post</button>
  </div>
</form>
@endsection