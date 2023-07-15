@extends('master.header')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <div class="card shadow" style="margin: 10px 10px 20px;">
                <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Homework</h4>
                <div class="card-body scroll" style="max-height: 350px;">
                    <ol class="list-group" style="width: 100%;">
                        <a href="/homework" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Web Programming</div>
                                    Homework 3 : make a website!
                                </div>
                                <span class="badge bg-warning rounded-pill">7d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Embedded System</div>
                                    Make an autocar with RaspberryPi.
                                </div>
                                <span class="badge bg-warning rounded-pill">14d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Virtual Reality</div>
                                    Group project proposal.
                                </div>
                                <span class="badge bg-warning rounded-pill">19d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Scince & Technology English</div>
                                    Group project conversation.
                                </div>
                                <span class="badge bg-warning rounded-pill">20d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Computer Network</div>
                                    Homework 3: Wireshark testing GET.
                                </div>
                                <span class="badge bg-warning rounded-pill">20d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Mandarin Chines I</div>
                                    Group project conversation.
                                </div>
                                <span class="badge bg-warning rounded-pill">22d 13h to Deadline</span>
                            </li>
                        </a>
                        <a href="" class="nav-link text-decoration-none" style="width: 100%;">
                            <li class="list-group-item d-flex justify-content-between align-items-start li-hover">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Decision Support System</div>
                                    Group project proposal.
                                </div>
                                <span class="badge bg-warning rounded-pill">24d 13h to Deadline</span>
                            </li>
                        </a>
                    </ol>
                </div>
            </div>

            <!-- courses -->
            <div style="margin: 10px 10px 20px;">
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
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Mandarin Chinese I</h5>
                                    <p class="card-text text-small">Mandarin is a group of Sinitic dialects that are natively spoken across most of northern and southwestern China.</p>
                                    <p class="card-text"><small class="text-muted">Class A104</small></p>
                                </div>
                            </div>
                            <div class="col-md-4 geeks">
                                <img src="img/mandarin.jpg" class="img-fluid rounded-end" alt="...">
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
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Computer Network</h5>
                                    <p class="card-text text-small">A computer network is a system or a group of computers that are connected with each other by various methods to share resources and communicate data, voice, and video. A network can have different architectures, protocols, and topologies.</p>
                                    <p class="card-text"><small class="text-muted">Class A106</small></p>
                                </div>
                            </div>
                            <div class="col-md-4 geeks">
                                <img src="img/compnet.jpg" class="img-fluid rounded-end" alt="...">
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
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Embedded System</h5>
                                    <p class="card-text text-small">An embedded system is a computer system that has a dedicated function within a larger mechanical or electronic system. It is composed of a microcontroller or microprocessor, memory, and input/output devices.</p>
                                    <p class="card-text"><small class="text-muted">Class A109</small></p>
                                </div>
                            </div>
                            <div class="col-md-4 geeks">
                                <img src="img/embedded_systems.jpg" class="img-fluid rounded-end" alt="...">
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

        @include('additional.incomplete')

    </div>
</div>
@endsection