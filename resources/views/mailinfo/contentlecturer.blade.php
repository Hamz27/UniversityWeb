@extends('master.headerlecturer')

@section('content')
<!--Content-->
<div class="container">
    <div class="row g-5 bagian">
        <div class="col-md-8 bagian1" style="margin-top: 150px;">
            <div style="margin: 10px 10px 20px;">
                <div class="card shadow" style="height: 600px;">
                    <div style="width: 100%; padding: 20px;">
                        <img src="img/fp.jpg" width="40" height="40" class="rounded-circle" style="float: left;" />
                        <p style="margin-left: 10px; float: left; font-size: 25px;">Udin</p>
                        <button type="button" class="btn btn-info" style="float: right; width: 80px;"><img src="img/envelope-plus.svg"></button>
                    </div>
                    <div class="card" style="margin: 10px; border-width: 0px;">
                        <div class="card" style="height: 150px; margin: 10px;">
                            <div style="margin: 10px;">
                                <p><strong>Subject</strong></p>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique facere dolores eveniet repellendus. Cupiditate, hic error! Sequi eius harum distinctio veniam, quasi a nihil, sit, natus non reprehenderit ipsum deleniti!
                                </p>
                            </div>
                        </div>
                        <div class="card" style="height: 300px; margin: 10px;" style="height: 300px; margin: 10px;">
                            <div style="margin: 10px;">
                                <p><strong>Mail</strong></p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique facere dolores eveniet repellendus. Cupiditate, hic error! Sequi eius harum distinctio veniam, quasi a nihil, sit, natus non reprehenderit ipsum deleniti!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('additional.incomplete')

    </div>
</div>
@endsection