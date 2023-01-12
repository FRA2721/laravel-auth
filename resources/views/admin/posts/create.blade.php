@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-8">
        <h1 class="text-center">Add a new post</h1>

        {{-- errors section --}}
        @if ($errors->any())

          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        {{-- form: store action --}}
        <form action="{{ route('admin.posts.store') }}" method="POST">
          @csrf

          {{-- title section --}}
          <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
          </div>
            
          {{-- link section --}}
          <div class="mb-3">
            <label for="link" class="form-label">Link:</label>
            <input type="text" class="form-control" id="link" name="link"value="{{ old('link') }}">
          </div>
          
          {{-- description section --}}
          <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
          </div>
          
          {{-- add section --}}
          <div class="row justify-content-center mt-4">
            <button type="submit" class="btn btn-success row">Add</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection