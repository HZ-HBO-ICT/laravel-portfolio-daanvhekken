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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What do i do if i need to print a document?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                  <div class="accordion-body text-start">
                    Navigate to <a href="https://print.hz.nl/" target="_blank">print.hz.nl</a> and follow the steps to print your documents!
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do i scan a document and sent it to my laptop?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                  <div class="accordion-body text-start">
                    Navigate to <a href="https://print.hz.nl/" target="_blank">print.hz.nl</a> and follow the steps to print your documents!                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What do i do when i get sick or show symptoms of covid-19?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                  <div class="accordion-body text-start">
                    Do you have health complaints like a cold, cough, high temperature or sudden loss of taste and smell? Do you have a fever? Take a look if you can visit the HZ <a href="https://hz.nl/coronavirus/faq/faq.blade.php" target="_blank">here.</a>
                    <br><br>
                    Protect if needed yourself and others and get yourself tested. You can make an appointment via 0800-1202 or via <a href="https://coronatest.nl/" target="_blank">coronatest.nl</a>, this test is free
                  </div>
                  </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    How do i book a project space in one of the wings?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                  <div class="accordion-body text-start">
                    Head over to <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner/" target="_blank">the selfservice portal's location reservation planner.</a> From here you can select a timeslot in the desired room.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What are the instructions if you want to park your car at the HZ parking lot?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                  <div class="accordion-body text-start">
                    If you have a HZ student pass navigate with your car to the parking spot on the following adres: Poelendaelesingel, 4335 JA Middelburg. Here you can press your hz student pass against the NFC scanner and the pole will open up and you can park your car.
                  <br><br>
                  <iframe
                    width="100%"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCBvVIELMtdd215sAiOwMFZU-khBIzgnso
                      &q=Poelendaelesingel,+4335+JA+Middelburg">
                  </iframe>

                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed gradient-background" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Relevant and usefull links to other sites.
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                  <div class="accordion-body text-start">
                    <section>To the right you should see a handfull of relevant and usefull links.</section>
                    <aside>
                      <div><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf" target="_blank">The HZ HBO-ICT Course and Examination Regulations (CER)</a></div>
                      <div><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf" target="_blank">The Implementation Regulations (IR) of the HBO-ICT programme</a></div>
                      <div><a href="https://www.notion.so/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4" target="_blank">Notion envoirement</a></div>
                      <div><a href="https://teams.microsoft.com/_#/school/" target="_blank">The Teams environment of the study programme</a></div>
                      <div><a href="https://github.com/daanvhekken" target="_blank">My github environment</a></div>
                  </aside>
                  </div>
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