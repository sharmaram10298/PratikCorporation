{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
	<title>PratikCorporation</title>
</head>

<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="assets/images/icons/forgot-2.png" width="120" alt="" />
						</div>
						<form action="{{ route('password.email') }}" method="post">
                            @csrf
                            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <x-auth-session-status  class="mb-4" :status="session('status')" />
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div> --}}

                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show ">
                                <x-auth-session-status  class="mb-3" :status="session('status')" />
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                        @endif
                            <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                            <p class="text-muted">Enter your registered email ID to reset the password</p>
                            <div class="my-4">
                                <label class="form-label">Email id</label>
                                <input type="text" name="email"  id="email" class="form-control form-control-lg" placeholder="example@user.com" />
                                @if($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissible fade show mt-2">
                                        <p>{{ $errors->first('email') }}</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                                    </div>

                                @endif
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Send</button> <a href="{{route('login')}}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

    <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>