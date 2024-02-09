// Function to toggle sidebar and overlay
function toggleSidebar() {
    var sidebar = $('.side-bar');
    var content = $('.content');
    var overlay = $('.overlay');
    var body = $('body');
    var hamburgerButton = $('.hamburger-button');
    var duplicateHeader = $('#duplicateHeader'); // Add this line to select the duplicate header

    sidebar.toggleClass('active');
    overlay.toggleClass('active');

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

    // Hide the duplicate header when the sidebar is toggled
    duplicateHeader.toggle(!sidebar.hasClass('active')); // Toggle visibility based on sidebar class
}
