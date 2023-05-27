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
    <title>Job Board ~ Dashboard</title>
</head>
<body>
    <nav class="navbar bg-white navbar-light">
        <div class="container-fluid d-flex flex-row">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDash" aria-controls="offcanvasDash">
                <span class="navbar-toggler-icon fw-bolder"></span>
              </button>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start w-50 " tabindex="-1" id="offcanvasDash" aria-labelledby="offcanvasDashLabel">
        <div class="container-fluid d-flex canvas-header justify-content-between header">
            <h4 class="text-center justify-content-center pt-3 ms-3">Fake Jobs</h4>
            <button type="button" class="btn-close text-reset pt-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="container d-flex pt-4 pe-4 ps-2 pb-3 profileheader">
            <i class="fas fa-user-circle fa-2 fa-2x align-self-center pe-2"></i>
            <div class="container d-flex flex-column p-2">
                <p class="m-0 pb-1">{{ ucfirst(Session::get('first_name')). " " . ucfirst(Session::get('last_name')) }}</p>
                <a class="text-decoration-none fw-semibold">View my profile</a>
            </div>
        </div>
        <div class="container d-flex flex-column button p-3">
                <a class="fw-semibold text-decoration-none ms-3 me-0 mb-0 mt-0 link-black" data-bs-dismiss="offcanvas" aria-label="Close">
                    My jobs</a>
            </div>
            <div class="container d-flex justify-content-end pt-3">
                <a href="{{ route('logout') }}" id="signout" class="btn btn-primary rounded-pill justify-content-end align-content-end">Sign out</a>
             </div>
    </div>
    <div id="jobscontainer" class="container-fluid d-flex flex-column dashboard-block">
        <p class="pt-4 ms-3 fw-lighter fw-">My Jobs</p>
        <div class="container-fluid pt-3 d-flex flex-row panel-select">
        <p id="active" class="pe-5">Active</p>
        <p id="recommended" class="pe-5">Recommended</p>
        </div>
    </div>
    <div id="nojobs" class="mt-2 container-fluid d-flex flex-column blue-bg justify-content-center align-content-center pb-3">
        <h4 class="pt-5 text-center">You have no active job appllications</h4>
        <p class="pt-2 fw-light text-center">Start an application to see your active applications.</p>
        <div class="container d-flex justify-content-center">
        <i class="fas fa-smile fa-10x" style="color: rgb(23, 104, 201);"></i>
        </div>
        <div class="container-fluid d-flex justify-content-center pt-3">
        <button id="searchjobs" class="btn btn-primary rounded-pill align-self-center">Search all jobs</button>
        </div>
</div>
        <div class="container-fluid d-flex flex-row footer min-vh-100">
        </div>

        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>