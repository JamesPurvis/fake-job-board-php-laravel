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
        <a href="{{ route('home') }}" class="btn navigation-button p-3">
            <i class="fas fa-home pe-2"></i><span>Home</span>
        </a>
    </li>
    <li>
        <a href="{{ route('signin') }}" class="btn navigation-button p-3">
            <i class="fas fa-sign-in-alt pe-2"></i><span>Sign in</span>
        </a>
    </li>
    <li>
        <a href="" class="btn navigation-button p-3">
            <i class="fas fa-briefcase pe-2"></i><span>Conversion Associate Portal</span>
        </a>
    </li>
    <li>
        <a href="" class="btn navigation-button p-3">
            <i class="fas fa-language pe-2"></i><span>Language</span>
        </a>
    </li>
</ul>
            </div>
        </div>
        
          
    </nav>


    <div class="container-fluid gray-banner d-flex flex-column justify-content-center align-items-center">
        <h3 class="pb-2">{{ $job->job_title}}</h4>
        <p class="pb-2">Job ID: {{ $job->job_id }} | {{ $job->job_location }}</p>
    </div>

    <div class="container-fluid d-flex flex-column pt-5">
        <h6>{{ $job->job_title}}</h6>

        <p>
            {!!$job->job_description!!}
        </p>

        <a href="{{ route('signin') }}" id="applybutton" class="btn btn-primary">Apply now</a>
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