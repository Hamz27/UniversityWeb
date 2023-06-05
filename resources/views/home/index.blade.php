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
              <img src="img/design.jpg" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </a>
              </div>
            </div>
            <div class="carousel-item geeks" data-bs-interval="3000">
              <img src="img/foto.jpg" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </a>
              </div>
            </div>
            <div class="carousel-item geeks" data-bs-interval="3000">
              <img src="img/pantai.jpg" class="d-block w-100" height="300px" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <a href="#" class="text-decoration-none text-white link-primary">
                  <h5>Third slide label</h5>
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
        <div class="card-body scroll">
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/portal.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/news.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/design.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/book.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/pantai.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/fp.jpg" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/home.png" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!--Library-->
      <div class="card shadow" style="margin: 10px 10px 20px;">
        <h4 class="card-header" style="background-color: #0d1b2a; color: white;">E-Book</h4>
        <div class="card-body scroll">
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/portal.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/news.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/design.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/book.png" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/pantai.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/fp.jpg" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
          <div class="card text-bg-light mb-3 shadow cardsc" style="margin: 1%;">
            <a href="#" class="nav-link li-hover rounded-1">
              <div class="geeks rounded-top">
                <img src="img/home.png" class="card-img-top" alt="..." style="background-color: #778da9;">
              </div>
              <div class="card-body">
                <h6>Web Programming</h6>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!--Information-->
      <div style="margin: 10px 10px 20px;">
        <div class="card shadow">
          <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Information</h4>
          <div class="card-body" style="max-height: 500px; overflow-y: auto;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item nav-link li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/fp.jpg" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    Hello
                    <span class="badge bg-primary rounded-pill" style="float: right;">14d 15h</span>
                  </div>
                </a>
              </li>
              <li class="list-group-item li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/fp.jpg" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    Hello
                    <span class="badge bg-primary rounded-pill" style="float: right;">14d 15h</span>
                  </div>
                </a>
              </li>
              <li class="list-group-item li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/fp.jpg" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    Hello
                    <span class="badge bg-primary rounded-pill" style="float: right;">14d 15h</span>
                  </div>
                </a>
              </li>
              <li class="list-group-item li-hover rounded-3">
                <a href="#" class="nav-link text-decoration-none">
                  <div style="width: 50px; border-right: 2px solid #0d1b2a; float: left; margin-right: 2%;">
                    <img src="img/fp.jpg" width="40" height="40" class="rounded-circle" />
                  </div>
                  <div>
                    Hello
                    <span class="badge bg-primary rounded-pill" style="float: right;">14d 15h</span>
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
          <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a short card.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a short card.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col">
                <div class="card h-100 shadow li-hover">
                  <a href="#" class="text-decoration-none nav-link">
                    <div class="geeks rounded-top"><img src="img/community.png" class="card-img-top" alt="..." style="background-color: #778da9;"></div>
                    <div class="card-body">
                      <p class="card-title" style="margin-top: 20px; text-align: center;">See More</p>
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