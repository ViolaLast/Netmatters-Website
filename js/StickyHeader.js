$(document).ready(function () {
    var $originalHeader = $('#myHeader');
    var $duplicateHeader = $originalHeader.clone().attr('id', 'duplicateHeader').appendTo('body');
    var $cookiePopUp = $('.cookie-pop-up');
    var $sideBar = $('.side-bar');
    var $content = $('.content');
    var lastScrollTop = 0;

    function updateDuplicateHeader() {
        // Check if the cookie popup is visible
        var isCookiePopUpVisible = $cookiePopUp.is(':visible');
        // Check if the side menu is active
        var isSideMenuActive = $sideBar.hasClass('active');

        if (!isCookiePopUpVisible) {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > lastScrollTop) {
                // Scrolling down, hide the duplicate header
                $duplicateHeader.css({
                    position: 'fixed',
                    top: '-100%',
                    transition: 'top 0.3s ease',
                    'z-index': '50'
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
                    'z-index': '50'
                });

                // Move content to the right when side menu is closed
                $content.css({
                    'margin-left': '0',
                    transition: 'margin-left 0.3s ease'
                });
            }

            lastScrollTop = scrollTop;
        } else {
            // Move content to the right when side menu is open
            var sidebarWidth = isSideMenuActive ? 260 : 0; // Adjust based on your sidebar width
            $content.css({
                'margin-left': sidebarWidth + 'px',
                transition: 'margin-left 0.3s ease'
            });

            // Move duplicate header with content
            $duplicateHeader.css({
                'margin-right': sidebarWidth + 'px',
                transition: 'margin-right 0.3s ease'
            });
        }
    }

    // Initial positioning of the duplicate header
    updateDuplicateHeader();

    $(window).scroll(updateDuplicateHeader);
});
