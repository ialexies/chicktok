@extends('layouts.layout')
@section('dashboard-content')

    @if(Session::get('deleted'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('deleted') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::get('delete-failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('delete-failed') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    {{-- {{dd($products->collection)}} --}}
{{-- {{dd($products->category )}} --}}
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Products </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> Product Name </th>
                        <th> Product Price </th>
                        <th> Product Discount </th>
                        <th> Product Category </th>
                        <th> Product Photo </th>
                        <th>Actions </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> Product Name </th>
                        <th> Product Price </th>
                        <th> Product Discount </th>
                        <th> Product Category </th>
                        <th> Product Photo </th>
                        <th>Actions </th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($products->collection as $product)
                        {{-- {{dd($product->name)}} --}}
                        <tr>
                            <td> {{ $product->name }} </td>
                            <td> {{ $product->price }} </td>
                            <td> {{ $product->discount }} </td>
                            {{-- <td> {{ $product->category->name }} </td> --}}
                            {{-- <td> {{ $product->category->name }} </td> --}}
                            <td> <img src="\img\{{ $product->img }}" width="100" height="100"></td>
                            <td>
                                {{-- <a href="{{ URL::to('edit-product') }}/{{ $product->id }}" class="btn btn-outline-primary btn-sm"> Edit </a> --}}
                                <a href="{{ URL::to('dashboard/products') }}/{{ $product->id }}/edit" class="btn btn-outline-primary btn-sm"> Edit </a>
                                |
                                <form action="{{ route('dashboard.products.destroy',$product->id ) }}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <input type="text" name="id" value="" hidden>
                                    <button class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete User</button>
                                </form>

                            </td>

                        </tr>


                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <script>
        function checkDelete() {
            var check = confirm('Are you sure you want to Delete this?');
            if(check){
                return true;
            }
            return false;
        }
    </script>

@stop
