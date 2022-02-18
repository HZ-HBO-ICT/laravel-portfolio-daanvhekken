@extends('layout')
@section('content')
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="inputQuestion">Question</label>
            <input type="text" class="form-control @error('question') border-danger @enderror" name="question" id="inputQuestion" placeholder="Question" value="{{ $faq->question }}">
            @error('question')
            <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="textAreaAnswer">Answer</label>
            <textarea class="form-control text-area @error('answer') border-danger @enderror" name="answer" id="textAreaAnswer" placeholder="Answer">{{ $faq->answer }}</textarea>
            @error('answer')
            <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputLink">Link</label>
            <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link" value="{{ $faq->link }}">
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit faq</button>
    </form>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button class="button" type="submit">Delete</button>
    </form>
@endsection
