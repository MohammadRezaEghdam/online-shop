@extends('layout')
@section('content')
    <!-- ? panel -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-2">
                <button class="btn btn-dark mb-3" id="openAndCloseBtn" onclick="openAndClosePanel()">Close</button>
                <div id="openAndClosePanel">
                    <ul class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            @if (!Auth::check())
                                <script>
                                    window.location = "/";
                                </script>
                            @endif
                            {{ auth()->user()->name ?? '' }}
                            @if (auth()->user()->is_admin == 1)
                                {{'(Admin)'}}
                            @else
                                {{ 'Subscriber' }}
                            @endif
                        </a>
                        <a class="list-group-item list-group-item-action " href="#">Text</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                        <a class="list-group-item list-group-item-action " href="#" tabindex="-1"> item</a>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="col">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Comments</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark">Show All Comments</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Posts</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark">Show All Posts</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title">Products</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-dark">Show All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
