@extends('layouts.main')

@section('container')
<h1> {{ $title }} </h1>

@if ($posts->count() > 0)

<div class="card mb-5">
    @if ($posts[0]->articlePict)
    <div style="max-height: 400px;  overflow: hidden; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('storage/'.$posts[0]->articlePict) }}" class="img-fluid"  alt="{{$posts[0]->category->categoryName}}">    
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?$posts[0]->category->categoryName"  class="card-img-top" alt="{{$posts[0]->category->categoryName}}">
    @endif
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->articleTitle }}</h3>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <p><a href="/posts/{{ $posts[0]->slug }}">Read More...</a>
    <br>
    <small class="text-body-secondary">Written by {{ $posts[0]->user->name }} in
    <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->categoryName }}</a></small>
    </p>
    <p class="card-text"><small class="text-body-secondary">Uploaded at {{ $posts[0]->created_at->diffForHumans() }}</small></p>
  </div>
</div>

@else

<p class="text-center fs-4">No article found.</p>

@endif
<div class="container mt-4">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                @if ($post->articlePict)
                <div style="max-height: 400px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/'.$post->articlePict) }}" class="img-fluid" alt="{{$post->category->categoryName}}">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?$posts->category->categoryName" class="card-img-top" alt="{{$post->category->categoryName}}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->articleTitle }}</h5>
                    <small class="text-body-secondary">Written by {{ $posts[0]->user->name }} in
                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->categoryName }}</a>
                    </small>
                    <p class="card-text"><small class="text-body-secondary">Uploaded at {{ $post->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
        @endforeach
     {{ $posts->links() }}
    </div>
</div>
@endsection

