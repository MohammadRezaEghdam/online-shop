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
                            <span class="badge badge-warning">Admin</span>
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
                    @if (auth()->user()->is_admin == 1)
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
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->is_admin == 1)
                                                <span class="badge badge-warning">Admin</span>
                                            @else
                                                <span class="badge badge-light">Subscriber</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <div class="border border-primary mt-5 p-5">
                            <h4>Role & Terms</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Etiam erat velit scelerisque in. Imperdiet sed euismod nisi
                                porta lorem mollis aliquam ut porttitor. Faucibus in ornare quam viverra orci sagittis eu
                                volutpat. Vitae justo eget magna fermentum. Ultrices gravida dictum fusce ut placerat.
                                Viverra mauris in aliquam sem. Est pellentesque elit ullamcorper dignissim cras. Morbi
                                tristique senectus et netus et malesuada fames ac. Et leo duis ut diam quam nulla porttitor
                                massa. Phasellus vestibulum lorem sed risus ultricies tristique. Lacus vestibulum sed arcu
                                non odio euismod lacinia at quis.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Etiam erat velit scelerisque in. Imperdiet sed euismod nisi
                                porta lorem mollis aliquam ut porttitor. Faucibus in ornare quam viverra orci sagittis eu
                                volutpat. Vitae justo eget magna fermentum. Ultrices gravida dictum fusce ut placerat.
                                Viverra mauris in aliquam sem. Est pellentesque elit ullamcorper dignissim cras. Morbi
                                tristique senectus et netus et malesuada fames ac. Et leo duis ut diam quam nulla porttitor
                                massa. Phasellus vestibulum lorem sed risus ultricies tristique. Lacus vestibulum sed arcu
                                non odio euismod lacinia at quis.
                            </p>
                            <a href="{{route('index')}}" class="btn btn-success float-right m-1" type="button">Agree</a>
                            <a href="{{route('logout')}}" class="btn btn-danger float-right m-1" type="button">Disagree</a>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
@endsection
