@extends('auth.app')

@section('content')
<!-- PAGE -->
        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                    <form class="login100-form validate-form" method="post" action="{{route('login')}}" enctype="multipart/form-data">
                        @csrf
									<span class="login100-form-title">
										Login
									</span>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
                        </div>
                        <div class="text-end pt-1">
                            <p class="mb-0"><a href="{{route('password.request')}}" class="text-primary ms-1">Forgot Password?</a></p>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn btn-primary">
                                Login
                            </button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0">Not register?<a href="{{route('register')}}" class="text-primary ms-1">Create an Account</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- CONTAINER CLOSED -->

@endsection
