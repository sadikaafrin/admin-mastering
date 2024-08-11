<!-- =============== NAVBAR STARTS =============== -->

<div class="header-area">
    <!-- Topbar -->

    <div class="topbar black-bg men-landing-page">
        <div class="container-xl">
            <div class="topbar-content-wrapper">
                <p class="color-white text-center fw-700">
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
    <!-- SearchBar -->

    <div class="search-bar gray-bg">
        <div class="container-xl">
            <div class="row search-content-wrapper align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="header-logo-wrapper d-flex align-items-center gap-4">
                        <a href="{{route('homepage')}}"
                        ><img
                                src="{{asset('frontend/images/site-logo.png')}}"
                                alt="Site Logo"
                                class="header-logo"
                            /></a>
                        <div class="language-switcher-wrapper select-wrapper d-flex">
                            <div
                                class="language-switcher-wrapper select-wrapper dropdown"
                            >
                                <button
                                    class="btn btn-secondary dropdown-toggle"
                                    type="button"
                                    id="dropdownMenuButton"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <!-- Flag Image -->
                                    <img
                                        src="{{asset('frontend/images/united-kingdom.png')}}"
                                        alt="USA Flag"
                                        id="selectedFlag"
                                        width="30"
                                    />
                                </button>
                                <ul
                                    class="language-dropdown dropdown-menu"
                                    aria-labelledby="dropdownMenuButton"
                                >
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            onclick="changeFlag('frontend/images/united-kingdom.png', 'UK')"
                                        ><img
                                                src="{{asset('frontend/images/united-kingdom.png')}}"
                                                alt="Korea Flag"
                                            /></a>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            onclick="changeFlag('frontend/images/united-states.png', 'USA')"
                                        ><img
                                                src="{{asset('frontend/images/united-states.png')}}"
                                                alt="USA Flag"
                                            /></a>
                                    </li>

                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            onclick="changeFlag('frontend/images/spain-flag.png', 'Spain')"
                                        ><img
                                                src="{{asset('frontend/images/spain-flag.png')}}"
                                                alt="USA Flag"
                                            /></a>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="#"
                                            onclick="changeFlag('frontend/images/canada-flag.png', 'Canada')"
                                        ><img
                                                src="{{asset('frontend/images/canada-flag.png')}}"
                                                alt="USA Flag"
                                            /></a>
                                    </li>
                                    <!-- Add more flag options as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hide-tablet">
                    <div class="header-search-form">
                        <form action="">
                            <p class="position-relative">
                                <img
                                    class="header-search-icon position-absolute"
                                    src="{{asset('frontend/images/search-normal.png')}}"
                                    alt="Header Search Icon"
                                />
                                <input
                                    class="w-100 header-search-field"
                                    type="search"
                                    name=""
                                    placeholder="Search Our Product"
                                />
                            </p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div
                        class="header-link-icons-wrapper d-flex gap-md-4 gap-3 justify-content-end"
                    >
                <span
                    class="header-link-icon mobile-search-open hide-desktop cursor-pointer"
                ><img src="{{asset('frontend/images/search-white.png')}}" alt=""
                    /></span>
                        <span
                            class="header-link-icon wishlist-cart-opener wishlist-header-link"
                        ><a href="#"
                            ><img src="{{asset('frontend/images/heart.png')}}" alt="" /></a
                            ></span>
                        <span
                            class="header-link-icon wishlist-cart-opener cart-header-link"
                        ><a href="#"><img src="{{asset('frontend/images/cart.pn')}}g" alt="" /></a
                            ></span>
                        <span class="header-link-icon notification"
                        ><a href="#"
                            ><img src="{{asset('frontend/images/notification.png')}}" alt="" /></a
                            ></span>
                        <span class="header-link-icon my-account"
                        ><a href="{{route('man.login')}}"
                            ><img src="{{asset('frontend/images/user.png')}}" alt="" /></a
                            ></span>
                        <span class="header-link-icon mobile-menu-open hide-desktop"
                        ><a href="#"
                            ><img src="{{asset('frontend/images/menu-bar.png')}}" alt="" /></a
                            ></span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="mobile-search d-flex align-items-center justify-content-center"
        >
            <div class="mobile-search-wrapper position-relative">
                <div class="search-close">
              <span class="search-close-icon cursor-pointer"
              ><img
                      src="{{asset('frontend/images/close-icon.png')}}"
                      alt="search close icon"
                  /></span>
                </div>
                <h2 class="heading-two color-white mb-3">Search....</h2>
                <div class="header-search-form">
                    <form action="">
                        <p class="position-relative">
                            <img
                                class="header-search-icon position-absolute"
                                src="{{asset('frontend/images/search-normal.png')}}"
                                alt="Header Search Icon"
                            />
                            <input
                                class="w-100 header-search-field position-relative"
                                type="search"
                                name=""
                                placeholder="Search Our Product"
                            />
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Menu -->
    <div class="header-main-menu offwhitelight-bg position-relative">
        <div class="mobile-menu-close hide-desktop position-absolute">
            <img src="{{asset('frontend/images/cross.png')}}" alt="" />
        </div>
        <div class="container-xl">
            <div
                class="header-menu-wrapper d-flex align-items-center justify-content-center"
            >
                <ul class="main-menu men d-flex">
                    <li><a href="{{route('trending.product')}}">Trending</a></li>
                    <li class="has-submenu styles">
                        <a href="{{route('all.style.product')}}">Styles</a>
                        <div class="submenu offwhite-bg">
                            <div class="black-bg submenu-border top-border"></div>
                            <div class="container-xl">
                                <div class="submenu-inner">
                                    <div class="submenu-content-wrapper d-flex gap-4">
                                        <div class="submenu-lists">
                                            <p class="text-md color-red fw-700 mb-4">
                                                MEN's Styles
                                            </p>
                                            <div class="submenu-lists-col-wrapper d-grid">
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Styles
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li>
                                                            <a href="trending.html">Smart Casual</a>
                                                        </li>
                                                        <li><a href="trending.html">Office Wear</a></li>
                                                        <li><a href="trending.html">Elegant</a></li>
                                                        <li><a href="trending.html">Street</a></li>
                                                        <li>
                                                            <a href="trending.html">Smart Casual</a>
                                                        </li>
                                                        <li><a href="trending.html">Night Out</a></li>
                                                        <li><a href="trending.html">Cocktail</a></li>
                                                        <li><a href="trending.html">Rave</a></li>
                                                        <li><a href="trending.html">Minimalist</a></li>
                                                        <li><a href="trending.html">Puppy</a></li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Occasions
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li><a href="trending.html">Holiday</a></li>
                                                        <li><a href="trending.html">Hen do</a></li>
                                                        <li><a href="trending.html">Weddings</a></li>
                                                        <li><a href="trending.html">Bridesmaids</a></li>
                                                        <li>
                                                            <a href="trending.html">Birthday</a>
                                                        </li>
                                                        <li>
                                                            <a href="trending.html">Baby Show</a>
                                                        </li>
                                                        <li><a href="trending.html">Halloween</a></li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Seasons
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li>
                                                            <a href="trending.html">Winter</a>
                                                        </li>
                                                        <li><a href="trending.html">Autumn</a></li>
                                                        <li><a href="trending.html">Summer</a></li>
                                                        <li>
                                                            <a href="trending.html">Spring</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Events
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>

                                                        <li><a href="trending.html">F1</a></li>
                                                        <li><a href="trending.html">Festival</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu-cta-col-wrapper d-grid">
                                            <div class="submenu-cta-inner">
                                                <p
                                                    class="submenu-list-title text-center mb-3 text-reg color-red fw-700"
                                                >
                                                    Groom
                                                </p>
                                                <div
                                                    class="submenu-cta-col full-height position-relative"
                                                >
                                                    <a href=""
                                                    ><img
                                                            src="{{asset('frontend/images/accessories(1).jpg')}}"
                                                            alt=""
                                                        /></a>
                                                    <a href=""
                                                    ><p
                                                            class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                        >
                                                            Groom Special
                                                        </p></a
                                                    >
                                                </div>
                                            </div>
                                            <div class="submenu-cta-inner">
                                                <p
                                                    class="submenu-list-title text-center mb-3 text-reg color-red fw-700"
                                                >
                                                    Exclusives
                                                </p>
                                                <div
                                                    class="submenu-cta-col submenu-cta-grid d-flex flex-column"
                                                >
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/accessories(3).png')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                Summer Collections
                                                            </p></a
                                                        >
                                                    </div>
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/submenu-cta-two.jpg')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                MEN's Exclusive
                                                            </p></a
                                                        >
                                                    </div>
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/accessories(2).jpg')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                Men's Exclusive
                                                            </p></a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="submenu-logo-grid d-flex justify-content-between mt-4"
                                    >
                                        <img
                                            src="{{asset('frontend/images/nude-skinz.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/kylie_cosmetics_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/nike_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/adidas_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/louis_vuitton_symbol.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/sohu_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/puma_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/kappa_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="black-bg submenu-border bottom-border"></div>
                        </div>
                    </li>
                    <li class="has-submenu products">
                        <a href="{{route('product')}}">Products</a>
                        <div class="submenu offwhite-bg">
                            <div class="black-bg submenu-border top-border"></div>
                            <div class="container-xl">
                                <div class="submenu-inner">
                                    <div class="submenu-content-wrapper d-flex gap-4">
                                        <div class="submenu-lists">
                                            <p class="text-md color-red fw-700 mb-4">
                                                MEN’s Products
                                            </p>
                                            <div class="submenu-lists-col-wrapper d-grid">
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Clothing
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li><a href="trending.html">Skirts</a></li>
                                                        <li><a href="trending.html">Jumpers</a></li>
                                                        <li><a href="trending.html">Blazers</a></li>
                                                        <li><a href="trending.html">Jeans</a></li>
                                                        <li><a href="trending.html">Shorts</a></li>
                                                        <li><a href="trending.html">Blouses</a></li>
                                                        <li><a href="trending.html">Lingerie</a></li>
                                                        <li><a href="trending.html">Nightwear</a></li>
                                                        <li><a href="trending.html">Multipacks</a></li>
                                                        <li><a href="trending.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Shoes
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li><a href="trending.html">Trainers</a></li>
                                                        <li><a href="trending.html">Sandals</a></li>
                                                        <li><a href="trending.html">Boots</a></li>
                                                        <li><a href="trending.html">Heels</a></li>
                                                        <li>
                                                            <a href="trending.html">Flat Sandals</a>
                                                        </li>
                                                        <li>
                                                            <a href="trending.html">Chelsea Boots</a>
                                                        </li>
                                                        <li><a href="trending.html">Socks</a></li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Accessories
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li>
                                                            <a href="trending.html">Hair Accessories</a>
                                                        </li>
                                                        <li><a href="trending.html">Belts</a></li>
                                                        <li><a href="trending.html">Hats</a></li>
                                                        <li>
                                                            <a href="trending.html">Socks & Tights</a>
                                                        </li>
                                                        <li><a href="trending.html">Sunglasses</a></li>
                                                        <li><a href="trending.html">Watches</a></li>
                                                        <li>
                                                            <a href="trending.html">Makeup Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="trending.html">Makeup Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="submenu-list-col position-relative">
                                                    <p
                                                        class="submenu-list-title text-reg color-red fw-700"
                                                    >
                                                        Brands
                                                    </p>
                                                    <ul class="submenu-list">
                                                        <li><a href="trending.html">View All</a></li>
                                                        <li>
                                                            <a href="trending.html">Hair Accessories</a>
                                                        </li>
                                                        <li><a href="trending.html">Belts</a></li>
                                                        <li><a href="trending.html">Hats</a></li>
                                                        <li>
                                                            <a href="trending.html">Socks & Tights</a>
                                                        </li>
                                                        <li><a href="trending.html">Sunglasses</a></li>
                                                        <li><a href="trending.html">Watches</a></li>
                                                        <li>
                                                            <a href="trending.html">Makeup Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="trending.html">Makeup Accessories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submenu-cta-col-wrapper d-grid">
                                            <div class="submenu-cta-inner">
                                                <p
                                                    class="submenu-list-title text-center mb-3 text-reg color-red fw-700"
                                                >
                                                    Groom
                                                </p>
                                                <div
                                                    class="submenu-cta-col full-height position-relative"
                                                >
                                                    <a href=""
                                                    ><img
                                                            src="{{asset('frontend/images/accessories(1).jpg')}}"
                                                            alt=""
                                                        /></a>
                                                    <a href=""
                                                    ><p
                                                            class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                        >
                                                            Groom Special
                                                        </p></a
                                                    >
                                                </div>
                                            </div>
                                            <div class="submenu-cta-inner">
                                                <p
                                                    class="submenu-list-title text-center mb-3 text-reg color-red fw-700"
                                                >
                                                    Exclusives
                                                </p>
                                                <div
                                                    class="submenu-cta-col submenu-cta-grid d-flex flex-column"
                                                >
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/accessories(3).png')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                Summer Collections
                                                            </p></a
                                                        >
                                                    </div>
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/submenu-cta-two.jpg')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                Men's Exclusive
                                                            </p></a
                                                        >
                                                    </div>
                                                    <div
                                                        class="submenu-cta-grid-item position-relative"
                                                    >
                                                        <a href=""
                                                        ><img
                                                                src="{{asset('frontend/images/accessories(2).jpg')}}"
                                                                alt=""
                                                            /></a>
                                                        <a href=""
                                                        ><p
                                                                class="text-reg submenu-cta-title color-white fw-700 position-absolute"
                                                            >
                                                                Men's Exclusive
                                                            </p></a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="submenu-logo-grid d-flex justify-content-between mt-4"
                                    >
                                        <img
                                            src="{{asset('frontend/images/nude-skinz.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/kylie_cosmetics_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/nike_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/adidas_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/louis_vuitton_symbol.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/sohu_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/puma_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                        <img
                                            src="{{asset('frontend/images/kappa_logo.png')}}"
                                            alt=""
                                            class="submenu-logo"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="black-bg submenu-border bottom-border"></div>
                        </div>
                    </li>
                    <li><a href="{{route('product.design')}}">Design My Own</a></li>
                    <li><a href="{{route('chat-with-us')}}">Chat With Us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Wishlist, Cart Popup -->
    <div class="aside-popup-wrapper wishlist-cart-popup men--items">
        <div class="aside-popup-inner-wrapper bg-white">
            <div class="aside-popup-inner bg-white wishlist-popup-wrapper">
                <div
                    class="aside-popup-top product-filter-top d-flex align-items-center justify-content-between"
                >
                    <h2 class="heading-two fw-700 color-black">My Wishlist</h2>
                    <i
                        class="aside-popup-close fa-solid fa-xmark color-black cursor-pointer"
                    ></i>
                </div>
                <div class="aside-popup-content">
                    <div class="wishlist-content-wrapper">
                        <div class="wishlist-item-top d-grid mb-4 mb-lg-5">
                            <h3 class="heading-three color-black fw-700">Product</h3>
                            <h3 class="heading-three color-black fw-700">Price</h3>
                        </div>
                        <div class="wishlist-items-wrapper">
                            <div class="wishlist-item d-grid">
                                <div
                                    class="wishlist-item-left d-flex align-items-center gap-3"
                                >
                                    <div class="wishlist-item-thumb position-relative">
                                        <img
                                            src="{{asset('frontend/images/wishlist-product-1.png')}}"
                                            alt=""
                                        />
                                        <span
                                            class="wishlist-remove-icon position-absolute cursor-pointer"
                                        >
                          <img
                              src="{{asset('frontend/images/close-wishlist.png')}}"
                              alt=""
                          />
                        </span>
                                    </div>
                                    <p
                                        class="text-md fw-700 color-black wishlist-product-title"
                                    >
                                        Ut diam consequat
                                    </p>
                                </div>
                                <div
                                    class="wishlist-item-right d-flex align-items-center justify-content-between"
                                >
                                    <p class="color-gray text-reg wishlist-price">£32.00</p>
                                    <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                                </div>
                            </div>
                            <div class="wishlist-item d-grid">
                                <div
                                    class="wishlist-item-left d-flex align-items-center gap-3"
                                >
                                    <div class="wishlist-item-thumb position-relative">
                                        <img
                                            src="{{asset('frontend/images/wishlist-product-2.png')}}"
                                            alt=""
                                        />
                                        <span
                                            class="wishlist-remove-icon position-absolute cursor-pointer"
                                        >
                          <img
                              src="{{asset('frontend/images/close-wishlist.png')}}"
                              alt=""
                          />
                        </span>
                                    </div>
                                    <p
                                        class="text-md fw-700 color-black wishlist-product-title"
                                    >
                                        Ut diam consequat
                                    </p>
                                </div>
                                <div
                                    class="wishlist-item-right d-flex align-items-center justify-content-between"
                                >
                                    <p class="color-gray text-reg wishlist-price">£32.00</p>
                                    <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                                </div>
                            </div>
                            <div class="wishlist-item d-grid">
                                <div
                                    class="wishlist-item-left d-flex align-items-center gap-3"
                                >
                                    <div class="wishlist-item-thumb position-relative">
                                        <img
                                            src="{{asset('frontend/images/wishlist-product-3.png')}}"
                                            alt=""
                                        />
                                        <span
                                            class="wishlist-remove-icon position-absolute cursor-pointer"
                                        >
                          <img
                              src="{{asset('frontend/images/close-wishlist.png')}}"
                              alt=""
                          />
                        </span>
                                    </div>
                                    <p
                                        class="text-md fw-700 color-black wishlist-product-title"
                                    >
                                        Ut diam consequat
                                    </p>
                                </div>
                                <div
                                    class="wishlist-item-right d-flex align-items-center justify-content-between"
                                >
                                    <p class="color-gray text-reg wishlist-price">£32.00</p>
                                    <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                                </div>
                            </div>
                            <div class="wishlist-item d-grid">
                                <div
                                    class="wishlist-item-left d-flex align-items-center gap-3"
                                >
                                    <div class="wishlist-item-thumb position-relative">
                                        <img
                                            src="{{asset('frontend/images/wishlist-product-4.png')}}"
                                            alt=""
                                        />
                                        <span
                                            class="wishlist-remove-icon position-absolute cursor-pointer"
                                        >
                          <img
                              src="{{asset('frontend/images/close-wishlist.png')}}"
                              alt=""
                          />
                        </span>
                                    </div>
                                    <p
                                        class="text-md fw-700 color-black wishlist-product-title"
                                    >
                                        Ut diam consequat
                                    </p>
                                </div>
                                <div
                                    class="wishlist-item-right d-flex align-items-center justify-content-between"
                                >
                                    <p class="color-gray text-reg wishlist-price">£32.00</p>
                                    <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                                </div>
                            </div>
                            <div class="wishlist-item d-grid">
                                <div
                                    class="wishlist-item-left d-flex align-items-center gap-3"
                                >
                                    <div class="wishlist-item-thumb position-relative">
                                        <img
                                            src="{{asset('frontend/images/wishlist-product-5.png')}}"
                                            alt=""
                                        />
                                        <span
                                            class="wishlist-remove-icon position-absolute cursor-pointer"
                                        >
                          <img
                              src="{{asset('frontend/images/close-wishlist.png')}}"
                              alt=""
                          />
                        </span>
                                    </div>
                                    <p
                                        class="text-md fw-700 color-black wishlist-product-title"
                                    >
                                        Ut diam consequat
                                    </p>
                                </div>
                                <div
                                    class="wishlist-item-right d-flex align-items-center justify-content-between"
                                >
                                    <p class="color-gray text-reg wishlist-price">£32.00</p>
                                    <a href="" class="cs-btn btn-style-one">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="wishlist-cart-button-wrapper mt-5">
                            <a href="" class="cs-btn btn-style-one w-100 text-center"
                            >Delete saved wishlist</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="aside-popup-inner bg-white cart-popup-wrapper">
                <div
                    class="aside-popup-top product-filter-top d-flex align-items-center justify-content-between"
                >
                    <h2 class="heading-two fw-700 color-black">In My Cart</h2>
                    <i
                        class="aside-popup-close fa-solid fa-xmark color-black cursor-pointer"
                    ></i>
                </div>
                <div class="aside-popup-content">
                    <div class="cart-content-wrapper">
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="style-product-variation d-flex">
                            <div class="style-product-variation-thumb menu-cart">
                                <img src="{{asset('frontend/images/product-demo2.jpg')}}" alt="" />
                            </div>
                            <div
                                class="style-product-variation-content d-flex flex-column justify-content-between"
                            >
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <p class="text-lg color-gray">Sweat Pant</p>
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
                                        <p class="text-xs color-gray">4.3 (140)</p>
                                    </div>
                                </div>
                                <div
                                    class="style-product-variation-row d-flex align-items-center justify-content-between"
                                >
                                    <h3 class="heading-three color-red fw-700">£30.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class=""></div>
                    </div>
                </div>
                <div class="menu-cart-total">
                    <h3 class="heading-three color-gray fw-700 text-end">
                        Color:<span class="cart-total-price ms-2">£800.00</span>
                    </h3>
                </div>
                <div class="menu-cart-btn-wrapper mt-5">
                    <a
                        href="checkout.html"
                        class="cs-btn btn-style-one w-100 text-center mb-3"
                    >Check Out</a
                    >
                    <a href="" class="cs-btn btn-style-one w-100 text-center"
                    >Clear Shopping Cart</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =============== NAVBAR ENDS =============== -->
