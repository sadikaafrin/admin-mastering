@extends('frontend.app')
@section('content')
    <!-- =============== REVIEWS STARTS =============== -->

    <div class="reviews-wrapper">
        <div class="container-xl">
            <div class="reviews-content-wrapper men--items bg-white">
                <div
                    class="review-head d-flex align-items-center justify-content-between mb-lg-5 mb-4"
                >
                    <h3 class="heading-three fw-700 color-black">Reviews</h3>
                    <span class="review-close text-reg color-black cursor-pointer"
                    >x</span
                    >
                </div>
                <div class="review-body">
                    <div class="review-title mb-lg-5 mb-4">
                        <h3
                            class="heading-three fw-700 color-black text-uppercase d-flex align-items-center gap-2 mb-2"
                        >
                            Reviews
                            <span class="avg-rating d-flex align-items-center gap-1">
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                  >
                    <path
                        d="M9.87775 2.07196C10.231 0.984807 11.769 0.984809 12.1222 2.07195L13.515 6.3584C13.8068 7.25661 14.6439 7.86475 15.5883 7.86475H20.0953C21.2384 7.86475 21.7137 9.32749 20.7889 9.99938L17.1427 12.6486C16.3786 13.2037 16.0589 14.1877 16.3507 15.0859L17.7435 19.3723C18.0967 20.4595 16.8524 21.3635 15.9276 20.6916L12.2814 18.0424C11.5173 17.4873 10.4827 17.4873 9.71863 18.0424L6.07236 20.6916C5.14758 21.3635 3.90329 20.4595 4.25652 19.3723L5.64928 15.0859C5.94112 14.1877 5.62141 13.2037 4.85734 12.6486L1.21108 9.99939C0.286293 9.32749 0.761569 7.86475 1.90466 7.86475H6.4117C7.35613 7.86475 8.19316 7.25661 8.485 6.3584L9.87775 2.07196Z"
                        fill="url(#paint0_linear_6006_3202)"
                        stroke="black"
                    />
                    <defs>
                      <linearGradient
                          id="paint0_linear_6006_3202"
                          x1="26"
                          y1="12"
                          x2="-4"
                          y2="12"
                          gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#FFADF9" />
                        <stop offset="1" stop-color="#FCF6B2" />
                      </linearGradient>
                    </defs>
                  </svg>
                  4.8
                </span>
                        </h3>
                        <p class="text-reg color-gray">
                            Total <span class="total-review-no">21,856</span>
                        </p>
                    </div>
                    <div class="rating-bars d-flex flex-column gap-2 mb-5">
                        <div
                            class="rating-row d-flex align-items-center gap-3 justify-content-between"
                        >
                            <div class="rating-no">
                                <p class="text-md fw-700 color-gray">
                                    5 Star
                                    <span class="rating-count d-inline-block ms-2">(489)</span>
                                </p>
                            </div>
                            <div class="rating-bar position-relative">
                                <div
                                    class="rating-bar-fill fivestar-bar-fill gradient-bg position-absolute"
                                ></div>
                            </div>
                        </div>
                        <div
                            class="rating-row d-flex align-items-center gap-3 justify-content-between"
                        >
                            <div class="rating-no">
                                <p class="text-md fw-700 color-gray">
                                    4 Star
                                    <span class="rating-count d-inline-block ms-2">(289)</span>
                                </p>
                            </div>
                            <div class="rating-bar position-relative">
                                <div
                                    class="rating-bar-fill fourstar-bar-fill gradient-bg position-absolute"
                                ></div>
                            </div>
                        </div>
                        <div
                            class="rating-row d-flex align-items-center gap-3 justify-content-between"
                        >
                            <div class="rating-no">
                                <p class="text-md fw-700 color-gray">
                                    3 Star
                                    <span class="rating-count d-inline-block ms-2">(189)</span>
                                </p>
                            </div>
                            <div class="rating-bar position-relative">
                                <div
                                    class="rating-bar-fill threestar-bar-fill gradient-bg position-absolute"
                                ></div>
                            </div>
                        </div>
                        <div
                            class="rating-row d-flex align-items-center gap-3 justify-content-between"
                        >
                            <div class="rating-no">
                                <p class="text-md fw-700 color-gray">
                                    2 Star
                                    <span class="rating-count d-inline-block ms-2">(89)</span>
                                </p>
                            </div>
                            <div class="rating-bar position-relative">
                                <div
                                    class="rating-bar-fill twostar-bar-fill gradient-bg position-absolute"
                                ></div>
                            </div>
                        </div>
                        <div
                            class="rating-row d-flex align-items-center gap-3 justify-content-between"
                        >
                            <div class="rating-no">
                                <p class="text-md fw-700 color-gray">
                                    1 Star
                                    <span class="rating-count d-inline-block ms-2">(9)</span>
                                </p>
                            </div>
                            <div class="rating-bar position-relative">
                                <div
                                    class="rating-bar-fill onestar-bar-fill gradient-bg position-absolute"
                                ></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-between mb-lg-5 mb-4"
                    >
                        <h3 class="heading-three fw-700 color-black text-uppercase">
                            All reviews
                        </h3>
                        <div
                            class="review-filter-wrapper d-flex align-items-center gap-2 cursor-pointer"
                        >
                            <p class="color-gray text-reg text-uppercase">Filter</p>
                            <img src="{{asset('frontend/images/filter-icon.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="review-blocks-wrapper d-grid mb-lg-5 mb-4">
                        <div class="review-block">
                            <div class="user-info d-flex align-items-center gap-3">
                                <div class="user-avatar">
                                    <img src="{{asset('frontend/images/user-avatar.png')}}" alt="" />
                                </div>
                                <div class="user-details">
                                    <p class="text-md color-black fw-700">RICARDS M.</p>
                                    <p class="text-reg fw-700 color-gray">
                                        Small-Business(50 or fewer emp.)
                                    </p>
                                </div>
                            </div>
                            <div
                                class="user-rating-wrapper d-flex align-items-center gap-3"
                            >
                                <div class="user-rating">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="user-review-time">
                                    <p class="text-reg color-gray">Nov 21, 2023</p>
                                </div>
                            </div>
                            <div class="user-review">
                                <h3 class="my-4 heading-three color-black fw-700">
                                    "Overall great quality service. Got what I was looking for!"
                                </h3>
                                <p class="text-reg color-black">
                                    What I like best about Smartproxy is its impressive proxy
                                    network. The extensive and diverse range of proxy servers
                                    across various locations ensures reliable and high-speed
                                    connections. This has been crucial for my work, as it allows
                                    me to access geographically restricted content and conduct
                                    market research seamlessly.
                                </p>

                                <p class="text-reg color-black">
                                    Smartproxy's pricing, while competitive, might be on the
                                    higher side for some individual users or small businesses
                                    with budget constraints. Exploring more flexible pricing
                                    options or introductory plans could make the service even
                                    more accessible to a wider audience.
                                </p>
                            </div>
                        </div>
                        <div class="review-block">
                            <div class="user-info d-flex align-items-center gap-3">
                                <div class="user-avatar">
                                    <img src="{{asset('frontend/images/user-avatar.png')}}" alt="" />
                                </div>
                                <div class="user-details">
                                    <p class="text-md color-black fw-700">RICARDS M.</p>
                                    <p class="text-reg fw-700 color-gray">
                                        Small-Business(50 or fewer emp.)
                                    </p>
                                </div>
                            </div>
                            <div
                                class="user-rating-wrapper d-flex align-items-center gap-3"
                            >
                                <div class="user-rating">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="user-review-time">
                                    <p class="text-reg color-gray">Nov 21, 2023</p>
                                </div>
                            </div>
                            <div class="user-review">
                                <h3 class="my-4 heading-three color-black fw-700">
                                    "Overall great quality service. Got what I was looking for!"
                                </h3>
                                <p class="text-reg color-black">
                                    What I like best about Smartproxy is its impressive proxy
                                    network. The extensive and diverse range of proxy servers
                                    across various locations ensures reliable and high-speed
                                    connections. This has been crucial for my work, as it allows
                                    me to access geographically restricted content and conduct
                                    market research seamlessly.
                                </p>

                                <p class="text-reg color-black">
                                    Smartproxy's pricing, while competitive, might be on the
                                    higher side for some individual users or small businesses
                                    with budget constraints. Exploring more flexible pricing
                                    options or introductory plans could make the service even
                                    more accessible to a wider audience.
                                </p>
                            </div>
                        </div>
                        <div class="review-block">
                            <div class="user-info d-flex align-items-center gap-3">
                                <div class="user-avatar">
                                    <img src="{{asset('frontend/images/user-avatar.png')}}" alt="" />
                                </div>
                                <div class="user-details">
                                    <p class="text-md color-black fw-700">RICARDS M.</p>
                                    <p class="text-reg fw-700 color-gray">
                                        Small-Business(50 or fewer emp.)
                                    </p>
                                </div>
                            </div>
                            <div
                                class="user-rating-wrapper d-flex align-items-center gap-3"
                            >
                                <div class="user-rating">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="user-review-time">
                                    <p class="text-reg color-gray">Nov 21, 2023</p>
                                </div>
                            </div>
                            <div class="user-review">
                                <h3 class="my-4 heading-three color-black fw-700">
                                    "Overall great quality service. Got what I was looking for!"
                                </h3>
                                <p class="text-reg color-black">
                                    What I like best about Smartproxy is its impressive proxy
                                    network. The extensive and diverse range of proxy servers
                                    across various locations ensures reliable and high-speed
                                    connections. This has been crucial for my work, as it allows
                                    me to access geographically restricted content and conduct
                                    market research seamlessly.
                                </p>

                                <p class="text-reg color-black">
                                    Smartproxy's pricing, while competitive, might be on the
                                    higher side for some individual users or small businesses
                                    with budget constraints. Exploring more flexible pricing
                                    options or introductory plans could make the service even
                                    more accessible to a wider audience.
                                </p>
                            </div>
                        </div>
                        <div class="review-block">
                            <div class="user-info d-flex align-items-center gap-3">
                                <div class="user-avatar">
                                    <img src="{{asset('frontend/images/user-avatar.png')}}" alt="" />
                                </div>
                                <div class="user-details">
                                    <p class="text-md color-black fw-700">RICARDS M.</p>
                                    <p class="text-reg fw-700 color-gray">
                                        Small-Business(50 or fewer emp.)
                                    </p>
                                </div>
                            </div>
                            <div
                                class="user-rating-wrapper d-flex align-items-center gap-3"
                            >
                                <div class="user-rating">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="25"
                                        height="23"
                                        viewBox="0 0 25 23"
                                        fill="none"
                                    >
                                        <path
                                            d="M14.0027 2.00671C13.5297 0.551033 11.4703 0.551039 10.9973 2.00671L9.23601 7.4275C9.15836 7.66647 8.93567 7.82827 8.68439 7.82827H2.98463C1.45405 7.82827 0.81767 9.78687 2.05594 10.6865L6.66714 14.0368C6.87042 14.1844 6.95548 14.4462 6.87783 14.6852L5.11651 20.106C4.64354 21.5617 6.30962 22.7722 7.54788 21.8725L12.1591 18.5223C12.3624 18.3746 12.6376 18.3746 12.8409 18.5223L17.4521 21.8725C18.6904 22.7722 20.3565 21.5617 19.8835 20.106L18.1222 14.6852C18.0445 14.4462 18.1296 14.1844 18.3329 14.0368L22.9441 10.6865C24.1823 9.78686 23.5459 7.82827 22.0154 7.82827H16.3156C16.0643 7.82827 15.8416 7.66647 15.764 7.4275L14.0027 2.00671Z"
                                            fill="url(#paint0_linear_9036_690)"
                                            stroke="black"
                                        />
                                        <defs>
                                            <linearGradient
                                                id="paint0_linear_9036_690"
                                                x1="26"
                                                y1="12.5"
                                                x2="-1"
                                                y2="12.5"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#FFADF9" />
                                                <stop offset="1" stop-color="#FCF6B2" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="user-review-time">
                                    <p class="text-reg color-gray">Nov 21, 2023</p>
                                </div>
                            </div>
                            <div class="user-review">
                                <h3 class="my-4 heading-three color-black fw-700">
                                    "Overall great quality service. Got what I was looking for!"
                                </h3>
                                <p class="text-reg color-black">
                                    What I like best about Smartproxy is its impressive proxy
                                    network. The extensive and diverse range of proxy servers
                                    across various locations ensures reliable and high-speed
                                    connections. This has been crucial for my work, as it allows
                                    me to access geographically restricted content and conduct
                                    market research seamlessly.
                                </p>

                                <p class="text-reg color-black">
                                    Smartproxy's pricing, while competitive, might be on the
                                    higher side for some individual users or small businesses
                                    with budget constraints. Exploring more flexible pricing
                                    options or introductory plans could make the service even
                                    more accessible to a wider audience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="more-review-btn d-flex justify-content-center">
                        <a href="" class="cs-btn btn-style-one">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== REVIEWS ENDS =============== -->

    <!-- =============== SINGLE PRODUCT DETAILS STARTS =============== -->

    <div class="product-details vertical-padding">
        <div class="container-xl">
            <div class="row product-details-wrapper align-items-start">
                <div class="col-md-6">
                    <div class="single-productview-slider2 swiper mb-3">
                        <div class="swiper-wrapper">
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/w-product-1.png')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/productview1.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/productview2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/w-product-1.png')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/productview1.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center"
                            >
                                <img src="{{asset('frontend/images/productview2.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="single-productview-slider swiper">
                        <div class="swiper-wrapper">
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/w-product-1.png')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/productview1.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/productview2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/w-product-1.png')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/productview1.jpg')}}" alt="" />
                            </div>
                            <div
                                class="single-productview-slider-items swiper-slide d-flex justify-content-center cursor-pointer"
                            >
                                <img src="{{asset('frontend/images/productview2.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-productview-right men--items d-flex flex-column">
                        <!-- PRODUCT TITLE WRAPPER -->

                        <div
                            class="single-productview-title-wrapper d-flex justify-content-between gap-lg-5 gap-3"
                        >
                            <div
                                class="single-productview-content-wrapper d-flex flex-column gap-4"
                            >
                                <div
                                    class="single-productview-content d-flex align-items-center gap-3 position-relative"
                                >
                                    <h2 class="heading-two fw-700 color-black">
                                        Sudaderas con cremallera
                                    </h2>
                                    <div
                                        class="card-rating-wrapper d-flex align-items-center gap-1 position-absolute"
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
                                        <p
                                            class="text-xs color-gray cursor-pointer text-underline review-open"
                                        >
                                            4.3 (160)
                                        </p>
                                    </div>
                                </div>
                                <h3 class="heading-three color-black">£160.00</h3>
                            </div>
                            <div
                                class="single-product-quicklinks-wrapper d-flex flex-column gap-4"
                            >
                  <span class="single-product-quicklink cursor-pointer">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="35"
                        height="34"
                        viewBox="0 0 35 34"
                        fill="none"
                    >
                      <path
                          d="M8.94067 9.97314C10.9098 7.13981 14.0407 5.18481 17.6532 4.78814"
                          stroke="#AB7A43"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M17.7242 29.0557C14.1259 28.6873 10.9951 26.7607 9.01172 23.9557"
                          stroke="#AB7A43"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M11.1084 16.9152C11.1084 14.7401 9.3451 12.9768 7.17002 12.9768C4.99494 12.9768 3.23169 14.7401 3.23169 16.9152C3.23169 19.0903 4.99494 20.8535 7.17002 20.8535C9.3451 20.8535 11.1084 19.0903 11.1084 16.9152Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M28.4199 27.1574C28.4199 24.9823 26.6566 23.219 24.4815 23.219C22.3065 23.219 20.5432 24.9823 20.5432 27.1574C20.5432 29.3325 22.3065 31.0957 24.4815 31.0957C26.6566 31.0957 28.4199 29.3325 28.4199 27.1574Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                      <path
                          d="M28.4199 6.84243C28.4199 4.66735 26.6566 2.90409 24.4815 2.90409C22.3065 2.90409 20.5432 4.66735 20.5432 6.84243C20.5432 9.01751 22.3065 10.7808 24.4815 10.7808C26.6566 10.7808 28.4199 9.01751 28.4199 6.84243Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                                <span
                                    class="single-product-quicklink cursor-pointer wishlist"
                                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="31"
                        height="30"
                        viewBox="0 0 31 30"
                        fill="none"
                    >
                      <path
                          d="M15.975 26.0125C15.55 26.1625 14.85 26.1625 14.425 26.0125C10.8 24.775 2.69995 19.6125 2.69995 10.8625C2.69995 7 5.81245 3.875 9.64995 3.875C11.925 3.875 13.9375 4.975 15.2 6.675C16.4625 4.975 18.4875 3.875 20.75 3.875C24.5875 3.875 27.7 7 27.7 10.8625C27.7 19.6125 19.6 24.775 15.975 26.0125Z"
                          stroke="#AB7A43"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                            </div>
                        </div>

                        <!-- PRODUCT COLORS WRAPPER -->
                        <div class="product-colors-wrapper">
                            <h4 class="text-md fw-700 color-black mb-3">Choose Color</h4>
                            <div class="product-color-options-wrapper d-flex gap-3">
                                <div class="product-color-option cursor-pointer">
                                    <img src="{{asset('frontend/images/product-color-demo.png')}}" alt="" />
                                    <p class="color-black text-xs text-center">Key Black</p>
                                </div>
                                <div class="product-color-option cursor-pointer">
                                    <img src="{{asset('frontend/images/product-color-demo.png')}}" alt="" />
                                    <p class="color-black text-xs text-center">Foil Black</p>
                                </div>
                            </div>
                        </div>

                        <!-- PRODUCT SIZE WRAPPER -->
                        <div class="product-size-wrapper">
                            <h4 class="text-md fw-700 color-black mb-3">Choose Size</h4>
                            <div class="product-size-options-wrapper">
                                <div class="product-size-list d-flex gap-lg-4 gap-2">
                                    <span class="active">XS</span>
                                    <span>S</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>XL</span>
                                    <span>XXL</span>
                                </div>
                            </div>
                        </div>

                        <!-- PRODUCT QUANTITY WRAPPER -->
                        <div class="product-quantity-wrapper">
                            <h4 class="text-md fw-700 color-black mb-3">Quantity</h4>
                            <div
                                class="product-quantity-options-wrapper d-flex align-items-center gap-2"
                            >
                                <a href="" class="product-decrement-btn text-lg color-gray"
                                >-</a
                                >
                                <div class="product-quantity-number-wrapper">
                                    <input
                                        class="text-center"
                                        id="product-quantity"
                                        type="text"
                                        value="1"
                                    />
                                </div>
                                <a href="" class="product-increment-btn text-lg color-gray"
                                >+</a
                                >
                            </div>
                        </div>

                        <!-- PRODUCT BUTTNON WRAPPER -->
                        <div class="product-singleview-addcartbtn-wrapper d-flex gap-3">
                            <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                            <a href="" class="cs-btn btn-style-one style-alternative"
                            >Add For mannequin +
                            </a>
                        </div>

                        <!-- PRODUCT ADDITIONAL INFO WRAPPER -->
                        <div
                            class="singleview-additional-info-wrapper d-flex flex-column gap-4"
                        >
                            <div class="singleview-additional-info product-accordion">
                                <div class="accordion-btn position-relative cursor-pointer">
                                    <p class="text-reg color-gray fw-700">
                                        Product Description
                                    </p>
                                    <div class="info-arrow-icon position-absolute">
                                        <i class="color-gray fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div
                                    class="singleview-info-details accordion-body offwhitelight-bg"
                                >
                                    <p class="p-reg color-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nulla cursus risus eget arcu vestibulum condimentum.
                                        Mauris nunc erat, sollicitudin ac odio lobortis, vulputate
                                        pulvinar urna. Aliquam ornare sed risus at ultrices.
                                        Aliquam vitae ipsum vitae ligula facilisis ultrices eu
                                        vitae orci.
                                    </p>
                                </div>
                            </div>
                            <div class="singleview-additional-info product-accordion">
                                <div class="accordion-btn position-relative cursor-pointer">
                                    <p class="text-reg color-gray fw-700">Size Guides</p>
                                    <div class="info-arrow-icon position-absolute">
                                        <i class="color-gray fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div
                                    class="singleview-info-details accordion-body offwhitelight-bg"
                                >
                                    <p class="p-reg color-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nulla cursus risus eget arcu vestibulum condimentum.
                                        Mauris nunc erat, sollicitudin ac odio lobortis, vulputate
                                        pulvinar urna. Aliquam ornare sed risus at ultrices.
                                        Aliquam vitae ipsum vitae ligula facilisis ultrices eu
                                        vitae orci.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== SINGLE PRODUCT DETAILS ENDS =============== -->

    <!-- =============== ALL PRODUCTS GRID STARTS =============== -->

    <div class="complete-look-products vertical-padding-top">
        <div class="container-xl">
            <div class="section-top-cta d-flex align-items-center">
                <h2 class="heading-two color-black fw-500">Complete Your Look</h2>
            </div>
            <div
                class="product-grid-item-wrapper men--items d-flex justify-content-between row gy-4"
            >
                <div class="product-grid-item col-lg-3 col-md-4 col-sm-6">
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
                <div class="product-grid-item col-lg-3 col-md-4 col-sm-6">
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
                <div class="product-grid-item col-lg-3 col-md-4 col-sm-6">
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
                <div class="product-grid-item col-lg-3 col-md-4 col-sm-6">
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
        </div>
    </div>

    <!-- =============== ALL PRODUCTS GRID ENDS =============== -->

    <!-- =============== RELATED PRODUCT STARTS =============== -->

    <div class="singleview-related-product vertical-padding-lg">
        <div class="container-xl">
            <div class="section-top-cta d-flex">
                <h2 class="heading-two color-black fw-500">People Also View</h2>
            </div>
            <div class="style-related-product-slider men--items swiper">
                <div class="swiper-wrapper">
                    <div class="style-related-slider-item swiper-slide">
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
                    <div class="style-related-slider-item swiper-slide">
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
                    <div class="style-related-slider-item swiper-slide">
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
                    <div class="style-related-slider-item swiper-slide">
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
                    <div class="style-related-slider-item swiper-slide">
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
                    class="round-pagination gradient-pagination d-flex align-items-center justify-content-center"
                ></div>
            </div>
        </div>
    </div>

    <!-- =============== RELATED PRODUCT ENDS =============== -->
@endsection
