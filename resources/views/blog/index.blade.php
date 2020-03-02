@extends('layouts.base')

@section('title', 'blogs')

@section('content')
  <br />
  <h1>Blog Posts</h1>
  <div class="row">
  @foreach($blogposts as $blogpost)
    <div class="col-md-12">
      <br />
      <br />
      <div class="card text-white bg-dark mb-3">

        <div class="card-header">
          <a class="h4" href="{{ route('blogpost_path', ['id' => $blogpost->id]) }}">{{ $blogpost->title }}</a>
        </div>

        <div class="card-body">
          {!! $blogpost->content !!}
          <br />
          <br />
          <br />

          <p class="lead">
            posted
            {{ $blogpost->created_at->diffForHumans() }}
          </p>

          <a href="{{ route('blogpost_path', ['id' => $blogpost->id]) }}" class="btn btn-outline-primary">View Post</a>
        </div>
      </div>
  </div>
  @endforeach
@endsection