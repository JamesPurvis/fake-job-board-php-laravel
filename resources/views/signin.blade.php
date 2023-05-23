<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/custom2.css') }}"/>
    <title>Job Board ~ Sign in</title>
</head>
<body>
    <nav class="navbar bg-white navbar-light">
        <div class="container-fluid d-flex flex-row">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon fw-bolder"></span>
              </button>
        </div>
    </nav>
    <div class="mt-2 container-fluid d-flex blue-bg justify-content-center align-content-center">
        <div class="container d-flex pt-5 flex-column">
            <p id="loginheader" class="fw-semibold mb-0">Log in</p>
            <p id="logintext">This account is different from the one you use to shop on Fake.</p>
            <div class="form-group">
                <p>Email or mobile number</p>
                <input type="text" class="form-control" id="loginid" name="logindetails"/>
            </div>
            <div class="container-fluid d-flex flex-row pt-3">
                <p class="pe-4">No account?</p>
                <a class="pe-5">Create one!</a>
                <a class="ms-auto">Need help to login?</a>
            </div>
            <button class="btn btn-primary w-100 rounded-pill">Next</button>

            <div class="container d-flex flex-row pb-5 pt-3 justify-content-center">
                <p class="fw-semibold pe-2">Looking for your Fake Stores jobs account?<p>
                    <a href="#">Sign in here</a>
            </div>
        </div>
    </div>
        <div class="container-fluid d-flex flex-row footer min-vh-100">
        </div>
</body>
</html>