$(document).ready(function () {
    var $originalHeader = $('#myHeader');
    var $duplicateHeader = $originalHeader.clone().attr('id', 'duplicateHeader').appendTo('body');
    var $cookiePopUp = $('.cookie-pop-up');
    var $sideBar = $('.side-bar');
    var $content = $('.content');
    var lastScrollTop = 0;

    function updateDuplicateHeader() {
        var isCookiePopUpVisible = $cookiePopUp.is(':visible');
        var isSideMenuActive = $sideBar.hasClass('active');
        var scrollTop = $(window).scrollTop();

        if (!isCookiePopUpVisible) {
            if (scrollTop > lastScrollTop) {
                // Scrolling down, hide the duplicate header
                $duplicateHeader.css({
                    position: 'fixed',
                    top: '-100%',
                    transition: 'top 0.3s ease',
                    'z-index': '50',
                    'margin-right': '0'
                });

                // Move content to the right when side menu is closed
                $content.css({
                    'margin-left': '0',
                    transition: 'margin-left 0.3s ease'
                });
            } else {
                // Scrolling up, show the duplicate header
                $duplicateHeader.css({
                    position: isSideMenuActive ? 'relative' : 'fixed',
                    top: '0',
                    transition: 'top 0.3s ease',
                    'z-index': '50',
                    'margin-right': isSideMenuActive ? (window.innerWidth < 992 ? '260px' : '350px') : '0'
                });

                // Move content to the right when side menu is closed
                $content.css({
                    'margin-left': '0',
                    transition: 'margin-left 0.3s ease'
                });
            }

            lastScrollTop = scrollTop;
        } else {
            // Hide the duplicate header when the cookie pop-up is active
            $duplicateHeader.css({
                position: 'fixed',
                top: '-100%',
                transition: 'top 0.3s ease',
                'z-index': '50',
                'margin-right': '0'
            });

            // Move content to the right when the side menu is open
            var sidebarWidth = isSideMenuActive ? (window.innerWidth < 992 ? '260px' : '350px') : '0';
            $content.css({
                'margin-left': sidebarWidth,
                transition: 'margin-left 0.3s ease'
            });
        }

        // Set the display property based on visibility
        $duplicateHeader.css('display', isCookiePopUpVisible ? 'none' : 'block');
    }

    // Function to show the duplicate header
    function showDuplicateHeader() {
        $duplicateHeader.show();
    }

    // Event listener for the cookie button
    $('.cookie-btn').on('click', function () {
        if ($cookiePopUp.is(':visible')) {
            // Cookie popup is visible, hide the duplicate header
            hideDuplicateHeader();
        } else {
            // Cookie popup is not visible, show the duplicate header
            showDuplicateHeader();
        }
    });

    // Initial positioning of the duplicate header
    updateDuplicateHeader();

    $(window).scroll(updateDuplicateHeader);
});

// Function to hide the duplicate header
function hideDuplicateHeader() {
    $('#duplicateHeader').css({
        position: 'fixed',
        top: '-100%',
        transition: 'top 0.3s ease',
        'z-index': '0',
        'margin-right': '0'
    });
}
