<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/custom2.css"/>
    <link rel="stylesheet" href="css/custom3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Job Board ~ Verify your personal pin</title>
</head>
<body>
    <nav class="navbar bg-white navbar-light">
        <div class="container-fluid d-flex flex-row">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon fw-bolder"></span>
              </button>
        </div>
    </nav>
    <div class="mt-2 pt-5 container-fluid d-flex blue-bg justify-content-center align-content-center pb-3">
        <div class="container d-flex pt-5 flex-column">
        <div class="container d-flex flex-row">
            <a href="{{ route('signin') }}" class="pb-3 fas fa-arrow-left text-decoration-none">back</a>
        </div>
            <form action="/authenticate" method="POST">
            @csrf
            <div class="form-group">
                <h5 class="pb-3">Enter your personal pin</h5>
                <input type="text" class="form-control" id="pin" name="pin"/>
            </div>
            <div class="container-fluid d-flex flex-row pt-3">
                <input class="form-check-input" type="checkbox" id="warehouse" name="warehousecheck" value="1">
                <p class="pe-4">Show your personal pin</p>
            </div>
            <div class="container-fluid d-flex flex-column">
                <a class="pb-3" href="#"">Forgot your personal pin?</a>
                <a class="pb-3" href="#">Need help to login?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill">Next</button>
           </form>
        </div>
    </div>
        <div class="container-fluid d-flex flex-row footer">
        </div>
</body>
</html>