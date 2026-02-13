@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>

                {{-- DELETE --}}
                <form action="/dashboard/posts/{{ $post->slug }} " method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>
                </form>

                @if ($post->image)

                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid mt-3">
                    </div>

                @else

                    <img src="https://loremflickr.com/1200/400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                        class="img-fluid mt-3">
                @endif

                {!! $post->excerpt !!}

                <article class="my-3 fs-5">
                    <P>{!! $post->body !!}</P>

                </article>


            </div>

        </div>
    </div>


@endsection