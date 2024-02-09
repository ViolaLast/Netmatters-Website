$(document).ready(function () {
    var $sideBar = $('.side-bar');
    var $content = $('.content');
    var $inner = $('.inner');
    
    function updateStyles() {
        var isSideMenuActive = $sideBar.hasClass('active');

        // Move content to the left when side menu is open
        var translateX = isSideMenuActive ? '-260px' : '0';
        $content.css({
            'transform': 'translateX(' + translateX + ')',
            transition: 'transform 0.3s ease'
        });

        //  margin-right
        $inner.css('margin-right', isSideMenuActive ? '260px' : '0');
    }

    updateStyles();

    $(window).scroll(updateStyles);
});
