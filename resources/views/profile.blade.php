@extends('layout')
@section('content')
    <div class="profile-content mb-4">
        <div class="info" style="width: 40%;">
            <div class="card">
                <img class="card-img-top" src="/images/me.webp" alt="This is a picture of myself.">
                <div class="card-body">
                    <h5 class="card-title">Me!</h5>
                    <p class="card-text">Hi, my name is Daan van Hekken and im 21 years old. I just started HBO
                        ICT. In the future i want to work a back-end programming job in a bigger city. I have 4 siblings and still live at home with my mom and dad. I do game occasionaly. The rest of my time i spend with friends hanging out or going out or with my girlfriend doing all kinds of stuff, walking the dogs or playing board games and such. The marvel shows or movies are the kind i can watch over and over again.</p>
                    <a href="https://www.linkedin.com/in/daanvanhekken/" class="button">Find out
                        more!</a>
                </div>
            </div>
        </div>
        <div class="skills">
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
            <h3>List of my characteristics and skills!</h3>
            <ol class="gradient-list">
                <li>Problem-solving</li>
                <li>Communication</li>
                <li>Motivated</li>
                <li>Attention to details</li>
                <li>Organized</li>
                <li>Eager</li>
                <li>Curiosity</li>
                <li>Accountability</li>
                <li>Teamwork</li>
            </ol>
            <a href="{{ url('/files/Profile.pdf') }}" target="_blank" class="button">
                Open pdf in a new tab<i class="bi bi-file-earmark-pdf ms-2"></i>
            </a>
            <a href="{{ url('/files/Profile.pdf') }}" class="button" download>
                Download pdf<i class="bi bi-download ms-2"></i>
            </a>
        </div>
    </div>
@endsection
