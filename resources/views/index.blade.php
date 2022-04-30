@extends('layout')
@section('content')
        <!-- navigation bar -->
    <div class="container-fluid pl-0 pr-0 mb-2">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Navbar scroll</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="panel.html">Panel</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="shop.html">Shop</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('images')}}/productsImage/alexander-rotker-l8p1aWZqHvE-unsplash.jpg" class="d-block w-100" alt="..." height="850">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images')}}/productsImage/c-d-x-PDX_a_82obo-unsplash.jpg" class="d-block w-100" alt="..." height="850">
          </div>
          <div class="carousel-item">
            <img src="{{asset('images')}}/productsImage/mohammed-attia-wYVKRBIchV0-unsplash.jpg" class="d-block w-100" alt="..." height="850">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    <!-- new products row -->
    <div class="container new-products">
        <h4 class="text-center">جدید ترین محصولات</h4>
        <hr class="hr-underline">
        <div class="row">

            <div class="col-md-3 text-center">
                <img src="{{asset('images')}}/apostolos-vamvouras-Pp_nVOuJMTU-unsplash.jpg" class="rounded img-thumbnail"
                    alt="...">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('images')}}/david-sanchez-kXLR5vVw0B0-unsplash.jpg" class="rounded img-thumbnail"
                    alt="...">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('images')}}/vadim-sherbakov-tCICLJ5ktBE-unsplash.jpg" class="rounded img-thumbnail"
                    alt="...">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('images')}}/windows-lhDjusLtpP4-unsplash.jpg" class="rounded img-thumbnail " alt="...">
            </div>

        </div>
    </div>

    <hr class="hr-braker">
    <!-- information row -->
    <div class="container">
        <h4 class="text-center">اطلاعیه ها</h4>
        <hr class="hr-underline">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-6 text-center">تخفیف ها</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to featured content or information.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-6 text-center">رویدادها</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to featured content or information.</p>

                </div>
            </div>
        </div>
    </div>

    <!-- contact us -->

    <div class="container">
        <h4 class="text-center">ارتباط با ما</h4>
        <hr class="hr-underline">
        <div class="row">
            <div class="col-md-4 social-media-hub">
                <h4 class="text-center">شبکه های اجتماعی ما</h4>
                <hr>
                <a href="#">
                    <img src="{{asset('images')}}/Instagram-Logo-PNG-Image-1.png" alt="Instagram-Logo" class="social-media">
                </a>
                <a href="#">
                    <img src="{{asset('images')}}/77220-scalable-vector-graphics-logo-whatsapp-icon-thumb.png"
                        alt="whatsapp-Logo" class="social-media">

                </a>
            </div>
            <div class="col-md-4 divider">
                <h4 class="text-center">آدرس</h4>
                <hr>
                <p class="text-center">
                    Fars Province, Shiraz, Zand street
                </p>
            </div>
            <div class="col-md-4">
                <h4 class="text-center">شماره تماس</h4>
                <hr>
                <p class="text-center">
                    09..........
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white mt-3 mr-0">
        <!-- Grid container -->
        <div class="container pt-2">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->


        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="">Mohammad Reza Eghdam</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
@endsection