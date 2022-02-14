@extends('layout')
@section('content')
    {{--    <div id="blogstest" class="row mb-4">--}}
    {{--    </div>--}}
    {{--    <!-- The Modal -->--}}
    {{--    <div id="myModal" class="modal">--}}
    {{--    <!-- Modal content -->--}}
    {{--        <div class="modal-content">--}}
    {{--        <div>--}}
    {{--            <span class="close">&times;</span>--}}
    {{--            <h5 id="modalTitle"></h5>--}}
    {{--            </div>--}}
    {{--            <p id="modalContent"></p>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <p>{{ $blog->content }}</p>
@endsection
