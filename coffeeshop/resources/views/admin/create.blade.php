@extends('layouts.layout')
@section('title','Coffee Shop | Create Coffee')

@section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div id="modal-coffee">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('coffee.store') }}" method="POST" enctype="multipart/form-data" id="form-coffee">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Add New Coffee</h5>
                    </div>
                    <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="coffee_name" id="coffee-name"/>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Size</label>
                                    <input type="text" class="form-control" name="coffee_size" id="coffee-size"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="coffee_price" id="coffee-price"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Detail</label>
                                <textarea class="form-control" rows="3" name="coffee_detail" id="coffee-detail"></textarea>
                            </div>	
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="coffee_category" id="coffee-category">
                                    <option value="">Please select</option>
                                    <option value="Hot Coffee">Hot Coffee</option>
                                    <option value="Cold Coffee">Cold Coffee</option>
                                </select>
                            </div>			
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" name="coffee_image" id="coffee-image">
                            </div>			
                    </div>
                    <div class="more-modal">
                    </div>	
                    <div class="modal-footer">
                        <button type="submit" name="save" class="btn btn-primary song-action-btn" id="song-save-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection