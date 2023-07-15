<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Portal</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />

    <style>
        .cover {
            overflow: hidden;
            width: 60%;
            height: 100%;
            position: fixed;
            z-index: -1;
            background-image: url(img/building7.png);
            background-size: cover;
            top: 0;
            right: 0;
        }

        .cover {
            transition: 0.5s all ease-in-out;
        }

        .cover:hover {
            transform: scale(1.5);
        }

        .cover2 {
            width: 53%;
            height: 100%;
            background-image: url(img/testpic.png);
            background-size: cover;
            position: fixed;
            z-index: -1;
        }

        .pilih {
            border-color: var(--bs-primary);
            color: var(--bs-primary);
            background-color: white;
        }

        .pilih:hover {
            background-color: var(--bs-primary);
            color: white;
        }
    </style>

</head>

<body>
    <div class="cover"></div>
    <div class="cover2"></div>
    <div class="portal bagian1">
        <div style="width: 100%; float: left;">
            <img src="img/portal.png" style="height: 100px; float: left; margin-right: 10px;">
            <strong style="font-size: 500%; width: 60%; float: left;">Portal</strong>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nisi quisquam excepturi, odio incidunt, recusandae beatae dolore facilis ducimus distinctio voluptate. Quibusdam odit harum corporis quaerat molestias ea placeat nesciunt?</p>
        <div style="display: inline-flex;">
            <button class="btn btn-primary tombol" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><strong>Sign In</strong></button>
            <button class="btn btn tombol" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight" style="border-color: whitesmoke; color: whitesmoke;"><strong>Sign Up</strong></button>
        </div>
        <iframe class="vid" style="margin-top: 20px;" src="https://www.youtube.com/embed/wAZdRs2lDIQ?autoplay=1&mute=1"></iframe>
    </div>

    <div class="offcanvas offcanvas-end sidemenu" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div style="width: 90%; height: 70%; margin: auto;">
            <h1>Login</h1>
            <h6 class="text-muted">as Student</h6>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ID</span>
                <input type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <a href="/home"><button type="button" class="btn btn-primary" style="width: 100%;">Login</button></a>
            <div style="width: 100%; text-align: center;"><a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight">Forgot Password?</a></div>
            <div style="margin-top: 20px; text-align:center;">
                <button class="btn pilih" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightl" aria-controls="offcanvasRight"><strong>Sign In as Lecturer</strong></button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end sidemenu" tabindex="-1" id="offcanvasRightl" aria-labelledby="offcanvasRightLabel">
        <div style="width: 90%; height: 70%; margin: auto;">
            <h1>Login</h1>
            <h6 class="text-muted">as Lecturer</h6>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ID</span>
                <input type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <a href="/homelec"><button type="button" class="btn btn-primary" style="width: 100%;">Login</button></a>
            <div style="width: 100%; text-align: center;"><a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight">Forgot Password?</a></div>
            <div style="margin-top: 20px; text-align:center;">
                <button class="btn pilih" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><strong>Sign In as Student</strong></button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end sidemenu" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
        <div style="width: 90%; height: 70%; margin: auto;">
            <h1>Register</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ID</span>
                <input type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" aria-label="password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <button style="width: 100%;" class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Role</button>
                <ul class="dropdown-menu" style="width: 100%;">
                    <li><a class="dropdown-item" href="#">Student</a></li>
                    <li><a class="dropdown-item" href="#">Lecturer</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary" style="width: 100%;">Submit</button>
            <div style="width: 100%; text-align: center;"><a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Already Have an Account?</a></div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end sidemenu" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel">
        <div style="width: 90%; height: 70%; margin: auto;">
            <h1>Password Confirmation</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ID</span>
                <input type="text" class="form-control" aria-label="id" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="text" class="form-control" aria-label="email" aria-describedby="basic-addon1">
            </div>
            <button type="button" class="btn btn-primary" style="width: 100%;">Reset Password</button>
            <div class="text-muted" style="text-align: center;">By clicking "Reset Password" we will send a password reset link to your email</div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>