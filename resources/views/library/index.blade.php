@extends('master.header')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <div style="margin: 10px 10px 20px;">
                <div class="card shadow">
                    <h4 class="card-header" style="background-color: #0d1b2a; color: white;">Information - Library</h4>
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
                                        Library
                                        <p class="card-text"><small class="text-muted">Booking your room for presentation now!!</small></p>
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
                                        Library
                                        <p class="card-text"><small class="text-muted">Updated Library Regulation</small></p>
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
                                        Library
                                        <p class="card-text"><small class="text-muted">Book seminar registration</small></p>
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
                                        Library
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
                                        Library
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
                                        Library
                                        <p class="card-text"><small class="text-muted">Reparation on 2nd floor</small></p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style="margin: 10px 10px 20px;">
                <div class="card shadow" style="height: 700px;">
                    <h4 class="card-header" style="background-color: #0d1b2a; color: white;">E-Book</h4>
                    <div class="card-body" style="max-height: 700px; overflow-y: auto;">
                        <div style="width: 100%;">
                            <input type="text" name="searchcategory" placeholder="Search the title of the book.." id="myInput" onkeyup="myFunction()" style="width: 100%;" />
                        </div>
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Writer/Release</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Web Programming for Beginner</td>
                                    <td>Web</td>
                                    <td>Mark Twain - 2017</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Embedded System</td>
                                    <td>Embedded System</td>
                                    <td>Thornton Jacob - 2019</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>English Conversation</td>
                                    <td>English</td>
                                    <td>Zubair Udin - 2019</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>English for Professional</td>
                                    <td>English</td>
                                    <td>Ahmad Jack - 2021</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Introduction to Computer Network</td>
                                    <td>Computer Network</td>
                                    <td>Felix Twain - 2013</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Embedded System with RaspberryPi</td>
                                    <td>Embedded System</td>
                                    <td>Liang Xiu - 2019</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Virtual Reality</td>
                                    <td>Virtual Reality</td>
                                    <td>Mark Jacob - 2017</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>VR: an Introduction</td>
                                    <td>Virtual Reality</td>
                                    <td>Udin Joko - 2022</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>DSS for Beginner</td>
                                    <td>Deciion Support System</td>
                                    <td>Xian Sheng - 2021</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Mandarin Chinese Basic</td>
                                    <td>Mandarin</td>
                                    <td>Xiao Jie - 2017</td>
                                    <td><button class="btn btn-warning rounded-pill badge"><img src="img/download.svg"></button></td>
                                </tr>
                            </tbody>
                        </table>
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
        </div>

        @include('additional.complete')

    </div>
</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection