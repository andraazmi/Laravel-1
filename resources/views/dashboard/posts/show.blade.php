@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>

                <img src="https://loremflickr.com/1200/400?{{ $post->category->name }}" class="img-fluid mb-3"
                    alt="{{ $post->category->name }}" class="img-fluid mt-3">

                {{ $post->excerpt }}

                <article class="my-3 fs-5">
                    <P>{{ $post->body }}</P>

                </article>

                <a href="/posts" class="d-block">Back to Posts</a>
            </div>

        </div>
    </div>


@endsection