@extends('layouts.layout')
@section('title','Coffee Shop | Dashboard')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>success!</strong>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card welcome-card text-center bx-shadow">
        <div class="card-style"></div>
        <div class="card-body box-card">
            <div class="card-title">
                <a class="navbar-brand mx-4" href="{{Route('home')}}">
                    <span class="logo">
                        Coffee<span class="img-fluid"><img src="{{asset('img/icons8-coffee-64 (2).png')}}" class="logo-img" alt="coffee logo"></span>Shop
                    </span>
                </a>
            </div>
            <div class="card-text mb-4">
                <h4 class="mt-1 fw-bolder">Welcome back <i class="bi bi-quote"></i>{{ Auth::user()->name }}<i class="bi bi-quote"></i> <span>&#128075;</span></h4>
            </div>
            <a href="{{ route('coffee.create') }}" class="btn btn-modal">Add New Coffee</a>
        </div>
    </div>
    <!-- TASK MODAL -->

    <table id="data-table" class="display dataTable mb-3" style="width: 100%" aria-describedby="example_info">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Detail</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr class="odd">
                    <td class=""><img src="{{ asset('img/' . $row->coffee_image) }}" width="75px"></td>
                    <td class="sorting_1">{{ $row->coffee_name }}</td>
                    <td class="">{{ $row->coffee_size }}</td>
                    <td class="">{{ $row->coffee_price }}</td>
                    <td class="">{{ $row->coffee_detail }}</td>
                    <td class="">{{ $row->coffee_category }}</td>
                    <td>
                        <div class="d-flex fs-3">
                            <form action="{{ route('coffee.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('coffee.show', $row->id) }}" class="btn btn-success text-dark me-3"><i class="bi bi-eye users-icon text-white"></i></a>
                                <a href="{{ route('coffee.edit', $row->id) }}" class="btn btn-warning me-3"><i class="bi bi-pencil-square users-icon text-white"></i></a>
                                <button type="submit" class="btn btn-danger text-dark"><i class="bi bi-trash3 users-icon text-white"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>            
            @endforeach
        </tbody>
    </table>
@endsection

