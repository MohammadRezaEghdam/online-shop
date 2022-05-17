@extends('layout')
@section('content')
    <div class="container">
        <h4 class="text-center mb-5">Create New Blog</h4>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('blog.update', $blog->slug) }}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Title</label>
                        <input type="text" id="form3Example1" class="form-control" name="title" placeholder="Title.." value="{{$blog->title}}" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Slug</label>
                        <input type="text" id="form3Example1" class="form-control" name="slug"
                            placeholder="Unique-Slug" value="{{$blog->slug}}"/>
                    </div>
                </div>

            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Image URL</label>
                <input type="text" id="form3Example3" class="form-control" name="image" value="{{$blog->image}}"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$blog->description}}</textarea>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Edit</button>

        </form>
    </div>
@endsection
