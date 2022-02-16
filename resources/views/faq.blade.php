@extends('layout')
@section('content')
    <form method="POST" action="/faq">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputQuestion">Question</label>
                <input type="text" class="form-control" name="question" id="inputQuestion" placeholder="Question">
            </div>
        </div>
        <div class="form-group">
            <label for="textAreaAnswer">Answer</label>
            <textarea class="form-control text-area" name="answer" id="textAreaAnswer" placeholder="Answer"></textarea>
        </div>
        <div class="form-group">
            <div class="form-group col-md-12">
                <label for="inputLink">Link</label>
                <input type="text" class="form-control" name="link" id="inputLink" placeholder="Link">
            </div>
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
