@extends('adminlte::page')

@section('title', 'Article')

@section('content_header')
    <h1>Create new article</h1>
@stop

@section('content')
    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf   
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="info" class="form-label">Info</label>
            <input type="text" name="info" id="info" class="form-control">
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
