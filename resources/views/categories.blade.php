@extends('layouts.main')

@section('container')
    <h1>Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark">
                <img src="https://source.unsplash.com/400x400?{{ $category->categoryName }}" class="card-img" alt="{{ $category->categoryName }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: grey; color: white;">                        <a href="/categories/{{ $category->slug }}">{{ $category->categoryName }}</a>
                    </h5>
                </div>
                </div>                
            </div>
        @endforeach    
        </div>
    </div>
        

        
@endsection

