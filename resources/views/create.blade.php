@extends('layout')

@section('content')
    <form method="POST" action="/blogs">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" id="inputTitle" placeholder="Title">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputReadTime">Read time</label>
            <input type="number" class="form-control" id="inputReadTime" placeholder="Minutes">
        </div>
        <div class="form-group">
            <label for="textareaContent">Article Content</label>
            <textarea class="form-control text-area" id="textareaContent" placeholder="Article Content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit article</button>
    </form>
@endsection
