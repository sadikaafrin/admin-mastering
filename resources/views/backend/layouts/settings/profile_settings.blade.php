@extends('backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Profile</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <div class="row" id="user-profile">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-md-12 col-xl-6">
                                    <div class="d-flex flex-wrap align-items-center">
                                        {{-- <div class="profile-img-main rounded">
                                            <img src="{{ asset('backend/images/faces/6.jpg') }}" alt="img" class="m-0 p-1 rounded hrem-6">
                                        </div> --}}

                                        <div class="profile-image">
                                            <div class="profile-img-main rounded">
                                                <img id="profile-picture" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('backend/images/faces/6.jpg') }}" alt="Profile Picture" class="m-0 p-1 rounded hrem-6" style="width: 150px; height: 150px; border-radius: 50%;">
                                            </div>
                                            <div class="update-image">
                                                <input type="file" name="profile_picture" id="profile_picture_input" style="display: none;">
                                                <label for="profile_picture_input">
                                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="ms-4">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <h4>{{ Auth::user()->email }}</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="border-top">
                            <div class="wideget-user-tab">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li><a href="#editProfile"  class="active show" data-bs-toggle="tab">Edit Profile</a></li>
                                            <li><a href="#updatePassword" data-bs-toggle="tab">Update Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">

                        <div class="tab-pane active show" id="editProfile">
                            <div class="card">
                                <div class="card-body border-0">
                                    <form class="form-horizontal" method="post" action="{{ route('update.profile') }}">
                                        @csrf
                                        <div class="row mb-4">
                                            <p class="mb-4 text-17">Personal Info</p>
                                            <div class="form-group">
                                                <label for="username" class="form-label">User Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" id="username" value="{{ Auth::user()->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="firstname" class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="firstname" placeholder="Email" value="{{ Auth::user()->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="updatePassword">
                            <div class="card">
                                <div class="card-body border-0">
                                    <form class="form-horizontal" method="post" action="{{ route('update.Password') }}">
                                        @csrf
                                        <div class="row mb-4">
                                            <!-- Current Password -->
                                            <div class="form-group">
                                                <label for="old_password" class="form-label">Current Password</label>
                                                <input type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" placeholder="Current Password" id="old_password">
                                                @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- New Password -->
                                            <div class="form-group">
                                                <label for="password" class="form-label">New Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="New Password">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="form-group">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                                                @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                <a href="{{ route('dashboard') }}" class="btn btn-danger me-2">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>




                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->


        </div>
    </div>
</div>
@endsection



@push('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#profile_picture_input').change(function() {
            var formData = new FormData();
            formData.append('profile_picture', $(this)[0].files[0]);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: '{{ route('update.profile.picture') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        $('#profile-picture').attr('src', response.image_url);
                        toastr.success('Profile picture updated successfully.');
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function() {
                    toastr.error('An error occurred while updating the profile picture.');
                }
            });
        });
    });
</script>
@endpush
