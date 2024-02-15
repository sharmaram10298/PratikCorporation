@extends('backend.vendor.vendor_dashboard')
@section('vendor')
@php
    $id = Auth::user()->id;
    $vender_id = App\models\User::find($id);
    $vender_status = $vender_id->status;
@endphp 
@if($vender_status === 'active')
<style>
/* Optional custom styles */
.product-details {
    display: none;
    padding: 10px;
}

.accordion-button::after {
    height: 0 !important;
    width: 0 !important;
}
</style>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Product</li>
                    
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('vendor.add.product')}}" class="btn btn-primary">Add Product</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">All Product:  <span class="badge rounded-pill bg-danger"> {{ count($products) }}  </span> </h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Article</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td colspan="5">
                                <div class="accordion accordion-flush" id="accordionFlushExample{{ $loop->iteration }}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne{{ $loop->iteration }}">
                                            <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $loop->iteration }}" aria-expanded="false" aria-controls="flush-collapseOne{{ $loop->iteration }}">
                                            
                                                    <img src="{{ asset($product->product_image) }}" width="50" alt="Product Image">
                                                
                                            
                                                    {{ strip_tags($product->brand) }}
                                                
                                            
                                                    {{ strip_tags($product->article) }}
                                                
                                            
                                                    {{ strip_tags($product->stock) }}
                                                
                                            
                                                    {{ strip_tags($product->price) }}
                                                
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne{{ $loop->iteration }}" data-bs-parent="#accordionFlushExample{{ $loop->iteration }}">
                                            <div class="accordion-body d-flex justify-content-between">
                                                <div class="mb-0">
                                                    <p class="mb-0"><strong>Category:</strong> {{ $product->category }}</p>
                                                    <p class="mb-0"><strong>Cage:</strong> {{ $product->cage }}</p>
                                                    <p class="mb-0"><strong>Temperature Range:</strong> {{ $product->temperature_range }}</p>
                                                    <p class="mb-0"><strong>Tolerance Class:</strong> {{ $product->tolerance_class }}</p>
                                                    <p class="mb-0"><strong>Roller Rows:</strong> {{ $product->roller_rows }}</p>
                                                    <p class="mb-0"><strong>Product Range:</strong> {{ $product->product_range }}</p>
                                                    <p class="mb-0"><strong>Arrangement:</strong> {{ $product->arrangement }}</p>
                                                    <p class="mb-0"><strong>Weight:</strong> {{ $product->weight }}</p>
                                                </div>
                                                <div class="mb-0">
                                                    <p class="mb-0"><strong>Product ID:</strong> {{ $product->productid }}</p>
                                                    <p class="mb-0"><strong>Country of Origin:</strong> {{ $product->country_of_origin }}</p>
                                                    <p class="mb-0"><strong>Customs Tariff Number:</strong> {{ $product->customs_tariff_number }}</p>
                                                    <p class="mb-0"><strong>Manufacturer Part Number:</strong> {{ $product->manufacturer_part_number }}</p>
                                                </div>
                                                <div class="mb-0">
                                                    <p class="mb-0"><strong>Inner Dimension:</strong> {{ $product->inner_dimension }}</p>
                                                    <p class="mb-0"><strong>Outer Dimension:</strong> {{ $product->outer_dimension }}</p>
                                                    <p class="mb-0"><strong>Width:</strong> {{ $product->width }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('vendor.edit.product',$product->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('vendor.delete.product',$product->id) }}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Article</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
 @endif
@endsection