function toggleSidebar() {
    var sidebar = $('.side-bar');
    var content = $('.content');
    var overlay = $('.overlay');
    var body = $('body');
    var hamburgerButton = $('.hamburger-button');
    var duplicateHeader = $('#duplicateHeader'); // select the duplicate header

    sidebar.toggleClass('active');
    overlay.toggleClass('active');

    // Set the z-index for the sidebar and overlay
    var zIndex = sidebar.hasClass('active') ? 1001 : ''; // Set a high value when active, or empty string when inactive

    sidebar.css('z-index', zIndex);
    overlay.css('z-index', zIndex);

    // total width of the side menu
    var sidebarTotalWidth = window.innerWidth >= 992 ? 350 : 260;

    // Move content to the left
    var translateX = sidebar.hasClass('active') ? '-' + sidebarTotalWidth + 'px' : '0';
    content.css({
        'transform': 'translateX(' + translateX + ')',
        transition: 'transform 0.3s ease'
    });

    // no-scroll class on body
    body.toggleClass('no-scroll', sidebar.hasClass('active'));

    // Activate/deactivate hamburger button styles
    hamburgerButton.toggleClass('hamburger-active', sidebar.hasClass('active'));

    // Adjust margin-right of the duplicate header when the sidebar is active
    duplicateHeader.css('margin-right', sidebar.hasClass('active') ? sidebarTotalWidth + 'px' : '0');

    
}
