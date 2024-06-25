@extends('adminlte::page')

@section('title', 'Edit Article')

@section('content_header')
    <h1>Edit article</h1>
@stop

@section('content')
    <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $article->name }}">
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Info</label>
            <input type="text" name="info" id="info" class="form-control" value="{{ $article->info }}">
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
            <div class="mt-3">
                <h5>Current Images:</h5>
                @foreach ($article->images as $image)
                    <div>
                        <img src="{{ asset('uploads/images/' . $image->name) }}" alt="Image" width="100">
                        <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Delete
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-outline-dark">Update</button>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
