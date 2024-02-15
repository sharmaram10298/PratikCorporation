@extends('backend.admin.admin_dashboard')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@section('admin')
<!-- <style>
    .dum {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
    }
    .drag-drop {
        display: inline-block;
        padding: 10px 20px;
        border: 2px solid #007bff;
        color: #007bff;
        cursor: pointer;
    }

	input[type="file"] {
        display: none;
    }


    /* Hide the default file input */
    input[type="file"] {
        display: none;
    }

    .custom-file-input {
        display: inline-block;
        background-color: #007bff; /* Change to your desired button color */
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for the label text */
    .custom-file-input-label {
        cursor: pointer;
    }
</style> -->

<style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            min-height: 100vh;
        }

        .form-container {
            width: 100%;
            padding: 50px;
        }

        .upload-files-container {
            background-color: #f7fff7;
            width: 420px;
            padding: 30px 60px;
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
           
        }

        .drag-file-area {
			border: 2px dashed #7b2cbf;
			border-radius: 40px;
			margin: 1px 0 -1px;
			padding: 20px 11px;
			width: 1030px;
			height: 137px;
			text-align: center;
        }

                    
.browse-files span {
    position: relative;
    top: -25px;
}

.default-file-input {
    opacity: 3;
}


@keyframes fadeIn {
    0% {opacity: 0;}
    100% {opacity: 1;}
}

.cannot-upload-message span, .upload-button-icon {
    padding-right: 10px;
}

.cannot-upload-message span:last-child {
    padding-left: 20px;
    cursor: pointer;
}

.file-block {
    color: #f7fff7;
    background-color: #7b2cbf;
    transition: all 1s;
    width: 390px;
    position: relative;
    display: none;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 10px 0 15px;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
}

.file-info {
    display: flex;
    align-items: center;
    font-size: 15px;
}

.file-icon {
    margin-right: 10px;
}

.file-name, .file-size {
    padding: 0 3px;
}

.remove-file-icon {
    cursor: pointer;
}

.progress-bar {
    display: flex;
    position: absolute;
    bottom: 0;
    left: 4.5%;
    width: 0;
    height: 5px;
    border-radius: 25px;
    background-color: #4BB543;
}

.upload-files-container {
    background-color: #f7fff7;
    width: 578cm;
    padding: 38px -10px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
   
}
        /* Rest of your CSS styles remain unchanged */
        /* Rest of your CSS styles */

       

    
    </style>

<div class="page-content">

	<!--breadcrumb-->
	<!-- <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Add New Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
				</ol>
			</nav>
		</div>

	</div> -->
	<!--end breadcrumb-->
<!-- 
	<div class="card">
		<div class="card-body p-4">
			<h5 class="card-title">Add New Product</h5>
			<hr />
			<form id="myForm" action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-body mt-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="border border-3 p-4 rounded">

								<div class="row g-3 mb-3">
									<div class="col">
										<label for="inputProductTitle" class="form-label">Brand Name</label>
										<input type="text" name="brand_name" class="form-control" id="brand_name" placeholder="Enter brand name..">

									</div>
									<div class="col">
										<label for="inputProductTitle" class="form-label">Article Name</label>
										<input type="text" name="artical_name" class="form-control" id="artical_name" placeholder="Enter artical_name..">

									</div>
								</div>
								<div class="row g-3 mb-3">
									<div class="col">
										<label for="inputProductTitle" class="form-label">Product Category</label>
										<input type="text" name="product_category" class="form-control" id="product_category" placeholder="Enter Product Category..">

									</div>
									<div class="col">
										<label for="inputProductTitle" class="form-label">Product Cage</label>
										<input type="text" name="product_Cage" class="form-control" id="product_Cage" placeholder="Enter Product Cage..">

									</div>
								</div>
								<div class="row g-3 mb-3">
									<div class="col">
										<label for="inputProductTitle" class="form-label">Product Temperature range</label>
										<input type="text" name="Temperature_range " class="form-control" id="Temperature_range" placeholder="Enter Temperature range ..">

									</div>
									<div class="col">
										<label for="inputProductTitle" class="form-label">Product price</label>
										<input type="text" name="price" class="form-control" id="price" placeholder="Enter Product price..">

									</div>
								</div> -->
								<!-- <div class="mb-3">
								<label for="inputProductTitle" class="form-label">Product Tags</label>
								<input type="text" name="product_tags" class="form-control visually-hidden"
									data-role="tagsinput" value="new product,top product">
								</div>

								<div class="mb-3">
									<label for="inputProductTitle" class="form-label">Product Size</label>
									<input type="text" name="product_size" class="form-control visually-hidden"
										data-role="tagsinput" value="Small,Midium,Large ">
								</div>

								<div class="mb-3">
									<label for="inputProductTitle" class="form-label">Product Color</label>
									<input type="text" name="product_color" class="form-control visually-hidden"
										data-role="tagsinput" value="Red,Blue,Black">
								</div> -->


									<!-- 
								<div class="mb-3">
									<label for="inputProductDescription" class="form-label">Short Description</label>
									<textarea name="short_descp" class="form-control" id="inputProductDescription"
										rows="3"></textarea>
								</div>

								<div class="mb-3">
									<label for="inputProductDescription" class="form-label">Long Description</label>
									<textarea id="mytextarea" name="long_descp"  class="form-control" >Hello, World!</textarea>
								</div>



								<div class="mb-3">
									<label for="inputProductTitle" class="form-label">Main Thambnail</label>
									<input name="product_thumbnail" class="form-control" type="file" id="formFile" onChange="mainThamUrl(this)" >
									<img src="" id="mainThmb"  class="mt-2"/>
								</div>



								<div class="mb-3">
									<label for="inputProductTitle" class="form-label">Multiple Image</label>
									<input class="form-control" name="multi_img[]" type="file" id="multiImg"
										multiple="">
									<div class="row mt-2" id="preview_img"></div>
								</div> -->


<!-- 
							</div>
						</div>


					</div>

					<hr>
					<div class="col-12">
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Save Product</button>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div> -->

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Add New Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
				</ol>
			</nav>
		</div>

	</div>
	<!--end breadcrumb-->


	<div class="card">
    <div class="card-body p-4">
        <h5 class="card-title">Add New Product</h5>
        <hr />
        <form id="uploadForm" action="{{ route('import.csv') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3 mb-3">
							<div id="dropArea" class="upload-files-container">
								<div class="drag-file-area">
									
									<h3 class="dynamic-message">Drag & drop your CSV file here</h3>
									<label for="csv_file" class="label">or<input type="file" id="csv_file" name="csv_file" accept=".csv" class="default-file-input form-control col-12"/></label>
								</div>
								
							</div>
                            </div>
                        </div>
						<button class="btn btn-success offset-5 mt-2 upload-button" type="submit">Upload</button>
                    </div>
                </div>
                <hr>
                <!-- <div class="col-12">
                    <div class="d-grid">
                        <button type="submit" id="submitBtn" class="btn btn-primary">Upload</button>
                    </div>
                </div> -->
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
         document.addEventListener('DOMContentLoaded', function() {
             var dropArea = document.getElementById('dropArea');
 
             dropArea.addEventListener('dragover', function(e) {
                 e.preventDefault();
                 dropArea.classList.add('dragover');
             });
 
             dropArea.addEventListener('dragleave', function(e) {
                 e.preventDefault();
                 dropArea.classList.remove('dragover');
             });
 
             dropArea.addEventListener('drop', function(e) {
                 e.preventDefault();
                 dropArea.classList.remove('dragover');
                 var files = e.dataTransfer.files;
                 document.getElementById('csv_file').files = files;
                 
                 // Automatically submit the form after dropping the file
                 document.getElementById('uploadForm').submit();
             });
 
             // Optional: prevent the browser from opening the file when dropped outside the drop area
             window.addEventListener('drop', function(e) {
                 e.preventDefault();
             });
 
             // Show message after form submission
           
         });
     </script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#myForm').validate({
				rules: {
					csv_file: {
						required: true,
					},
					// short_descp: {
					// 	required: true,
					// },
					// product_thambnail: {
					// 	required: true,
					// },
					// multi_img: {
					// 	required: true,
					// },
					// selling_price: {
					// 	required: true,
					// },
					// product_code: {
					// 	required: true,
					// },
					// product_qty: {
					// 	required: true,
					// },
					// brand_id: {
					// 	required: true,
					// },
					// category_id: {
					// 	required: true,
					// },
					// subcategory_id: {
					// 	required: true,
					// },
				},
				messages: {
					csv_file: {
						required: 'Please Enter Product Name',
					},
					// short_descp: {
					// 	required: 'Please Enter Short Description',
					// },
					// product_thambnail: {
					// 	required: 'Please Select Product Thambnail Image',
					// },
					// multi_img: {
					// 	required: 'Please Select Product Multi Image',
					// },
					// selling_price: {
					// 	required: 'Please Enter Selling Price',
					// },
					// product_code: {
					// 	required: 'Please Enter Product Code',
					// },
					// product_qty: {
					// 	required: 'Please Enter Product Quantity',
					// },
				},
				errorElement: 'span',
				errorPlacement: function(error, element) {
					error.addClass('invalid-feedback');
					element.closest('.form-group').append(error);
				},
				highlight: function(element, errorClass, validClass) {
					$(element).addClass('is-invalid');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
				},
			});
		});
	</script>

	<script type="text/javascript">
		function mainThamUrl(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#mainThmb').attr('src', e.target.result).width(80).height(80);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>


	<script>
		$(document).ready(function() {
			$('#multiImg').on('change', function() { //on file input change
				if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
				{
					var data = $(this)[0].files; //this file data

					$.each(data, function(index, file) { //loop though each file
						if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)) { //check supported file type
							var fRead = new FileReader(); //new filereader
							fRead.onload = (function(file) { //trigger function on successful read
								return function(e) {
									var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(100)
										.height(80); //create image element 
									$('#preview_img').append(img); //append image to output element
								};
							})(file);
							fRead.readAsDataURL(file); //URL representing the file's data.
						}
					});

				} else {
					alert("Your browser doesn't support File API!"); //if File API is absent
				}
			});
		});
	</script>

	{{-- <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select[name="category_id"]').on('change', function() {
				var category_id = $(this).val();
				if (category_id) {
					$.ajax({
						url: "{{ url('/subcategory/ajax') }}/" + category_id,
						type: "GET",
						dataType: "json",
						success: function(data) {
							$('select[name="subcategory_id"]').html('');
							var d = $('select[name="subcategory_id"]').empty();
							$.each(data, function(key, value) {
								$('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.subcategory_name + '</option>');
							});
						},
					});
				} else {
					alert('danger');
				}
			});
		});
	</script> --}}

	{{-- <option value="{{ $cat->id }}">{{ $cat->category_name }}</option> --}}

	<script type="text/javascript">
		$(document).ready(function() {
			$('select[name="category_id"]').on('change', function() {
				var category_id = $(this).val();
				if (category_id) {
					$.ajax({
						url: "{{ url('/subcategory/ajax') }}/" + category_id,
						type: "GET",
						dataType: "json",
						success: function(data) {
							var subcategorySelect = $('select[name="subcategory_id"]');
							subcategorySelect.html(''); // Clear existing options
							$.each(data, function(key, value) {
								subcategorySelect.append($('<option>', {
									value: value.id,
									text: value.subcategory_name
								}));
							});
						},
						error: function(xhr, textStatus, error) {
							console.error("Ajax request failed: " + error);
						}
					});
				} else {
					alert('danger');
				}
			});
		});
	</script>







	@endsection