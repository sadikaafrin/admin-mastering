@extends('frontend.app')
@section('content')

    <!-- =============== LOG-IN STARTS =============== -->
    <div class="register-area">
        <div class="container-xl">
            <form>
                <div class="cs-form-card mx-auto">
                    <h2 class="heading-two color-gray fw-400 text-center mb-lg-5 mb-4">
                        Register
                    </h2>
                    <div class="cs-form-primay register-form">
                        <div class="photo-upload-area color-gray">
                            <div
                                class="file-uploader-wrapper d-flex align-items-center gap-4 mb-lg-5 mb-4"
                            >
                                <div class="file-upload-box position-relative">
                                    <input
                                        type="file"
                                        id="user-image"
                                        name="user-image"
                                        accept="image/*"
                                        style="display: none"
                                    />
                                    <label
                                        for="user-image"
                                        class="register-image-upload d-flex align-items-center justify-content-center"
                                    >
                                        <img
                                            src="{{asset('frontend/images/file-uploader-icon.png')}}"
                                            alt=""
                                        />
                                        <img src="" alt="" class="form-uploaded-img-preview" />
                                    </label>
                                </div>
                                <div class="photo-name-size">
                                    <h4 class="color-black heading-three fw-700">
                                        Add Your Photo
                                    </h4>
                                    <p class="upload-info">MAX 100KB</p>
                                </div>
                            </div>
                            <div class="uploader-file-details mb-4">
                                <p class="uploader-file-name pt-1"></p>
                            </div>
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Full Name</label>
                            <input
                                class="cs-form-input-field"
                                type="text"
                                placeholder="Jone Doe"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Username</label>
                            <input
                                class="cs-form-input-field"
                                type="text"
                                placeholder="@username"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Date of Birth</label>
                            <input
                                class="cs-form-input-field"
                                type="date"
                                placeholder="DD-MM-YYYY"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Email Address</label>
                            <input
                                class="cs-form-input-field"
                                type="email"
                                placeholder="jrosstherealt@gmail.com"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Phone Number</label>
                            <input
                                class="cs-form-input-field"
                                type="text"
                                placeholder="+123 456 7890"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Password</label>
                            <input
                                class="cs-form-input-field"
                                type="password"
                                placeholder="********"
                            />
                        </div>
                        <div class="form-field-row mb-lg-4 mb-3">
                            <label class="semi-black fw-700 mb-2">Confirm Password</label>
                            <input
                                class="cs-form-input-field"
                                type="password"
                                placeholder="********"
                            />
                        </div>
                        <div class="form-field-row checkbox-style-pri my-lg-5 my-4">
                            <input type="checkbox" name="" id="register_acceptance" />
                            <label for="register_acceptance" class="color-gray"
                            >I firmly agree with all the
                                <a href="" class="text-underline color-gray"
                                >Terms & Conditions</a
                                >
                                along with all the
                                <a href="" class="text-underline color-gray"
                                >Privacy & Policy</a
                                >
                                of Fitsyah.CO</label
                            >
                        </div>
                        <div class="form-submit-btn-wrapper">
                            <button class="w-100 cs-btn btn-style-one" type="submit">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- =============== Register ENDS =============== -->
@endsection
