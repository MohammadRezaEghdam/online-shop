@extends('layout')
@section('content')
    

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

    
@endsection