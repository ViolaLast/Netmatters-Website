window.onscroll = function() {
    myFunction();
  };

  var header = document.getElementById("myHeader");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }

    header.classList.add("show");
  }

//==================================================================Cookie pop up==============================================================//
$(document).ready(function() {
    // When the btn-accept button is clicked
    $('.btn-accept a').on('click', function() {
        $('.cookie-pop-up').addClass('fade-out');
    });
});