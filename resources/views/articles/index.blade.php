@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
    <div class="mb-3">
        <a href="{{ route('articles.create') }}" class="btn btn-outline-dark">New</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Images</th>
                <th>Info</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $article->name }}</td>
                    <td>
                        <div class="d-flex">
                            @foreach($article->images()->get() as $image)
                                <img src="{{ asset(env('UPLOADS_IMAGE'). "/" . $image->name) }}" alt="" class="w-25 border">
                            @endforeach
                        </div>
                    </td>
                    <td>{{ $article->info }}</td>
                    <td>
                        <form action="{{ route('articles.destroy', $article) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"></td>
                </tr>
            @endforelse
        </tbody>
    </table>
@stop

@section('css')

@stop

@section('js')

@stop
