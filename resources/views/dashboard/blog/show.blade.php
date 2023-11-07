@extends('dashboard.layout.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $blog->title }}</h1>

                <p>
                    <a href="/dashboard/blog" class="btn btn-success"><span data-feather="arrow-left"></span>Back to Blog</a>
                    <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                    <a href="" class="btn btn-danger"><span data-feather="edit"></span>Delete</a>

                </p>
                <img src="https://source.unsplash.com/1200x400?" alt="{{$blog->category->name}}" class="container-fluid">

                <article class="my-3 fs-5">
                    {!! $blog->body !!}
                </article>

                <a href="/blog" class="text-decoration-none">Back</a>
            </div>
        </div>
    </div>
@endsection