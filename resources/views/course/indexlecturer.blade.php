@extends('master.headerlecturer')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <div class="card shadow" style="margin: 10px 10px 20px; max-height: 500px; overflow-y: auto;">
                <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Homework</h4>
                <ol class="list-group list-group-numbered">
                    <a href="/homeworklec" class="nav-link text-decoration-none" style="width: 100%;">
                        <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Web Programming</div>
                                Homework3 : make a website!
                            </div>
                            <span class="badge bg-primary rounded-pill">14d 13h</span>
                        </li>
                    </a>
                    <a href="/homeworklec" class="nav-link text-decoration-none" style="width: 100%;">
                        <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Web Programming</div>
                                Homework3 : make a website!
                            </div>
                            <span class="badge bg-primary rounded-pill">14d 13h</span>
                        </li>
                    </a>
                    <a href="/homeworklec" class="nav-link text-decoration-none" style="width: 100%;">
                        <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Web Programming</div>
                                Homework3 : make a website!
                            </div>
                            <span class="badge bg-primary rounded-pill">14d 13h</span>
                        </li>
                    </a>
                </ol>
            </div>

            <div style="margin: 10px 10px 20px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow li-hover">
                            <a href="/subjectlec" class="text-decoration-none nav-link">
                                <div class="geeks rounded-top"><img src="img/foto.jpg" class="card-img-top" alt="..."></div>
                                <div class="card-body">
                                    <h5 class="card-title">Web Programming</h5>
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
                </div>
            </div>
        </div>

        @include('additional.incomplete')

    </div>
</div>
@endsection