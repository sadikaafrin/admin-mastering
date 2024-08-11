@extends('frontend.app')
@section('content')
    <!-- =============== PROFILE STARTS =============== -->

    <div class="profile-area">
        <div class="profile-banner">
            <div class="profile-banner-bg"></div>
            <div class="profile-intro">
                <div class="container-xl">
                    <div
                        class="profile-intro-content-wrapper d-flex justify-content-between align-items-center"
                    >
                        <div
                            class="profile-intro-content d-flex align-items-center gap-4"
                        >
                            <div class="profile-user-avatar">
                                <img src="{{asset('frontend/images/user-profile-avatar.png')}}" alt="" />
                            </div>
                            <div class="profile-username-wrapper">
                                <h2 class="heading-two fw-700 color-gray">Alisha Tendon</h2>
                                <p class="text-md fw-700 semi-black">@tendon123</p>
                            </div>
                        </div>
                        <div class="user-profile-edit">
                            <a
                                href="{{route('profile.edit')}}"
                                class="cs-btn btn-style-one user-edit-btn cursor-pointer"
                            >Edit Profile</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-tab">
            <div class="container-xl">
                <div class="profile-tab-wrapper">
                    <div class="profile-tab-links-wrapper">
                        <div class="d-flex profile-tab-links" role="tablist">
                            <button
                                class="text-md nav-link active"
                                id="profile_points_tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile_points"
                                type="button"
                                role="tab"
                                aria-controls="profile_points"
                                aria-selected="true"
                            >
                                Your Loyalty Points
                            </button>

                            <button
                                class="text-md nav-link"
                                id="profile_post_tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile_post"
                                type="button"
                                role="tab"
                                aria-controls="profile_post"
                                aria-selected="false"
                            >
                                Your Posts
                            </button>

                            <button
                                class="text-md nav-link"
                                id="profile_order_history_tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile_order_history"
                                type="button"
                                role="tab"
                                aria-controls="profile_order_history"
                                aria-selected="false"
                            >
                                Order History
                            </button>

                            <button
                                class="text-md nav-link"
                                id="profile_accessories_tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile_accessories"
                                type="button"
                                role="tab"
                                aria-controls="nav-contact"
                                aria-selected="false"
                            >
                                Saved Addresses
                            </button>

                            <button
                                class="text-md nav-link"
                                id="profile_payment_tab"
                                data-bs-toggle="tab"
                                data-bs-target="#profile_payment"
                                type="button"
                                role="tab"
                                aria-controls="nav-contact"
                                aria-selected="false"
                            >
                                Payment Option
                            </button>
                        </div>
                    </div>
                    <div class="profile-tab-content-wrapper tab-content">
                        <!-- Profile Single Tab -->
                        <div
                            class="tab-pane profile-tab-content tab-points fade show active"
                            id="profile_points"
                            role="tabpanel"
                            aria-labelledby="profile_points_tab"
                        >
                            <div class="tab-points-grid d-grid">
                                <div class="tab-points-grid-item">
                                    <p class="text-lg fw-700 text-center points-hint">
                                        For every £1 spent = Earn 1 points
                                    </p>
                                    <div
                                        class="point-card position-relative d-flex align-items-center"
                                    >
                                        <div
                                            class="point-card-content position-relative d-flex align-items-center"
                                        >
                                            <h3
                                                class="heading-three color-black fw-700 point-card-title"
                                            >
                                                Achieved Loyalty Points
                                            </h3>
                                            <h2 class="color-black fw-700 point-card-value">500</h2>
                                        </div>
                                        <img
                                            class="point-card-wavy-img position-absolute"
                                            src="{{asset('frontend/images/wavy-img.png')}}"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div class="tab-points-grid-item">
                                    <p class="text-lg fw-700 text-center points-hint">
                                        100 Points = £1 OFF on next order
                                    </p>
                                    <div
                                        class="point-card position-relative d-flex align-items-center"
                                    >
                                        <div
                                            class="point-card-content position-relative d-flex align-items-center"
                                        >
                                            <h3
                                                class="heading-three color-black fw-700 point-card-title"
                                            >
                                                Worth In Vouchers
                                            </h3>
                                            <h2 class="color-black fw-700 point-card-value">£5</h2>
                                        </div>
                                        <img
                                            class="point-card-wavy-img position-absolute"
                                            src="'{{asset('frontend/images/wavy-img.png')}}"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Single Tab -->
                        <div
                            class="tab-pane profile-tab-content fade"
                            id="profile_post"
                            role="tabpanel"
                            aria-labelledby="profile_post_tab"
                        >
                            <div class="profile-post-grid d-grid">
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-post-grid-item">
                                    <div class="profile-post-thumb-wrapper">
                                        <img
                                            src="{{asset('frontend/images/post-thumb.jpg')}}"
                                            alt=""
                                            class="profile-post-thumb"
                                        />
                                    </div>
                                    <div class="profile-post-body">
                                        <div class="profile-post-content mb-4">
                                            <p class="text-reg fw-500 color-black">
                                                13 years ago today, a true patriot lost his life. Rest
                                                in Peace big guy.
                                            </p>
                                            <p class="text-xs color-lightgray">11 hours ago</p>
                                        </div>
                                        <div
                                            class="profile-post-bottom d-flex justify-content-between align-items-center"
                                        >
                                            <div
                                                class="profile-post-bottom-reactions d-flex gap-lg-5 gap-3"
                                            >
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.879999 7.37034L0.878065 7.37035C0.863253 7.3704 0.849134 7.36446 0.838855 7.3539C0.817829 7.33231 0.818331 7.2978 0.839855 7.27684L0.839886 7.27687L0.844574 7.27219L7.59768 0.519082L7.59769 0.519094L7.60046 0.516279C7.61031 0.506269 7.62359 0.500467 7.6376 0.50002C7.65133 0.500661 7.66434 0.506452 7.67402 0.51629L7.67679 0.519082L14.4299 7.27219L14.4299 7.27222L14.4347 7.2769C14.4455 7.28743 14.4514 7.30197 14.4512 7.31697L14.4512 7.31703C14.4506 7.34705 14.4258 7.371 14.3956 7.37043L14.3956 7.37034L14.3862 7.37034L11.4483 7.37034C10.9436 7.37034 10.5345 7.77948 10.5345 8.28415L10.5345 17.4455C10.5345 17.4756 10.5101 17.5 10.48 17.5L4.77793 17.5C4.74784 17.5 4.72346 17.4756 4.72346 17.4455L4.72346 8.28415C4.72346 7.77948 4.31433 7.37034 3.80965 7.37034L0.879999 7.37034Z"
                                                                fill="#807777"
                                                                stroke="#807777"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">120</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="15"
                                                            height="18"
                                                            viewBox="0 0 15 18"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M1.95445 11.1297H3.8271C4.60792 11.1297 5.24091 10.4967 5.24091 9.71585L5.24091 1L10.0519 1L10.0519 9.71585C10.0519 10.4967 10.6849 11.1297 11.4657 11.1297H13.3219L7.63816 16.8134L1.95445 11.1297Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">12</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="single-post-reaction d-flex gap-2 align-items-center"
                                                >
                                                    <div class="reaction-icon">
                                                        <svg
                                                            width="19"
                                                            height="19"
                                                            viewBox="0 0 19 19"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M7.01367 15.0423H6.63867C3.63867 15.0423 2.13867 14.2507 2.13867 10.2923V6.33398C2.13867 3.16732 3.63867 1.58398 6.63867 1.58398H12.6387C15.6387 1.58398 17.1387 3.16732 17.1387 6.33398V10.2923C17.1387 13.459 15.6387 15.0423 12.6387 15.0423H12.2637C12.0312 15.0423 11.8062 15.1611 11.6637 15.359L10.5387 16.9423C10.0437 17.639 9.23367 17.639 8.73867 16.9423L7.61367 15.359C7.49367 15.1848 7.21617 15.0423 7.01367 15.0423Z"
                                                                stroke="#807777"
                                                                stroke-width="1.5"
                                                                stroke-miterlimit="10"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M12.6365 8.70833H12.6432"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M9.63455 8.70833H9.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M6.63455 8.70833H6.64129"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </div>
                                                    <div class="reaction-text">
                                                        <p class="text-md color-gray fw-700">35</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="profile-post-options position-relative popup-container"
                                            >
                          <span
                              class="profile-post-option-opener cursor-pointer"
                          >
                            <svg
                                width="4"
                                height="16"
                                viewBox="0 0 4 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle cx="2" cy="2" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="8" r="2" fill="#5A5C5F" />
                              <circle cx="2" cy="14" r="2" fill="#5A5C5F" />
                            </svg>
                          </span>
                                                <ul
                                                    class="profile-post-option-list position-absolute white-bg"
                                                >
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black view-post-btn"
                                                        >View Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black edit-post-btn popup-opener"
                                                        >Edit Post</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black copy-post-btn"
                                                        >Copy Post Link</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-black share-post-btn"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=""
                                                            class="text-reg color-red delete-post-btn"
                                                        >Delete Post</a
                                                        >
                                                    </li>
                                                </ul>
                                                <div
                                                    class="form-popup align-items-center justify-content-center profile-post-edit-popup"
                                                >
                                                    <div
                                                        class="form-popup-content-wrapper bg-white profile-post-edit-content-wrapper"
                                                    >
                                                        <div
                                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                                        >
                                                            <h2 class="heading-two color-gray fw-700">
                                                                Edit Your Community Post
                                                            </h2>
                                                            <i
                                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                                            ></i>
                                                        </div>
                                                        <div class="profile-post-edit-wrapper">
                                                            <form action="">
                                                                <div class="profile-post-edit-field-wrapper">
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Edit Caption
                                                                    </p>
                                                                    <div
                                                                        class="profile-post-edit-field offwhitelight-bg"
                                                                    >
                                      <textarea name="" id="">
Lorem ipsum dolor sit amet consectetur. At sed nulla gravida vel magnis sed habitant tincidunt. Sit id rhoncus pharetra gravida. Maecenas non fames etiam mattis urna sed. Eu sodales adipiscing nunc odio feugiat ullamcorper mauris est a.</textarea
                                      >
                                                                        <div
                                                                            class="profile-post-btn-wrapper d-flex align-items-center justify-content-between"
                                                                        >
                                                                            <div
                                                                                class="profile-post-uploaders d-flex gap-3"
                                                                            >
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_image_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_image_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/media-upload.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                                <input
                                                                                    type="file"
                                                                                    name=""
                                                                                    id="profile_post_video_uploader"
                                                                                />
                                                                                <label
                                                                                    for="profile_post_video_uploader"
                                                                                >
                                                                                    <img
                                                                                        src="{{asset('frontend/images/Video.png')}}"
                                                                                        alt=""
                                                                                        class="upload-icon cursor-pointer"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                            <div class="profile-post-btn-wrapper">
                                                                                <a
                                                                                    href=""
                                                                                    class="cs-btn btn-style-one profile-post-btn"
                                                                                >Post</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="profile-uploaded-media-preview-wrapper position-relative"
                                                                >
                                                                    <p
                                                                        class="text-md fw-700 color-black font-sec mb-3"
                                                                    >
                                                                        Added Media
                                                                    </p>
                                                                    <div class="profile-uploaded-media-preview">
                                                                        <img
                                                                            class="profile-uploaded-media-preview-thumb"
                                                                            src="{{asset('frontend/images/profile-post-preview.jpg')}}"
                                                                            alt=""
                                                                        />
                                                                        <video
                                                                            class="profile-uploaded-media-preview-video"
                                                                            controls
                                                                            style="display: none; width: 100%"
                                                                        ></video>
                                                                        <div
                                                                            class="uploaded-preview-btn-group d-flex justify-content-center position-absolute"
                                                                        >
                                                                            <input
                                                                                type="file"
                                                                                name=""
                                                                                id="profile_post_preview_image_uploader"
                                                                            />
                                                                            <label
                                                                                for="profile_post_preview_image_uploader"
                                                                            >
                                                                                <img
                                                                                    src="{{asset('frontend/images/preview-upload-image.png')}}"
                                                                                    alt=""
                                                                                />
                                                                                <p class="text-md color-white">
                                                                                    Upload Media
                                                                                </p>
                                                                            </label>
                                                                            <span>
                                          <img
                                              src="{{asset('frontend/images/delete-2.png')}}"
                                              alt=""
                                          />
                                          <p class="text-md color-white">
                                            Delete Media
                                          </p>
                                        </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Single Tab -->
                        <div
                            class="tab-pane profile-tab-content fade"
                            id="profile_order_history"
                            role="tabpanel"
                            aria-labelledby="profile_order_history_tab"
                        >
                            <div class="profile-order-history-grid-wrapper">
                                <div
                                    class="profile-order-history-grid order-history-title-row d-grid"
                                >
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">
                                            Order ID
                                        </p>
                                    </div>
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">
                                            Product(s)
                                        </p>
                                    </div>
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">
                                            Shipping Address
                                        </p>
                                    </div>
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">Price</p>
                                    </div>
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">Status</p>
                                    </div>
                                    <div class="profile-order-history-grid-item">
                                        <p class="text-reg font-sec color-black fw-700">Action</p>
                                    </div>
                                </div>
                                <div class="profile-order-history-item-wrapper">
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 processing"
                                            >
                                                Processing
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 delivered"
                                            >
                                                Delivered
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 processing"
                                            >
                                                Processing
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 cancelled"
                                            >
                                                Cancelled
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 processing"
                                            >
                                                Processing
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                    <div class="profile-order-history-grid d-grid">
                                        <div
                                            class="profile-order-history-grid-item history-order-id"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                #123456AAB
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-product d-flex gap-1"
                                        >
                                            <img
                                                src="{{asset('frontend/images/w-product-2.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <img
                                                src="{{asset('frontend/images/trending-1.png')}}"
                                                alt=""
                                                class="history-order-product-thumb"
                                            />
                                            <div
                                                class="history-more-product-thumb position-relative"
                                            >
                                                <img
                                                    src="{{asset('frontend/images/w-product-3.png')}}"
                                                    alt=""
                                                    class="history-order-product-thumb"
                                                />
                                                <p
                                                    class="text-xs color-white position-absolute history-more-product-count"
                                                >
                                                    +2 More
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-addr"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">Home</p>
                                            <p class="text-sm font-sec color-black">
                                                H#03, Rd#01, Sec#1A, Address 1 United Street
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-price"
                                        >
                                            <p class="text-reg font-sec color-black fw-700">
                                                $400.00
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-status"
                                        >
                                            <p
                                                class="text-reg font-sec color-black fw-700 processing"
                                            >
                                                Processing
                                            </p>
                                        </div>
                                        <div
                                            class="profile-order-history-grid-item history-order-action"
                                        >
                                            <a
                                                href="#"
                                                class="text-reg font-sec color-gray fw-700 text-underline"
                                            >Download Invoice</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Single Tab -->
                        <div
                            class="tab-pane profile-tab-content fade"
                            id="profile_accessories"
                            role="tabpanel"
                            aria-labelledby="profile_accessories_tab"
                        >
                            <div
                                class="d-flex justify-content-end profile-add-address-btn-wrapper mb-4 popup-container"
                            >
                  <span
                      class="cs-btn btn-style-one narrow-btn profile-add-address-btn cursor-pointer popup-opener"
                  >+ Add New Address</span
                  >
                                <div
                                    class="form-popup align-items-center justify-content-center profile-add-address-popup"
                                >
                                    <div class="form-popup-content-wrapper bg-white">
                                        <div
                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                        >
                                            <h2 class="heading-two color-gray fw-700">
                                                Add New Address
                                            </h2>
                                            <i
                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                            ></i>
                                        </div>
                                        <div class="form-popup-fields">
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Address Title"
                                            />
                                            <div class="post--code--search">
                                                <input
                                                    class="cs-form-input-field mb-3"
                                                    type="text"
                                                    placeholder="Search Your Post Code"
                                                />

                                                <!-- search button -->
                                                <a href="#" class="search--btn">
                                                    <span>Search</span>
                                                </a>
                                            </div>
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Address Line 1"
                                            />
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Address Line 2"
                                            />
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="City"
                                            />
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Country"
                                            />
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Post Code"
                                            />

                                            <span
                                                class="d-block cs-btn btn-style-one text-center form-popup-close mt-lg-5 mt-4 cursor-pointer"
                                            >Save & Continue</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-address-blocks-wrapper popup-container">
                                <div class="profile-address-block default-block">
                                    <div class="profile-bg-title mb-4">
                                        <p class="text-reg font-sec color-black fw-700">
                                            Default Address
                                        </p>
                                    </div>
                                    <div class="profile-address-block-content">
                                        <div
                                            class="single-address-block d-grid align-items-center"
                                        >
                                            <div class="profile-address-type">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Office
                                                </p>
                                            </div>
                                            <div class="profile-address-details">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Address
                                                </p>
                                                <p class="text-sm font-sec color-black">
                                                    House #03, Road #3/A, Block #G, Saint Martin, Viena,
                                                    Italy
                                                </p>
                                            </div>
                                            <div
                                                class="profile-address-btn-group d-flex align-items-center gap-2 justify-content-end"
                                            >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                                >Update</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn delete-btn popup-opener"
                                                >Delete</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-address-block saved-block">
                                    <div class="profile-bg-title mb-4">
                                        <p class="text-reg font-sec color-black fw-700">
                                            Saved Address
                                        </p>
                                    </div>
                                    <div
                                        class="profile-address-block-content d-flex flex-column gap-4"
                                    >
                                        <div
                                            class="single-address-block d-grid align-items-center"
                                        >
                                            <div class="profile-address-type">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Office
                                                </p>
                                            </div>
                                            <div class="profile-address-details">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Address
                                                </p>
                                                <p class="text-sm font-sec color-black">
                                                    House #03, Road #3/A, Block #G, Saint Martin, Viena,
                                                    Italy
                                                </p>
                                            </div>
                                            <div
                                                class="profile-address-btn-group d-flex align-items-center gap-2 justify-content-end"
                                            >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-deepgreen make-default-btn"
                                                >Make Default</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                                >Update</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn delete-btn"
                                                >Delete</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="single-address-block d-grid align-items-center"
                                        >
                                            <div class="profile-address-type">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Office
                                                </p>
                                            </div>
                                            <div class="profile-address-details">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Address
                                                </p>
                                                <p class="text-sm font-sec color-black">
                                                    House #03, Road #3/A, Block #G, Saint Martin, Viena,
                                                    Italy
                                                </p>
                                            </div>
                                            <div
                                                class="profile-address-btn-group d-flex align-items-center gap-2 justify-content-end"
                                            >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-deepgreen make-default-btn"
                                                >Make Default</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                                >Update</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn delete-btn"
                                                >Delete</a
                                                >
                                            </div>
                                        </div>
                                        <div
                                            class="single-address-block d-grid align-items-center"
                                        >
                                            <div class="profile-address-type">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Office
                                                </p>
                                            </div>
                                            <div class="profile-address-details">
                                                <p class="text-reg font-sec color-black fw-700">
                                                    Address
                                                </p>
                                                <p class="text-sm font-sec color-black">
                                                    House #03, Road #3/A, Block #G, Saint Martin, Viena,
                                                    Italy
                                                </p>
                                            </div>
                                            <div
                                                class="profile-address-btn-group d-flex align-items-center gap-2 justify-content-end"
                                            >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-deepgreen make-default-btn"
                                                >Make Default</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                                >Update</a
                                                >
                                                <a
                                                    href=""
                                                    class="cs-btn btn-style-one narrow-btn delete-btn"
                                                >Delete</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="form-popup align-items-center justify-content-center"
                                >
                                    <div class="form-popup-content-wrapper bg-white">
                                        <div
                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                        >
                                            <h2 class="heading-two color-gray fw-700">
                                                Update Your Address
                                            </h2>
                                            <i
                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                            ></i>
                                        </div>
                                        <div class="form-popup-fields">
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Address Title"
                                            />
                                            <textarea
                                                name=""
                                                id=""
                                                class="cs-form-input-field"
                                                placeholder="Full Address"
                                            ></textarea>
                                            <span
                                                class="d-block cs-btn btn-style-one text-center form-popup-close mt-lg-5 mt-4 cursor-pointer"
                                            >Save & Continue</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Single Tab -->
                        <div
                            class="tab-pane profile-tab-content fade"
                            id="profile_payment"
                            role="tabpanel"
                            aria-labelledby="profile_payment_tab"
                        >
                            <div
                                class="d-flex justify-content-end profile-add-payment-btn-wrapper mb-4 popup-container"
                            >
                  <span
                      class="cs-btn btn-style-one narrow-btn profile-add-payment-btn cursor-pointer popup-opener"
                  >+ Add New Card</span
                  >
                                <div
                                    class="form-popup align-items-center justify-content-center profile-add-payment-popup"
                                >
                                    <div class="form-popup-content-wrapper bg-white">
                                        <div
                                            class="form-popup-head d-flex align-items-center justify-content-between"
                                        >
                                            <h2 class="heading-two color-gray fw-700">
                                                Add New Payment Method
                                            </h2>
                                            <i
                                                class="form-popup-close fa-solid fa-xmark color-gray cursor-pointer"
                                            ></i>
                                        </div>
                                        <div class="form-popup-fields">
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Card Holder Name"
                                            />
                                            <input
                                                class="cs-form-input-field mb-3"
                                                type="text"
                                                placeholder="Card Number"
                                            />
                                            <div class="form-field-grid-col2 d-grid">
                                                <input
                                                    class="cs-form-input-field mb-3"
                                                    type="text"
                                                    placeholder="CVC"
                                                />
                                                <input
                                                    class="cs-form-input-field mb-3"
                                                    type="text"
                                                    placeholder="Expiry Date"
                                                />
                                            </div>
                                            <span
                                                class="d-block cs-btn btn-style-one text-center form-popup-close mt-lg-5 mt-4 cursor-pointer"
                                            >Save & Continue</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-bg-title mb-4">
                                <p class="text-reg font-sec color-black fw-700">
                                    Added Cards
                                </p>
                            </div>

                            <div class="profile-payment-cards-grid gap-2 d-grid">
                                <div class="profile-payment-card">
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">1235 4569 8525</p>
                                        <div class="profile-payment-btn-group">
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                            >
                                                <img src="{{asset('frontend/images/edit-2.png')}}" alt="" />
                                            </a>
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn delete-btn"
                                            >
                                                <img src="{{asset('frontend/images/delete-icons.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-payment-card">
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">1235 4569 8525</p>
                                        <div class="profile-payment-btn-group">
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                            >
                                                <img src="{{asset('frontend/images/edit-2.png')}}" alt="" />
                                            </a>
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn delete-btn"
                                            >
                                                <img src="{{asset('frontend/images/delete-icons.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-payment-card">
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">1235 4569 8525</p>
                                        <div class="profile-payment-btn-group">
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn bg-green update-btn popup-opener"
                                            >
                                                <img src="{{asset('frontend/images/edit-2.png')}}" alt="" />
                                            </a>
                                            <a
                                                href=""
                                                class="cs-btn btn-style-one narrow-btn delete-btn"
                                            >
                                                <img src="{{asset('frontend/images/delete-icons.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== PROFILE ENDS =============== -->

    <!-- =============== CALL TO ACTION STARTS =============== -->

    <div class="cta offwhitelight-bg vertical-padding">
        <div class="container-xl">
            <div class="row cta-content-wrapper align-items-center">
                <div class="col-lg-6">
                    <div class="cta-content d-flex flex-column gap-2">
                        <h3 class="heading-two fw-700 color-black">
                            Get The Latest From Fitsyah & Co!
                        </h3>
                        <p>
                            Be the first to hear about new arrivals, promotions, style
                            inspiration and exclusive sneak peeks.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" class="subscribe-form">
                        <div class="subscribe-form-feilds d-flex">
                            <input
                                type="email"
                                class="subscribe-email-field"
                                placeholder="Enter Your Email"
                            />
                            <button type="submit" class="cs-btn btn-style-one submit-btn">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== CALL TO ACTION ENDS =============== -->
@endsection
