<!-- @extends('layouts.main')

@section('container')
    <article>
    <h1>Post Category : {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->articleTitle }}</a></h2>
    <p>{{ $post->excerpt }}<a href="/posts/{{ $post->slug }}">Read More...</a></p>
    </article>
    @endforeach
@endsection
 -->
