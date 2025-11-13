<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Poseify - Modeling Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Header Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
                <h2 class="text-primary display-5">Poseify</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse ms-4 ms-lg-0" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
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
                    <a class="btn btn-outline-primary border-2" href="https://themewagon.com/themes/poseify">Download
                        Now</a>
                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="title mx-5 p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white text-uppercase mb-4">Your Best Modeling Agency</h1>
                            <h4 class="text-white mb-0">Anda dapat menambahkan kalimat pembuka atau Informasi singkat
                                tentang model di sini!</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5 me-4"
                                href="https://themewagon.com/themes/poseify">Download Now</a>
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/GfSZtaoc5bw" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                            <h5 class="text-white ms-4 mb-0 d-none d-sm-block">Play More With Your Pose</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="title mx-5 p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white text-uppercase mb-4">Interactive Design Studio</h1>
                            <h4 class="text-white mb-0">Anda dapat menambahkan kalimat pembuka atau Informasi singkat
                                tentang model di sini!</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5 me-4"
                                href="https://themewagon.com/themes/poseify">Download Now</a>
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/GfSZtaoc5bw" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                            <h5 class="text-white ms-4 mb-0 d-none d-sm-block">Play More With Your Pose</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev justify-content-start" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon ms-lg-5 ms-sm-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next justify-content-end" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon me-lg-5 me-sm-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <!-- NOTE (watch out) -->
                    <!-- NOTE (watch out) -->
                    <div class="circle rounded-circle"></div>
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-6">
                    <p class="fs-4 text-uppercase text-primary">About Poseify</p>
                    <h1 class="display-4 mb-4">We've created the new Style For Photographers</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. exercitationem impedit iste
                        delectus soluta praesentium asperiores ipsum perspiciatis repellat inventore corporis veniam
                        molestiae maiores, quisquam delectus soluta praesentium asperiores ipsum perspiciatis repellat
                        inventore corporis veniam molestiae maiores, quisquam.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Tempor erat elitr rebum at
                                clita</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Aliqu diam amet diam et eos
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Clita duo justo magna dolore
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-3"><i class="fa fa-check text-primary me-2"></i>Nonumy vero labore lorem
                                sanctus</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 rounded-pill" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Our Service</p>
                <h1 class="display-4 mb-4 text-white">We Focus On Your Beauty</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-lg-3">
                    <div class="service-item text-center p-4">
                        <img class="img-fluid mb-4" src="{{ asset('img/model-1.png') }}" alt="">
                        <div class="service-content">
                            <h5 class="mb-2">Colors & Materials</h5>
                            <p class="mb-4">Ipsum dolor dolores nonumy et amet vero clita erat sadip sea clita</p>
                            <a href="#" class="btn bg-white text-primary">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="service-item text-center p-4">
                        <img class="img-fluid mb-4" src="{{ asset('img/model-2.png') }}" alt="">
                        <div class="service-content">
                            <h5 class="mb-2">Fashion & Model</h5>
                            <p class="mb-4">Ipsum dolor dolores nonumy et amet vero clita erat sadip sea clita</p>
                            <a href="#" class="btn bg-white text-primary">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="service-item text-center p-4">
                        <img class="img-fluid mb-4" src="{{ asset('img/model-3.png') }}" alt="">
                        <div class="service-content">
                            <h5 class="mb-2">Product Design</h5>
                            <p class="mb-4">Ipsum dolor dolores nonumy et amet vero clita erat sadip sea clita</p>
                            <a href="#" class="btn bg-white text-primary">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="service-item text-center p-4">
                        <img class="img-fluid mb-4" src="{{ asset('img/model-4.png') }}" alt="">
                        <div class="service-content">
                            <h5 class="mb-2">Design & Concept</h5>
                            <p class="mb-4">Ipsum dolor dolores nonumy et amet vero clita erat sadip sea clita</p>
                            <a href="#" class="btn bg-white text-primary">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Why Choose Us</p>
                <h1 class="display-4 mb-4 text-white">We Give The Best Look To Model</h1>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-xl-4">
                    <div class="d-flex">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-photo-video text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Creative Model Shoot</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. exercitationem
                                impedit iste delectus soluta praesentium asperiores ipsum perspiciatis repellat inventore
                                corporis veniam molestiae maiores, quisquam.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-camera-retro text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Production Videos Model Shoot</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. exercitationem
                                impedit iste delectus soluta praesentium asperiores ipsum perspiciatis repellat inventore
                                corporis veniam molestiae maiores, quisquam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <!-- NOTE (watch out) -->
                    <div class="circle-2 rounded-circle"></div>
                    <img src="{{ asset('img/feature.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-4">
                    <div class="d-flex">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Lens For Pro Shoot</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. exercitationem
                                impedit iste delectus soluta praesentium asperiores ipsum perspiciatis repellat inventore
                                corporis veniam molestiae maiores, quisquam.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="btn-xl-square bg-primary me-3">
                            <i class="fas fa-video text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-white">Video & Event Photography</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. exercitationem
                                impedit iste delectus soluta praesentium asperiores ipsum perspiciatis repellat inventore
                                corporis veniam molestiae maiores, quisquam.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-primary p-4 mt-5 rounded">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-eye fa-3x text-white"></i>
                            <div class="ms-4">
                                <h4 class="text-white mb-0">Call Us For Live Photography Models</h4>
                                <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    exercitationem impedit iste delectus soluta praesentium.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center justify-content-lg-end">
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                            <i class="fas fa-phone-alt fa-3x text-white ms-4"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Feature End -->


    <!-- Model Start -->
    <div class="container-fluid model pb-5 pt-2">
        <div class="container pb-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Our Models</p>
                <h1 class="display-4 mb-4 text-white">Our Famous Models</h1>
            </div>
            <div class="model-carousel owl-carousel">

                <div class="model-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-1.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="model-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-2.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="model-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-3.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="model-item wow fadeInUp" data-wow-delay="0.7s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-4.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="model-item wow fadeInUp" data-wow-delay="0.9s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-5.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="model-item wow fadeInUp" data-wow-delay="1.1s">
                    <div class="model-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('img/model-6.jpg') }}" alt="">
                        <div class="model-title">
                            <h5 class="mb-2">Full Name</h5>
                            <p class="mb-0">Photographer</p>
                        </div>
                        <div class="model-overlay text-center rounded">
                            <p class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Nesciunt, dicta exercitationem cum illum nihil dolorum amet similique dolore beatae
                                odit, eaque harum ipsa dolorem quisquam quaerat sint debitis quasi expedita?</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Model End -->


    <!-- Blog Start -->

    <div class="container-fluid blog pb-5 pt-2">
        <div class="container pb-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Blog & News</p>
                <h1 class="display-4 mb-4 text-white">Articles For Pro Model Look</h1>
            </div>

            <div class="blog-carousel owl-carousel">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-inner">
                        <a href="#" class="blog-img">
                            <img src="{{ asset('img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        </a>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="fs-5 text-uppercase text-primary">Photography</p>
                            <a href="#" class="d-inline-block h4 lh-base mb-3 text-white">Ipsum dolor dolores nonumy et
                                amet
                                vero </a>
                            <p class="mb-4">Dolores nonumy et amet vero clita erat sadip sea clita sit duo justo
                                magna dolore erat amet</p>
                            <div class="d-flex align-items-center justify-content-between pt-2">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('img/user.jpg') }}"
                                        alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-white mb-1">John Abraham</h6>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>23 Feb 2023</small>
                                    </div>
                                </div>
                                <a href="#" class="btn-light  py-2 px-3 rounded-pill border border-primary"><i
                                        class="fa fa-comments text-primary me-2"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-inner">
                        <a href="#" class="blog-img">
                            <img src="{{ asset('img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        </a>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="fs-5 text-uppercase text-primary">Fashion</p>
                            <a href="#" class="d-inline-block h4 lh-base mb-3 text-white">Ipsum dolor dolores nonumy et
                                amet
                                vero </a>
                            <p class="mb-4">Dolores nonumy et amet vero clita erat sadip sea clita sit duo justo
                                magna dolore erat amet</p>
                            <div class="d-flex align-items-center justify-content-between pt-2">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('img/user.jpg') }}"
                                        alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-white mb-1">John Abraham</h6>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>23 Feb 2023</small>
                                    </div>
                                </div>
                                <a href="#" class="btn-light  py-2 px-3 rounded-pill border border-primary"><i
                                        class="fa fa-comments text-primary me-2"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-inner">
                        <a href="#" class="blog-img">
                            <img src="{{ asset('img/blog-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        </a>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="fs-5 text-uppercase text-primary">Studio</p>
                            <a href="#" class="d-inline-block h4 lh-base mb-3 text-white">Ipsum dolor dolores nonumy et
                                amet
                                vero </a>
                            <p class="mb-4">Dolores nonumy et amet vero clita erat sadip sea clita sit duo justo
                                magna dolore erat amet</p>
                            <div class="d-flex align-items-center justify-content-between pt-2">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('img/user.jpg') }}"
                                        alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-white mb-1">John Abraham</h6>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>23 Feb 2023</small>
                                    </div>
                                </div>
                                <a href="#" class="btn-light  py-2 px-3 rounded-pill border border-primary"><i
                                        class="fa fa-comments text-primary me-2"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-item wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-inner">
                        <a href="#" class="blog-img">
                            <img src="{{ asset('img/blog-4.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                        </a>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="fs-5 text-uppercase text-primary">Life Style</p>
                            <a href="#" class="d-inline-block h4 lh-base mb-3 text-white">Ipsum dolor dolores nonumy et
                                amet
                                vero </a>
                            <p class="mb-4">Dolores nonumy et amet vero clita erat sadip sea clita sit duo justo
                                magna dolore erat amet</p>
                            <div class="d-flex align-items-center justify-content-between pt-2">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('img/user.jpg') }}"
                                        alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-white mb-1">John Abraham</h6>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i>23 Feb 2023</small>
                                    </div>
                                </div>
                                <a href="#" class="btn-light  py-2 px-3 rounded-pill border border-primary"><i
                                        class="fa fa-comments text-primary me-2"></i>3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5 pt-2">
        <div class="container pb-5">
            <div class="pb-5">
                <p class="fs-4 text-uppercase text-primary">Testimonial</p>
                <h1 class="display-4 mb-4 text-white">What Our Clients Say</h1>
            </div>

            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-content p-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <img src="{{ asset('img/testimonial-1.jpg') }}"
                                    class="img-fluid border rounded-circle" alt="">
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="text-white mb-0">Client Name</h5>
                                    <div class="d-flex text-primary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt
                                    nam iure pariatur reiciendis quo dolore laboriosam perspiciatis nonius natus et
                                    error eligendi vitae, obcaecati voluptatum reiciendis quat harum ipsa!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-content p-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <img src="{{ asset('img/testimonial-2.jpg') }}"
                                    class="img-fluid border rounded-circle" alt="">
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="text-white mb-0">Client Name</h5>
                                    <div class="d-flex text-primary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt
                                    nam iure pariatur reiciendis quo dolore laboriosam perspiciatis nonius natus et
                                    error eligendi vitae, obcaecati voluptatum reiciendis quat harum ipsa!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="testimonial-content p-4">
                        <div class="d-flex">
                            <div class="pe-4">
                                <img src="{{ asset('img/testimonial-3.jpg') }}"
                                    class="img-fluid border rounded-circle" alt="">
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="text-white mb-0">Client Name</h5>
                                    <div class="d-flex text-primary">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt
                                    nam iure pariatur reiciendis quo dolore laboriosam perspiciatis nonius natus et
                                    error eligendi vitae, obcaecati voluptatum reiciendis quat harum ipsa!</p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 bg-dark">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h2 class="text-primary mb-0">Poseify</h2>
                        <p class="text-secondary mb-4">Model Showcase</p>
                    </a>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i
                                class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Short Link</a>
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
                    <a href="#" class="h3 text-secondary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                        <a href="#" class="mb-2 text-white"><i
                                class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i
                                class="fas fa-map-marker-alt text-primary me-2"></i> 123 Street, New York,
                            USA</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-phone-alt text-primary me-2"></i> +012 345 67890</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i
                                class="fas fa-envelope text-primary me-2"></i> info@example.com</a>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center mt-4">
                <div class="col-md-4 text-center text-md-start mb-md-0">
                    <span class="text-light"><a href="#" class="text-secondary"><i
                                class="fas fa-copyright text-secondary me-2"></i>Your
                            Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="text-light me-3">Home</a>
                        <a href="#" class="text-light me-3">Cookies</a>
                        <a href="#" class="text-light me-3">Help</a>
                        <a href="#" class="text-light me-3">FQAs</a>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-end text-white">
                    Designed By <a class="text-secondary" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="text-secondary" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
