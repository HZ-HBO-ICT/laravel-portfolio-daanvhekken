@extends('layout')

@section('content')
    <form method="POST" action="/blogs">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Title">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputReadTime">Read time</label>
            <input type="number" class="form-control" name="readTime" id="inputReadTime" placeholder="Minutes">
        </div>
        <div class="form-group">
            <label for="textAreaContent">Article Content</label>
            <textarea class="form-control text-area" name="content" id="textAreaContent" placeholder="Article Content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit article</button>
    </form>
@endsection
