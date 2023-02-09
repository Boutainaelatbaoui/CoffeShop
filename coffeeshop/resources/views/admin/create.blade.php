<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- ================== BEGIN core-css ================== -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
        <!-- ================== END core-css ================== -->
        <!-- BEGIN parsley css-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
        <!-- END parsley css-->
        <!-- BEGIN jquery js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- END jquery js-->
        <!-- BEGIN parsley js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- END parsley js-->
    </head>
</head>
<body> 
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
</body>
</html>