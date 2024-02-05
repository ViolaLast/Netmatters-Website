

// $(document).ready(function () {
//   var $originalHeader = $('#myHeader');
//   var $duplicateHeader = $originalHeader.clone().attr('id', 'duplicateHeader').appendTo('body');
//   var lastScrollTop = 0;

//   function updateDuplicateHeader() {
//     var scrollTop = $(window).scrollTop();

//     if (scrollTop > lastScrollTop) {
//       // Scrolling down, hide the duplicate header
//       $duplicateHeader.css({
//         position: 'fixed',
//         top: '-100%',
//         transition: 'top 0.3s ease',
//         'z-index': '300' // Adjust the z-index value as needed
//       });
//     } else {
//       // Scrolling up, show the duplicate header
//       $duplicateHeader.css({
//         position: 'fixed',
//         top: '0',
//         transition: 'top 0.3s ease',
//         'z-index': '300' // Adjust the z-index value as needed
//       });
//     }

//     lastScrollTop = scrollTop;
//   }

//   // Initial positioning of the duplicate header
//   updateDuplicateHeader();

//   $(window).scroll(updateDuplicateHeader);
// });
