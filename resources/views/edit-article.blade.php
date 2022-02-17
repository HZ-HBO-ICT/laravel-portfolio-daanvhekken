@extends('layout')
@section('content')
    <form method="POST" action="/blog/{{ $blog->id }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title" value="{{ $blog->title }}">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputReadTime">Read time</label>
            <input type="number" class="form-control" name="readTime" id="inputReadTime" placeholder="Minutes" value="{{ $blog->read_time }}">
        </div>
        <div class="form-group">
            <label for="textAreaContent">Article Content</label>
            <textarea class="form-control text-area" name="content" id="textAreaContent" placeholder="Article Content">{{ $blog->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit article</button>
    </form>
    <form method="POST" action="/blog/{{ $blog->id }}">
        @csrf
        @method('DELETE')
        <button class="button" type="submit">Delete</button>
    </form>
@endsection
