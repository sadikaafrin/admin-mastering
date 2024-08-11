@extends('frontend.app')
@section('content')
    <!-- =============== STYLES PAGE BANNER STARTS =============== -->

    <div class="page-banner d-flex align-items-end styles-page-banner">
        <div class="container-xl">
            <div class="banner-content-wrapper">
                <div class="banner-content">
                    <h2 class="heading-two fw-700 color-black mb-2">Styles For You</h2>
                    <p class="text-reg fw-400 color-black">
                        <a class="color-black" href="index.html">Home </a> > Styles
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== STYLES PAGE BANNER ENDS =============== -->

    <!-- =============== TENDING GRID STARTS =============== -->

    <div class="custom-mannequin-area vertical-padding-lg">
        <div class="container-xl">
            <div class="row custom-mannequin-content-wrapper">
                <div class="col-lg-7">
                    <div class="cs-mannequin">
                        <div class="mannequin-tab d-flex justify-content-center">
                            <div class="mannequin-tab-item active cursor-pointer male">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="25"
                                    viewBox="0 0 24 25"
                                    fill="none"
                                >
                                    <path
                                        d="M21.984 1.31641H15.36C14.688 1.31641 14.16 1.84441 14.16 2.51641C14.16 3.18841 14.688 3.71641 15.36 3.71641H19.056L14.64 8.13241C11.232 5.58841 6.38399 5.82841 3.31199 8.90041C-0.0480077 12.2604 -0.0480077 17.7804 3.31199 21.1404C6.67199 24.5004 12.192 24.5004 15.552 21.1404C18.624 18.0684 18.912 13.1724 16.32 9.81241L20.736 5.39641V9.14041C20.736 9.81241 21.264 10.3404 21.936 10.3404C22.608 10.3404 23.136 9.81241 23.136 9.14041V2.51641C23.184 1.84441 22.656 1.31641 21.984 1.31641ZM13.92 19.4604C11.472 21.9084 7.48799 21.9084 5.03999 19.4604C2.59199 17.0124 2.59199 13.0284 5.03999 10.5804C7.48799 8.13241 11.472 8.13241 13.92 10.5804C16.368 13.0284 16.368 17.0124 13.92 19.4604Z"
                                        fill="currentColor"
                                    />
                                </svg>
                                Male
                            </div>
                            <div class="mannequin-tab-item cursor-pointer female">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="25"
                                    viewBox="0 0 24 25"
                                    fill="none"
                                >
                                    <g clip-path="url(#clip0_6016_7364)">
                                        <path
                                            d="M17.6374 14.1019C20.7459 10.9944 20.7459 5.93813 17.6374 2.83065C14.5289 -0.276883 9.47112 -0.276883 6.3626 2.83065C3.25413 5.93813 3.25413 10.9944 6.3626 14.1019C7.67838 15.4172 9.34343 16.1756 11.062 16.3775V19.0457H9.18616C8.66815 19.0457 8.24824 19.4656 8.24824 19.9834C8.24824 20.5012 8.66815 20.921 9.18616 20.921H11.062V23.5623C11.0621 24.0802 11.482 24.5 12 24.5C12.518 24.5 12.9379 24.0802 12.9379 23.5623V20.921H14.8138C15.3319 20.921 15.7518 20.5012 15.7518 19.9834C15.7518 19.4656 15.3319 19.0457 14.8138 19.0457H12.9379V16.3775C14.6566 16.1756 16.3216 15.4172 17.6374 14.1019ZM7.68907 12.7758C5.31199 10.3995 5.31199 6.53298 7.68907 4.15665C10.0661 1.78041 13.9338 1.78027 16.311 4.15665C18.6881 6.53298 18.6881 10.3995 16.311 12.7758C13.9339 15.1521 10.0661 15.1521 7.68907 12.7758Z"
                                            fill="currentColor"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6016_7364">
                                            <rect
                                                width="24"
                                                height="24"
                                                fill="white"
                                                transform="translate(0 0.5)"
                                            />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Female
                            </div>
                        </div>
                        <div class="mannequin-tab-content">
                            <div
                                class="mannequin-single-tab-content active justify-content-center male offwhite-bg"
                            >
                                <img
                                    src="{{asset('frontend/images/mannequin.png')}}"
                                    alt=""
                                    class="mannequin-model"
                                />
                            </div>
                            <div
                                class="mannequin-single-tab-content justify-content-center female offwhite-bg"
                            >
                                <img
                                    src="{{asset('frontend/images/mannequin.female.webp')}}"
                                    alt=""
                                    class="mannequin-model"
                                />
                            </div>
                        </div>
                        <div class="mannequin-customizer-btn-wrapper">
                            <div
                                class="mannequin-customizer-btn d-flex justify-content-center"
                            >
                  <span
                      class="mannequin-customizer-opener cs-btn btn-style-one cursor-pointer w-100 text-center"
                  >Customize your mannequin</span
                  >
                            </div>
                            <div
                                class="mannequin-customizer-form-wrapper align-items-center justify-content-center"
                            >
                                <div class="mannequin-customizer-form bg-white">
                                    <form action="">
                                        <div
                                            class="mannequin-form-heading d-flex align-items-center justify-content-between"
                                        >
                                            <h2 class="heading-two color-gray fw-700">
                                                Edit Your Mannequin
                                            </h2>
                                            <i
                                                class="mannequin-customizer-close fa-solid fa-xmark color-gray cursor-pointer"
                                            ></i>
                                        </div>
                                        <div class="mannequin-form-fields-wrapper">
                                            <div
                                                class="mannequin-form-field-row d-grid measurement-unit-wrapper"
                                            >
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Measurement Unit</span
                            >
                                                </div>
                                                <div
                                                    class="mannequin-form-field checkbox-style-pri d-flex gap-4"
                                                >
                                                    <input
                                                        type="radio"
                                                        name="measure_unite"
                                                        id="measure_unit_cm"
                                                    />
                                                    <label class="color-black" for="measure_unit_cm"
                                                    >cm</label
                                                    >
                                                    <input
                                                        type="radio"
                                                        name="measure_unite"
                                                        id="measure_unit_inch"
                                                    />
                                                    <label class="color-black" for="measure_unit_inch"
                                                    >Inches</label
                                                    >
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Bust</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Waist</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Hips</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Neck</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Chest</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Shoulder</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Sleeve</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Shoulder To Waist</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mannequin-form-field-row d-grid">
                                                <div
                                                    class="mannequin-form-field-label d-flex align-items-center"
                                                >
                            <span class="color-black text-md form-label"
                            >Shoulder To Floor</span
                            >
                                                </div>
                                                <div class="mannequin-form-field">
                                                    <input
                                                        class="w-100 mannequin-input-field"
                                                        type="text"
                                                        placeholder="Input Size"
                                                    />
                                                </div>
                                            </div>
                                            <div
                                                class="mannequin-form-field-row submit-btn-field text-center"
                                            >
                                                <button type="submit" class="cs-btn btn-style-one">
                                                    Save & Continue
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="mannequin-try-products-wrapper">
                        <h2 class="heading-two color-black fw-700 mb-4">
                            Try On Products
                        </h2>
                        <div class="mannequin-try-accordion-wrapper">
                            <div class="border-accordion product-accordion">
                                <div class="accordion-btn position-relative cursor-pointer">
                                    <p class="text-lg color-black">Upper Sides</p>
                                    <div class="info-arrow-icon position-absolute">
                                        <i class="color-gray fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div
                                    class="mannequin-try-product-row accordion-body offwhitelight-bg"
                                >
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                            </div>
                            <div class="border-accordion product-accordion">
                                <div class="accordion-btn position-relative cursor-pointer">
                                    <p class="text-lg color-black">Lower Sides</p>
                                    <div class="info-arrow-icon position-absolute">
                                        <i class="color-gray fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div
                                    class="mannequin-try-product-row accordion-body offwhitelight-bg"
                                >
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                            </div>
                            <div class="border-accordion product-accordion">
                                <div class="accordion-btn position-relative cursor-pointer">
                                    <p class="text-lg color-black">Accessories</p>
                                    <div class="info-arrow-icon position-absolute">
                                        <i class="color-gray fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div
                                    class="mannequin-try-product-row accordion-body offwhitelight-bg"
                                >
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                                    <div class="style-product-variation mannequin-try d-flex">
                                        <div class="style-product-variation-thumb">
                                            <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                                        </div>
                                        <div
                                            class="style-product-variation-content d-flex flex-column justify-content-between"
                                        >
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-lg color-gray">Sweat Pant</p>
                                                <p class="text-md color-red fw-700">Show Demo</p>
                                            </div>
                                            <div
                                                class="style-product-variation-row d-flex align-items-center justify-content-between"
                                            >
                                                <p class="text-md color-red fw-700">£30.00</p>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== TRENDING GRID ENDS =============== -->
@endsection
