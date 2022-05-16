@extends('layout')
@section('content')
    <hr class="hr-braker">

    <!-- * left sidebar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group text-center">
                    <a class="list-group-item list-group-item-action active disabled" id="custom-list" href="#">آخرین
                        خبرها</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</a>

                </div>
                <!-- * adsbox two -->
                <div class="card text-center mt-5 border-primary" id="adsTwo">
                    <img class="card-img-top"
                        src="{{asset('images')}}/productsAdsImages/julian-o-hayon-Bs-zngH79Ds-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" id="removeAdsTwo" class="btn btn-danger">Remove ads</a>
                    </div>
                </div>

            </div>

            <!-- * main news panel -->
            <div class="col-md-8">
                @foreach ($showAllBlogs as $blog)
                    
                <div class="card border-secondary mb-3">
                    <div class="card-header">{{$blog->title}}</div>
                    <div class="card-body text-secondary">
                        <div class="text-center">
                            <img src="{{$blog->image}}" alt="">
                        </div>
                        <p class="card-text">{{$blog->description}}</p>
                    </div>
                </div>
                @endforeach

                
            </div>

            <!-- * right sidebar -->
            <div class="col-md-2 text-center">
                <ul class="list-group">
                    <a class="list-group-item list-group-item-action active disabled" id="custom-list" href="#">لینک های
                        مرتبط</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">Disabled
                        item</a>
                </ul>

                <!-- * ads box one -->
                <div class="card border-primary mt-5" id="adsOne">
                    <img class="card-img-top" src="{{asset('images')}}/productsAdsImages/daniel-korpai-hbTKIbuMmBI-unsplash.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" id="removeAdsOne" class="btn btn-danger">Remove ads</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-center text-white mt-3 mr-0">
        <!-- Grid container -->
        <div class="container pt-2">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
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



    <script>
        $(document).ready(function() {
            $("#removeAdsOne").click(function() {
                $("#adsOne").hide();
            });

            $("#removeAdsTwo").click(function() {
                $("#adsTwo").hide();
            });

        });
    </script>
@endsection
