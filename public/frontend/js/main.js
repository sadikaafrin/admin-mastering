jQuery(document).ready(function ($) {
  // search close
  $(".mobile-search-open").click(function () {
    $(".mobile-search").addClass("active");
  });

  $(".search-close").click(function () {
    $(".mobile-search").removeClass("active");
  });

  // Product Inspection

  $(".style-product-inspection-btn.inspection-btn-open").click(function () {
    var styleProductCont = $(this).closest(".style-product-singleview");
    var styleProductNormalView = styleProductCont.find(
      ".style-product-singleview-normal"
    );
    var styleProductInspected = styleProductCont.find(
      ".style-singleview-inspected"
    );

    styleProductNormalView.hide();
    styleProductInspected.show();
  });

  $(".style-product-inspection-btn.inspection-btn-close").click(function () {
    var styleProductCont = $(this).closest(".style-product-singleview");
    var styleProductNormalView = styleProductCont.find(
      ".style-product-singleview-normal"
    );
    var styleProductInspected = styleProductCont.find(
      ".style-singleview-inspected"
    );

    styleProductNormalView.show();
    styleProductInspected.hide();
  });

  // SINGLE PRODUCT COLOR

  $(".product-color-option").click(function () {
    $(".product-color-option").removeClass("active");
    $(this).addClass("active");
  });

  // SINGLE PRODUCT SIZE

  $(".product-size-list span").click(function () {
    $(".product-size-list span").removeClass("active");

    $(this).addClass("active");
  });

  // PRODUCT INFO ACCORDION

  $(".accordion-btn").click(function () {
    var accordionCont = $(this).closest(".product-accordion");
    var accordionBody = accordionCont.find(".accordion-body");

    $(accordionCont).toggleClass("active");
    $(accordionBody).slideToggle();
  });

  // MANNEQUIN MODEL TAB

  $(".mannequin-tab-item.male").click(function () {
    $(".mannequin-tab-item").removeClass("active");
    $(this).addClass("active");
    $(".mannequin-single-tab-content.male").addClass("active");
    $(".mannequin-single-tab-content.female").removeClass("active");
  });

  $(".mannequin-tab-item.female").click(function () {
    $(".mannequin-tab-item").removeClass("active");
    $(this).addClass("active");
    $(".mannequin-single-tab-content.female").addClass("active");
    $(".mannequin-single-tab-content.male").removeClass("active");
  });

  // MANNEQUIN CUSTOMIZER
  $(".mannequin-customizer-opener").click(function () {
    $(".mannequin-customizer-form-wrapper").addClass("active");
  });
  $(".mannequin-customizer-close").click(function () {
    $(".mannequin-customizer-form-wrapper").removeClass("active");
  });

  // WISHLIST, PINNED ITEM

  $(".wishlist").click(function () {
    $(this).toggleClass("active");
  });

  $(".pineed-item").click(function () {
    $(this).toggleClass("active");
  });

  // DETAILS REVIEW

  $(".review-open").click(function () {
    $(".reviews-wrapper").addClass("active");
  });

  // closing the review popup
  const closeReview = () => {
    let wrapper = document.querySelector(".reviews-wrapper");
    if (wrapper) {
      let openButton = document.querySelector(".review-open");
      let body = document.querySelector(".reviews-content-wrapper");

      document.addEventListener("click", (event) => {
        if (
          !body.contains(event.target) &&
          !openButton.contains(event.target)
        ) {
          wrapper.classList.remove("active");
        }
      });
    }
  };

  closeReview();

  $(".review-close").click(function () {
    $(".reviews-wrapper").removeClass("active");
  });

  // MEGAMENU MOBILE VERSION

  $(".mobile-menu-open").click(function () {
    $(".header-main-menu").addClass("active");
  });
  $(".mobile-menu-close").click(function () {
    $(".header-main-menu").removeClass("active");
  });

  $(".main-menu .has-submenu").append('<span class="submenu-opener"></span>');
  $(".submenu-list-col .submenu-list-title").after(
    '<span class="submenu-list-opener"></span>'
  );

  $(".submenu-opener").click(function () {
    var subMenuCont = $(this).closest(".has-submenu");
    var subMenu = subMenuCont.find(".submenu");

    $(subMenu).slideToggle(500);
  });

  $(".submenu-list-opener").click(function () {
    var subMenuListCont = $(this).closest(".submenu-list-col");
    var subMenuList = subMenuListCont.find(".submenu-list");

    $(subMenuList).slideToggle(500);
  });

  // PRODUCT FILTER
  $(".product-filter-btn").click(function (event) {
    event.preventDefault();

    $(".product-filter-wrapper").fadeIn();
  });

  $(".aside-popup-close").click(function (event) {
    event.preventDefault();

    $(".aside-popup-wrapper").fadeOut();
  });

  // CART WISHLIST POPUP

  $(".wishlist-cart-opener").click(function () {
    $(".wishlist-cart-popup").fadeIn();
  });

  $(".wishlist-header-link").click(function () {
    $(".wishlist-popup-wrapper").addClass("active");
    $(".cart-popup-wrapper").removeClass("active");
  });

  $(".cart-header-link").click(function () {
    $(".cart-popup-wrapper").addClass("active");
    $(".wishlist-popup-wrapper").removeClass("active");
  });

  $(".wishlist-cart-opener").click(function () {
    $(".wishlist-cart-popup").fadeIn();
  });

  // REGISTER FILE UPLOADER
  $("#user-image").on("change", function () {
    var fileName = $(this)[0].files[0].name;
    $(".uploader-file-name").text(fileName);
  });

  // CHECKOUT FORM STEPS

  $(".checkout-step-btn").click(function () {
    var stepCont = $(this).closest(".checkout-step-fields-wrapper");
    $(".checkout-step-fields-wrapper").removeClass("active");
    $(stepCont).next().addClass("active");
  });

  $(".step-shipping-details .checkout-step-btn").click(function () {
    $(".checkout-step1").removeClass("active");
    $(".checkout-step2").addClass("active");
  });

  $(".step-payment-proceed .checkout-step-btn").click(function () {
    $(".hide-last-step").hide();
  });

  // CHECKOUT CHOOSE ADDRESS

  $(".address-dropdown-opener").click(function () {
    var addCont = $(this).closest(".address-dropdown-content-wrapper");

    $(addCont).find(".address-dorpdown-content").slideToggle();
  });

  // CHECKOUT ADD ADDRESS
  // $('.add-checkout-address-popup-opener').click(function(){

  //   var addFormPopup = $(this).closest('.address-dorpdown-content');
  //   $(addFormPopup).find('.form-popup').addClass('active');

  // });

  // VOURCHE CODE COPY

  // $('.vourcher-copyier').click(function(){

  //   var voucherWrapper = $(this).closest('.voucher-wrapper');
  //   var voucherCode = voucherWrapper.find('.voucher-code').text();

  //   navigator.clipboard.writeText(voucherCode);

  // });

  // PROFILE TAB

  // $('.profile-points-popup-opener').click(function(){
  //   $('.profile-points-popup').addClass('active');
  // });

  $(".profile-post-option-opener").click(function () {
    var profileList = $(this).closest(".profile-post-options");

    $(profileList).find(".profile-post-option-list").slideToggle();
  });

  // $('.edit-post-btn').click(function(event){

  //   event.preventDefault();

  //   var editPopupCont = $(this).closest('.profile-post-options');

  //   $(editPopupCont).find('.form-popup').addClass('active')

  // });

  $(".popup-opener").click(function (event) {
    event.preventDefault();
    var popupCont = $(this).closest(".popup-container");

    $(popupCont).find(".form-popup").addClass("active");
  });

  $(".form-popup-close").click(function (event) {
    event.preventDefault();
    var formPopup = $(this).closest(".form-popup");
    $(formPopup).removeClass("active");
  });
});

// Swiper Js
var categorySlider = new Swiper(".top-category-slider-wrapper", {
  slidesPerView: 3.5,
  spaceBetween: 16,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".top-category-slider-wrapper .swiper-button-next",
    prevEl: ".top-category-slider-wrapper .swiper-button-prev",
  },
  // Responsive breakpoints
  breakpoints: {
    1366: {
      slidesPerView: 3.5,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    280: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});

// Swiper Js
var gridSlider = new Swiper(".productGridSlider", {
  slidesPerView: 4,
  spaceBetween: 20,
  pagination: {
    el: ".productgrid-pagination",
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {
    1440: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    280: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});

// Swiper Js
var relatedProductSlider = new Swiper(".style-related-product-slider", {
  slidesPerView: 4,
  spaceBetween: 20,
  pagination: {
    el: ".round-pagination",
    clickable: true,
  },
  // Responsive breakpoints
  breakpoints: {
    1201: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    280: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
  },
});

// PRODUCT SINGLE VIEW SLIDER
var swiper = new Swiper(".single-productview-slider", {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 3,
  freeMode: true,
  breakpoints: {
    1440: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    280: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
  },
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".single-productview-slider2", {
  loop: true,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

// Product quantity counter

document.addEventListener("DOMContentLoaded", function () {
  const incrementBtn = document.querySelector(".product-increment-btn");
  const decrementBtn = document.querySelector(".product-decrement-btn");
  const quantityInput = document.getElementById("product-quantity");

  if (incrementBtn && decrementBtn && quantityInput) {
    incrementBtn.addEventListener("click", function (event) {
      event.preventDefault();
      let currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    });

    decrementBtn.addEventListener("click", function (event) {
      event.preventDefault();
      let currentValue = parseInt(quantityInput.value);
      if (currentValue > 0) {
        quantityInput.value = currentValue - 1;
      }
    });
  }
});

// LANGUAGE CHANGE DROPDOWN
function changeFlag(flagSrc, flagName) {
  document.getElementById("selectedFlag").src = flagSrc;
  document.getElementById("selectedFlag").alt = flagName + " Flag";
}

// FORM MEDIA UPLOAD PREVIEW
let userImg = document.getElementById("user-image");
if (userImg) {
  userImg.addEventListener("change", function (event) {
    const input = event.target;
    const preview = document.querySelector(".form-uploaded-img-preview");

    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block"; // Show the preview image
      };
      reader.readAsDataURL(input.files[0]);
    }
  });
}

// POST MEDIA UPLOADER

// topbar close functionality
const topbarActivity = () => {
  let wrapper = document.querySelector(".topbar");
  let closeButton = wrapper.querySelector(".close--button");

  if (wrapper && closeButton) {
    let isClosed = localStorage.getItem("isTopBarClosed");

    if (isClosed === "true") {
      wrapper.classList.add("hide");
    } else {
      closeButton.addEventListener("click", () => {
        wrapper.classList.add("hide");

        // setting the state in localstorage
        localStorage.setItem("isTopBarClosed", "true");
      });
    }
  }
};

topbarActivity();

//  user extra activity popup

const userActivityWrapper = () => {
  let wrapper = document.querySelector(".user--activity--popup--wrapper");
  let pollBtn = document.querySelector(".poll--btn--wrapper");
  let voteBtn = document.querySelector(".vote--btn--wrapper");

  if (wrapper) {
    // <-----------poling section ------------>
    let pollWrapper = document.querySelector(
      ".user--activity--popup--wrapper.poll--area"
    );
    let pollCloseButton = pollWrapper.querySelector(".close");

    //  polling wrapper function
    pollBtn.addEventListener("click", () => {
      pollWrapper.classList.add("active");

      // body scroll disabling
      document.body.classList.add("scroll--lock");
    });

    // closing poll wrapper
    pollCloseButton.addEventListener("click", () => {
      pollWrapper.classList.remove("active");

      // body scroll disabling
      document.body.classList.remove("scroll--lock");
    });
    // <-----------poling section ------------>

    // <-----------voting section ------------>
    let voteWrapper = document.querySelector(
      ".user--activity--popup--wrapper.vote--area"
    );
    let voteCloseButton = voteWrapper.querySelector(".close");

    //  polling wrapper function
    voteBtn.addEventListener("click", () => {
      voteWrapper.classList.add("active");

      // body scroll disabling
      document.body.classList.add("scroll--lock");
    });

    // closing poll wrapper
    voteCloseButton.addEventListener("click", () => {
      voteWrapper.classList.remove("active");

      // body scroll disabling
      document.body.classList.remove("scroll--lock");
    });
    // <-----------voting section ------------>
  }
};

userActivityWrapper();

const addPollOption = () => {
  let wrapper = document.querySelector(
    ".user--activity--popup--wrapper.poll--area"
  );

  if (wrapper) {
    let addBtn = wrapper.querySelector(".form--area .add--input");
    let inputHolder = wrapper.querySelector(
      ".form--area .extra--options--wrapper"
    );

    let inputContent = `  <div class="side--icon">
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
              <input type="text" placeholder="Input Option Details" />`;

    addBtn.addEventListener("click", () => {
      let newDiv = document.createElement("div");
      newDiv.classList.add("option--input");

      newDiv.innerHTML = inputContent;

      inputHolder.appendChild(newDiv);

      removePollOption();
    });
  }
};

addPollOption();

const removePollOption = () => {
  let wrapper = document.querySelector(
    ".user--activity--popup--wrapper.poll--area"
  );

  if (wrapper) {
    let allInputFields = wrapper.querySelectorAll(
      ".form--area .extra--options--wrapper .option--input"
    );

    let submitButton = wrapper.querySelector(".form--area .submit--btn");

    function getLength() {
      let InputFields = wrapper.querySelectorAll(
        ".form--area .extra--options--wrapper .option--input"
      );
      return InputFields.length;
    }

    allInputFields.forEach((item) => {
      let closeButton = item.querySelector(".side--icon");

      closeButton.addEventListener("click", () => {
        if (getLength() > 2) {
          item.remove();
          getLength();
        }
      });
    });
  }
};

removePollOption();

const postMenuDropDown = () => {
  let wrappers = document.querySelectorAll(".feed-content-post");

  if (wrappers) {
    wrappers.forEach((wrapper) => {
      let menuDot = wrapper.querySelector(".dot--drop--menu .menu--dot");

      let menuContent = wrapper.querySelector(
        ".dot--drop--menu .menu--content"
      );

      // toggling menu
      menuDot.addEventListener("click", () => {
        console.log("entered");
        menuContent.classList.toggle("active");
      });

      // closing menu on outside click
      document.addEventListener("click", (event) => {
        if (
          !menuDot.contains(event.target) &&
          !menuContent.contains(event.target)
        ) {
          menuContent.classList.remove("active");
        }
      });
    });
  }
};

postMenuDropDown();

// hotspot
const productHotSpot = () => {
  let wrapper = document.querySelector(".product-hotspost-wrapper");

  if (wrapper) {
    let items = wrapper.querySelectorAll(".product-hotspot");

    items.forEach((item) => {
      let marker = item.querySelector(".product-hotspot-marker");
      let content = item.querySelector(".product-hotspot-content");
      let closeButton = item.querySelector(
        ".style-product-variation-row.top--part .close--icon"
      );

      marker.addEventListener("click", () => {
        content.classList.toggle("active");
      });

      // closing the menu
      closeButton.addEventListener("click", () => {
        content.classList.remove("active");
      });

      // closing the menu on outside click
      document.addEventListener("click", (event) => {
        if (!content.contains(event.target) && !marker.contains(event.target)) {
          content.classList.remove("active");
        }
      });
    });
  }
};

productHotSpot();

$(document).ready(function () {
  // custom maniqueien selection
  const selectModel = () => {
    let wrapper = document.querySelector(".custom-mannequin-content-wrapper");

    if (wrapper) {
      let location = window.location.href;

      let men = "/men";
      let women = "/women";

      let maleTabButton = wrapper.querySelector(".mannequin-tab-item.male");
      let femaleTabButton = wrapper.querySelector(".mannequin-tab-item.female");

      // content
      let maleTabContent = wrapper.querySelector(
        ".mannequin-single-tab-content.male"
      );
      let femaleTabContent = wrapper.querySelector(
        ".mannequin-single-tab-content.female"
      );

      if (location.includes(men)) {
        // adding active classes to male
        maleTabButton.classList.add("active");
        maleTabContent.classList.add("active");

        // removing active classes from females
        femaleTabButton.classList.remove("active");
        femaleTabContent.classList.remove("active");
      } else if (location.includes(women)) {
        // adding active classes to female

        femaleTabButton.classList.add("active");
        femaleTabContent.classList.add("active");

        // removing active classes from males
        maleTabButton.classList.remove("active");
        maleTabContent.classList.remove("active");
      }
    }
  };

  selectModel();

  // save button feature
  const saveButtonFeature = () => {
    let wrapper = document.querySelector(".feed-content-wrapper");

    if (wrapper) {
      let saveButtons = wrapper.querySelectorAll(".save--button");

      console.log(saveButtons);

      saveButtons.forEach((item) => {
        console.log(item);
        item.addEventListener("click", () => {
          item.classList.toggle("active");
        });
      });
    }
  };

  saveButtonFeature();

  const voteButtonFeature = () => {
    let wrapper = document.querySelector(".feed-content-wrapper");

    if (wrapper) {
      let upVotes = wrapper.querySelectorAll(".upvote");
      let downVotes = wrapper.querySelectorAll(".downvote");

      upVotes.forEach((item) => {
        console.log(item);
        item.addEventListener("click", () => {
          item.classList.toggle("active");
        });
      });

      downVotes.forEach((item) => {
        console.log(item);
        item.addEventListener("click", () => {
          item.classList.toggle("active");
        });
      });
    }
  };

  voteButtonFeature();
});
