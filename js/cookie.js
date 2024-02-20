const btnAcceptCookies = $(".btn-acceptcookies");
const btnChangeSettings = $(".btn-change");
const cookiePopUp = $(".cookie-pop-up");
const webPage = $("body");
const btnManageConsent = $(".cookie-btn");

function hideCookiePopUp() {
    cookiePopUp.hide();
}

function showCookiePopUp() {
    cookiePopUp.css('display', 'flex');
}

function disableScroll() {
    webPage.addClass("no-scroll");
}

function enableScroll() {
    webPage.removeClass("no-scroll");
}

function cookieMessage() {
    // Check if the user has not accepted cookies persistently
    if (!localStorage.getItem("cookieAccepted")) {
        console.log("Cookie not here");
        showCookiePopUp();
        disableScroll();
    } else {
        // Cookies have been accepted persistently, hide the popup
        hideCookiePopUp();
        enableScroll();
    }
}

// Run the cookieMessage function on document ready
$(document).ready(cookieMessage);

// Add the following event handler to make the cookie pop-up reappear when "Manage Consent" is clicked
btnManageConsent.click(() => {
    if (!localStorage.getItem("cookieAccepted")) {
        showCookiePopUp();
        disableScroll();
    }
});

btnAcceptCookies.click(() => {
    hideCookiePopUp();
    localStorage.setItem("cookieAccepted", "true");
    enableScroll();
    console.log("Cookie should be stored persistently");
});

btnChangeSettings.click(() => {
    console.log("Change Settings clicked");
});

btnManageConsent.click(() => {
    console.log("Manage Consent clicked");
    showCookiePopUp();
    disableScroll();
});
