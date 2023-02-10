@extends('layouts.layout')
@section('title','Coffee Shop | Show Item')

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card card-menu btn bg-white mb-3 p-0">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title fw-bolder">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush text-start">
                    <li class="list-group-item"><span class="fw-bold">Size: </span></li>
                    <li class="list-group-item"><span class="fw-bold">Category: </span></li>
                    <li class="list-group-item"><span class="fw-bold">Price: </span></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link btn btn-menu">Order Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection