

@php
    $id = Auth::user()->id;
    $vender_id = App\models\User::find($id);
    $vender_status = $vender_id->status;
@endphp 
    
   
    
   

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>

            <img src="{{asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
        <a href="{{route('vendor.dashbosrd')}}">
            <h4 class="logo-text">PratikCo.</h4>
        </a>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('vendor.dashbosrd')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
     @if($vender_status === 'active')
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Product Manage</div>
            </a>
            <ul>
                <li> <a href="{{route('vendor.all.product')}}"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                </li>
                <li> <a href="{{route('vendor.add.product')}}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
               
            </ul>
        </li>
        

       
       
        {{-- <li>
            <a href="" target="">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li> --}}
    </ul>
    <!--end navigation-->
    @endif
</div>