@extends('layout')
@section('content')
    @foreach($articles as $article)
        <div class="card" style="width: 18rem; margin-bottom: 20px;">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $article->read_time }}</h6>
                <p class="card-text">{!! $article->content !!}</p>
                <a href="blogs/{{ $article->id }}" class="card-link">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
