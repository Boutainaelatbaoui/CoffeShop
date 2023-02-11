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
                <form action="{{ route('coffee.update', $coffee->id) }}" method="POST" enctype="multipart/form-data" id="form-coffee">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold">Edit Coffee</h5>
                    </div>
                    <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="coffee_name" id="coffee-name" value="{{ $coffee->coffee_name }}"/>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="form-label">Size</label>
                                    <input type="text" class="form-control" name="coffee_size" id="coffee-size" value="{{ $coffee->coffee_size }}"/>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="coffee_price" id="coffee-price" step=".01" value="{{ $coffee->coffee_price }}"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Detail</label>
                                <textarea class="form-control" rows="3" name="coffee_detail" id="coffee-detail">{{ $coffee->coffee_detail }}</textarea>
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
                                <img src="{{ asset('img/' . $coffee->coffee_image) }}" class="w-75 mt-3">
                                <input type="hidden" name="hidden_coffee_image" value="{{ $coffee->coffee_image }}">
                            </div>			
                    </div>
                    <div class="more-modal">
                    </div>	
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $coffee->id }}">
                        <button type="submit" name="edit" class="btn btn-primary coffee-action-btn" id="coffee-edit-btn">edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementsByName('coffee_category')[0].value = "{{ $coffee->coffee_category }}";
    </script>
@endsection