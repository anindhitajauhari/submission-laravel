@extends('layouts.main')

@section('container')
<style>
    body {
        background-color: #f2e6ff; /* Light purple background */
    }

    h1 {
        color: #4b0082; /* Dark purple text */
    }

    .btn-primary {
        background-color: #9370db; /* Medium purple button background */
        color: #fff; /* White button text */
    }

    .btn-danger {
        background-color: #8b0000; /* Dark red button background */
        color: #fff; /* White button text */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #9370db; /* Medium purple border bottom for table header and data cells */
    }

    th {
        background-color: #f0e6ff; /* Light purple header background */
        color: #4b0082; /* Dark purple header text */
    }

    td {
        background-color: #f7f0ff; /* Light purple data cell background */
        color: #4b0082; /* Dark purple data cell text */
    }
</style>

<h1>My Post</h1>
<a href="/create" class="btn btn-primary">Create New Article</a>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td><a href="/posts/{{ $post->slug }}" style="color: #800080;">{{ $post->articleTitle }}</a></td>
            <td>{{ $post->category->categoryName }}</td>
            <td>
                <a href="/mypost/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/mypost/{{ $post->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
