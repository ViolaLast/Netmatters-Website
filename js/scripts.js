//=====================================================================Carousel Slides===========================================================================//

$ (".carousel__viewport").slick({
autoplay:true,
autoplaySpeed:4000,
arrows:false,
dots:true,

});
//==========================================================================autoplay slides===================================================================================//
  $('.autoplay').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    variableWidth: true,
    swipe: false,
    infinite: true,
    slidesToScroll: 1
  });

//==========================================================================Client Slide===============================================================//

$('.play').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  swipe: false,
  infinite: true,
  variableWidth: true,
  prevArrow: false,
  nextArrow: false,
  draggable: false
});

//========================================================================DropDown==========================================================================================//

    $(document).ready(function() {
        $(".dropDown").click(function(event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag
            var dropDownText = $(this).closest(".out-of-hours").find(".dropDownText");
            if (dropDownText.is(":hidden")) {
                dropDownText.slideDown();
            } else {
                dropDownText.slideUp();
            }
        });
    });




//=============================================================================TickBox===============================================================================================//
// click event listener
document.querySelector('.tick').addEventListener('click', function () {
  toggleCheckbox();
});

function toggleCheckbox() {
  var checkbox = document.getElementById('myCheckbox');
  var checkedContainer = checkbox.querySelector('.checked');

  // display checked container
  checkedContainer.style.display = checkedContainer.style.display === 'none' ? 'inline-flex' : 'none';
}
