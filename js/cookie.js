//==================================================================Cookie pop up==============================================================//
const btnAcceptCookies = $(".btn-acceptcookies");
const btnChangeSettings = $(".btn-change");
const cookiePopUp = $(".cookie-pop-up");
const webPage = $("body");

btnAcceptCookies.click(() => {
    hideCookiePopUp();
    sessionStorage.setItem("cookieAccepted", "true");
    enableScroll();
    console.log("Cookie should be stored for the session");
});

btnChangeSettings.click(() => {
    console.log("Change Settings clicked");
});

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
    // Check if the user has not accepted cookies for the session
    if (!sessionStorage.getItem("cookieAccepted")) {
        console.log("Cookie not here");
        showCookiePopUp();
        disableScroll();
    } else {
        // Cookies have been accepted for the session, hide the popup
        hideCookiePopUp();
        enableScroll();
    }
}

// Run the cookieMessage function on document ready
$(document).ready(cookieMessage);
