@extends('layouts.app')
@section('title','Coffee Shop | Menu')

@section('content')
<div class="container mt-4 mb-5">
    <div class="mt-5 pt-4 text-center">
        <h1 class="fw-bold home-textone">Our Coffee</h1>
        <h3 class="mt-3 home-subtext">We have carefully selected great tasting coffees</h3>
        <h3 class="mt-2 home-subtext">from around the world.</h3>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 mt-5">
        @foreach ($data as $row)
            <div class="col">
                <div class="card card-menu btn bg-white mb-3 p-0">
                    <div style="height: 350px; background-position: center; background-size: cover; border-top-right-radius: 15px; border-top-left-radius: 15px; background-repeat: no-repeat; background-image: url({{ asset('img/' . $row->coffee_image) }});"></div>
                    <div class="card-body">
                        <h4 class="card-text fw-bolder mb-3">{{ $row->coffee_name }}</h4>
                        <p class="card-text text-center"><span class="">{{ $row->coffee_detail }}, {{ $row->coffee_size }}, {{ $row->coffee_category }}</span></p>
                        <div class="d-flex justify-content-between pt-3">
                            <div>
                                <button class="btn btn-menu">Order Now</button>
                            </div>
                            <div>
                                <h3 class="card-text text-start"><span class="">{{ $row->coffee_price }}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
