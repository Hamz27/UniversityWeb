@extends('master.headerlecturer')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <!--Email-->
            <div style="margin: 10px 10px 20px;">
                <div class="card shadow" style="height: 1000px;">
                    <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Email</h4>
                    <div class="card-body" style="max-height: 900px; overflow-y: auto;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item nav-link li-hover rounded-3">
                                <a href="/mailcontentlec" class="nav-link text-decoration-none">
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
                <div class="card-footer" style="background-color: transparent; border-width: 0px;">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-sm">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        @include('additional.incomplete')

    </div>
</div>
@endsection