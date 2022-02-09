<!DOCTYPE html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900'
          rel='stylesheet' type='text/css'>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script type="text/javascript" src="{{'/js/scripts.js'}}"></script>
    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <!-- programming language icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <title>FAQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frequently asked questions.">
</head>
<html lang="en">
    <body class="content">
        <nav class="sidebar sidebar-block animate-left collapse center" style="z-index:3; width:300px; font-weight:bold"
        id="sidebar"><br>
       <h3 class="p-4 center"><b>Daan van Hekken</b></h3>
       <a href="{{ url('') }}" class="sidebar-item sidebar-button"><i
               class="bi bi-house me-2"></i>Home</a>
       <a href="{{ url('/dashboard') }}" class="sidebar-item sidebar-button"><i
               class="bi bi-window-sidebar me-2"></i>Dashboard</a>
       <a href="{{ url('/profile') }}" class="sidebar-item sidebar-button"><i
               class="bi bi-person-square me-2"></i>Profile</a>
       <a href="{{ url('/blog') }}" class="sidebar-item sidebar-button"><i
               class="bi bi-newspaper me-2"></i>Blog</a>
       <a class="sidebar-item sidebar-button" style="text-decoration: underline;"><i
               class="bi bi-question-square me-2"></i>Faq</a>
       <a href="{{ url('/contact') }}" class="sidebar-item sidebar-button"><i
               class="bi bi-envelope-open me-2"></i>Contact</a>
   </nav>
   <header class="topbar hide-large padding-16">
    <span class="float-left p-3">Daan van Hekken</span>
    <a href="javascript:void(0)" class="float-right sidebar-button" onclick="open_sidemenu()">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </a>
  </header>

        <div class="mobile-overlay hide-large" style="cursor:pointer"
             title="close side menu" id="mobile_overlay"></div>

        <div class="main-content" style="margin-left:300px">
            <div class="hide-large" style="margin-top:83px"></div>
            <div class="center padding-32" id="about">

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
            </div>
                <!-- Footer -->
                <footer class="text-center text-lg-start text-white footer-socials">
                    <!-- Copyright -->
                    <div class="text-center p-4">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold">DaanvanHekken.com</a>
                    </div>
                    <!-- Copyright -->
                    <div class="socials">
                        <a href="https://www.linkedin.com/in/daanvanhekken/" target="_blank" class="linkedin-link w-inline-block"><i class="bi bi-linkedin"></i></a>
                        <a href="https://github.com/daanvhekken" target="_blank" class="github-link w-inline-block"><i class="bi bi-github"></i></a>
                    </div></footer>
                <!-- Footer -->
            </div>
    </body>
</html>
