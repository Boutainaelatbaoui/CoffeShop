@extends('layouts.layout')
@section('title','Coffee Shop | Show Item')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <img src="{{ asset('img/' . $coffee->coffee_image) }}" class="card-img-top" width="80" alt="...">
                <div class="card-body">
                    <h4 class="card-title fw-bolder">{{ $coffee->coffee_name }}</h4>
                    <p class="card-text">{{ $coffee->coffee_detail }}</p>
                </div>
                <ul class="list-group list-group-flush text-start">
                    <li class="list-group-item"><span class="fw-bold">Size: </span>{{ $coffee->coffee_size }}</li>
                    <li class="list-group-item"><span class="fw-bold">Category: </span>{{ $coffee->coffee_category }}</li>
                    <li class="list-group-item"><span class="fw-bold">Price: </span>{{ $coffee->coffee_price }}</li>
                </ul>
                <div class="card-body">
                    <a href="{{route('coffee.index')}}" class="card-link btn btn-menu">View All</a>
                </div>
            </div>
        </div>
    </div>
@endsection