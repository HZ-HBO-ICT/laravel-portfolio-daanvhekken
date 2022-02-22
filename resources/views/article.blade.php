@extends('layout')
@section('content')
    <h3>{{ $article->title }}</h3>
    <p>{{ $article->content }}</p>
    <p class="mb-4">{{ $article->read_time }}</p>
@endsection
