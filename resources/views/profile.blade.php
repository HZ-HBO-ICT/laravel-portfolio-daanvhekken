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
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Information about me and a list ofmy skills and characteristics.">
</head>
<html lang="en">

<body class="content">
    <nav class="sidebar sidebar-block animate-left collapse center" style="z-index:3; width:300px; font-weight:bold"
    id="sidebar"><br>
   <h3 class="p-4 center"><b>Daan van Hekken</b></h3>
   <a href="{{ url('') }}" class="sidebar-item sidebar-button"><i
           class="bi bi-house me-2"></i>Home</a>
   <a href="{{ url('dashboard') }}" class="sidebar-item sidebar-button"><i
           class="bi bi-window-sidebar me-2"></i>Dashboard</a>
   <a class="sidebar-item sidebar-button" style="text-decoration: underline;"><i
           class="bi bi-person-square me-2"></i>Profile</a>
   <a href="{{ url('blog') }}" class="sidebar-item sidebar-button"><i
           class="bi bi-newspaper me-2"></i>Blog</a>
   <a href="{{ url('faq') }}" class="sidebar-item sidebar-button"><i
           class="bi bi-question-square me-2"></i>Faq</a>
   <a href="{{ url('contact') }}" class="sidebar-item sidebar-button"><i
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
        <div class="center padding-32">
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
