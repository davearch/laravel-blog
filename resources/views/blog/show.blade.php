@extends('layouts.base')
@section('title', 'show')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br />
    <h3>{{ $blogpost->title }}</h3>
    <hr />
    <p class="lead">
      {{ $blogpost->content }}
    </p>
        <a href="{{ route('blog_path') }}" class="btn btn-outline-secondary">Back</a>
        @auth
        <a href="{{ route('edit_blogpost_path', ['id' => $blogpost->id]) }}" class="btn btn-outline-info">Edit</a>
        <form action="{{ route('delete_blogpost_path', ['id' => $blogpost->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
        @endauth
  </div>
</div>
@endsection