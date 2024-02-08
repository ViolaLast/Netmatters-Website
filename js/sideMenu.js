function toggleSidebar() {
    var sidebar = document.querySelector('.side-bar');
    var overlay = document.querySelector('.overlay');
    var content = document.querySelector('.content');
  
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');
    content.classList.toggle('active');
  
    if (sidebar.classList.contains('active')) {
        document.body.style.overflowY = 'hidden'; // Disable scrolling on the y-axis for the entire body
        content.style.marginRight = '250px'; // Adjust based on your sidebar width
    } else {
        document.body.style.overflowY = 'auto'; // Enable scrolling on the y-axis for the entire body
        content.style.marginRight = '0';
    }
  }
  
  function closeSidebar() {
    var sidebar = document.querySelector('.side-bar');
    var overlay = document.querySelector('.overlay');
    var content = document.querySelector('.content');
  
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
    content.classList.remove('active');
    document.body.style.overflowY = 'auto'; // Enable scrolling on the y-axis for the entire body
    content.style.marginRight = '0';
  }
  