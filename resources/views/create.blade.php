@extends('layouts.main')

@section('container')
    <h1>
        Create New Post
    </h1>
    <div class="col-lg-8">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    @endif 
            <form method="post" action="/create" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="articleTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="articleTitle" name="articleTitle">
                        @error('articleTitle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror               
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror                
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                    @endforeach
                </select>   
            </div>
            <div class="mb-3">
                <label for="articleBody" class="form-label">Body</label>
                <textarea rows="5" class="form-control" id="articleBody" name="articleBody"></textarea>
                        @error('articleBody')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror                
            </div>
            <div class="mb-3">
            <label for="articlePict" class="form-label">Image</label>
            <input class="form-control" type="file" id="articlePict" name ="articlePict">
                        @error('articlePict')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror  
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select name="tags[]" multiple class="form-select" id="tags">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->tagName }}</option>
                    @endforeach
                </select>
                @error('tags')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>


@endsection