@extends('frontend.master_dashboard')
@section('main')

<main>
  <div class="backgroundlogin">
    <div class="container" style="padding-top: 80px;padding-bottom: 80px;">
      <div class="row" style="justify-content: center;">
        <div class="col-lg-5" style="background: white;padding: 20px;">
          <h4 style="text-align: center;margin-top: 15px;margin-bottom: 30px;">LOGIN IN NOW</h4>
          <div class="login-form">
              <form action="{{ route('user.login') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
          		@csrf
              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control form-control_gray"
                  id="customerNameEmailInput" placeholder="Email address *" required>
                <label for="customerNameEmailInput">Email address *</label>
              </div>

              <div class="pb-3"></div>

              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control form-control_gray"
                  id="customerPasswodInput" placeholder="Password *" required>
                <label for="customerPasswodInput">Password *</label>
              </div>

              <div class="d-flex align-items-center mb-3 pb-2">
                <div class="form-check mb-0">
                  <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value=""
                    id="flexCheckDefault">
                  <label class="form-check-label text-secondary" for="flexCheckDefault">Remember me</label>
                </div>
                <a href="" class="btn-text ms-auto">Lost password?</a>
              </div>

              <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

              <div class="customer-option mt-4 text-center">
                <span class="text-secondary">Don't you have an account?</span>
                <a href="{{route('registerpage')}}" class="btn-text js-show-register" style="color: #1E4AE9;">Create Account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection