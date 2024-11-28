@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <div class="row">
      @foreach ($posts as $post)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $post->id }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->label }}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('posts.edit', $post->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@stop 
@section('pied')

<footer>pied de page</footer>
@stop
