@extends('frontend.app')

@section('content')
{{--    !-- =============== HERO FEATURED STARTS =============== -->--}}

    <div class="hero-featured vertical-padding">
        <div class="container-xl">
            <div class="row hero-featured-content-wrapper">
                <div class="col-md-6">
                    <div class="hero-featured-block position-relative">
                        <div class="hero-featured-img-wrapper">
                            <img
                                class="hero-featured-img"
                                src="{{asset('frontend/images/womenmen-hero-featured1.png')}}"
                                alt=""
                            />
                        </div>
                        <div class="hero-featured-text position-absolute">
                            <h2 class="heading-two color-white mb-4">
                                Best Collection For Women's Products
                            </h2>
                            <a href="" class="cs-btn btn-style-one text-uppercase"
                            >Learn More</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-featured-block position-relative">
                        <div class="hero-featured-img-wrapper">
                            <img
                                class="hero-featured-img"
                                src="{{asset('frontend/images/womenmen-hero-featured2.png')}}"
                                alt=""
                            />
                        </div>
                        <div class="hero-featured-text position-absolute">
                            <h2 class="heading-two color-white mb-4">
                                Best Collection For Women's Products
                            </h2>
                            <a href="" class="cs-btn btn-style-one text-uppercase"
                            >Learn More</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== HERO FEATURED ENDS =============== -->

    <!-- =============== TOP CATEGORY SLIDER  STARTS =============== -->

    <div class="top-category-slider-area women--items vertical-padding-bottom">
        <div class="container-xl">
            <div class="section-top-cta d-flex">
                <h2 class="heading-two fw-700 color-black">Top Categories</h2>
                <a
                    href=""
                    class="d-flex align-items-center cs-btn arrow-btn color-black"
                >VIEW ALL
                    <img
                        class="btn-arrow"
                        src="{{asset('frontend/images/arrow-right.png')}}"
                        alt="arrow right"
                    />
                </a>
            </div>
        </div>
        <div class="top-category-slider-wrapper swiper">
            <div class="swiper-wrapper top-category-slider d-flex">
                <div
                    class="swiper-slide top-category-slider-item gray-effect-wrapper"
                >
                    <div class="top-category-card men">
                        <div class="top-category-thumb">
                            <img
                                class="gray-img"
                                src="{{asset('frontend/images/top-ctg-w1.png')}}"
                                alt=""
                            />
                        </div>
                        <div
                            class="top-category-link-block d-flex justify-content-between align-items-center offwhite-bg"
                        >
                            <h3 class="heading-three fw-400 color-black">
                                Casual Collections
                            </h3>
                            <div class="category-slider-arrow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="54"
                                    height="54"
                                    viewBox="0 0 54 54"
                                    fill="none"
                                >
                                    <path
                                        d="M32.4673 13.3425L46.1248 27L32.4673 40.6575"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.875 27H45.7425"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide top-category-slider-item gray-effect-wrapper"
                >
                    <div class="top-category-card men">
                        <div class="top-category-thumb">
                            <img
                                class="gray-img"
                                src="{{asset('frontend/images/top-ctg-w2.png')}}"
                                alt=""
                            />
                        </div>
                        <div
                            class="top-category-link-block d-flex justify-content-between align-items-center offwhite-bg"
                        >
                            <h3 class="heading-three fw-400 color-black">Top Styles</h3>
                            <div class="category-slider-arrow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="54"
                                    height="54"
                                    viewBox="0 0 54 54"
                                    fill="none"
                                >
                                    <path
                                        d="M32.4673 13.3425L46.1248 27L32.4673 40.6575"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.875 27H45.7425"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide top-category-slider-item gray-effect-wrapper"
                >
                    <div class="top-category-card men">
                        <div class="top-category-thumb">
                            <img
                                class="gray-img"
                                src="{{asset('frontend/images/top-ctg-w3.png')}}"
                                alt=""
                            />
                        </div>
                        <div
                            class="top-category-link-block d-flex justify-content-between align-items-center offwhite-bg"
                        >
                            <h3 class="heading-three fw-400 color-black">
                                Make UP Accessories
                            </h3>
                            <div class="category-slider-arrow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="54"
                                    height="54"
                                    viewBox="0 0 54 54"
                                    fill="none"
                                >
                                    <path
                                        d="M32.4673 13.3425L46.1248 27L32.4673 40.6575"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.875 27H45.7425"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide top-category-slider-item gray-effect-wrapper"
                >
                    <div class="top-category-card men">
                        <div class="top-category-thumb">
                            <img
                                class="gray-img"
                                src="{{asset('frontend/images/top-ctg-w4.png')}}"
                                alt=""
                            />
                        </div>
                        <div
                            class="top-category-link-block d-flex justify-content-between align-items-center offwhite-bg"
                        >
                            <h3 class="heading-three fw-400 color-black">
                                Casual Collections
                            </h3>
                            <div class="category-slider-arrow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="54"
                                    height="54"
                                    viewBox="0 0 54 54"
                                    fill="none"
                                >
                                    <path
                                        d="M32.4673 13.3425L46.1248 27L32.4673 40.6575"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.875 27H45.7425"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide top-category-slider-item gray-effect-wrapper"
                >
                    <div class="top-category-card men">
                        <div class="top-category-thumb">
                            <img
                                class="gray-img"
                                src="{{asset('frontend/images/top-ctg-w1.png')}}"
                                alt=""
                            />
                        </div>
                        <div
                            class="top-category-link-block d-flex justify-content-between align-items-center offwhite-bg"
                        >
                            <h3 class="heading-three fw-400 color-black">
                                Casual Collections
                            </h3>
                            <div class="category-slider-arrow">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="54"
                                    height="54"
                                    viewBox="0 0 54 54"
                                    fill="none"
                                >
                                    <path
                                        d="M32.4673 13.3425L46.1248 27L32.4673 40.6575"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.875 27H45.7425"
                                        stroke="#AB7A43"
                                        stroke-width="1.5"
                                        stroke-miterlimit="10"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- =============== TOP CATEGORY SLIDER ENDS =============== -->

    <!-- =============== NEW ITEMS GRID STARTS =============== -->

    <div class="product-grid-slider-area women--items">
        <div class="container-xl">
            <div class="section-top-cta d-flex">
                <h2 class="heading-two fw-700 color-black">What Is New</h2>
                <a
                    href=""
                    class="d-flex align-items-center cs-btn arrow-btn color-black"
                >VIEW ALL
                    <img
                        class="btn-arrow"
                        src="{{asset('frontend/images/arrow-right.png')}}"
                        alt="arrow right"
                    />
                </a>
            </div>
            <div class="swiper productGridSlider product-grid-slider-wrapper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-product-1.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-product-2.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-product-3.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-product-4.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-product-1.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="productgrid-pagination gradient-pagination d-flex justify-content-center"
                ></div>
            </div>
        </div>
    </div>

    <!-- =============== NEW ITEMS GRID STARTS =============== -->

    <!-- =============== DISCOUNT STARTS =============== -->

    <div class="discount-area">
        <div class="container-xl">
            <div class="row discount-content-wrapper g-0">
                <div class="col-md-6">
                    <div class="discount-thumb">
                        <img src="{{asset('frontend/images/women-discount-thumb.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 offwhite-bg d-flex align-items-end">
                    <div class="discount-content">
                        <h3 class="color-black">Flat</h3>
                        <div class="discount-percentage">
                            <p class="color-gradient gradient-dicount">25%</p>

                            <p class="color-black discount-percentage-text">off</p>
                        </div>
                        <h3 class="color-black">
                            Find The Best Accessories For Your Loved Ones.
                        </h3>
                        <a href="" class="cs-btn btn-style-one gradient-bg color-black"
                        >Discover More</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== DISCOUNT ENDS =============== -->

    <!-- =============== FEATURED ACCESORIES STARTS =============== -->

    <div class="product-grid-slider-area women--items featured-accessorries">
        <div class="container-xl">
            <div class="section-top-cta d-flex">
                <h2 class="heading-two fw-700 color-black">Featured Accesories</h2>
                <a
                    href=""
                    class="d-flex align-items-center cs-btn arrow-btn color-black"
                >VIEW ALL
                    <img
                        class="btn-arrow"
                        src="{{asset('frontend/images/arrow-right.png')}}"
                        alt="arrow right"
                    />
                </a>
            </div>
            <div class="swiper productGridSlider product-grid-slider-wrapper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-accessories1.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-accessories2.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-accessories3.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-accessories4.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide product-grid-item">
                        <div class="product-grid-item-thumb position-relative">
                            <div
                                class="w-100 product-card-iconlinks d-flex align-items-center justify-content-between position-absolute"
                            >
                  <span
                      class="pineed-item product-card-icon bg-white d-flex justify-content-center align-items-center"
                  >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="34"
                        height="34"
                        viewBox="0 0 34 34"
                        fill="none"
                    >
                      <mask id="path-1-inside-1_7958_4332" fill="white">
                        <path
                            d="M17.4531 26.9141V30.97C17.4531 31.1953 17.2277 31.4207 17.0024 31.4207C16.7771 31.4207 16.5518 31.1953 16.5518 30.97V26.9141H17.4531Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 26.9141H18.9531V25.4141H17.4531V26.9141ZM16.5518 26.9141V25.4141H15.0518V26.9141H16.5518ZM15.9531 26.9141V30.97H18.9531V26.9141H15.9531ZM15.9531 30.97C15.9531 30.5948 16.1256 30.3452 16.2516 30.2192C16.3776 30.0931 16.6272 29.9207 17.0024 29.9207V32.9207C17.6029 32.9207 18.0779 32.6355 18.3729 32.3405C18.6679 32.0455 18.9531 31.5705 18.9531 30.97H15.9531ZM17.0024 29.9207C17.3776 29.9207 17.6272 30.0931 17.7532 30.2192C17.8793 30.3452 18.0518 30.5948 18.0518 30.97H15.0518C15.0518 31.5705 15.3369 32.0455 15.6319 32.3405C15.9269 32.6355 16.4019 32.9207 17.0024 32.9207V29.9207ZM18.0518 30.97V26.9141H15.0518V30.97H18.0518ZM16.5518 28.4141H17.4531V25.4141H16.5518V28.4141Z"
                          fill="#AB7A43"
                          mask="url(#path-1-inside-1_7958_4332)"
                      />
                      <mask id="path-3-inside-2_7958_4332" fill="white">
                        <path
                            d="M17.4531 3.02756V4.10915H16.5518V3.02756C16.5518 2.75717 16.7771 2.5769 17.0024 2.5769C17.2277 2.5769 17.4531 2.75717 17.4531 3.02756Z"
                        />
                      </mask>
                      <path
                          d="M17.4531 4.10915V5.60915H18.9531V4.10915H17.4531ZM16.5518 4.10915H15.0518V5.60915H16.5518V4.10915ZM15.9531 3.02756V4.10915H18.9531V3.02756H15.9531ZM17.4531 2.60915H16.5518V5.60915H17.4531V2.60915ZM18.0518 4.10915V3.02756H15.0518V4.10915H18.0518ZM18.0518 3.02756C18.0518 3.68139 17.5064 4.0769 17.0024 4.0769V1.0769C16.0478 1.0769 15.0518 1.83295 15.0518 3.02756H18.0518ZM17.0024 4.0769C16.4985 4.0769 15.9531 3.68139 15.9531 3.02756H18.9531C18.9531 1.83295 17.957 1.0769 17.0024 1.0769V4.0769Z"
                          fill="#AB7A43"
                          mask="url(#path-3-inside-2_7958_4332)"
                      />
                      <path
                          d="M13.3592 8.75641L13.3592 8.75643L13.3638 8.75522C14.5498 8.44311 15.4101 7.33379 15.4101 6.09208C15.4101 6.04058 15.4185 5.99919 15.4317 5.96542C15.4444 5.93298 15.4658 5.89638 15.5059 5.85629C15.5591 5.80306 15.6436 5.7605 15.7416 5.7605H18.2653C18.437 5.7605 18.5969 5.92044 18.5969 6.09208C18.5969 6.70502 18.7847 7.26851 19.1525 7.75886C19.5364 8.27069 20.0445 8.57606 20.6186 8.74829L20.6331 8.75265L20.6478 8.75641L24.1325 9.64993C24.191 9.67152 24.2432 9.69994 24.2834 9.73061C24.3277 9.76433 24.3468 9.79226 24.3544 9.80743C24.423 9.94469 24.4168 10.0521 24.4038 10.0911L24.4015 10.098L24.3994 10.105L21.5622 19.2019C21.3847 19.7394 21.373 20.3091 21.5634 20.8379L22.7268 24.8202C22.7269 24.8208 22.7271 24.8213 22.7272 24.8219C22.7605 24.9401 22.7316 25.0323 22.6915 25.0804L22.6658 25.1112L22.6436 25.1445C22.6009 25.2087 22.5183 25.2612 22.4114 25.2612H11.5956C11.5607 25.2612 11.4402 25.2301 11.3155 25.0804C11.2754 25.0323 11.2464 24.9401 11.2798 24.8218C11.2799 24.8213 11.2801 24.8207 11.2802 24.8202L12.447 20.8261C12.6232 20.2883 12.6332 19.7185 12.4411 19.1901L9.6076 10.105L9.60544 10.098L9.60313 10.0911C9.59013 10.0521 9.58395 9.94469 9.65257 9.80744C9.68447 9.74364 9.72928 9.69243 9.85564 9.65476L13.3592 8.75641Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                      />
                    </svg>
                  </span>
                                <span
                                    class="wishlist product-card-icon bg-white d-flex justify-content-center align-items-center"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        viewBox="0 0 30 30"
                        fill="none"
                    >
                      <path
                          d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                            <a href="single-product.html"
                            ><img src="{{asset('frontend/images/w-accessories1.png')}}" alt=""
                                /></a>
                        </div>
                        <div class="product-card-content">
                            <div
                                class="product-info d-flex align-items-center justify-content-between"
                            >
                                <a href="single-product.html"
                                ><p class="text-md color-black">Sweat Pant</p></a
                                >
                                <div
                                    class="card-rating-wrapper d-flex align-items-center gap-1"
                                >
                                    <div class="star-icon">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="17"
                                            height="16"
                                            viewBox="0 0 17 16"
                                            fill="none"
                                        >
                                            <path
                                                d="M9.65327 2.34001L10.8266 4.68668C10.9866 5.01334 11.4133 5.32668 11.7733 5.38668L13.8999 5.74001C15.2599 5.96668 15.5799 6.95334 14.5999 7.92668L12.9466 9.58001C12.6666 9.86001 12.5133 10.4 12.5999 10.7867L13.0733 12.8333C13.4466 14.4533 12.5866 15.08 11.1533 14.2333L9.15994 13.0533C8.79994 12.84 8.20661 12.84 7.83994 13.0533L5.84661 14.2333C4.41994 15.08 3.55327 14.4467 3.92661 12.8333L4.39994 10.7867C4.48661 10.4 4.33327 9.86001 4.05327 9.58001L2.39994 7.92668C1.42661 6.95334 1.73994 5.96668 3.09994 5.74001L5.22661 5.38668C5.57994 5.32668 6.00661 5.01334 6.16661 4.68668L7.33994 2.34001C7.97994 1.06668 9.01994 1.06668 9.65327 2.34001Z"
                                                fill="#141414"
                                            />
                                            <linearGradient
                                                id="pink-gradient"
                                                x1="14.6688"
                                                y1="7.99777"
                                                x2="1.33398"
                                                y2="7.99777"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </svg>
                                    </div>
                                    <p class="text-xs color-gray">4.3</p>
                                </div>
                            </div>
                            <div
                                class="product-add-cart d-flex align-items-center justify-content-between"
                            >
                                <p class="text-lg color-red">£30.00</p>
                                <a
                                    href="#"
                                    class="add-cart-btn d-flex align-items-center gap-1"
                                >
                                    <img
                                        class="add-cart-icon"
                                        src="{{asset('frontend/images/cart-icon.png')}}"
                                        alt=""
                                    />
                                    <p class="color-red">ADD TO CART</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="productgrid-pagination gradient-pagination d-flex justify-content-center"
                ></div>
            </div>
        </div>
    </div>

    <!-- =============== FEATURED ACCESORIES ENDS =============== -->

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
