<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board ~ Index</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container-fluid d-flex text-center banner-top">
        <p>
            If you have questions related to Warehouse, Shopper, Driver, or Air jobs in the United States or Canada, please check out our FAQs first here: <a href="https://hiring.fake.com/faq">https://hiring.fake.com/faq</a>
        <p>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-end align-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon fw-bolder"></span>
              </button>
              <span class="ps-1 fw-bold text-white justify-content-end">Menu</span>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="container-fluid d-flex canvas-header justify-content-between">
                <h4 class="text-center align-self-end">Explore Fake Jobs</h4>
                <button type="button" class="btn-close text-reset p-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="container d-flex flex-column p-0 m-0">
                <ul class="p-0 m-0">
                    <li>
                        <button class="btn navigation-button p-3">
                            <i class="fas fa-home pe-2"></i><span>Home</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn navigation-button p-3">
                            <i class="fas fa-sign-in-alt pe-2"></i><span>Sign in</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn navigation-button p-3">
                            <i class="fas fa-briefcase pe-2"></i><span>Conversion Associate Portal</span>
                        </button>
                    </li>
                    <li>
                        <button class="btn navigation-button p-3">
                            <i class="fas fa-language pe-2"></i><span>Language</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        
          
    </nav>

    <div class="container-fluid gray-banner d-flex justify-content-center align-items-center">
        <h1 class="">Worldwide Operations and Customer Service</h1>
    </div>

    <div class="ps-1 container pt-5">
        <div class="row">
            <div class="col-sm-12 col-md-5 pe-md-5">
                <div class="login-box d-flex flex-column pb-5">
                    <h6 class="fw-bold m-0 p-0">Sign in</h6>
                    <hr>
                    <p>
                        To sign in or create an account, select your country of employment.
                    </p>
                    <select class="form-control">
                        <option>Select your country</option>
                        <option>United States</option>
                        <option>United Kingdom</option>
                    </select>
                    <br>
                    <a href="{{ route('signin') }}" id="loginbutton" class="btn btn-primary">Sign in / Create Account</a>
                </div>
            </div>
            <div class="ps-md-5 col-sm-12 col-md-7 mt-3 mt-md-0">
                <div class="container search-drop mb-3">
                    <p class="pt-1"><i role="button" onclick="showSearch()" id="arrow" class="fas fa-arrow-right pe-2"></i>Search</p>
                </div>
                <div id="search" class="container search-dropdown mb-3 hidden">
                    <div class="container-fluid d-flex flex-row">
                        <div class="col-6">
                            <p class="pt-3 fw-bold">Job Title</p>
                            <div class="container p-0 d-flex flex-column">
                                <div class="form-check form-check-inline pb-4">
                                    <input class="form-check-input" type="checkbox" id="warehouse" name="warehousecheck" value="1">
                                    <label class="form-check-label" for="warehouse">Fulfillment Center</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="cs" name="cscheck" value="1">
                                    <label class="form-check-label" for="cs">Customer Service</label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="pt-3 fw-bold">Location</p>
                            <div class="form-group pb-5">
                                <label>Country</label>
                                <input type="text" id="country" name="country" class="form-control" placeholder="Please choose a country">
                                </div>
                                <div class="form-group pb-5">
                                <label>State</label>
                                <input type="text" id="state" name="state" class="form-control" placeholder="Please choose a state">
                                </div>
                                <div class="form-group pb-5">
                                <label>City</label>
                                <input type="text" id="state" name="state" class="form-control" placeholder="Please choose a city">
                                <p class="fw-lighter pt-2">Multiple cities can be entered [use comma separator].</p>
                                </div>
                        </div>
                    </div>
                    <div class="container d-flex flex-column ps-0 ms-0 pb-3">
                        <button id="filterbutton" class="btn btn-primary w-50">Filter</button>
                    </div>
                    </div>  

                    @foreach($jobs as $job)
                <div class="container d-flex flex-column job-info p-3">
                    <h6>{{ $job->job_title }}</h6>
                    <p>Job ID: {{ $job->job_id}}</p>
                    <p>Location: {{$job->job_location}}
                    <p>{{ $job->job_description}}</p>
                    </p>
                    <div class="container d-flex flex-row justify-content-end align-content-end">
                        <button id="jobbutton" class="btn btn-primary">Apply now</button>
                    </div>
                </div>
        @endforeach
        </div>
</div>
</div>

            <div class="container-fluid d-flex flex-row footer justify-content-center p-2 mt-5">
                <div class="ms-5 ps-5 container d-flex p-2">
                <p>
                    Fake is an Equal Opportunity-Affirmative Action Employer – Minority / Female / Disability / Veteran / Gender Identity / Sexual Orientation.
                </p>
                </div>

                <div class="container d-flex flex-column links">
                <a class="">Disability Accomodations</a>
                <a class="">Impressum</a>
                <a class="">Privacy Policy</a>
                </div>

                <div class="container d-flex p-2">
                <p>
                    © 2001 - 2023,  Fake, Inc. or its affiliates
                </p>
                </div>
            </div>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>