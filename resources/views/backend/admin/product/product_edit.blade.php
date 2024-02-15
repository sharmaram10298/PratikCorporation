@extends('backend.admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="page-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Edit Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('all.product') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Edit Product</h5>
            <hr />

            <form id="myForm" method="post" action="{{ route('update.product', $products->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id"   value="{{ $products->id }}">

                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                  
                                <div class="row g-3 mb-3">
                                   <div class="col">
                                        <label for="inputProductTitle" class="form-label">brand </label>
                                        <input type="text" name="brand" class="form-control" id="brand"
                                            value="{{ $products->brand }}">
                                   </div>
                                   <div class="col">
                                        <label for="inputProductTitle" class="form-label">Article </label>
                                        <input type="text" name="article" class="form-control" id="article"
                                            value="{{ $products->article }}">
                                   </div>
                                </div>
                                <div class="row g-3 mb-3">
                                  
                                        <div class="col">
                                            <label for="inputProductTitle" class="form-label">Stock </label>
                                            <input type="text" name="stock" class="form-control" id="stock"
                                                value="{{ $products->stock }}">
                                        </div>
                                        <div class="col">
                                            <label for="inputProductTitle" class="form-label">Price </label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                value="{{ $products->price }}">
                                        </div>
                                   
                                </div>
                                <div class="row g-3 mb-3">
                                   
                                        <div class="col">
                                            <label for="inputProductTitle" class="form-label">Category </label>
                                            <input type="text" name="category" class="form-control" id="category"
                                                value="{{ $products->category }}">
                                        </div>
                                        <div class="col">
                                            <label for="inputProductTitle" class="form-label">cage Name</label>
                                            <input type="text" name="cage" class="form-control" id="cage"
                                                value="{{ $products->cage }}">
                                        </div>
                                   
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">temperature_range</label>
                                        <input type="text" name="temperature_range" class="form-control" id="temperature_range"
                                            value="{{ $products->temperature_range }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">tolerance_class</label>
                                        <input type="text" name="tolerance_class" class="form-control" id="tolerance_class"
                                            value="{{ $products->tolerance_class }}">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">roller_rows</label>
                                        <input type="text" name="roller_rows" class="form-control" id="roller_rows"
                                            value="{{ $products->roller_rows }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">product_range</label>
                                        <input type="text" name="product_range" class="form-control" id="product_range" value="{{ $products->product_range }}">
                                        
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">arrangement</label>
                                        <input type="text" name="arrangement" class="form-control" id="arrangement"
                                            value="{{ $products->arrangement }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">weight</label>
                                        <input type="text" name="weight" class="form-control" id="weight"
                                            value="{{ $products->weight }}">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">productid</label>
                                        <input type="text" name="productid" class="form-control" id="productid"
                                            value="{{ $products->productid }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">country_of_origin</label>
                                        <input type="text" name="country_of_origin" class="form-control" id="country_of_origin"
                                            value="{{ $products->country_of_origin }}">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">customs_tariff_number </label>
                                        <input type="text" name="customs_tariff_number" class="form-control" id="customs_tariff_number"
                                            value="{{ $products->customs_tariff_number }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">manufacturer_part_number</label>
                                        <input type="text" name="manufacturer_part_number" class="form-control" id="manufacturer_part_number"
                                            value="{{ $products->manufacturer_part_number }}">
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">inner_dimension</label>
                                        <input type="text" name="inner_dimension" class="form-control" id="inner_dimension"
                                            value="{{ $products->inner_dimension }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">outer_dimension</label>
                                        <input type="text" name="outer_dimension" class="form-control" id="outer_dimension"
                                            value="{{ $products->outer_dimension }}">
                                    </div>
                                    <div class="col">
                                        <label for="inputProductTitle" class="form-label">width</label>
                                        <input type="text" name="width" class="form-control" id="width"
                                            value="{{ $products->width }}">
                                    </div>
                                </div>
                            </div>   
                                <div class="row g-3 mb-3">
                                     <div class="col">
                                        <label for="product_image" class="form-label">Image</label>
                                        <input name="product_image" class="form-control" type="file" id="formFile" onChange="mainThamUrl(this)">
                                        <img src="{{ asset($products->product_image) }}" id="mainThmb" class="mt-2" style="width: 80px; height:80px;" />
                                        <input type="hidden" name="product_image"   value="{{ $products->product_image }}">
                                    </div>
                                
                                </div>   

                                    <hr>


                                    <div class="col-12">
                                        <div class="d-grid">
                                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                </div>
        </div>

        </form>
    </div>
</div>

      


<script type="text/javascript">
    $(document).ready(function () {
        $('#myForm').validate({
            rules: {
                product_name: {
                    required: true,
                },
                short_descp: {
                    required: true,
                },
                product_thambnail: {
                    required: true,
                },
                multi_img: {
                    required: true,
                },
                selling_price: {
                    required: true,
                },
                product_code: {
                    required: true,
                },
                product_qty: {
                    required: true,
                },
                brand_id: {
                    required: true,
                },
                category_id: {
                    required: true,
                },
                subcategory_id: {
                    required: true,
                },
            },
            messages: {
                product_name: {
                    required: 'Please Enter Product Name',
                },
                short_descp: {
                    required: 'Please Enter Short Description',
                },
                product_thambnail: {
                    required: 'Please Select Product Thambnail Image',
                },
                multi_img: {
                    required: 'Please Select Product Multi Image',
                },
                selling_price: {
                    required: 'Please Enter Selling Price',
                },
                product_code: {
                    required: 'Please Enter Product Code',
                },
                product_qty: {
                    required: 'Please Enter Product Quantity',
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#mainThmb').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


<script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


@endsection