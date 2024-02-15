<?php

namespace App\Repositories;

use App\Models\User;
use App\Helper\ImageResponseHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;



class UserRepository
{
    protected $imageResponseHelper;
    public function __construct(ImageResponseHelper $imageResponseHelper)
    {
        $this->imageResponseHelper = $imageResponseHelper;
    }
    

    public function Userlogout($data)
    {
        Auth::guard('web')->logout();

        $data->session()->invalidate();

        $data->session()->regenerateToken();
        $notification = [
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->route('login')->with($notification);
    }
    // public function AdminLogin()
    // {
    //     return view('admin.admin_login');
    // }
    // public function AdminProfile()
    // {
    //     $id = Auth::user()->id;
    //     $adminData = User::find($id);
    //     return $adminData;
    // }

    public function UserProfileStore($request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $userRole = Auth::user()->role;
        if ($request->hasFile('photo')) {
            if ($data->photo && file_exists(public_path('upload/user_images/' . $data->photo))) {
                unlink(public_path('upload/user_images/' . $data->photo));
            }
           if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');

              // Generate a unique filename
              $filename = time() . '_' . $uploadedFile->getClientOriginalName();

              // Move the uploaded file to the desired storage location
              $uploadedFile->move(public_path('upload/user_images'), $filename);

              // Update the user model with the new filename
              $data->photo = $filename;
          }
			
        }
    
        $data->save();
        $notification = [
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);

    }

    public function UserChangePassword($data){
        // Validation 
        $data->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);

        // Match The Old Password
        if (!Hash::check($data->old_password, auth::user()->password)) {
            $notification = [
                'message' => "Old Password Doesn't Match!!",
                'alert-type' => 'success'
            ];
            return back()->with($notification);
        }

        // Update The new password 
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($data->new_password)

        ]);
        $notification = [
            'message' => 'Password Changed Successfully',
            'alert-type' => 'success'
        ];
        return back()->with($notification);

    } // End Method 


    // public function UserRegister($data) {

    //     $data->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed'],
    //     ]);

    //     $user = User::insert([ 
    //         'name' => $data->name,
    //         'username' => $data->username,
    //         'email' => $data->email,
    //         'password' => Hash::make($data->password),
    //     ]);

    //       $notification = array(
    //         'message' => 'Registered Successfully',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->back()->with($notification);

    // }//End Method

    public function UserRegister($data) {
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::create([ 
            'name' => $data['name'],
            'username' => $data['username'], // Assuming you have 'username' in your $data array
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    
        $notification = [
            'message' => 'Registered Successfully',
            'alert-type' => 'success'
        ];
    
        return redirect()->back()->with($notification);
    }

    

}