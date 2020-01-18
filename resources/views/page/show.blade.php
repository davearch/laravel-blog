@extends('layouts.base')
@section('title', 'show')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br />
    <h3>{{ $page->title }}</h3>
    <hr />
    <p class="lead">
      {{ $page->content }}
    </p>
        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary">Back</a>
        @auth
        <a href="{{ route('edit_page_path', ['id' => $page->id]) }}" class="btn btn-outline-info">Edit</a>
        <form action="{{ route('delete_page_path', ['id' => $page->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
        @endauth
  </div>
</div>
@endsection