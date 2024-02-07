//==================================================================Cookie pop up==============================================================//
// $(document).ready(function() {
//     // When the btn-accept button is clicked
//     $('.btn-accept a').on('click', function() {
//         $('.cookie-pop-up').addClass('fade-out');
//     });
// });

const btnAcceptCookies = $(".btn-acceptcookies");
const btnChangeSettings = $(".btn-change");
const cookiePopUp = $(".cookie-pop-up");
const webPage = $("body");

btnAcceptCookies.click(() => {
    hideCookiePopUp();
    setCookie("cookie", true, 1); // 1 day
    enableScroll();
    console.log("Cookie should be stored now");
});

btnChangeSettings.click(() => {
    // Implement logic to handle changing cookie settings if needed
    console.log("Change Settings clicked");
});

function setCookie(name, value, duration) {
    const date = new Date();
    date.setDate(date.getDate() + duration); // sets the numeric value inputted into 'duration' in days
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + "; path=/";
}

function getCookie(name) {
    const cName = name + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArray = cDecoded.split("; ");
    let value;

    cArray.forEach(val => {
        if (val.indexOf(name) === 0) value = val.substring(name.length);
    });

    return value;
}

function hideCookiePopUp() {
    cookiePopUp.hide();
}

function showCookiePopUp() {
    cookiePopUp.show();
}

function disableScroll() {
    webPage.addClass("no-scroll");
}

function enableScroll() {
    webPage.removeClass("no-scroll");
}

function cookieMessage() {
    if (!getCookie("cookie")) {
        console.log("Cookie not here");
        showCookiePopUp();
        disableScroll();
    }
}

// Run the cookieMessage function on page load
$(document).ready(cookieMessage);


//===================================================================Sticky Header=================================================================//


$(document).ready(function () {
    var $originalHeader = $('#myHeader');
    var $duplicateHeader = $originalHeader.clone().attr('id', 'duplicateHeader').appendTo('body');
    var lastScrollTop = 0;
  
    function updateDuplicateHeader() {
      var scrollTop = $(window).scrollTop();
  
      if (scrollTop > lastScrollTop) {
        // Scrolling down, hide the duplicate header
        $duplicateHeader.css({
          position: 'fixed',
          top: '-100%',
          transition: 'top 0.3s ease',
          'z-index': '300'
        });
      } else {
        // Scrolling up, show the duplicate header
        $duplicateHeader.css({
          position: 'fixed',
          top: '0',
          transition: 'top 0.3s ease',
          'z-index': '300'
        });
      }
  
      lastScrollTop = scrollTop;
    }
  
    // Initial positioning of the duplicate header
    updateDuplicateHeader();
  
    $(window).scroll(updateDuplicateHeader);
  });
//=====================================================================Carousel Slides===========================================================================//

$ (".carousel__viewport").slick({
autoplay:true,
autoplaySpeed:4000,
arrows:false,
dots:true,

});

//==========================================================================autoplay slides===================================================================================//
// $('.autoplay').slick({
//   autoplay: true,
//   autoplaySpeed: 2000,
//         variableWidth: true,
//         prevArrow: false,
//         nextArrow: false,
//         draggable: false,
//         swipe: false,
//           infinite: true,
//           slidesToScroll: 1
//         });

//============================================================================Side menu button=================================================================================================//
