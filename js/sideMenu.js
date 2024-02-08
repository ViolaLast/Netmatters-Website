function toggleSidebar() {
    var sidebar = $('.side-bar');
    var content = $('.content');
    var overlay = $('.overlay');
    var body = $('body');

    sidebar.toggleClass('active');
    overlay.toggleClass('active');

    // Move content to the left when side menu is open
    var translateX = sidebar.hasClass('active') ? '-250px' : '0';
    content.css({
        'transform': 'translateX(' + translateX + ')',
        transition: 'transform 0.3s ease'
    });

    // Toggle no-scroll class on body
    body.toggleClass('no-scroll', sidebar.hasClass('active'));
}
