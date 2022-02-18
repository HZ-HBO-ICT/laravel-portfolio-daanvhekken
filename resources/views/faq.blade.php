@extends('layout')
@section('content')

    <form method="POST" action="/faq">
        @csrf
        <div class="form-group">
            <label for="inputQuestion">Question</label>
            <input type="text" class="form-control @error('question') border-danger @enderror" name="question" id="inputQuestion" placeholder="Question" value="{{ old('question') }}">
            @error('question')
                <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="textAreaAnswer">Answer</label>
            <textarea class="form-control text-area @error('answer') border-danger @enderror" name="answer" id="textAreaAnswer" placeholder="Answer"></textarea>
            @error('answer')
                <p class="text-danger">This field is required</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputLink">Link</label>
            <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link">
        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit faq</button>
    </form>

    <div class="accordion accordion-flush mb-4" id="accordionExample">
        @foreach($faqs as $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-{{ $faq->id }}">
                    <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="true" aria-controls="collapse-{{ $faq->id }}">
                        {{ $faq->question }}
                    </button>
                </h2>
                <div id="collapse-{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $faq->id }}">
                    <div class="accordion-body text-start">
                        {{ $faq->answer }}
                        <a href="{{ url( $faq->question ) }}">Handy URL</a>
                        <a href="faq/{{ $faq->id }}/edit-faq" class="button card-link">Edit faq</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
