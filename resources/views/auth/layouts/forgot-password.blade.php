@extends('auth.app')

@section('content')

<!-- PAGE -->
        <!-- CONTAINER OPEN -->
        <div class="col-12 container-login100">
            <div class="row">
                <div class="col col-login mx-auto">
                    <form class="card shadow-none" action="{{route('password.email')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="text-center">
											<span class="login100-form-title">
												Forgot Password
											</span>
                                <p class="text-muted">Enter the email address registered on your account</p>
                            </div>
                            <div class="pt-3" id="forgot">
                                <div class="form-group">
                                    <label class="form-label" for="eMail">E-Mail:</label>
                                    <input class="form-control" name="email" id="eMail" placeholder="Enter Your Email" type="email">
                                </div>
                                <div class="submit">
                                    <button class="login100-form-btn btn-primary">Submit</button>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-dark mb-0">Remember password?<a class="text-primary ms-1" href="{{route('login')}}">Back to login</a></p>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->


@endsection
