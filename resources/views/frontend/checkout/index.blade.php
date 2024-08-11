@extends('frontend.app')
@section('content')
    <!-- =============== CHECKOUT FROM STARTS =============== -->

    <div class="checkout-area">
        <div class="container-xl">
            <form>
                <div class="cs-form-card mx-auto">
                    <h2
                        class="heading-two color-gray fw-400 text-center mb-lg-5 mb-4 hide-last-step"
                    >
                        Checkout
                    </h2>
                    <div class="cs-form-primay checkout-form">
                        <div
                            class="checkout-steps-wrapper justify-content-center hide-last-step"
                        >
                            <div class="checkout-step checkout-step1 active">
                                <div
                                    class="checkout-step-number mx-auto d-flex align-items-center justify-content-center mb-2"
                                >
                                    <h3 class="heading-three color-gray fw-700 mb-2">1</h3>
                                </div>
                                <p class="text-md color-gray text-center">Shipping Details</p>
                            </div>
                            <div class="checkout-step-divider"></div>
                            <div class="checkout-step checkout-step2">
                                <div
                                    class="checkout-step-number mx-auto d-flex align-items-center justify-content-center mb-2"
                                >
                                    <h3 class="heading-three color-gray fw-700 mb-2">2</h3>
                                </div>
                                <p class="text-md color-gray text-center">Final Preview</p>
                            </div>
                        </div>
                        <div
                            class="checkout-step-fields-wrapper step-shipping-details active hide-last-step"
                        >
                            <div class="form-field-row mb-lg-4 mb-3">
                                <label class="semi-black fw-700 mb-2">Full Name</label>
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Jone Doe"
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
                                <p class="semi-black fw-700 mb-2">Address</p>
                                <div class="checkout-address-dropdown">
                                    <div
                                        class="address-dropdown-content-wrapper position-relative"
                                    >
                                        <div
                                            class="address-dropdown-opener d-flex align-items-center justify-content-between cursor-pointer"
                                        >
                                            <p class="color-white text-reg">Choose your address</p>
                                            <i class="color-white fa-solid fa-chevron-down"></i>
                                        </div>
                                        <div
                                            class="address-dorpdown-content white-bg popup-container"
                                        >
                                            <div class="checkout-address-wrapper">
                                                <div
                                                    class="address-field-row d-flex align-items-end semi-black fw-700"
                                                >
                                                    <span class="d-block">Home</span>

                                                    <p>Military Road, Northampton, NN1 3EE</p>
                                                </div>
                                                <div
                                                    class="address-field-row d-flex align-items-end semi-black fw-700"
                                                >
                                                    <span class="d-block">Office</span>

                                                    <p>Military Road, Northampton, NN1 3EE</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Address Title"
                                />
                            </div>
                            <div class="form-field-row postal--code mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Search Your Post Code"
                                />

                                <a href="#" class="search--btn">
                                    <span>Search</span>
                                </a>
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Address Line 1"
                                />
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Address Line 2"
                                />
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="City"
                                />
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Country"
                                />
                            </div>
                            <div class="form-field-row mb-lg-4 mb-3">
                                <input
                                    class="cs-form-input-field"
                                    type="text"
                                    placeholder="Post Code"
                                />
                            </div>
                            <div class="checkout-button-wrapper">
                                <input
                                    class="w-100 cs-btn btn-style-one checkout-step-btn"
                                    type="button"
                                    value="Submit & Continue"
                                />
                            </div>
                        </div>
                        <div
                            class="checkout-step-fields-wrapper step-payment-proceed hide-last-step"
                        >
                            <div class="shipping-details product-review-block">
                                <h3 class="heading-three fw-700 color-black mb-lg-5 mb-4">
                                    1. Shipping Address
                                </h3>
                                <div class="shipping-address-block mb-4">
                                    <p class="text-md fw-700 color-black mb-2">Nasib Hasan</p>
                                    <p class="text-reg color-black">Flat 3, Military Court</p>
                                    <p class="text-reg color-black">
                                        Military Road, Northampton, NN1 3EE
                                    </p>
                                </div>
                                <div class="shipping-address-block mb-4">
                                    <p class="text-md fw-700 color-black mb-2">Phone</p>
                                    <p class="text-reg color-black">+789 456 1230</p>
                                </div>
                                <div class="shipping-address-block">
                                    <p class="text-md fw-700 color-black mb-2">Email</p>
                                    <p class="text-reg color-black">youremail@email.com</p>
                                </div>
                            </div>
                            <div class="product-summary product-review-block">
                                <h3 class="heading-three fw-700 color-black mb-lg-5 mb-4">
                                    1. Product Summary
                                </h3>
                                <div class="summary-product-row-wrapper">
                                    <div class="summary-product-row d-flex">
                                        <div
                                            class="summary-product-left d-flex align-items-center gap-3"
                                        >
                                            <img
                                                class="summary-product-thumb"
                                                src="{{asset('frontend/images/wishlist-product-1.png')}}"
                                                alt=""
                                            />
                                            <p class="text-reg color-black summary-product-title">
                                                hush Love Heart Cubic Zirconia Huggie Hoop Earrings,
                                                Gold/Pink
                                            </p>
                                        </div>
                                        <div
                                            class="summary-product-right d-flex align-items-center justify-content-between"
                                        >
                                            <p
                                                class="text-md fw-700 color-black summary-product-quantity"
                                            >
                                                x1
                                            </p>
                                            <p
                                                class="text-lg fw-700 color-black summary-product-price"
                                            >
                                                £36.00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="summary-product-row d-flex">
                                        <div
                                            class="summary-product-left d-flex align-items-center gap-3"
                                        >
                                            <img
                                                class="summary-product-thumb"
                                                src="{{asset('frontend/images/wishlist-product-1.png')}}"
                                                alt=""
                                            />
                                            <p class="text-reg color-black summary-product-title">
                                                hush Love Heart Cubic Zirconia Huggie Hoop Earrings,
                                                Gold/Pink
                                            </p>
                                        </div>
                                        <div
                                            class="summary-product-right d-flex align-items-center justify-content-between"
                                        >
                                            <p
                                                class="text-md fw-700 color-black summary-product-quantity"
                                            >
                                                x1
                                            </p>
                                            <p
                                                class="text-lg fw-700 color-black summary-product-price"
                                            >
                                                £36.00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="summary-product-row d-flex">
                                        <div
                                            class="summary-product-left d-flex align-items-center gap-3"
                                        >
                                            <img
                                                class="summary-product-thumb"
                                                src="{{asset('frontend/images/wishlist-product-1.png')}}"
                                                alt=""
                                            />
                                            <p class="text-reg color-black summary-product-title">
                                                hush Love Heart Cubic Zirconia Huggie Hoop Earrings,
                                                Gold/Pink
                                            </p>
                                        </div>
                                        <div
                                            class="summary-product-right d-flex align-items-center justify-content-between"
                                        >
                                            <p
                                                class="text-md fw-700 color-black summary-product-quantity"
                                            >
                                                x1
                                            </p>
                                            <p
                                                class="text-lg fw-700 color-black summary-product-price"
                                            >
                                                £36.00
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-voucher product-review-block">
                                <h3 class="heading-three fw-700 color-black mb-lg-5 mb-4">
                                    3. Apply Voucher
                                </h3>
                                <div class="voucher-apply-form-wrapper mb-lg-5 mb-4">
                                    <form action="" class="voucher-apply-form">
                                        <div class="voucher-apply-form-fields d-flex">
                                            <input
                                                type="text"
                                                class="voucher-input-field"
                                                placeholder="Your Voucher"
                                            />
                                            <button type="submit" class="cs-btn btn-style-one">
                                                Apply Voucher
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <h3 class="heading-three fw-700 color-black mb-lg-5 mb-4">
                                    3. Available Vouchers
                                </h3>
                                <div class="available-vouchers-wrapper">
                                    <div
                                        class="voucher-wrapper d-flex align-items-center justify-content-between gap-3"
                                    >
                                        <p class="text-reg color-gray voucher-code">AB1234545</p>
                                        <p class="text-reg color-gray">Get <b>£1 OFF!</b></p>
                                        <span class="vourcher-copyier cursor-pointer">
                        <img src="{{asset('frontend/images/copy.png')}}" alt="" />
                      </span>
                                    </div>
                                    <div
                                        class="voucher-wrapper d-flex align-items-center justify-content-between gap-3"
                                    >
                                        <p class="text-reg color-gray voucher-code">AB1234546</p>
                                        <p class="text-reg color-gray">Get <b>£1 OFF!</b></p>
                                        <span class="vourcher-copyier cursor-pointer">
                        <img src="{{asset('frontend/images/copy.png')}}" alt="" />
                      </span>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-summary product-review-block">
                                <h3 class="heading-three fw-700 color-black mb-lg-5 mb-4">
                                    4. Payment Summary
                                </h3>
                                <div class="payment-summary-wrapper">
                                    <div
                                        class="price-text-row mb-lg-3 mb-2 d-flex justify-content-between"
                                    >
                                        <p class="text-md fw-600 color-black">Sub total</p>
                                        <p class="text-md fw-700 color-black"><b>£3666.00</b></p>
                                    </div>
                                    <div
                                        class="price-text-row mb-lg-3 mb-2 d-flex justify-content-between"
                                    >
                                        <p class="text-md fw-600 color-black">Coupon Discount</p>
                                        <p class="text-md fw-700 color-black"><b>£00.00</b></p>
                                    </div>
                                    <div
                                        class="price-text-row mb-lg-3 mb-2 d-flex justify-content-between"
                                    >
                                        <p class="text-md fw-600 color-black">Delivery Charge</p>
                                        <p class="text-md fw-700 color-black"><b>£36.00</b></p>
                                    </div>
                                </div>
                                <div
                                    class="price-text-row total-price d-flex justify-content-between"
                                >
                                    <p class="text-md fw-600 color-black">Delivery Charge</p>
                                    <p class="text-md fw-700 color-black"><b>£36.00</b></p>
                                </div>
                            </div>
                            <div class="checkout-button-wrapper">
                                <input
                                    class="w-100 cs-btn btn-style-one checkout-step-btn"
                                    type="button"
                                    value="Proceed to Pay"
                                />
                            </div>
                        </div>
                        <div class="checkout-step-fields-wrapper step-payment-method">
                            <div class="payment-details">
                                <h2
                                    class="heading-two color-gray fw-400 text-center mb-lg-5 mb-4"
                                >
                                    Payment
                                </h2>
                                <h3 class="heading-three color-black fw-700 text-center">
                                    Choose your payment option
                                </h3>
                                <div class="payment-methods-wrapper">
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">12** **** **25</p>
                                        <input
                                            type="radio"
                                            name="payment_method"
                                            id="payment_visa1"
                                        />
                                        <label for="payment_visa1"></label>
                                    </div>
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">12** **** **25</p>
                                        <input
                                            type="radio"
                                            name="payment_method"
                                            id="payment_visa2"
                                        />
                                        <label for="payment_visa2"></label>
                                    </div>
                                    <div
                                        class="single-payment-method position-relative d-flex align-items-center gap-3"
                                    >
                                        <img
                                            src="{{asset('frontend/images/visa.png')}}"
                                            alt=""
                                            class="payment-method-img"
                                        />
                                        <p class="text-md fw-700 color-gray">12** **** **25</p>
                                        <input
                                            type="radio"
                                            name="payment_method"
                                            id="payment_visa3"
                                        />
                                        <label for="payment_visa3"></label>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="checkout-button-wrapper d-flex align-items-center gap-2 no-color"
                            >
                                <input
                                    class="w-100 cs-btn btn-style-one"
                                    type="button"
                                    value="+ Add New Payment Option"
                                />
                                <button
                                    type="submit"
                                    class="w-100 cs-btn btn-style-one checkout-step-btn apple-pay"
                                >
                                    <span>Pay with your</span>
                                    <img src="{{asset('frontend/images/apple-pay.png')}}" alt="" />
                                </button>
                            </div>
                            <div class="checkout-button-wrapper mt-4 no-color">
                                <input
                                    class="w-100 cs-btn btn-style-one checkout-step-btn"
                                    type="button"
                                    value="Pay £3275.00 "
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- =============== CHECKOUT FROM ENDS =============== -->
@endsection
