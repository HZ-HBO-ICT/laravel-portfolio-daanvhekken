@extends('layout')
@section('content')
    <h3>{{ $blog->title }}</h3>
    <p>{{ $blog->content }}</p>
    <p class="mb-4">{{ $blog->read_time }}</p>
@endsection
