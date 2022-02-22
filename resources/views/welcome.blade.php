@extends('layout')
@section('content')
    <div class="text-center">
        <h1>I am Daan van Hekken</h1>
        <p>HBO ICT Student</p>
        <p>
            <a class="fa-icon fa-icon-2x" href="https://twitter.com/" title="">
                <i class="fa fa-twitter"></i>
            </a>
            <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/" title="">
                <i class="fa fa-linkedin"></i>
            </a>
        </p>
    </div>

    <div class="row">
        <div class="homepage-card col col-md-6">
            <div class="col-md-12"
                 style="border: 1px solid #fff; padding: 32px; border-radius: 5px; height: 100%;">
                <div class="row">
                    <div class="col col-md-4">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_sfgmgbyl.json"
                                       background="transparent" speed="1" style="width: 150px; height: 150px; margin-top: 15px;" loop autoplay></lottie-player>
                    </div>
                    <div class="col col-md-8" style="text-align: left;">
                        <h3>About my study</h3>
                        <p>At my former education i was learning the programming language Java. I would like to learn multiple
                            programming languages this way i'll be more flexible when i'm going to work at a company later. I also
                            want to work in smaller and larger projects with smaller or larger teams.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="homepage-card col col-md-6">
            <div class="col-md-12 portfolio-card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/me.webp" class="img-responsive" alt="This is supposed to be a picture of me." style="width: 130px; margin-top: 7px;">
                    </div>
                    <div class="col-md-8" style="text-align: left;">
                        <h3>ICT Motivation</h3>
                        <p>So after my internship at Omoda ICT a couple years ago i've become really interested in becoming a software developer. Finished my education and started the education software developer as soon as possible and i really liked it since. After my internship in year i've started working as a software developer at Rounded.com. I really enjoy working here so i'm pretty sure ICT ( programming ) is the right thing for me. I really want to finish this HBO education because I think it will help get further in life and my career. Kaylee is the best girlfriend in the world yay hihi love you bye. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <ul style="list-style: none; display: flex; overflow-y: scroll; padding-left: 0;">
            <li><button class="button-dev-languages me-2"><i class="devicon-java-plain me-2"></i>Java</button></li>
            <li><button class="button-dev-languages me-2"><i class="devicon-mysql-plain me-2"></i>MYSQL</button></li>
            <li><button class="button-dev-languages me-2"><i class="devicon-kotlin-plain me-2"></i>Kotlin</button></li>
            <li><button class="button-dev-languages me-2"><i class="devicon-javascript-plain me-2"></i>Javascript</button></li>
            <li><button class="button-dev-languages me-2"><i class="devicon-html5-plain me-2"></i>HTML5</button></li>
            <li><button class="button-dev-languages me-2"><i class="devicon-css3-plain me-2"></i>CSS</button></li>
            <li><button class="button-dev-languages"><i class="devicon-php-plain me-2">Php</i></button></li>
        </ul>
    </div>
@endsection
