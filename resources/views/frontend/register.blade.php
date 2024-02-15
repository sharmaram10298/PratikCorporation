@extends('frontend.master_dashboard')
@section('main')
<main>
    <div class="backgroundlogin">
        <div class="container" style="padding-top: 80px;padding-bottom: 80px;">
            <div class="row" style="justify-content: center;">
                <div class="col-lg-5" style="background: white;padding: 20px;">
                    <h4 style="text-align: center;margin-top: 15px;margin-bottom: 30px;">REGISTER NOW</h4>
                    <div class="login-form">
                        <form name="login-form" action="{{route('user.register') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="name" type="text" class="form-control form-control_gray"
                                    id="customerNameEmailInput" placeholder="Enter your name.. *" required>
                                <label for="customerNameEmailInput">Name *</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="username" type="text" class="form-control form-control_gray"
                                    id="customerNameEmailInput" placeholder="Enter your username..*" required>
                                <label for="customerNameEmailInput">Username*</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control form-control_gray"
                                    id="customerPasswodInput" placeholder="email *" required>
                                <label for="customerPasswodInput">Email *</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control form-control_gray"
                                    id="customerPasswodInput" placeholder="password *" required>
                                <label for="customerPasswodInput">Password *</label>
                            </div>
                            
                            <button class="btn btn-primary w-100 text-uppercase" type="submit">REGISTER</button>
							<div class="customer-option mt-4 text-center">
                                <span class="text-secondary">you have an account?</span>
                                <a href="{{route('loginpage')}}" class="btn-text js-show-register" style="color: #1E4AE9;">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection