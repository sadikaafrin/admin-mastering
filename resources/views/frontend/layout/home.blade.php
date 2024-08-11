<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0"/>
    <title>@yield('title')</title>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/vendors/select2/select2.css')}}" />
    <link
        rel="stylesheet"
        href="{{asset('frontend/vendors/swiper-slider/swiper-bundle.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" />

</head>
<body>
<!-- special offer banner -->
<div class="topbar gradient-bg men-landing-page">
    <div class="container-xl">
        <div class="topbar-content-wrapper">
            <p class="color-black text-center fw-700">
                Get 20% Off On Your First Order
            </p>
        </div>
    </div>
    <div class="close--button">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="512"
            height="512"
            x="0"
            y="0"
            viewBox="0 0 329.269 329"
            style="enable-background: new 0 0 512 512"
            xml:space="preserve"
            class=""
        >
          <g>
              <path
                  d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                  fill="#000000"
                  opacity="1"
                  data-original="#000000"
                  class=""
              ></path>
          </g>
        </svg>
    </div>
</div>

<!-- special offer banner -->


<!-- entrance section wrappper -->
<section class="entrance--section--wrapper">
    <!-- header area starts -->
    <div class="entrance--header--wrapper">
        <!-- logo -->
        <div class="logo">
            <img src="{{asset('frontend/images/site-logo.png')}}" alt="" />
        </div>

        <!-- header -->
        <h3 class="heading--title">
            What would you like to view with Fitsyah & Co.?
        </h3>

    </div>
    <!-- header area ends -->

    <!-- SITE ENTRANCE -->
    <div class="site-entrace-wrapper d-flex d-flex align-items-center justify-content-center">
        <div class="container-xl">
            <div class="site-entrance-content-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <a
                            href="{{route('man.collection')}}"
                            class="d-flex align-items-center justify-content-center site-entrance-men site-entrance-block"
                        >
                            <h2 class="heading-two color-white">Men</h2>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a
                            href="{{route('woman.collection')}}"
                            class="d-flex align-items-center justify-content-center site-entrance-women site-entrance-block"
                        >
                            <h2 class="heading-two color-white">WoMen</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SITE ENTRANCE END -->
</section>
<!-- entrance section wrappper -->

{{-- Scripts --}}
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendors/swiper-slider/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendors/select2/select2.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
