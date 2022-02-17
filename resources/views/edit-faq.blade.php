@extends('layout')
@section('content')
    <form method="POST" action="/faq/">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputQuestion">Question</label>
                <input type="text" class="form-control" name="question" id="inputQuestion" placeholder="Question" value="{{ $faq->question }}">
            </div>
        </div>
        <div class="form-group">
            <label for="textAreaAnswer">Answer</label>
            <textarea class="form-control text-area" name="answer" id="textAreaAnswer" placeholder="Answer">
                {{ $faq->answer }}
            </textarea>
        </div>
        <div class="form-group">
            <div class="form-group col-md-12">
                <label for="inputLink">Link</label>
                <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link" value="{{ $faq->link }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit faq</button>
    </form>
    <form method="POST" action="/faq/{{ $faq->id }}">
        @csrf
        @method('DELETE')
        <button class="button" type="submit">Delete</button>
    </form>
@endsection
