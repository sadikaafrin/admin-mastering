@extends('backend.app')

@section('title', 'Stripe Settings')

@section('content')
    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Stripe Settings</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Stripe Settings</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                        <div class="card box-shadow-0">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Stripe Settings Form</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('stripe.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="mail_host" class="col-md-3 form-label">STRIPE KEY</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('stripe_key') is-invalid @enderror" id="stripe_key" name="stripe_key" placeholder="Enter your stripe key" type="text" value="{{ env('STRIPE_KEY') }}">
                                            @error('stripe_key')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="mail_password" class="col-md-3 form-label">STRIPE SECRET</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('stripe_secret') is-invalid @enderror" id="stripe_secret" name="stripe_secret" placeholder="Enter your mail password" type="text" value="{{ env('STRIPE_SECRET') }}">
                                            @error('stripe_secret')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <a href="{{ route('dashboard') }}" class="btn btn-danger me-2">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW CLOSED -->
            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
@endsection


