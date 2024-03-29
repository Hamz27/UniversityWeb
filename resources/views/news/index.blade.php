@extends('master.header')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
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

            <!-- news -->
            <div style="margin: 10px 10px 20px;">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card li-hover">
                            <a href="/content" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/ppi.png" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">IISMAVO join Yuan Ze University!</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card li-hover">
                            <a href="#" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/pantai.jpg" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Photography Club clean the beach</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card li-hover">
                            <a href="#" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/building.jfif" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Architechture Club design new building for YZU</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card li-hover">
                            <a href="#" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/logo.png" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">YZU open new Departement in Kaohsiung and Teipei</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card li-hover">
                            <a href="#" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/full-logo.png" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Greeting from GAO to IISMAVO students</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card li-hover">
                            <a href="" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..." height="170px"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Yuan Ze Surfing Team got a medal for the 2nd times!</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
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