<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About - Poseify</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <div class="container-fluid p-0 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
                <h2 class="text-primary display-5">Poseify</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse ms-4 ms-lg-0" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link active">About</a>
                    <a href="{{ url('/service') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/team') }}" class="dropdown-item">Our Models</a>
                            <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                            <a href="{{ url('/404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex">
                    <a class="btn btn-outline-primary border-2" href="https://themewagon.com/themes/poseify">
                        Download Now
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-4">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="circle rounded-circle"></div>
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-6">
                    <p class="fs-4 text-uppercase text-primary">About Poseify</p>
                    <h1 class="display-4 mb-4">Professional Model Agency</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
                        Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                        imperdiet.</p>

                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Professional Training</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Verified Portfolios</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Global Collaboration</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Premium Styling</p>
                        </div>
                    </div>

                    <a class="btn btn-primary py-3 px-5 rounded-pill" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Why Choose Us</p>
                <h1 class="display-4 mb-4 text-white">We Bring The Best For You</h1>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-4">
                    <div class="d-flex">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-photo-video text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Creative Model Shoot</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat justo
                                nec arcu fermentum.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-camera-retro text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Professional Studio</h4>
                            <p class="mb-0">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit
                                amet orci.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="circle-2 rounded-circle"></div>
                    <img src="{{ asset('img/feature.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-4">
                    <div class="d-flex">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Award Winning Team</h4>
                            <p class="mb-0">Suspendisse potenti. Vivamus sagittis lacus vel augue laoreet rutrum
                                faucibus dolor auctor.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-video text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Commercial Ads Ready</h4>
                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est
                                at lobortis.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Feature End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 bg-dark">
        <div class="container pt-5 pb-4">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <a href="{{ url('/') }}">
                        <h2 class="text-primary mb-0">Poseify</h2>
                        <p class="text-secondary mb-4">Model Showcase</p>
                    </a>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                        lorem et sit, sed stet lorem sit clita duo justo erat amet</p>

                    <div class="d-flex">
                        <a href="#" class="btn-light btn btn-square rounded-circle me-2"><i
                                class="fab fa-facebook-f text-primary"></i></a>
                        <a href="#" class="btn-light btn btn-square rounded-circle me-2"><i
                                class="fab fa-twitter text-primary"></i></a>
                        <a href="#" class="btn-light btn btn-square rounded-circle me-2"><i
                                class="fab fa-instagram text-primary"></i></a>
                        <a href="#" class="btn-light btn btn-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3 class="text-secondary">Short Link</h3>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="{{ url('/') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                        <a href="{{ url('/about') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                        <a href="{{ url('/service') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                        <a href="{{ url('/team') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Meet The Team</a>
                        <a href="{{ url('/contact') }}" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3 class="text-secondary">Help Link</h3>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>FAQs</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3 class="text-secondary">Contact Us</h3>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <p class="pb-3 border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                        <p class="py-3 border-bottom border-primary"><i
                                class="fas fa-phone-alt text-primary me-2"></i> +012 345 67890</p>
                        <p class="py-3 border-bottom border-primary"><i
                                class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                    </div>
                </div>

            </div>

            <div class="row g-4 align-items-center mt-4">
                <div class="col-md-4 text-center text-md-start">
                    <span class="text-light"><i class="fas fa-copyright text-secondary me-2"></i>Your
                        Site Name, All Rights Reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <a href="#" class="text-light me-3">Home</a>
                    <a href="#" class="text-light me-3">Cookies</a>
                    <a href="#" class="text-light me-3">Help</a>
                    <a href="#" class="text-light me-3">FAQs</a>
                </div>
                <div class="col-md-4 text-center text-md-end text-white">
                    Designed By <a class="text-secondary" href="https://htmlcodex.com">HTML Codex</a> Distributed By
                    <a class="text-secondary" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up text-white"></i></a>


    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Mail -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
