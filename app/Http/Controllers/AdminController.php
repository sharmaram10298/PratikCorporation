<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{

    protected $adminRepository;
    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
    public function AdminDashboard(){
        return view('backend.admin.index');
    }
    public function Adminlogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }


    public function AdminProfile()
    {
         $data = $this->adminRepository->AdminProfile();
         return view('backend.admin.admin_profile_view', compact('data'));
    }
    

    public function AdminChangePassword()
    {
        return view('backend.admin.admin_change_password');
    }


    public function AdminLogin()
    {
        
        return $this->adminRepository->AdminLogin();
    }

    
    public function AdminProfileStore(Request $request)
    {
        $this->adminRepository->AdminProfileStore($request);
        return redirect()->back();
    }

    public function AdminUpdatePassword(Request $request)
    {
        $this->adminRepository->AdminUpdatePassword($request);
        return redirect()->back();
    }

    public function InactiveVendor(Request $request)
    {
        $inactivevendor =   $this->adminRepository->InactiveVendor($request);
        return view('backend.admin.vendor.inactive_vendor', compact('inactivevendor'));
    }

    public function InactiveVendorDetails($id)
    {
        $inactivevendordetails = $this->adminRepository->InactiveVendorDetails($id);
        return view('backend.admin.vendor.inactive_vendor_details',compact('inactivevendordetails'));
    }
    public function ActiveVendorApprove(Request $request)
    {
        return $this->adminRepository->ActiveVendorApprove($request);
            
    }

    public function InactiveVendorApprove(Request $request)
    {
        return $this->adminRepository->InactiveVendorApprove($request);
            
    }
   

    public function ActiveVendor()
    {
        $activevendor = $this->adminRepository->ActiveVendor();
        return view('backend.admin.vendor.active_vendor', compact('activevendor'));
    }
    public function ActiveVendorDetails($id)
    {
        $activevendordetails = $this->adminRepository->ActiveVendorDetails($id);
        return view('backend.admin.vendor.active_vendor_details',compact('activevendordetails'));
    }
    public function AddVendor()
    {
        return view('backend.admin.vendor.add_vendor');
    }
    public function AddUsers()
    {
        return view('backend.admin.user.add_users');
    }
   
    public function VendorRegister(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'nullable|string',
        ]);

        // Create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  
        $user->role = $request->role;

        // Save the user
        $user->save();
        $notification = [
            'message' => 'vendor Created Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
        
    }
    
    public function UsersRegister(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'nullable|string',
        ]);

        // Create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  
        $user->role = $request->role;

        // Save the user
        $user->save();
        $notification = [
            'message' => 'Users Created Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
        
    }
    public function AllUsers()
    {
        $allusers = User::where('role', 'user')->get();
        return view('backend.admin.user.all_users', compact('allusers'));
    }
   
    
    public function DeleteAllUsers($id)
    {
        // Find the product
        $product = User::findOrFail($id);

        // Delete existing image if exists
        if ($product->photo && file_exists(public_path('upload/user_images/' . $product->photo))) {
            unlink(public_path('upload/user_images/' . $product->photo));
        }

        // Delete the product
        $product->delete();

        $notification = [
            'message' => 'll Users and Associated Images Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

}
