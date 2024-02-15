<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\AdminProductController;
use App\Http\Controllers\Backend\VendorProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('frontend.index');
});
Route::post('/user/register',[UserController::class, 'UserRegister'])->name('user.register');
Route::post('/', [UserController::class, 'Userlogin'])->name('user.login');
Route::get('loginpage', [UserController::class, 'Login'])->name('loginpage');
Route::get('registerpage', [UserController::class, 'Register'])->name('registerpage');
Route::get('product', [UserController::class, 'product'])->name('product');
Route::get('productdetails', [UserController::class, 'productdetails'])->name('productdetails');



Route::middleware(['auth','role:user'])->group(function () {
    Route::get('frontend/index', [UserController::class, 'UserDashboard'])->name('frontend.index');
    Route::get('user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('profile', [UserController::class, 'Profile'])->name('profile');
    Route::get('change/password', [UserController::class, 'ChangePassword'])->name('change.password');




});
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashbosrd');
    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');

});
Route::middleware(['auth','role:vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashbosrd');
    Route::get('/vendor/logout', [VendorController::class, 'Vendorlogout'])->name('vendor.logout');
    Route::get('/vendor/profile', [VendorController::class, 'VendorProfile'])->name('vendor.profile');
    Route::get('/vendor/change/password', [VendorController::class, 'VendorChangePassword'])->name('vendor.change.password');


    Route::post('/vendor/profile/store', [VendorController::class, 'VendorProfileStore'])->name('vendor.profile.store');
    Route::post('/vendor/update/password', [VendorController::class, 'VendorUpdatePassword'])->name('vendor.update.password');


});



// Admin Product  etc...
Route::middleware(['auth','role:admin'])->group(function () {


    Route::controller(AdminProductController::class)->group(function(){
        Route::get('all/product','AllProduct')->name('all.product');
        Route::get('add/product','AddProduct')->name('add.product');
        Route::get('/edit/product/{id}' , 'EditProduct')->name('edit.product');
        // Route::get('/product/multiimg/delete/{id}' , 'MulitImageDelelte')->name('product.multiimg.delete');

        // Delete Multiple Images
        Route::get('/product/delete/{id}' , 'ProductDelelte')->name('delete.product');



        
        Route::post('import/csv','ImportCSV')->name('import.csv'); // csv file handling
        Route::post('store/product','StoreProduct')->name('store.product');
        Route::post('update/product/{id}','UpdateProdeuct')->name('update.product');
        // Route::post('update/product/thambnail','UpdateProdeuctThambnail')->name('update.product.thambnail');
        // Route::post('/update/product/multiimage' , 'UpdateProductMultiimage')->name('update.product.multiimage');

        // Route::get('/product/inactive/{id}' , 'ProductInactive')->name('product.inactive');
        // Route::get('/product/active/{id}' , 'ProductActive')->name('product.active');
    });

    // Vendor Active Inactive Route
    Route::controller(AdminController::class)->group(function(){
        Route::get('inactive/vendor','InactiveVendor')->name('inactive.vendor');
        Route::get('active/vendor','ActiveVendor')->name('active.vendor');
        Route::get('inactive/vendor/details/{id}','InactiveVendorDetails')->name('inactive.vendor.details');
        Route::get('active/vendor/details/{id}','ActiveVendorDetails')->name('active.vendor.details');



        Route::post('active/vendor/approve','ActiveVendorApprove')->name('active.vendor.approve');
        Route::post('inactive/vendor/approve','InactiveVendorApprove')->name('inactive.vendor.approve');

        //  Add vendor route
        Route::get('add/users/','AddUsers')->name('add.users');
        Route::get('/all/users', 'AllUsers')->name('all.users');
        Route::get('/delete/all/users/{id}','DeleteAllUsers')->name('delete.all.users');

        Route::post('/users/register', 'UsersRegister')->name('users.register');

        

        //  Add vendor route
        Route::get('add/vendor/','AddVendor')->name('add.vendor');
        Route::post('/vendor/register', [AdminController::class, 'VendorRegister'])->name('vendor.register');
        
    });



});
    // vendor Product  etc...
Route::middleware(['auth','role:vendor'])->group(function () {


    Route::controller(VendorProductController::class)->group(function(){
        Route::get('/vendor/all/product','VendorAllProduct')->name('vendor.all.product');
        Route::get('/vendor/add/product','VendorAddProduct')->name('vendor.add.product');
        Route::get('/vendor/edit/product/{id}','VendorEditProduct')->name('vendor.edit.product');

        // Delete Multiple Images
        Route::get('/vendor/product/multiimg/delete/{id}' , 'VednorMulitImageDelelte')->name('vendor.product.multiimg.delete');

        
        Route::get('/vendor/product/delete/{id}' , 'VendorProductDelelte')->name('vendor.delete.product');



        Route::post('/vendor/import/csv','VendorImportCSV')->name('vendor.import.csv'); // csv file handling
        
        // Route::post('/vendor/store/product','VendorStoreProduct')->name('vendor.store.product');
        // Route::post('/vendor/update/product/thambnail','VendorUpdateProdeuctThambnail')->name('vendor.update.product.thambnail');
        // Route::post('/vendor/update/product/multiimg','VendorUpdateProductMultiimage')->name('vendor.update.product.multiimg');
        Route::post('/vendor/update/product/{id}','VendorUpdateProduct')->name('vendor.update.product');



        // Route::get('/vendor/product/inactive/{id}' , 'VendorProductInactive')->name('vendor.product.inactive');
        // Route::get('/vendor/product/active/{id}' , 'VendorProductActive')->name('vendor.product.active');
        
        
    });









});
require __DIR__.'/auth.php';
