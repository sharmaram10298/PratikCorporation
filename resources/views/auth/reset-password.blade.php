{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
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
	<link rel="icon" href="{{asset('backend/assets/images/favicon-32x32.png" type="image/png')}}" />
	<!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('backend/assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
	<title>PratikCorporation</title>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<div class="p-5">
										<div class="text-start">
											{{-- <img src="{{asset('backend/assets/images/logo-img.png')}}" width="180" alt=""> --}}
										</div>
										<form action="{{ route('password.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                            <p class="text-muted">We received your reset password request. Please enter your new password!</p>
                                            <div class="mb-3 mt-5">
                                                <label class="form-label">Email ID</label>
                                                <x-text-input disabled id="email" class=" form-control block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />

                                              

                                            </div>
                                            <div class="mb-3 mt-5">
                                                <label class="form-label">New Password</label>
                                                    <x-text-input id="password" class=" form-control block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Enter new password"/>
                                                
                                                {{-- <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password" /> --}}
                                                @if($errors->has('password'))
                                                    <div class="alert alert-danger alert-dismissible fade show mt-2">{{ $errors->first('password') }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                                                @endif

                                            </div>
                                           
                                            <div class="mb-3">
                                                <label class="form-label">Confirm Password</label>
                                                <x-text-input id="password_confirmation" class=" form-control block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password"/>
                                                {{-- <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm password" /> --}}
                                                @if($errors->has('password_confirmation'))
                                                <div class="alert alert-danger mt-2">{{ $errors->first('password_confirmation') }}</div>
                                                @endif
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Change Password</button> <a href="{{route('login')}}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{asset('backend/assets/images/login-images/forgot-password-frent-img.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html> 