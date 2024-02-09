const btnAcceptCookies = $(".btn-acceptcookies");
const btnChangeSettings = $(".btn-change");
const cookiePopUp = $(".cookie-pop-up");
const webPage = $("body");
const btnManageConsent = $(".cookie-btn");

btnAcceptCookies.click(() => {
    hideCookiePopUp();
    sessionStorage.setItem("cookieAccepted", "true");
    enableScroll();
    console.log("Cookie should be stored for the session");
});

btnChangeSettings.click(() => {
    console.log("Change Settings clicked");
});

btnManageConsent.click(() => {
    console.log("Manage Consent clicked");
    showCookiePopUp();
    disableScroll();
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

// Add the following event handler to make the cookie pop-up reappear when "Manage Consent" is clicked
btnManageConsent.click(() => {
    showCookiePopUp();
    disableScroll();
});
