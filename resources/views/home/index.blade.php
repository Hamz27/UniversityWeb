@extends('master.header')

@section('content')
<!--Content-->
<div class="container">
  <div class="row g-5 bagian">
    <div class="col-md-8 bagian1" style="margin-top: 150px;">
      <!--News-->
      <div class="card text-center shadow" style="margin: 10px 10px 20px;">
        <div class="card-header" style="background-color: #0d1b2a; color: white;">
          <h4>News</h4>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active geeks" data-bs-interval="3000">
              <img src="img/building7.png" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>Building 7 - International</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </a>
              </div>
            </div>
            <div class="carousel-item geeks" data-bs-interval="3000">
              <img src="img/full-logo.png" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>Yuan Ze University</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </a>
              </div>
            </div>
            <div class="carousel-item geeks" data-bs-interval="3000">
              <img src="img/design.jpg" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>First Sratch Design</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="card-footer" style="background-color: #0d1b2a; color: white;">
          Latest News About Our University
        </div>
      </div>

      <!--Courses-->
      <div class="card shadow" style="margin: 10px 10px 20px;">
        <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Courses</h4>
        <div class="card-body scroll" style="max-height: 500px; display:flow-root;">
          <div class="card mb-3">
            <a href="/subject" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/web_programming.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Web Programming</h5>
                    <p class="card-text text-small">Web programming is the creation of dynamic web applications that involve writing, markup and coding. Web programming uses languages like XML, HTML, JavaScript, Perl 5 and PHP2.</p>
                    <p class="card-text"><small class="text-muted">Class A103</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/mandarin.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Mandarin Chinese I</h5>
                    <p class="card-text text-small">Mandarin is a group of Sinitic dialects that are natively spoken across most of northern and southwestern China.</p>
                    <p class="card-text"><small class="text-muted">Class A104</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/dss.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Decision Support System</h5>
                    <p class="card-text text-small">A decision support system (DSS) is an information system that supports decision-making activities. It is a computerized system that gathers and analyzes data, synthesizing it to produce comprehensive information reports.</p>
                    <p class="card-text"><small class="text-muted">Class A105</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/compnet.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Computer Network</h5>
                    <p class="card-text text-small">A computer network is a system or a group of computers that are connected with each other by various methods to share resources and communicate data, voice, and video. A network can have different architectures, protocols, and topologies.</p>
                    <p class="card-text"><small class="text-muted">Class A106</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/vr.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Virtual Reality</h5>
                    <p class="card-text text-small">Virtual reality is the computer-generated simulation of a three-dimensional image or environment that can be interacted with in a seemingly real or physical way by a person using special electronic equipment.</p>
                    <p class="card-text"><small class="text-muted">Class A107</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/embedded_systems.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Embedded System</h5>
                    <p class="card-text text-small">An embedded system is a computer system that has a dedicated function within a larger mechanical or electronic system. It is composed of a microcontroller or microprocessor, memory, and input/output devices.</p>
                    <p class="card-text"><small class="text-muted">Class A109</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="card mb-3">
            <a href="#" class="nav-link li-hover rounded-2">
              <div class="row g-0">
                <div class="col-md-4 geeks">
                  <img src="img/english.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Science and Technology English</h5>
                    <p class="card-text text-small">English is a language that people use to communicate with each other. It is one of the most widely spoken languages in the world. It originated in England and is related to other languages like German, Dutch, and Frisian.</p>
                    <p class="card-text"><small class="text-muted">Class A109</small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!--Library-->
      <div class="card shadow" style="margin: 10px 10px 20px;">
        <h4 class="card-header" style="background-color: #0d1b2a; color: white;">E-Book</h4>
        <div class="card-body scroll">
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/embedded_systems.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Introduction to Embedded System</h6>
                <p class="card-text"><small class="text-muted">Mark Sebastian - 2021</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/english.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>English for Professional</h6>
                <p class="card-text"><small class="text-muted">Elon Besoz - 2017</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/vr.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Virtual Reality for Beginner</h6>
                <p class="card-text"><small class="text-muted">Karim Osama - 2020</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/dss.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>DSS : Technology & Coorporate</h6>
                <p class="card-text"><small class="text-muted">Zubair Khan - 2013</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/compnet.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Computer and Network Security</h6>
                <p class="card-text"><small class="text-muted">Joan Sendlar - 2017</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/web_programming.jpg" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Introduction to Web Programming</h6>
                <p class="card-text"><small class="text-muted">Riana Meguayer - 2021</small></p>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc col-md-3" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/mandarin.jpg" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Mandarin Chinese for Beginner</h6>
                <p class="card-text"><small class="text-muted">Xiu Liu - 2018</small></p>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!--Information-->
      <div style="margin: 10px 10px 20px;">
        <div class="card shadow">
          <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Information - University</h4>
          <div class="card-body" style="max-height: 350px; overflow-y: auto;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">12/07/2022</span>
                    Library
                    <p class="card-text"><small class="text-muted">New Book has Arrived!!</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">12/01/2022</span>
                    Global Office Affair
                    <p class="card-text"><small class="text-muted">Invitation for New Year Party!!</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">11/22/2022</span>
                    International Departement
                    <p class="card-text"><small class="text-muted">Final Project Regulation</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">11/18/2022</span>
                    Informatic and Technology Departement
                    <p class="card-text"><small class="text-muted">Midterm Result are Out Now!!</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">11/09/2022</span>
                    Academic Affair
                    <p class="card-text"><small class="text-muted">Final Exam Information</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">11/05/2022</span>
                    Informatic and Technology Departement
                    <p class="card-text"><small class="text-muted">Registration for Industrial Visit on November 10th</small></p>
                  </div>
                </a>
              </li>
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/logo.png" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    <span class="badge bg-secondary rounded-pill" style="float: right;">21/10/2022</span>
                    Dormitory
                    <p class="card-text"><small class="text-muted">Reparation on Shower room</small></p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!--Community-->
      <div style="margin: 10px 10px 20px;">
        <div class="card shadow">
          <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Club and Extracurricular</h4>
          <div class="card-body scroll" style="max-height: 500px;">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/ppi.png" class="card-img-top" alt="..." style="max-height: 200px;"></div>
                    <div class="card-body">
                      <h5 class="card-title">PPI Yuan Ze</h5>
                      <p class="card-text"><small class="text-muted">Halo Sahabat PPI Yuan Ze, selamat datang di komunitas Perhimpunan Pelajar Indonesia (PPI) Yuan Ze University.</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/logo.png" class="card-img-top" alt="..." style="max-height: 200px;"></div>
                    <div class="card-body">
                      <h5 class="card-title">International Student Community</h5>
                      <p class="card-text"><small class="text-muted">Community of International Student under Global Office Affairs.</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..." style="max-height: 200px;"></div>
                    <div class="card-body">
                      <h5 class="card-title">YZU Surfing Club</h5>
                      <p class="card-text"><small class="text-muted">Welcome to our fun and friendly surf lifesaving club in Taiwan.</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/building.jfif" class="card-img-top" alt="..." style="max-height: 200px;"></div>
                    <div class="card-body">
                      <h5 class="card-title">Architechture Community</h5>
                      <p class="card-text"><small class="text-muted">The YZU Architecture Community has enabled architects around the globe to share, collaborate and showcase their work since 2006.</small></p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/pantai.jpg" class="card-img-top" alt="..." style="max-height: 200px;"></div>
                    <div class="card-body">
                      <h5 class="card-title">YZU Photography Club</h5>
                      <p class="card-text"><small class="text-muted">Welcome to YZU Photo Club!!~.</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('additional.complete')

  </div>
</div>
@endsection