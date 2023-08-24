@extends('layouts.main')



@section('container')
    <h2>{{ $post->articleTitle }}</h2>

    @if ($post->articlePict)
    <div style="max-height: 500px;  overflow: hidden; display: flex; justify-content: center; align-items: center;">
        <img src="{{ asset('storage/'.$post->articlePict) }}" class="img-fluid" alt="{{$post->category->categoryName}}">    
    </div>
    @else
    <img src="https://source.unsplash.com/1200x400?{{ $post->category->categoryName }}" class="img-fluid" alt="{{$post->category->categoryName}}">    
    @endif

    <h6> <a href="/categories/{{$post->category->slug}}"> {{ $post->category->categoryName }} </a> </h6>
    Written by <a href="/author/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a>     
    <article class="mb-3">
    <p>{!! $post->articleBody !!}</p>
    <div class="tags">
        Tags:
        @foreach($post->tags as $tag)
            <span class="tag">  {{ $tag->tagName }}</span>
        @endforeach
    </div>

    </article>
    <a href="/posts">Back</a>
@endsection

