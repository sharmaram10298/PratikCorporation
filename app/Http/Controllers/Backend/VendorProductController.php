<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product;

class VendorProductController extends Controller
{
    public function VendorAllProduct(){
        // Get the currently authenticated vendor's ID
        $vendorId = auth()->id();
        // Retrieve products belonging to the authenticated vendor
        $products = Product::where('vendor_id', $vendorId)->get();
    
        return view('backend.vendor.product.vendor_product_all', compact('products'));
    }
    
    public function VendorAddProduct(){
        return view('backend.vendor.product.vendor_product_add');
    }


    public function VendorImportCSV(Request $request)
    {
        try {
            // Handle CSV file upload
            $request->validate([
                'csv_file' => 'required|file|mimes:csv',
            ]);
            $user = Auth::user();

            // Store the uploaded file
            $file = $request->file('csv_file');
            $filePath = $file->getPathname();

            // Open and read the CSV file
            $csvData = array_map('str_getcsv', file($filePath));

            // Assuming first row as headers
            $headers = array_shift($csvData);

            // Insert data into database
            foreach ($csvData as $row) {
                $data = array_combine($headers, $row);
                $data['vendor_id'] = $user->id;
                Product::create($data);
            }

            $notification = [
                'message' => 'Product Added Successfully',
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'An error occurred: ' . $e->getMessage(),
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }

    public function VendorEditProduct($id)
    {
        $products = Product::find($id);
        return view('backend.vendor.product.vendor_product_edit', compact('products'));
    }

   
    public function VendorUpdateProduct(Request $request, $id)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'brand' => 'string',
            'article' => 'string',
            'stock' => 'integer',
            'price' => 'integer',
            'category' => 'string',
            'cage' => 'nullable|string',
            'temperature_range' => 'nullable|string',
            'tolerance_class' => 'nullable|string',
            'roller_rows' => 'nullable|string',
            'product_range' => 'nullable|string',
            'arrangement' => 'nullable|string',
            'weight' => 'nullable|string',
            'productid' => 'nullable|string',
            'country_of_origin' => 'nullable|string',
            'customs_tariff_number' => 'nullable|string',
            'manufacturer_part_number' => 'nullable|string',
            'inner_dimension' => 'nullable|string',
            'outer_dimension' => 'nullable|string',
            'width' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjusted validation rule for image uploads
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('product_image')) {
            // Delete existing image if exists
            if ($product->product_image && file_exists(public_path('upload/product_images/' . $product->product_image))) {
                unlink(public_path('upload/product_images/' . $product->product_image));
            }

            // Upload new image
            $uploadedFile = $request->file('product_image');
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();
            $uploadedFile->move(public_path('upload/product_images'), $filename);
            $validatedData['product_image'] = 'upload/product_images/' .  $filename; // Update the validated data with the new filename
        }

        // Update the product with validated data
        $product->update($validatedData);

        $notification = [
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('vendor.all.product')->with($notification);
    }
    public function VendorProductDelelte($id)
    {
        // Find the product
        $product = Product::findOrFail($id);

        // Delete existing image if exists
        if ($product->product_image && file_exists(public_path('upload/product_images/' . $product->product_image))) {
            unlink(public_path('upload/product_images/' . $product->product_image));
        }

        // Delete the product
        $product->delete();

        $notification = [
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
