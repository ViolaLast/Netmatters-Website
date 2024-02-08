function toggleSidebar() {
    var sidebar = $('.side-bar');
    var content = $('.content');
    var overlay = $('.overlay');
    var body = $('body');

    sidebar.toggleClass('active');
    overlay.toggleClass('active');

    // Get the total width of the side menu (including padding and border)
    var sidebarTotalWidth = window.innerWidth >= 992 ? 350 : 260;

    // Move content to the left when side menu is open
    var translateX = sidebar.hasClass('active') ? '-' + sidebarTotalWidth + 'px' : '0';
    content.css({
        'transform': 'translateX(' + translateX + ')',
        transition: 'transform 0.5s ease'
    });

    // Toggle no-scroll class on body
    body.toggleClass('no-scroll', sidebar.hasClass('active'));
}