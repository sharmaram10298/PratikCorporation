<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\VendorRepository;

class VendorController extends Controller
{
    protected $vendorRepository;
    public function __construct(VendorRepository $vendorRepository)
    {
        $this->vendorRepository = $vendorRepository;
    }
    public function VendorDashboard(){
        return view('backend.vendor.index');
    }
    public function Vendorlogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function VendorProfile()
    {
         $data = $this->vendorRepository->VendorProfile();
         return view('backend.vendor.vendor_profile_view', compact('data'));
    }

 
    
    

    
    
    public function VendorProfileStore(Request $request)
    {
        $this->vendorRepository->VendorProfileStore($request);
        return redirect()->back();
    }

    public function VendorChangePassword()
    {
        return view('backend.vendor.vendor_change_password');
    }
    public function VendorUpdatePassword(Request $request)
    {
        $this->vendorRepository->VendorUpdatePassword($request);
        return redirect()->back();
    }
   

    public function BecomeVendor()
    {
        return view('auth.become_vendor');
    }

   
}
