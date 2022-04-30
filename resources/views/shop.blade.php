@extends('layout')
@section('content')
    <!-- navigation bar -->
    
    <!-- slide bar -->
    <div class="container-fluid">
        <div class="col-md-12">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="{{asset('images')}}/headerImage/6d74a333d06fd714df646368fc010b6d1108de58_1648996572.jpg"
                            alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images')}}/headerImage/b3cc15a5d42b31b2bb8e02aa76318631cd5ed900_1649665010.jpg"
                            alt="Chicago">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images')}}/headerImage/fce92fcebd433bab0b34558e6edccc02c564990a_1649740591.jpg"
                            alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>
    <hr class="hr-braker">
    <!-- title -->
    <div class="container-fluid pr-0 pl-0">
        <h6 class="text-center site-header pt-3 ">فروشگاه</h6>
    </div>
    <hr class="hr-braker">
    <!-- shop content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card-columns">

                    <div class="card">
                        <img class="card-img-top"
                            src="{{asset('images')}}/productsImage/alexander-rotker-l8p1aWZqHvE-unsplash.jpg" alt="Card image"
                            style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal"
                                data-target="#exampleModal">مشاهده سریع</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <img src="{{asset('images')}}/productsImage/alexander-rotker-l8p1aWZqHvE-unsplash.jpg"
                                                    alt="">

                                            </div>
                                            <div class="mt-3">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="{{asset('images')}}/productsImage/c-d-x-PDX_a_82obo-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top"
                            src="{{asset('images')}}/productsImage/charisse-kenion-dah-jZWgzx8-unsplash.jpg" alt="Card image"
                            style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images')}}/productsImage/icons8-team-7LNatQYMzm4-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top"
                            src="{{asset('images')}}/productsImage/mohammed-attia-wYVKRBIchV0-unsplash.jpg" alt="Card image"
                            style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images')}}/productsImage/pmv-chamara-MEsWk-dZzlI-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images')}}/productsImage/rachit-tank-2cFZ_FB08UM-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="{{asset('images')}}/productsImage/revolt-164_6wVEHfI-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>

                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top"
                            src="{{asset('images')}}/productsImage/shardar-tarikul-islam-tIQ2t64FKy8-unsplash.jpg"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <button type="button" class="btn btn-success btn-lg btn-block">اضافه به سبد خرید</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block">مشاهده سریع</button>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2">
                <ul class="list-group text-center">
                    <a class="list-group-item list-group-item-action active disabled" id="custom-list" href="#">دسته
                        بندی</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">کالای
                        دیجیتال</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1"
                        aria-disabled="true">پوشاک</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">وسایل
                        خانه</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1"
                        aria-disabled="true">مبلمان</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">عطر و
                        ادکلان</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1"
                        aria-disabled="true">جواهرات</a>
                    <a class="list-group-item list-group-item-action " href="#" tabindex="-1" aria-disabled="true">ساعت</a>
                </ul>
            </div>
        </div>
    </div>

    
@endsection
