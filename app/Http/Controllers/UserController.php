<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function UserDashboard(){
    if (auth()->check() && auth()->user()->role == 'user') {
        // Your dashboard logic here
        return view('frontend.index');
    } else {
        // Redirect or show an error
        return redirect()->back();
    }
        
    }
  
  
    public function Login()
    {
    	return view('frontend.login');
    
    }
    public function Register()
    {
    	return view('frontend.register');
    
    }
    
    
  public function product()
  {
  	return view('frontend.product-page');
  
  }
  public function productdetails()
  {
  	return view('frontend.product-details');
  
  }


  
    public function UserLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
        'message' => 'Logout Successfully',
        'alert-type' => 'success'
            );

        return redirect('/')->with($notification);
    }
    public function UserRegister(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ]);

        $user = User::insert([ 
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $notification = array(
        'message' => 'Registered Successfully',
        'alert-type' => 'success'
            );
    
        return redirect()->route('loginpage')->with($notification);
       
    }

    public function Userlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();

            $notification = array(
                'message' => 'login Successfully',
                'alert-type' => 'success'
             );
            
            return redirect('frontend/index')->with($notification);
        }

        
    }
}
