@extends('layout')
@section('content')
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
