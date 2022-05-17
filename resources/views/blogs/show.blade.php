@extends('layout')
@section('content')
    <div class="container">
        <div class="border p-5">
            <h3 class="text-center">{{ $blog->title }}</h3>
            @auth
                @if (auth()->user()->is_admin == 1)
                    <div class=" mt-3 d-flex text-center justify-content-center">
                        <a href="{{ route('blog.edit', $blog->slug) }}" class="btn btn-warning"><span>Edit</span></a>
                        <form action="{{ route('blog.destroy', $blog->slug) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger ml-1">

                        </form>
                    </div>
                @endif
            @endauth
            <div class="text-center mt-5 mb-5">
                <img src="{{ $blog->image }}" alt="" srcset="">
            </div>
            <p>
                {{ $blog->description }}
            </p>
        </div>
    </div>
@endsection
