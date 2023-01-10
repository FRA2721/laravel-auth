@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-8">
        <h1 class="text-center mt-3">{{ $post->title }}</h1>
        <div class="d-flex justify-content-between mt-4">
          <p>{{ $post->slug }}</p>
        </div>
        <p class="mt-3">{{ $post->description }}</p>
      </div>
    </div>
  </div>
@endsection