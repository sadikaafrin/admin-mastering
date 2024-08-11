@extends('frontend.app')
@section('content')


    <!-- =============== chat with us hero =============== -->
    <section class="chat-area">
        <div class="cs-container-sm">
            <div class="user-post-card">
                <div class="user-post-card-content-wrapper">
                    <div
                        class="user-post-card-upper-area d-flex align-items-center justify-content-between"
                    >
                        <div
                            class="user-post-card-upper-area-right d-flex align-items-center gap-3"
                        >
                            <div class="user-post-card-upper-area-right-img">
                                <img
                                    src="frontend/images/chat-profile.png"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="user-post-card-upper-area-right-details">
                                <h3 class="heading-three color-black fw-700">
                                    Alisha Tendon
                                </h3>
                                <p class="text-reg color-black text-xs fw-400">
                                    a.tendon@email.com
                                </p>
                            </div>
                        </div>
                        <div class="user-post-card-upper-area-left">
                            <a
                                class="text-decoration-underline semi-black"
                                href="{{route('profile.index')}}"
                            >View Profile</a
                            >
                        </div>
                    </div>
                    <div class="user-post-card-lower-area offwhitelight-bg">
                        <div class="user-post-card-lower-area-input">
                            <form action="">
                  <textarea
                      class="border-0 offwhitelight-bg post-input"
                      placeholder="Share your thoughts"
                  ></textarea>
                            </form>
                        </div>
                        <div
                            class="user-post-card-lower-area-content d-flex align-items-center justify-content-between"
                        >
                            <div class="user-post-card-lower-area-content-item d-flex">
                                <div class="upload-btn-wrapper">
                                    <button class="btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <path
                                                d="M15.2613 4.56414C15.6003 5.39165 16.0112 6.3129 16.2181 7.13455C16.4037 7.8633 16.4799 8.61554 16.444 9.36663C16.409 10.1169 16.2606 10.8576 16.0038 11.5636C15.7502 12.2595 15.3919 12.9129 14.9414 13.5013C14.4926 14.083 13.9571 14.5927 13.3537 15.0128C13.1295 15.171 12.8974 15.3176 12.6582 15.4521C12.4195 15.5869 12.1749 15.7085 11.9245 15.8168C11.3897 16.054 10.8294 16.2289 10.2546 16.3382C9.69052 16.4457 9.11569 16.486 8.54213 16.4583L8.36457 16.4466L7.95957 17.9523L8.23691 17.9742C8.96819 18.03 9.70359 17.9951 10.4263 17.8702C11.1595 17.7408 11.8744 17.5235 12.5554 17.2229C12.8431 17.0959 13.1282 16.9529 13.4109 16.7937C13.6853 16.6385 13.9612 16.4642 14.2356 16.2738C15.7195 15.2431 16.8468 13.7786 17.4624 12.082C18.081 10.3715 18.1679 8.51442 17.7119 6.75375C17.4184 5.90866 17.0985 4.79262 16.4925 3.93874C16.0919 3.3734 14.918 3.7088 15.2672 4.56414H15.2613ZM8.21783 6.55456C8.21326 6.4491 8.23012 6.34381 8.2674 6.24503C8.30467 6.14625 8.3616 6.05602 8.43475 5.97978C8.50789 5.90354 8.59574 5.84287 8.69301 5.80143C8.79027 5.75998 8.89493 5.73861 9.00069 5.73861C9.10644 5.73861 9.2111 5.75998 9.30837 5.80143C9.40563 5.84287 9.49348 5.90354 9.56663 5.97978C9.63977 6.05602 9.6967 6.14625 9.73398 6.24503C9.77126 6.34381 9.78812 6.4491 9.78354 6.55456V8.21837H11.4461C11.6539 8.21837 11.8532 8.30077 12.0002 8.44744C12.1471 8.59412 12.2297 8.79305 12.2297 9.00048C12.2297 9.20791 12.1471 9.40684 12.0002 9.55351C11.8532 9.70019 11.6539 9.78259 11.4461 9.78259H9.78207V11.4464C9.78665 11.5519 9.76979 11.6571 9.73251 11.7559C9.69523 11.8547 9.6383 11.9449 9.56516 12.0212C9.49201 12.0974 9.40416 12.1581 9.3069 12.1995C9.20964 12.241 9.10498 12.2623 8.99922 12.2623C8.89346 12.2623 8.7888 12.241 8.69154 12.1995C8.59428 12.1581 8.50642 12.0974 8.43328 12.0212C8.36013 11.9449 8.30321 11.8547 8.26593 11.7559C8.22865 11.6571 8.21179 11.5519 8.21636 11.4464V9.78259H6.54794C6.34012 9.78259 6.14081 9.70019 5.99386 9.55351C5.84691 9.40684 5.76435 9.20791 5.76435 9.00048C5.76435 8.79305 5.84691 8.59412 5.99386 8.44744C6.14081 8.30077 6.34012 8.21837 6.54794 8.21837H8.21783V6.55456ZM3.55886 16.1654C4.07913 16.569 4.64322 16.9129 5.24049 17.1907L5.48848 17.3064L5.89201 15.8051L5.72326 15.7246C5.28839 15.5087 4.87641 15.2496 4.49359 14.9512C4.106 14.6491 3.74961 14.3091 3.42973 13.9363L3.305 13.7898L1.9594 14.5646L2.13255 14.774C2.55498 15.2882 3.03335 15.7538 3.55886 16.1625V16.1654ZM0.084071 10.1854C0.177693 10.8439 0.346565 11.4896 0.587387 12.1099L0.682767 12.3618L2.02837 11.587L1.9638 11.4054C1.79833 10.944 1.68033 10.467 1.61163 9.98178C1.54324 9.49672 1.52505 9.00593 1.55733 8.51715L1.56761 8.32822L0.0605927 7.93277L0.035647 8.20372C-0.0246559 8.86393 -0.00840704 9.52887 0.084071 10.1854ZM1.23011 4.54217C1.09511 4.76918 0.973311 4.99766 0.861789 5.23054L0.742931 5.47952L2.24701 5.8823L2.33212 5.71386C2.41723 5.54836 2.50674 5.38725 2.60065 5.232C2.69456 5.07675 2.79875 4.92004 2.9088 4.76772C3.08713 4.51747 3.27814 4.27647 3.48109 4.04566C3.67804 3.81961 3.88773 3.60494 4.10913 3.40269L4.2456 3.2782L3.46641 1.92928L3.25511 2.11236C2.95783 2.37093 2.67655 2.64727 2.41282 2.93987C2.14335 3.2383 1.89104 3.55174 1.65712 3.87869C1.50304 4.09546 1.36364 4.31808 1.22864 4.53777L1.23011 4.54217ZM7.40196 0.116075C6.89266 0.201233 6.39286 0.335635 5.90962 0.517382L5.6543 0.612582L6.43201 1.95711L6.61104 1.89413C7.35175 1.63801 8.13269 1.51744 8.91631 1.53822C9.09387 1.53822 9.28023 1.55433 9.47245 1.5763C9.66468 1.59827 9.84077 1.62464 10.0213 1.66125C10.2017 1.69787 10.3954 1.74327 10.5789 1.79746C10.7623 1.85165 10.9457 1.91463 11.135 1.98786C11.2294 2.02561 11.3304 2.0443 11.432 2.04284C11.5337 2.04139 11.6341 2.01981 11.7274 1.97937C11.8206 1.93893 11.9049 1.88042 11.9754 1.80724C12.0459 1.73406 12.1011 1.64765 12.1379 1.55302C12.1746 1.4584 12.1922 1.35743 12.1897 1.25596C12.1871 1.1545 12.1644 1.05455 12.1228 0.961911C12.0813 0.86927 12.0217 0.785775 11.9476 0.716259C11.8735 0.646743 11.7864 0.592587 11.6912 0.556927C11.4681 0.470514 11.2392 0.392889 11.0059 0.324052C10.7726 0.255214 10.5481 0.201023 10.3235 0.15562C10.099 0.110217 9.87305 0.0750656 9.65001 0.0501671C9.42696 0.0252685 9.19071 0.0091576 8.95153 0.00183449C8.43255 -0.00913594 7.9137 0.029116 7.40196 0.116075Z"
                                                fill="#141414"
                                            />
                                        </svg>
                                    </button>
                                    <input type="file" name="videoUpload" accept="video/*" />
                                </div>

                                <div class="upload-btn-wrapper">
                                    <button class="btn">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            viewBox="0 0 18 18"
                                            fill="none"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M13 1H5C2.79086 1 1 2.79086 1 5V13C1 15.2091 2.79086 17 5 17H13C15.2091 17 17 15.2091 17 13V5C17 2.79086 15.2091 1 13 1ZM5 0C2.23858 0 0 2.23858 0 5V13C0 15.7614 2.23858 18 5 18H13C15.7614 18 18 15.7614 18 13V5C18 2.23858 15.7614 0 13 0H5Z"
                                                fill="#141414"
                                            />
                                            <line
                                                x1="0.719971"
                                                y1="5.26172"
                                                x2="17.28"
                                                y2="5.26172"
                                                stroke="#141414"
                                            />
                                            <line
                                                x1="7.11996"
                                                y1="4.88249"
                                                x2="4.01103"
                                                y2="0.442479"
                                                stroke="#141414"
                                            />
                                            <line
                                                x1="12.8326"
                                                y1="4.89226"
                                                x2="9.67626"
                                                y2="0.384517"
                                                stroke="#141414"
                                            />
                                            <path
                                                d="M11.3289 10.4592C11.9955 10.8441 11.9955 11.8064 11.3289 12.1913L8.38886 13.8887C7.72219 14.2736 6.88886 13.7924 6.88886 13.0226L6.88886 9.62783C6.88886 8.85802 7.72219 8.3769 8.38886 8.7618L11.3289 10.4592Z"
                                                fill="#141414"
                                            />
                                        </svg>
                                    </button>
                                    <input type="file" name="imageUpload" accept="image/*" />
                                </div>

                                <div class="vote--btn--wrapper activity--btn">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                    >
                                        <g clip-path="url(#clip0_6881_11423)">
                                            <path
                                                d="M1.65649 11.5212H16.3424C16.3935 11.5212 16.4443 11.5192 16.4948 11.5153V17.472C16.4948 17.5561 16.4265 17.6243 16.3424 17.6243H1.65649C1.57237 17.6243 1.50415 17.5561 1.50415 17.472V11.5153C1.5546 11.5192 1.60541 11.5212 1.65649 11.5212Z"
                                                stroke="black"
                                                stroke-width="0.75"
                                            />
                                            <path
                                                d="M1.65649 10.093H16.3424C16.677 10.1 16.942 9.76059 16.854 9.43771L15.7243 4.91898C15.6657 4.6842 15.4547 4.51953 15.2127 4.51953H14.008V6.77892C14.707 6.80486 14.7065 7.80791 14.008 7.83361H3.95335C3.25441 7.80766 3.25494 6.80462 3.95335 6.77892H3.99083V4.51953H2.7862C2.54422 4.51953 2.33328 4.68424 2.2746 4.91898L1.14489 9.43775C1.10552 9.59525 1.14092 9.76221 1.24083 9.89018C1.34078 10.0181 1.4941 10.093 1.65649 10.093Z"
                                                stroke="black"
                                                stroke-width="0.75"
                                            />
                                            <path
                                                d="M6.66701 2.75103L6.66703 2.75101C7.01941 2.39869 7.59074 2.39866 7.94311 2.75103L8.43475 3.24265L10.0561 1.62132L10.0561 1.6213C10.4084 1.26905 10.9798 1.26881 11.3322 1.62134L6.66701 2.75103ZM6.66701 2.75103C6.31464 3.1034 6.3146 3.67475 6.66701 4.02713C6.66702 4.02714 6.66702 4.02714 6.66703 4.02715L7.79668 5.15681C8.14908 5.5092 8.72039 5.5092 9.07278 5.15681L11.3321 2.89744M6.66701 2.75103L11.3321 2.89744M11.3321 2.89744C11.3322 2.89743 11.3322 2.89743 11.3322 2.89742M11.3321 2.89744L11.3322 2.89742M11.3322 2.89742C11.6846 2.54505 11.6845 1.97374 11.3323 1.62136L11.3322 2.89742ZM12.4261 0.375C12.5103 0.375 12.5785 0.443216 12.5785 0.527344V6.40313H5.42065V0.527344C5.42065 0.443216 5.48887 0.375 5.573 0.375H12.4261Z"
                                                stroke="black"
                                                stroke-width="0.75"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6881_11423">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                                <div class="poll--btn--wrapper activity--btn">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="18"
                                        viewBox="0 0 24 18"
                                        fill="none"
                                    >
                                        <path
                                            d="M19 0H5C3.9 0 3 0.9 3 2V16C3 17.1 3.9 18 5 18H19C20.1 18 21 17.1 21 16V2C21 0.9 20.1 0 19 0ZM20 16C20 16.5523 19.5523 17 19 17H5C4.44772 17 4 16.5523 4 16V2C4 1.44772 4.44772 1 5 1H19C19.5523 1 20 1.44772 20 2V16ZM7 7H9V14H7V7ZM11 4H13V14H11V4ZM15 10H17V14H15V10Z"
                                            fill="black"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="user-post-card-lower-area-content-post">
                                <button class="cs-btn btn-style-one narrow-btn">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== chat with us hero =============== -->

    <!-- =============== Feed area :: start =============== -->
    <section class="feed-area vertical-padding-top">
        <div class="cs-container-sm">
            <div class="d-flex feed-main-heading">
                <h2 class="heading-two fw-700 color-black">Your Feed</h2>
            </div>

            <div class="feed-content-wrapper mens--feed">
                <div class="feed-content-post">
                    <div
                        class="feed-content-common-heading d-flex align-items-center justify-content-between"
                    >
                        <div class="feed-post-author d-flex gap-3">
                            <div class="feed-post-author-img">
                                <img
                                    src="frontend/images/chat-profile-2.png"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="feed-post-author-details">
                                <h3 class="heading-three color-black fw-700">McKarthy Jr.</h3>
                                <p class="text-reg color-black text-xs fw-400">
                                    Posted 12 Minutes ago
                                </p>
                            </div>
                        </div>
                        <div class="user-post-card-upper-area-left">
                            <div class="dot--drop--menu">
                                <div class="menu--dot">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                </div>

                                <!-- contents -->
                                <div class="menu--content">
                                    <ul>
                                        <li>View Profile</li>
                                        <li>Report Post</li>
                                        <li>Copy Link</li>
                                        <li>Not Interested</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-post-area">
                        <div class="main-post-img">
                            <img src="frontend/images/post-image.png" alt="" />
                        </div>

                        <div class="main-post-para">
                            <p class="fw-400 text-sm semi-black">
                                Lorem ipsum dolor sit amet consectetur. At sed nulla gravida
                                vel magnis sed habitant tincidunt. Sit id rhoncus pharetra
                                gravida. Maecenas non fames etiam mattis urna sed. Eu sodales
                                adipiscing nunc odio feugiat ullamcorper mauris est a.
                                Imperdiet leo nisi dignissim pellentesque viverra. Velit
                                dignissim imperdiet mauris facilisis. Elementum vitae
                                condimentum elit sapien nec quisque. Duis dictum quis lectus
                                eleifend ipsum venenatis. Eleifend dignissim at sed id velit.
                                Sollicitudin non fringilla vehicula augue vestibulum dignissim
                                nunc. Egestas nullam tristique.
                                <span
                                ><a class="color-gray fw-700" href="#">SEE MORE</a></span
                                >
                            </p>
                        </div>

                        <div
                            class="main-post-icon d-flex align-items-center justify-content-between"
                        >
                            <div class="d-flex align-items-center gap-3 gap-lg-5">
                                <p class="d-flex align-items-center gap-2 upvote">
                                    <svg
                                        width="26"
                                        height="32"
                                        viewBox="0 0 26 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                            fill="#807777"
                                            stroke="#807777"
                                        />
                                    </svg>
                                    <span>120</span>
                                </p>

                                <p class="d-flex gap-2 align-items-center downvote">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7031)">
                                            <path
                                                d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7031">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>12</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11.3334 25.3327H10.6667C5.33341 25.3327 2.66675 23.9993 2.66675 17.3327V10.666C2.66675 5.33268 5.33341 2.66602 10.6667 2.66602H21.3334C26.6667 2.66602 29.3334 5.33268 29.3334 10.666V17.3327C29.3334 22.666 26.6667 25.3327 21.3334 25.3327H20.6667C20.2534 25.3327 19.8534 25.5327 19.6001 25.866L17.6001 28.5327C16.7201 29.706 15.2801 29.706 14.4001 28.5327L12.4001 25.866C12.1867 25.5727 11.6934 25.3327 11.3334 25.3327Z"
                                            stroke="#807777"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M21.3285 14.6667H21.3405"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M15.9941 14.6667H16.006"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M10.6593 14.6667H10.6713"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <span>35</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7040)">
                                            <path
                                                d="M16.0001 5.00025H17.0001V4.00025V1.36978L22.9029 7.49963L17.0001 13.6295V11.0001V10.0001H16.0001H14.8121C11.6038 10.0001 8.68603 11.6257 7.00024 14.2958V13.7501C7.00024 8.92651 10.9265 5.00025 15.7501 5.00025H16.0001Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                            <path
                                                d="M21 23.9997H3.00021C1.34624 23.9997 0.000244141 22.6538 0.000244141 20.9997V6.99997C0.000244141 5.34599 1.34624 4 3.00021 4H6.00018C6.55315 4 7.0001 4.44696 7.0001 4.99993C7.0001 5.5529 6.55315 5.99986 6.00018 5.99986H3.00021C2.44815 5.99986 2.0001 6.44791 2.0001 6.99997V20.9997C2.0001 21.5517 2.44815 21.9998 3.00021 21.9998H21C21.5519 21.9998 21.9999 21.5517 21.9999 20.9997V12.9999C21.9999 12.4469 22.4469 11.9998 22.9999 11.9998C23.553 11.9998 24 12.4469 24 12.9999V20.9997C24 22.6538 22.654 23.9997 21 23.9997Z"
                                                fill="#807777"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7040">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>5</span>
                                </p>
                            </div>

                            <!-- save button -->
                            <div class="save--button">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="512"
                                    height="512"
                                    x="0"
                                    y="0"
                                    viewBox="0 0 682.667 682.667"
                                    style="enable-background: new 0 0 512 512"
                                    xml:space="preserve"
                                    class=""
                                >
                    <g>
                        <defs>
                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path
                                    d="M0 512h512V0H0Z"
                                    fill="#000000"
                                    opacity="1"
                                    data-original="#000000"
                                    class=""
                                ></path>
                            </clipPath>
                        </defs>
                        <g
                            clip-path="url(#a)"
                            transform="matrix(1.33333 0 0 -1.33333 0 682.667)"
                        >
                            <path
                                d="M0 0a32.144 32.144 0 0 1-22.734-9.415 32.111 32.111 0 0 1-9.4-22.718v-427.904c0-12.13 9.801-21.963 21.931-21.963h.081a24.334 24.334 0 0 1 17.271 7.182c21.288 21.272 84.109 84.093 110.057 109.992 7.23 7.27 17.11 11.359 27.394 11.359 10.283 0 20.164-4.089 27.393-11.359 26.028-25.98 89.17-89.106 110.218-110.185 4.498-4.475 10.522-6.989 16.869-6.989 12.292 0 22.253 9.954 22.253 22.236v427.631A32.114 32.114 0 0 1 289.199 0Z"
                                style="
                            stroke-width: 30;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                            stroke-dasharray: none;
                            stroke-opacity: 1;
                          "
                                transform="translate(111.4 497)"
                                fill="none"
                                stroke="#000000"
                                stroke-width="30"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                stroke-dasharray="none"
                                stroke-opacity=""
                                data-original="#000000"
                                class=""
                            ></path>
                        </g>
                    </g>
                  </svg>
                            </div>
                        </div>
                    </div>
                    <div class="post-reply-area offwhitelight-bg">
                        <div class="post-reply-area-input mb-5">
                            <form action="/action_page.php">
                                <input
                                    class="border-0 offwhitelight-bg post-input"
                                    type="text"
                                    id="fname"
                                    name="fname"
                                    placeholder="Share your thoughts"
                                />
                            </form>
                        </div>
                        <div class="post-reply-area-btn">
                            <button class="cs-btn btn-style-one narrow-btn">Reply</button>
                        </div>
                    </div>
                </div>

                <!-- ===========comment area start/3rd section of the page========= -->
                <div class="feed-content-post">
                    <div
                        class="feed-content-common-heading d-flex align-items-center justify-content-between"
                    >
                        <div class="feed-post-author d-flex gap-3">
                            <div class="feed-post-author-img">
                                <img
                                    src="frontend/images/chat-profile-2.png"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="feed-post-author-details">
                                <h3 class="text-reg color-black fw-700">McKarthy Jr.</h3>
                                <p class="text-reg color-black text-xs fw-400">
                                    Posted 12 Minutes ago
                                </p>
                            </div>
                        </div>
                        <div class="user-post-card-upper-area-left">
                            <div class="dot--drop--menu">
                                <div class="menu--dot">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                </div>

                                <!-- contents -->
                                <div class="menu--content">
                                    <ul>
                                        <li>View Profile</li>
                                        <li>Report Post</li>
                                        <li>Copy Link</li>
                                        <li>Not Interested</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-post-area">
                        <div class="main-post-img">
                            <img src="frontend/images/post-image.png" alt="" />
                        </div>

                        <div class="main-post-para">
                            <p class="fw-400 text-sm semi-black">
                                Lorem ipsum dolor sit amet consectetur. At sed nulla gravida
                                vel magnis sed habitant tincidunt. Sit id rhoncus pharetra
                                gravida. Maecenas non fames etiam mattis urna sed. Eu sodales
                                adipiscing nunc odio feugiat ullamcorper mauris est a.
                                Imperdiet leo nisi dignissim pellentesque viverra. Velit
                                dignissim imperdiet mauris facilisis. Elementum vitae
                                condimentum elit sapien nec quisque. Duis dictum quis lectus
                                eleifend ipsum venenatis. Eleifend dignissim at sed id velit.
                                Sollicitudin non fringilla vehicula augue vestibulum dignissim
                                nunc. Egestas nullam tristique.
                                <span
                                ><a class="color-gray fw-700" href="#">SEE MORE</a></span
                                >
                            </p>
                        </div>

                        <div
                            class="main-post-icon d-flex align-items-center justify-content-between"
                        >
                            <div class="d-flex align-items-center gap-3 gap-lg-5">
                                <p class="d-flex align-items-center gap-2 upvote">
                                    <svg
                                        width="26"
                                        height="32"
                                        viewBox="0 0 26 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                            fill="#807777"
                                            stroke="#807777"
                                        />
                                    </svg>
                                    <span>120</span>
                                </p>

                                <p class="d-flex gap-2 align-items-center downvote">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7031)">
                                            <path
                                                d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7031">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>12</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11.3334 25.3327H10.6667C5.33341 25.3327 2.66675 23.9993 2.66675 17.3327V10.666C2.66675 5.33268 5.33341 2.66602 10.6667 2.66602H21.3334C26.6667 2.66602 29.3334 5.33268 29.3334 10.666V17.3327C29.3334 22.666 26.6667 25.3327 21.3334 25.3327H20.6667C20.2534 25.3327 19.8534 25.5327 19.6001 25.866L17.6001 28.5327C16.7201 29.706 15.2801 29.706 14.4001 28.5327L12.4001 25.866C12.1867 25.5727 11.6934 25.3327 11.3334 25.3327Z"
                                            stroke="#807777"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M21.3285 14.6667H21.3405"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M15.9941 14.6667H16.006"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M10.6593 14.6667H10.6713"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <span>35</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7040)">
                                            <path
                                                d="M16.0001 5.00025H17.0001V4.00025V1.36978L22.9029 7.49963L17.0001 13.6295V11.0001V10.0001H16.0001H14.8121C11.6038 10.0001 8.68603 11.6257 7.00024 14.2958V13.7501C7.00024 8.92651 10.9265 5.00025 15.7501 5.00025H16.0001Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                            <path
                                                d="M21 23.9997H3.00021C1.34624 23.9997 0.000244141 22.6538 0.000244141 20.9997V6.99997C0.000244141 5.34599 1.34624 4 3.00021 4H6.00018C6.55315 4 7.0001 4.44696 7.0001 4.99993C7.0001 5.5529 6.55315 5.99986 6.00018 5.99986H3.00021C2.44815 5.99986 2.0001 6.44791 2.0001 6.99997V20.9997C2.0001 21.5517 2.44815 21.9998 3.00021 21.9998H21C21.5519 21.9998 21.9999 21.5517 21.9999 20.9997V12.9999C21.9999 12.4469 22.4469 11.9998 22.9999 11.9998C23.553 11.9998 24 12.4469 24 12.9999V20.9997C24 22.6538 22.654 23.9997 21 23.9997Z"
                                                fill="#807777"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7040">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>5</span>
                                </p>
                            </div>

                            <!-- save button -->
                            <div class="save--button">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="512"
                                    height="512"
                                    x="0"
                                    y="0"
                                    viewBox="0 0 682.667 682.667"
                                    style="enable-background: new 0 0 512 512"
                                    xml:space="preserve"
                                    class=""
                                >
                    <g>
                        <defs>
                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path
                                    d="M0 512h512V0H0Z"
                                    fill="#000000"
                                    opacity="1"
                                    data-original="#000000"
                                    class=""
                                ></path>
                            </clipPath>
                        </defs>
                        <g
                            clip-path="url(#a)"
                            transform="matrix(1.33333 0 0 -1.33333 0 682.667)"
                        >
                            <path
                                d="M0 0a32.144 32.144 0 0 1-22.734-9.415 32.111 32.111 0 0 1-9.4-22.718v-427.904c0-12.13 9.801-21.963 21.931-21.963h.081a24.334 24.334 0 0 1 17.271 7.182c21.288 21.272 84.109 84.093 110.057 109.992 7.23 7.27 17.11 11.359 27.394 11.359 10.283 0 20.164-4.089 27.393-11.359 26.028-25.98 89.17-89.106 110.218-110.185 4.498-4.475 10.522-6.989 16.869-6.989 12.292 0 22.253 9.954 22.253 22.236v427.631A32.114 32.114 0 0 1 289.199 0Z"
                                style="
                            stroke-width: 30;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                            stroke-dasharray: none;
                            stroke-opacity: 1;
                          "
                                transform="translate(111.4 497)"
                                fill="none"
                                stroke="#000000"
                                stroke-width="30"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                stroke-dasharray="none"
                                stroke-opacity=""
                                data-original="#000000"
                                class=""
                            ></path>
                        </g>
                    </g>
                  </svg>
                            </div>
                        </div>
                    </div>
                    <div class="post-reply-area offwhitelight-bg">
                        <div class="post-reply-area-input mb-5">
                            <form action="/action_page.php">
                                <input
                                    class="border-0 offwhitelight-bg post-input"
                                    type="text"
                                    id="fname"
                                    name="fname"
                                    placeholder="Share your thoughts"
                                />
                            </form>
                        </div>
                        <div class="post-reply-area-btn">
                            <button class="cs-btn btn-style-one narrow-btn">Reply</button>
                        </div>
                    </div>
                    <!-- ===========comment area start========= -->

                    <div class="comments-area">
                        <h3>Comments</h3>
                        <div class="comment-wrapper">
                            <div class="main-comment">
                                <div class="comment-content">
                                    <div
                                        class="comment-upper-area d-flex align-items-center justify-content-between"
                                    >
                                        <div
                                            class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                        >
                                            <div class="feed-post-author-img">
                                                <img
                                                    src="frontend/images/chat-profile-3.png"
                                                    alt=""
                                                    srcset=""
                                                />
                                            </div>
                                            <div class="feed-post-author-details">
                                                <h3 class="text-reg color-black fw-700">Liam Lee</h3>
                                            </div>
                                        </div>
                                        <div class="comment-upper-area-left">
                                            <div class="dropdown-comment">
                                                <p class="d-flex align-items-center gap-2">
                                                    <span class="fw-400 text-xs">11 hours ago</span>
                                                    <svg
                                                        class="dropdown-icon"
                                                        width="20"
                                                        height="20"
                                                        viewBox="0 0 20 20"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                                        <circle cx="2" cy="8.5" r="2" fill="#5A5C5F" />
                                                        <circle cx="2" cy="14.5" r="2" fill="#5A5C5F" />
                                                    </svg>
                                                </p>
                                                <div class="dropdown-menu-comment">
                                                    <ul>
                                                        <li class="li-underline">
                                                            <a class="text-xm fw-400 color-black" href="#"
                                                            >View Profile</a
                                                            >
                                                        </li>
                                                        <li class="li-underline">
                                                            <a class="text-xm fw-400 color-black" href="#"
                                                            >Report Post</a
                                                            >
                                                        </li>
                                                        <li class="li-underline">
                                                            <a class="text-xm fw-400 color-black" href="#"
                                                            >Copy Link</a
                                                            >
                                                        </li>
                                                        <li class="li-underline">
                                                            <a class="text-xm fw-400 color-black" href="#"
                                                            >Share To</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a class="text-xm fw-400 color-black" href="#"
                                                            >Not Interested</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-para fw-400 text-sm semi-black">
                                        Lorem ipsum dolor sit amet consectetur. At sed nulla
                                        gravida vel magnis sed habitant tincidunt. Sit id rhoncus
                                        pharetra gravida. Maecenas non fames etiam mattis urna
                                        sed. Eu sodales adipiscing nunc odio feugiat ullamcorper
                                        mauris est a. Imperdiet leo nisi dignissim pellentesque
                                        viverra. Velit dignissim imperdiet mauris facilisis.
                                    </div>
                                    <div class="comment-icon d-flex align-items-center gap-5">
                                        <p class="d-flex align-items-center gap-2">
                                            <svg
                                                width="26"
                                                height="32"
                                                viewBox="0 0 26 32"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                    fill="#807777"
                                                    stroke="#807777"
                                                />
                                            </svg>
                                            <span>120</span>
                                        </p>

                                        <p class="d-flex gap-2 align-items-center">
                                            <svg
                                                width="32"
                                                height="32"
                                                viewBox="0 0 32 32"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g clip-path="url(#clip0_6308_7031)">
                                                    <path
                                                        d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                        stroke="#807777"
                                                        stroke-width="2"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6308_7031">
                                                        <rect width="32" height="32" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>12</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="comment-reply-wrapper">
                                    <div class="comment-reply">
                                        <div class="comment-content">
                                            <div
                                                class="comment-upper-area d-flex align-items-center justify-content-between"
                                            >
                                                <div
                                                    class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                                >
                                                    <div class="feed-post-author-img">
                                                        <img
                                                            src="frontend/images/chat-profile-5.png"
                                                            alt=""
                                                            srcset=""
                                                        />
                                                    </div>
                                                    <div class="feed-post-author-details">
                                                        <h3 class="text-reg color-black fw-700">
                                                            Liam Lee
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="comment-upper-area-left">
                                                    <div class="dropdown-comment">
                                                        <p class="d-flex align-items-center gap-2">
                                                            <span class="fw-400 text-xs">11 hours ago</span>
                                                            <svg
                                                                class="dropdown-icon"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <circle
                                                                    cx="2"
                                                                    cy="2.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                                <circle
                                                                    cx="2"
                                                                    cy="8.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                                <circle
                                                                    cx="2"
                                                                    cy="14.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                            </svg>
                                                        </p>
                                                        <div class="dropdown-menu-comment">
                                                            <ul>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >View Profile</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Report Post</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Copy Link</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Share To</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Not Interested</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-para fw-400 text-sm semi-black">
                                                Lorem ipsum dolor sit amet consectetur. At sed nulla
                                                gravida vel magnis sed habitant tincidunt. Sit id
                                                rhoncus pharetra gravida. Maecenas non fames etiam
                                                mattis urna sed. Eu sodales adipiscing nunc odio
                                                feugiat ullamcorper mauris est a. Imperdiet leo nisi
                                                dignissim pellentesque viverra. Velit dignissim
                                                imperdiet mauris facilisis.
                                            </div>
                                            <div
                                                class="comment-icon d-flex align-items-center gap-5"
                                            >
                                                <p class="d-flex align-items-center gap-2">
                                                    <svg
                                                        width="26"
                                                        height="32"
                                                        viewBox="0 0 26 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                            fill="#807777"
                                                            stroke="#807777"
                                                        />
                                                    </svg>
                                                    <span>120</span>
                                                </p>

                                                <p class="d-flex gap-2 align-items-center">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_6308_7031)">
                                                            <path
                                                                d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_6308_7031">
                                                                <rect width="32" height="32" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span>12</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="re-reply-wrapper">
                                            <div class="re-reply">
                                                <div class="comment-content">
                                                    <div
                                                        class="comment-upper-area d-flex align-items-center justify-content-between"
                                                    >
                                                        <div
                                                            class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                                        >
                                                            <div class="feed-post-author-img">
                                                                <img
                                                                    src="frontend/images/chat-profile-6.png"
                                                                    alt=""
                                                                    srcset=""
                                                                />
                                                            </div>
                                                            <div class="feed-post-author-details">
                                                                <h3 class="text-reg color-black fw-700">
                                                                    Liam Lee
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="comment-upper-area-left">
                                                            <div class="dropdown-comment">
                                                                <p class="d-flex align-items-center gap-2">
                                    <span class="fw-400 text-xs"
                                    >11 hours ago</span
                                    >
                                                                    <svg
                                                                        class="dropdown-icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <circle
                                                                            cx="2"
                                                                            cy="2.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                        <circle
                                                                            cx="2"
                                                                            cy="8.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                        <circle
                                                                            cx="2"
                                                                            cy="14.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                    </svg>
                                                                </p>

                                                                <div class="dropdown-menu-comment">
                                                                    <ul>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >View Profile</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Report Post</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Copy Link</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Share To</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Not Interested</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-para fw-400 text-sm semi-black">
                                                        Lorem ipsum dolor sit amet consectetur. At sed
                                                        nulla gravida vel magnis sed habitant tincidunt.
                                                        Sit id rhoncus pharetra gravida. Maecenas non
                                                        fames etiam mattis urna sed. Eu sodales adipiscing
                                                        nunc odio feugiat ullamcorper mauris est a.
                                                        Imperdiet leo nisi dignissim pellentesque viverra.
                                                        Velit dignissim imperdiet mauris facilisis.
                                                    </div>
                                                    <div
                                                        class="comment-icon d-flex align-items-center gap-5"
                                                    >
                                                        <p class="d-flex align-items-center gap-2">
                                                            <svg
                                                                width="26"
                                                                height="32"
                                                                viewBox="0 0 26 32"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                                    fill="#807777"
                                                                    stroke="#807777"
                                                                />
                                                            </svg>
                                                            <span>120</span>
                                                        </p>

                                                        <p class="d-flex gap-2 align-items-center">
                                                            <svg
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <g clip-path="url(#clip0_6308_7031)">
                                                                    <path
                                                                        d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                                        stroke="#807777"
                                                                        stroke-width="2"
                                                                    />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_6308_7031">
                                                                        <rect
                                                                            width="32"
                                                                            height="32"
                                                                            fill="white"
                                                                        />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <span>12</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="re-reply">
                                                <div class="comment-content">
                                                    <div
                                                        class="comment-upper-area d-flex align-items-center justify-content-between"
                                                    >
                                                        <div
                                                            class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                                        >
                                                            <div class="feed-post-author-img">
                                                                <img
                                                                    src="frontend/images/chat-profile-7.png"
                                                                    alt=""
                                                                    srcset=""
                                                                />
                                                            </div>
                                                            <div class="feed-post-author-details">
                                                                <h3 class="text-reg color-black fw-700">
                                                                    Liam Lee
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="comment-upper-area-left">
                                                            <div class="dropdown-comment">
                                                                <p class="d-flex align-items-center gap-2">
                                    <span class="fw-400 text-xs"
                                    >11 hours ago</span
                                    >
                                                                    <svg
                                                                        class="dropdown-icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <circle
                                                                            cx="2"
                                                                            cy="2.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                        <circle
                                                                            cx="2"
                                                                            cy="8.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                        <circle
                                                                            cx="2"
                                                                            cy="14.5"
                                                                            r="2"
                                                                            fill="#5A5C5F"
                                                                        />
                                                                    </svg>
                                                                </p>
                                                                <div class="dropdown-menu-comment">
                                                                    <ul>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >View Profile</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Report Post</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Copy Link</a
                                                                            >
                                                                        </li>
                                                                        <li class="li-underline">
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Share To</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                class="text-xm fw-400 color-black"
                                                                                href="#"
                                                                            >Not Interested</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-para fw-400 text-sm semi-black">
                                                        Lorem ipsum dolor sit amet consectetur. At sed
                                                        nulla gravida vel magnis sed habitant tincidunt.
                                                        Sit id rhoncus pharetra gravida. Maecenas non
                                                        fames etiam mattis urna sed. Eu sodales adipiscing
                                                        nunc odio feugiat ullamcorper mauris est a.
                                                        Imperdiet leo nisi dignissim pellentesque viverra.
                                                        Velit dignissim imperdiet mauris facilisis.
                                                    </div>
                                                    <div
                                                        class="comment-icon d-flex align-items-center gap-5"
                                                    >
                                                        <p class="d-flex align-items-center gap-2">
                                                            <svg
                                                                width="26"
                                                                height="32"
                                                                viewBox="0 0 26 32"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                                    fill="#807777"
                                                                    stroke="#807777"
                                                                />
                                                            </svg>
                                                            <span>120</span>
                                                        </p>

                                                        <p class="d-flex gap-2 align-items-center">
                                                            <svg
                                                                width="32"
                                                                height="32"
                                                                viewBox="0 0 32 32"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <g clip-path="url(#clip0_6308_7031)">
                                                                    <path
                                                                        d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                                        stroke="#807777"
                                                                        stroke-width="2"
                                                                    />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_6308_7031">
                                                                        <rect
                                                                            width="32"
                                                                            height="32"
                                                                            fill="white"
                                                                        />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <span>12</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-reply">
                                        <div class="comment-content">
                                            <div
                                                class="comment-upper-area d-flex align-items-center justify-content-between"
                                            >
                                                <div
                                                    class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                                >
                                                    <div class="feed-post-author-img">
                                                        <img
                                                            src="frontend/images/chat-profile-8.png"
                                                            alt=""
                                                            srcset=""
                                                        />
                                                    </div>
                                                    <div class="feed-post-author-details">
                                                        <h3 class="text-reg color-black fw-700">
                                                            Liam Lee
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="comment-upper-area-left">
                                                    <div class="dropdown-comment">
                                                        <p class="d-flex align-items-center gap-2">
                                                            <span class="fw-400 text-xs">11 hours ago</span>
                                                            <svg
                                                                class="dropdown-icon"
                                                                width="20"
                                                                height="20"
                                                                viewBox="0 0 20 20"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <circle
                                                                    cx="2"
                                                                    cy="2.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                                <circle
                                                                    cx="2"
                                                                    cy="8.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                                <circle
                                                                    cx="2"
                                                                    cy="14.5"
                                                                    r="2"
                                                                    fill="#5A5C5F"
                                                                />
                                                            </svg>
                                                        </p>
                                                        <div class="dropdown-menu-comment">
                                                            <ul>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >View Profile</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Report Post</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Copy Link</a
                                                                    >
                                                                </li>
                                                                <li class="li-underline">
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Share To</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a
                                                                        class="text-xm fw-400 color-black"
                                                                        href="#"
                                                                    >Not Interested</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-para fw-400 text-sm semi-black">
                                                Lorem ipsum dolor sit amet consectetur. At sed nulla
                                                gravida vel magnis sed habitant tincidunt. Sit id
                                                rhoncus pharetra gravida. Maecenas non fames etiam
                                                mattis urna sed. Eu sodales adipiscing nunc odio
                                                feugiat ullamcorper mauris est a. Imperdiet leo nisi
                                                dignissim pellentesque viverra. Velit dignissim
                                                imperdiet mauris facilisis.
                                            </div>
                                            <div
                                                class="comment-icon d-flex align-items-center gap-5"
                                            >
                                                <p class="d-flex align-items-center gap-2">
                                                    <svg
                                                        width="26"
                                                        height="32"
                                                        viewBox="0 0 26 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                            fill="#807777"
                                                            stroke="#807777"
                                                        />
                                                    </svg>
                                                    <span>120</span>
                                                </p>

                                                <p class="d-flex gap-2 align-items-center">
                                                    <svg
                                                        width="32"
                                                        height="32"
                                                        viewBox="0 0 32 32"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_6308_7031)">
                                                            <path
                                                                d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                                stroke="#807777"
                                                                stroke-width="2"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_6308_7031">
                                                                <rect width="32" height="32" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    <span>12</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-comment">
                                <div
                                    class="comment-upper-area d-flex align-items-center justify-content-between"
                                >
                                    <div
                                        class="comment-upper-area-right comment-author d-flex align-items-center gap-3"
                                    >
                                        <div class="feed-post-author-img">
                                            <img
                                                src="frontend/images/chat-profile-4.png"
                                                alt=""
                                                srcset=""
                                            />
                                        </div>
                                        <div class="feed-post-author-details">
                                            <h3 class="text-reg color-black fw-700">Liam Lee</h3>
                                        </div>
                                    </div>
                                    <div class="comment-upper-area-left">
                                        <div class="dropdown-comment">
                                            <p class="d-flex align-items-center gap-2">
                                                <span class="fw-400 text-xs">11 hours ago</span>
                                                <svg
                                                    class="dropdown-icon"
                                                    width="20"
                                                    height="20"
                                                    viewBox="0 0 20 20"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                                    <circle cx="2" cy="8.5" r="2" fill="#5A5C5F" />
                                                    <circle cx="2" cy="14.5" r="2" fill="#5A5C5F" />
                                                </svg>
                                            </p>
                                            <div class="dropdown-menu-comment">
                                                <ul>
                                                    <li class="li-underline">
                                                        <a class="text-xm fw-400 color-black" href="#"
                                                        >View Profile</a
                                                        >
                                                    </li>
                                                    <li class="li-underline">
                                                        <a class="text-xm fw-400 color-black" href="#"
                                                        >Report Post</a
                                                        >
                                                    </li>
                                                    <li class="li-underline">
                                                        <a class="text-xm fw-400 color-black" href="#"
                                                        >Copy Link</a
                                                        >
                                                    </li>
                                                    <li class="li-underline">
                                                        <a class="text-xm fw-400 color-black" href="#"
                                                        >Share To</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a class="text-xm fw-400 color-black" href="#"
                                                        >Not Interested</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-para fw-400 text-sm semi-black">
                                    Lorem ipsum dolor sit amet consectetur. At sed nulla gravida
                                    vel magnis sed habitant tincidunt. Sit id rhoncus pharetra
                                    gravida. Maecenas non fames etiam mattis urna sed. Eu
                                    sodales adipiscing nunc odio feugiat ullamcorper mauris est
                                    a. Imperdiet leo nisi dignissim pellentesque viverra. Velit
                                    dignissim imperdiet mauris facilisis.
                                </div>
                                <div class="comment-icon d-flex align-items-center gap-5">
                                    <p class="d-flex align-items-center gap-2">
                                        <svg
                                            width="26"
                                            height="32"
                                            viewBox="0 0 26 32"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                                fill="#807777"
                                                stroke="#807777"
                                            />
                                        </svg>
                                        <span>120</span>
                                    </p>

                                    <p class="d-flex gap-2 align-items-center">
                                        <svg
                                            width="32"
                                            height="32"
                                            viewBox="0 0 32 32"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <g clip-path="url(#clip0_6308_7031)">
                                                <path
                                                    d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                    stroke="#807777"
                                                    stroke-width="2"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_6308_7031">
                                                    <rect width="32" height="32" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>12</span>
                                    </p>
                                </div>
                            </div>

                            <p class="text-reg load-more text-center">
                                <a class="text-underline color-black fw-700" href="#"
                                >Load More Comments</a
                                >
                            </p>
                        </div>
                    </div>
                </div>

                <div class="feed-content-post border-bottom-0">
                    <div
                        class="feed-content-common-heading d-flex align-items-center justify-content-between"
                    >
                        <div class="feed-post-author d-flex gap-3">
                            <div class="feed-post-author-img">
                                <img
                                    src="frontend/images/chat-profile-2.png"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="feed-post-author-details">
                                <h3 class="heading-three color-black fw-700">McKarthy Jr.</h3>
                                <p class="text-reg color-black text-xs fw-400">
                                    Posted 12 Minutes ago
                                </p>
                            </div>
                        </div>
                        <div class="user-post-card-upper-area-left">
                            <div class="dot--drop--menu">
                                <div class="menu--dot">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="4"
                                        height="5"
                                        viewBox="0 0 4 5"
                                        fill="none"
                                    >
                                        <circle cx="2" cy="2.5" r="2" fill="#5A5C5F" />
                                    </svg>
                                </div>

                                <!-- contents -->
                                <div class="menu--content">
                                    <ul>
                                        <li>View Profile</li>
                                        <li>Report Post</li>
                                        <li>Copy Link</li>
                                        <li>Not Interested</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-post-area">
                        <div class="main-post-img">
                            <img src="frontend/images/post-image.png" alt="" />
                        </div>

                        <div class="main-post-para">
                            <p class="fw-400 text-sm semi-black">
                                Lorem ipsum dolor sit amet consectetur. At sed nulla gravida
                                vel magnis sed habitant tincidunt. Sit id rhoncus pharetra
                                gravida. Maecenas non fames etiam mattis urna sed. Eu sodales
                                adipiscing nunc odio feugiat ullamcorper mauris est a.
                                Imperdiet leo nisi dignissim pellentesque viverra. Velit
                                dignissim imperdiet mauris facilisis. Elementum vitae
                                condimentum elit sapien nec quisque. Duis dictum quis lectus
                                eleifend ipsum venenatis. Eleifend dignissim at sed id velit.
                                Sollicitudin non fringilla vehicula augue vestibulum dignissim
                                nunc. Egestas nullam tristique.
                                <span
                                ><a class="color-gray fw-700" href="#">SEE MORE</a></span
                                >
                            </p>
                        </div>

                        <div
                            class="main-post-icon d-flex align-items-center justify-content-between"
                        >
                            <div class="d-flex align-items-center gap-3 gap-lg-5">
                                <p class="d-flex align-items-center gap-2 upvote">
                                    <svg
                                        width="26"
                                        height="32"
                                        viewBox="0 0 26 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M0.987024 13.4917L0.985086 13.4917C0.853338 13.4922 0.727134 13.4393 0.635263 13.3449C0.448068 13.1527 0.452192 12.8451 0.644342 12.658L0.644373 12.658L0.649061 12.6533L12.6546 0.647828L12.6546 0.647839L12.6574 0.645022C12.7487 0.552256 12.8733 0.500043 13.0034 0.499991C13.1311 0.501946 13.2528 0.554025 13.3424 0.645036L13.3424 0.645047L13.3452 0.647828L25.3507 12.6533L25.3507 12.6534L25.3555 12.6581C25.4517 12.7517 25.5049 12.8811 25.5024 13.0153L25.5024 13.0154C25.4973 13.2835 25.2758 13.4969 25.0075 13.4918L25.0075 13.4917L24.9981 13.4917L19.7751 13.4917C19.0927 13.4917 18.5394 14.045 18.5394 14.7274L18.5394 31.0143C18.5394 31.2825 18.322 31.5 18.0537 31.5L7.91668 31.5C7.64841 31.5 7.43095 31.2825 7.43095 31.0143L7.43095 14.7274C7.43095 14.045 6.87772 13.4917 6.1953 13.4917L0.987024 13.4917Z"
                                            fill="#807777"
                                            stroke="#807777"
                                        />
                                    </svg>
                                    <span>120</span>
                                </p>

                                <p class="d-flex gap-2 align-items-center downvote">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7031)">
                                            <path
                                                d="M22.8047 19.0083H27.9822L16.0001 30.9904L4.01802 19.0083H9.22491C10.1835 19.0083 10.9606 18.2312 10.9606 17.2726L10.9606 1L21.069 1L21.069 17.2726C21.069 18.2312 21.8461 19.0083 22.8047 19.0083ZM3.98307 19.0081C3.98301 19.0081 3.98298 19.0081 3.98298 19.0081L3.98307 19.0081ZM21.069 0.985643V0.985724C21.069 0.985671 21.069 0.985643 21.069 0.985643Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7031">
                                                <rect width="32" height="32" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>12</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="32"
                                        height="32"
                                        viewBox="0 0 32 32"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M11.3334 25.3327H10.6667C5.33341 25.3327 2.66675 23.9993 2.66675 17.3327V10.666C2.66675 5.33268 5.33341 2.66602 10.6667 2.66602H21.3334C26.6667 2.66602 29.3334 5.33268 29.3334 10.666V17.3327C29.3334 22.666 26.6667 25.3327 21.3334 25.3327H20.6667C20.2534 25.3327 19.8534 25.5327 19.6001 25.866L17.6001 28.5327C16.7201 29.706 15.2801 29.706 14.4001 28.5327L12.4001 25.866C12.1867 25.5727 11.6934 25.3327 11.3334 25.3327Z"
                                            stroke="#807777"
                                            stroke-width="1.5"
                                            stroke-miterlimit="10"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M21.3285 14.6667H21.3405"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M15.9941 14.6667H16.006"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M10.6593 14.6667H10.6713"
                                            stroke="#807777"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <span>35</span>
                                </p>

                                <p class="d-flex align-items-center gap-2">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_6308_7040)">
                                            <path
                                                d="M16.0001 5.00025H17.0001V4.00025V1.36978L22.9029 7.49963L17.0001 13.6295V11.0001V10.0001H16.0001H14.8121C11.6038 10.0001 8.68603 11.6257 7.00024 14.2958V13.7501C7.00024 8.92651 10.9265 5.00025 15.7501 5.00025H16.0001Z"
                                                stroke="#807777"
                                                stroke-width="2"
                                            />
                                            <path
                                                d="M21 23.9997H3.00021C1.34624 23.9997 0.000244141 22.6538 0.000244141 20.9997V6.99997C0.000244141 5.34599 1.34624 4 3.00021 4H6.00018C6.55315 4 7.0001 4.44696 7.0001 4.99993C7.0001 5.5529 6.55315 5.99986 6.00018 5.99986H3.00021C2.44815 5.99986 2.0001 6.44791 2.0001 6.99997V20.9997C2.0001 21.5517 2.44815 21.9998 3.00021 21.9998H21C21.5519 21.9998 21.9999 21.5517 21.9999 20.9997V12.9999C21.9999 12.4469 22.4469 11.9998 22.9999 11.9998C23.553 11.9998 24 12.4469 24 12.9999V20.9997C24 22.6538 22.654 23.9997 21 23.9997Z"
                                                fill="#807777"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6308_7040">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>5</span>
                                </p>
                            </div>

                            <!-- save button -->
                            <div class="save--button">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="512"
                                    height="512"
                                    x="0"
                                    y="0"
                                    viewBox="0 0 682.667 682.667"
                                    style="enable-background: new 0 0 512 512"
                                    xml:space="preserve"
                                    class=""
                                >
                    <g>
                        <defs>
                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path
                                    d="M0 512h512V0H0Z"
                                    fill="#000000"
                                    opacity="1"
                                    data-original="#000000"
                                    class=""
                                ></path>
                            </clipPath>
                        </defs>
                        <g
                            clip-path="url(#a)"
                            transform="matrix(1.33333 0 0 -1.33333 0 682.667)"
                        >
                            <path
                                d="M0 0a32.144 32.144 0 0 1-22.734-9.415 32.111 32.111 0 0 1-9.4-22.718v-427.904c0-12.13 9.801-21.963 21.931-21.963h.081a24.334 24.334 0 0 1 17.271 7.182c21.288 21.272 84.109 84.093 110.057 109.992 7.23 7.27 17.11 11.359 27.394 11.359 10.283 0 20.164-4.089 27.393-11.359 26.028-25.98 89.17-89.106 110.218-110.185 4.498-4.475 10.522-6.989 16.869-6.989 12.292 0 22.253 9.954 22.253 22.236v427.631A32.114 32.114 0 0 1 289.199 0Z"
                                style="
                            stroke-width: 30;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                            stroke-dasharray: none;
                            stroke-opacity: 1;
                          "
                                transform="translate(111.4 497)"
                                fill="none"
                                stroke="#000000"
                                stroke-width="30"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-miterlimit="10"
                                stroke-dasharray="none"
                                stroke-opacity=""
                                data-original="#000000"
                                class=""
                            ></path>
                        </g>
                    </g>
                  </svg>
                            </div>
                        </div>
                    </div>
                    <div class="post-reply-area offwhitelight-bg">
                        <div class="post-reply-area-input">
                            <form action="/action_page.php">
                  <textarea
                      class="border-0 offwhitelight-bg post-input"
                      placeholder="Share your thoughts"
                  ></textarea>
                            </form>
                        </div>
                        <div class="post-reply-area-btn">
                            <button class="cs-btn btn-style-one narrow-btn">Reply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== Feed area :: end =============== -->



    <!-- create poll wrapper  -->
    <div class="user--activity--popup--wrapper poll--area">
        <div class="user--activity--popup--content">
            <div class="top--area">
                <h3 class="title">Create a Poll</h3>

                <div class="close">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="53"
                        height="52"
                        viewBox="0 0 53 52"
                        fill="none"
                    >
                        <path
                            d="M17.3076 16.8086L35.6924 35.1934"
                            stroke="#807777"
                            stroke-width="3.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M17.3076 35.1934L35.6924 16.8086"
                            stroke="#807777"
                            stroke-width="3.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
            </div>

            <form class="form--area">
          <textarea
              class="text--holder"
              placeholder="Add your question here"
          ></textarea>

                <div class="extra--options--wrapper">
                    <div class="option--input">
                        <div class="side--icon">
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
                        <input type="text" placeholder="Input Option Details" />
                    </div>
                    <div class="option--input">
                        <div class="side--icon">
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
                        <input type="text" placeholder="Input Option Details" />
                    </div>
                </div>

                <!-- add input button -->
                <div class="add--input">
                    <p>+ Add New Option</p>
                </div>

                <button class="submit--btn">Save & Post</button>
            </form>
        </div>
    </div>
    <!-- create poll wrapper  -->

    <!-- create vote wrapper  -->
    <div class="user--activity--popup--wrapper vote--area">
        <div class="user--activity--popup--content">
            <div class="top--area">
                <h3 class="title">Create a Voting Panel</h3>

                <div class="close">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="53"
                        height="52"
                        viewBox="0 0 53 52"
                        fill="none"
                    >
                        <path
                            d="M17.3076 16.8086L35.6924 35.1934"
                            stroke="#807777"
                            stroke-width="3.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M17.3076 35.1934L35.6924 16.8086"
                            stroke="#807777"
                            stroke-width="3.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
            </div>

            <form class="form--area">
          <textarea
              class="text--holder"
              placeholder="Add your question here"
          ></textarea>

                <div class="option--input">
                    <input type="text" placeholder="Input Option Details" />
                </div>
                <div class="option--input">
                    <input type="text" placeholder="Input Option Details" />
                </div>

                <button class="submit--btn">Save & Post</button>
            </form>
        </div>
    </div>
    <!-- create poll wrapper  -->
@endsection
