@extends('auth.app')

@section('content')
    <!-- PAGE -->
            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form class="login100-form validate-form" action="{{route('register')}}" method="post">
                            @csrf
									<span class="login100-form-title">
										Registration
									</span>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="text" name="name" placeholder="User name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="mdi mdi-account" aria-hidden="true"></i>
										</span>
                            </div>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="email" name="email" placeholder="Email">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="password" name="password" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="wrap-input100 validate-input" >
                                <input class="input100" type="password" name="password_confirmation" placeholder="Password">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label">Agree the <a href="">terms and policy</a></span>
                            </label>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Register
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Already have account?<a href="{{route('login')}}" class="text-primary ms-1">Sign In</a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- CONTAINER CLOSED -->

@endsection


