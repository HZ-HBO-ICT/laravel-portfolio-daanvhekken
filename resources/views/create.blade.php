@extends('layout')

@section('content')
    <form method="POST" action="/articles">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control @error('title') border-danger @enderror" name="title" id="inputTitle" placeholder="Title" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger">This field is required</p>
                @enderror
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputReadTime">Read time</label>
            <input type="number" class="form-control @error('read_time') border-danger @enderror" name="read_time" id="inputReadTime" placeholder="Minutes" value="{{ old('read_time') }}">
            @error('read_time')
                <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="textAreaContent">Article Content</label>
            <textarea class="form-control text-area @error('content') border-danger @enderror" name="content" id="textAreaContent" placeholder="Article Content"></textarea>
            @error('content')
                <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit article</button>
    </form>
@endsection
