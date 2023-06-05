@extends('master.headerlecturer')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
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

            <div style="margin: 10px 10px 20px;">
                <div class="card shadow" style="height: 600px;">
                    <h4 class="card-header" style="background-color: #0d1b2a; color: white;">E-Book</h4>
                    <div class="card-body">
                        <div style="width: 100%;">
                            <input type="text" name="searchcategory" placeholder="Search the title of the book.." id="myInput" onkeyup="myFunction()" style="width: 100%;" />
                        </div>
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Download</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
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

        @include('additional.incomplete')

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