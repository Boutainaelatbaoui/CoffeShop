@extends('layouts.app')
@section('title','Coffee Shop | Home')

@section('content')
<div class="container mt-4 mb-5">
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>warning!</strong>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                <div style="height: 350px; background-position: center; background-size: cover; border-top-right-radius: 15px; border-top-left-radius: 15px; background-repeat: no-repeat; background-image: url({{asset('img/coffee1.jpg')}});"></div>
                <div class="card-body">
                    <h4 class="card-text fw-bolder mb-3">Espresso</h4>
                    <p class="card-text text-center"><span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro harum reprehenderit, quibusdam rerum doloremque fuga optio placeat alias.</span></p>
                    <div class="d-flex justify-content-between pt-3">
                        <div>
                            <button class="btn btn-menu">Order Now</button>
                        </div>
                        <div>
                            <h3 class="card-text text-start"><span class="">25 DH</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <div style="height: 350px; background-position: center; background-size: cover; border-top-right-radius: 15px; border-top-left-radius: 15px; background-repeat: no-repeat; background-image: url({{asset('img/coffee4.jpg')}});"></div>
                <div class="card-body">
                    <h4 class="card-title fw-bolder mb-3">Ice Blended</h4>
                    <p class="card-text text-center"><span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro harum reprehenderit, quibusdam rerum doloremque fuga optio placeat alias.</span></p>
                    <div class="d-flex justify-content-between pt-3">
                        <div>
                            <button class="btn btn-menu">Order Now</button>
                        </div>
                        <div>
                            <h3 class="card-text text-start"><span class="">25 DH</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <div style="height: 350px; background-position: center; border-top-right-radius: 15px; border-top-left-radius: 15px; background-size: cover; background-repeat: no-repeat; background-image: url({{asset('img/coffee3.jpg')}});"></div>
                <div class="card-body">
                    <h4 class="card-title fw-bolder mb-3">Frappuccino</h4>
                    <p class="card-text text-center"><span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro harum reprehenderit, quibusdam rerum doloremque fuga optio placeat alias.</span></p>
                    <div class="d-flex justify-content-between pt-3">
                        <div>
                            <button class="btn btn-menu">Order Now</button>
                        </div>
                        <div>
                            <h3 class="card-text text-start"><span class="">25 DH</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
