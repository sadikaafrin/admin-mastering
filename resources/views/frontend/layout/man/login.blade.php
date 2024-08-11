@extends('frontend.app')
@section('content')
    <!-- =============== LOG-IN STARTS =============== -->
    <section class="log-in-area">
        <div class="container-xl">
            <form>
                <div class="cs-form-card mx-auto">
                    <h2 class="heading-two color-gray fw-400 text-center mb-lg-5 mb-4">
                        Log In
                    </h2>
                    <div class="cs-form-primay login-form">
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2" for="email"
                            ><b>Email Address</b></label
                            >
                            <input
                                class="cs-form-input-field"
                                type="text"
                                placeholder="jrosstherealt@gmail.com"
                                name="email"
                                required
                            />
                        </div>
                        <div class="form-field-row mb-lg-5 mb-4">
                            <label class="semi-black fw-700 mb-2" for="psw"
                            ><b>Password</b></label
                            >
                            <input
                                class="cs-form-input-field"
                                type="password"
                                placeholder="********"
                                name="psw"
                                required
                            />
                        </div>
                        <div class="form-submit-btn-wrapper pt-3">
                            <button class="w-100 cs-btn btn-style-one" type="submit">
                                Log in
                            </button>
                        </div>

                        <div class="forgot-register-area gap-2 fw-700 text-md">
                <span class="text-center option--holder"
                ><a class="semi-black text-underline" href="{{route('man.forget-password')}}"
                    >Forget Password?</a
                    >

                  <p>Or</p>

                  <p>
                    Don’t have an account?

                    <a class="ms-2 semi-black text-underline" href="{{route('man.register')}}">Register</a>
                  </p>
                </span>
                        </div>
                        <div for="" class="policy-terms-area">
                <span class="policy fw-700 text-md"
                ><a class="semi-black text-underline" href="#"
                    >Privacy & Policy</a
                    ></span
                >
                            <span class="terms fw-700 text-md"
                            ><a class="semi-black text-underline" href="#"
                                >Terms & Conditions</a
                                ></span
                            >
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- =============== LOG-IN ENDS =============== -->

@endsection
