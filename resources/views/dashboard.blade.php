@extends('layout')
@section('content')
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 2%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        <div style="border-right: 5px solid black; width: 75%;" class="progress-bar-marker" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <table class="table text-light">
        <thead>
            <tr>
                <th scope="col">Quartile</th>
                <th scope="col">Course</th>
                <th scope="col">EC</th>
                <th scope="col">Exam</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    @if(!$course->is_sub_course) )
                        <td>{{ $course->quartile }}</td>
                    @else
                        <td style="border-bottom:0"></td>
                    @endif
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->ec }}</td>
                    <td>{{ $course->assessment_type }}</td>
                    {{-- I dont know either.. it works though! --}}
                    @foreach($grades as $grade)
                        @if($course->assessment_id === $grade->assessment_id) )
                        <td>{{ $grade->id }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
