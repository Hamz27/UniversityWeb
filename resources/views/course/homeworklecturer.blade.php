@extends('master.headerlecturer')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <div class="card shadow" style="margin: 10px 10px 20px; height: 800px; overflow-y: auto;">
                <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Homework</h4>
                <div class="card-body">
                    <h5 class="card-title">Web Programming</h5>
                    <ol class="list-group list-group-numbered">
                        <p>Homework3: make a website!</p>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Name A</div>
                                Website_1093559.pdf
                            </div>
                            <div>
                                <div style="width: 100%; height: 50%;"><span class="badge bg-primary rounded-pill">11/14/2022</span></div>
                                <div style="width: 100%; height: 50%; text-align: center;">
                                    <button class="btn btn-warning rounded-pill badge" onclick="gradebox_open()"><img src="img/card-checklist.svg"></button>
                                    <button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Name A</div>
                                Website_1093559.pdf
                            </div>
                            <div>
                                <div style="width: 100%; height: 50%;"><span class="badge bg-primary rounded-pill">11/14/2022</span></div>
                                <div style="width: 100%; height: 50%; text-align: center;">
                                    <button class="btn btn-warning rounded-pill badge" onclick="gradebox_open()"><img src="img/card-checklist.svg"></button>
                                    <button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Name A</div>
                                Website_1093559.pdf
                            </div>
                            <div>
                                <div style="width: 100%; height: 50%;"><span class="badge bg-primary rounded-pill">11/14/2022</span></div>
                                <div style="width: 100%; height: 50%; text-align: center;">
                                    <button class="btn btn-warning rounded-pill badge" onclick="gradebox_open()"><img src="img/card-checklist.svg"></button>
                                    <button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Name A</div>
                                Website_1093559.pdf
                            </div>
                            <div>
                                <div style="width: 100%; height: 50%;"><span class="badge bg-primary rounded-pill">11/14/2022</span></div>
                                <div style="width: 100%; height: 50%; text-align: center;">
                                    <button class="btn btn-warning rounded-pill badge" onclick="gradebox_open()"><img src="img/card-checklist.svg"></button>
                                    <button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        @include('additional.incomplete')

    </div>
</div>

<div class="card" style="width: 50%; z-index: 3; left: 25%; top: 30%; position: fixed; display: none;" id="gradebox">
    <div class="card-body">
        <h5 class="card-title">Grading</h5>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Grade</span>
            <input type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Massage</span>
            <textarea type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1"></textarea>
        </div>
        <button type="button" class="btn btn-primary" style="width: 100%;" onclick="gradebox_close()">Submit</button>
    </div>
</div>

<script>
    function gradebox_open() {
        document.getElementById("gradebox").style.display = "block";
    }

    function gradebox_close() {
        document.getElementById("gradebox").style.display = "none";
    }
</script>
@endsection