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
            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2.5</td>
                <td>Assesment</td>
                <td>10</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written Exam</td>
                <td>55/90 - 5,5</td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case Study Exam</td>
                <td>6 after resit = </td>
            </tr>
            <tr>
                <td rowspan="1">2</td>
                <td>Object Oriented Programming</td>
                <td>10</td>
                <td>Case Study &amp;
                Project</td>
                <td>-</td>
            </tr>
            <tr class="active">
                <td rowspan="2">3</td>
                <td>Framework Project 1 </td>
                <td>5</td>
                <td>C2 Portofolio Exams</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Framework Development 1</td>
                <td>7.5</td>
                <td>Case Study</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="1">4</td>
                <td>Framework Project 2 </td>
                <td>10</td>
                <td>Portofolio Exam</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="2">-</td>
                <td>Personal Development</td>
                <td>12.5</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td>IT personality</td>
                <td>2.5</td>
                <td>Portofolio</td>
                <td>8 and </td>
            </tr>
        </tbody>
    </table>
@endsection
