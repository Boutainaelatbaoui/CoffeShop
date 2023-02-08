@extends('layouts.app')
@section('title','Coffee Shop | Home')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col">
            <div class="card card-home">
                <div class="card-body">
                    <h1 class="home-text fw-bolder ps-2 ps-lg-4 ms-2 ms-lg-4 mt-5 pt-3">Welcome to Coffee Shop</h1>
                    <div class="home-text mt-4 ps-2 ps-lg-4 ms-2 ms-lg-4">
                        <h3>It is best to start your day with a cup of coffee.</h3>
                        <h3 m>Discover the best coffee you will ever have.</h3>
                        <h3>We provide the best for our customers.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 pt-4 text-center">
        <h1 class="fw-bold home-textone">Our Coffee</h1>
        <h3 class="mt-3 home-subtext">We have carefully selected great tasting coffees</h3>
        <h3 class="mt-2 home-subtext">from around the world.</h3>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 mt-5">
        <div class="col">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/img/drump.jpg');"></div>
                <div class="card-body">
                    <h5 class="card-title text-center fs-4 fw-bolder mb-3">Card title</h5>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/img/drump.jpg');"></div>
                <div class="card-body">
                    <h5 class="card-title text-center fs-4 fw-bolder mb-3">Card title</h5>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <div style="height: 300px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url('assets/img/drump.jpg');"></div>
                <div class="card-body">
                    <h5 class="card-title text-center fs-4 fw-bolder mb-3">Card title</h5>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Category:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Quantity:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Price:</span></p>
                    <p class="card-text text-start"><span class="fw-bold text-muted">Description:</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
