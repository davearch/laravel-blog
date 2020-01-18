@extends('layouts.base')
@section('title', 'create')

@section('content')
<form action="{{ route('store_page_path') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-outline-primary">Add Page</button>
  </div>
</form>
@endsection