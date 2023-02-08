@extends('layouts.app')
@section('title','Coffee Shop | Home')

@section('content')
<div class="container mt-4">
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
</div>
<div class="mt-5 pt-4 text-center">
    <h1 class="fw-bold home-textone">Our Coffee</h1>
    <h3 class="mt-3 home-subtext">We have carefully selected great tasting coffees</h3>
    <h3 class="mt-2 home-subtext">from around the world.</h3>
</div>
@endsection
