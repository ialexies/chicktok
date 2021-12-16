@extends('layouts.layout')
@section('dashboard-content')
    <h1> Create product form</h1>

    @if(Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('success') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('failed') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="productName"> Product name </label>
            <input type="text" class="form-control" id="productName" aria-describedby="prodeuctName" placeholder="Enter product name" name="productName">
        </div>

        <div class="form-group">
            <label for="productPrice"> Product price </label>
            <input type="number" class="form-control" id="productPrice" aria-describedby="productPrice" placeholder="0.0" name="productPrice">
        </div>

        <div class="form-group">
            <label for="productDetails"> Product Details </label>
            <textarea name="productDetail" class="form-control"  id="editor1"></textarea>
        </div>
        {{-- <div class="form-group">
            <label for="exampleInputEmail1"> Product discount </label>

            <input type="number" class="form-control" id="productDiscount" aria-describedby="emailHelp" placeholder="0.0" name="productDiscount">
        </div> --}}

        {{-- <div class="form-group">
            <label for="exampleInputEmail1"> Select product category </label>
            <select class="form-control" name="category">
                <option> Select </option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group">
            <label for="exampleInputEmail1"> Product Photo </label>
            <input type="file" class="form-control" name="productPhoto" onchange="loadPhoto(event)">
        </div>

        <div class="form-group">
            <img id="photo" height="100" width="100">
        </div>

        {{-- <div class="form-group">
            <label for="exampleInputEmail1"> Is Hot Product </label>
            <input type="checkbox" name="isHotProduct"/>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> Is New Arrival </label>
            <input type="checkbox" name="isNewArrival"/>
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function loadPhoto(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('photo');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

@stop
