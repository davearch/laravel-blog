@extends('layouts.base')
@section('title', 'edit')

@section('content')
<form action="{{ route('update_page_path', ['id' => $page->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $page->title }}">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control">{{ $page->content }}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Edit Page</button>
  </div>
  <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Back</a>
</form>
@endsection