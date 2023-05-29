<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/custom2.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/custom3.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Job Board ~ Dashboard</title>
</head>
<body>
    <nav class="navbar bg-white navbar-light">
        <div class="container-fluid d-flex flex-row">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDash" aria-controls="offcanvasDash">
                <span class="navbar-toggler-icon fw-bolder"></span>
              </button>
              <button onClick="showSearchDash()" class="nav-link">
              <i class="fas fa-search fa-2x"></i>
              </button>
              </div>
        </div>
    </nav>
    <div  id="searchdash" class="container-fluid d-flex flex-row search-div pt-4 pb-3 hidden">
        <input type="text" class="form-control" placeholder="Search jobs" name="search" id="search"/>
        <input type="text" class="form-control" placeholder="Zipcode" name="zip" ip="zip"/>
        <button class="ps-2 btn btn-primary">Search</button>
</div>
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
    <div class="mt-2 container-fluid d-flex flex-column blue-bg ">
        <div class="container-fluid d-flex p-2">
            <h4>{{count($job_list)}} jobs have been found</h4>
        </div>
        @foreach($job_list as $job)
        @php
            $shifts = DB::table('job_shifts')->where('job_id', $job->job_id)->get();
            $shifts_total = $shifts->sum('shift_amount');
        @endphp
        <div class="container-fluid bg-white h-25 p-3">
  <div class="row">
    <div class="col-1 d-flex align-items-center justify-content-center p-0">
        <div class="img-container">
        <i class="fas fa-warehouse fa-3x" style="color: rgb(23, 104, 201);"></i>
      </div>
    </div>
    <div class="ps-3 col-auto d-flex flex-column pt-0 pb-0 pe-0">
      <p id="job-title" class="mb-1">{{$job->job_title}}</p>
      <p id="job-type" class="mb-1">Type: {{$job->job_e_type}}</p>
      <p id="job-duration" class="mb-1">Duration: {{$job->job_duration}}</p>
      <p id="job-rate" class="mb-1">Payrate: ${{$job->job_rate}}.00</p>
    </div>
    <div class="ps-3 col d-flex align-items-start pt-0 pb-0 pe-0">
      <p class="bg-blue">{{$shifts_total}} Shifts Available</p>
    </div>
  </div>
</div>
<br>
@endforeach
</div>


<div class="container-fluid d-flex flex-row footer">
            <p>Test</p>
        </div>

        <script>
                var $locationRoute = @json(route('location.update'));
                var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            </script>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>