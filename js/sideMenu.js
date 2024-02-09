$(document).ready(function () {
    // Function to toggle sidebar and overlay
    function toggleSidebar() {
        var sidebar = $('.side-bar');
        var content = $('.content');
        var overlay = $('.overlay');
        var body = $('body');
        var hamburgerButton = $('.hamburger-button');

        sidebar.toggleClass('active');
        overlay.toggleClass('active');

        // Get the total width of the side menu (including padding and border)
        var sidebarTotalWidth = window.innerWidth >= 992 ? 350 : 260;

        // Move content to the left when side menu is open
        var translateX = sidebar.hasClass('active') ? '-' + sidebarTotalWidth + 'px' : '0';
        content.css({
            'transform': 'translateX(' + translateX + ')',
            transition: 'transform 0.3s ease'
        });

        // Toggle no-scroll class on body
        body.toggleClass('no-scroll', sidebar.hasClass('active'));

        // Activate/deactivate hamburger button styles
        hamburgerButton.toggleClass('hamburger-active', sidebar.hasClass('active'));
    }

    // Attach click events to the overlay and hamburger button
    $('.overlay').on('click', toggleSidebar);
    $('.hamburger-button').on('click', toggleSidebar);

    // Prevent body click event when clicking inside the sidebar
    $('.side-bar').on('click', function (e) {
        e.stopPropagation();
    });
});
