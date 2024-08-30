// (function($) {
//     $(function() {
 
//       //  open and close nav
//       $('#navbar-toggle').click(function() {
//         $('nav ul').slideToggle();
//       });
 
 
//       // Hamburger toggle
//       $('#navbar-toggle').on('click', function() {
//         this.classList.toggle('active');
//       });
 
 
//       // If a link has a dropdown, add sub menu toggle.
//       $('nav ul li a:not(:only-child)').click(function(e) {
//         $(this).siblings('.navbar-dropdown').slideToggle("slow");
 
//         // Close dropdown when select another dropdown
//         $('.navbar-dropdown').not($(this).siblings()).hide("slow");
//         e.stopPropagation();
//       });
 
 
//       // Click outside the dropdown will remove the dropdown class
//       $('html').click(function() {
//         $('.navbar-dropdown').hide();
//       });
//     });
//   })(jQuery);

// Function to check if an element is in view
// function isInView(element) {
// const rect = element.getBoundingClientRect();
// return (
//   rect.top >= 0 &&
//   rect.left >= 0 &&
//   rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//   rect.right <= (window.innerWidth || document.documentElement.clientWidth)
// );
// }

// // Function to add 'in-view' class to elements
// function checkAnimation1() {
// const elements = document.querySelectorAll('.animated-element');
// elements.forEach(element => {
//   if (isInView(element)) {
//     element.classList.add('in-view');
//   }
// });
// }

// // Function to add 'in-view-2' class to elements
// function checkAnimation2() {
// const elements = document.querySelectorAll('.animated-element-2');
// elements.forEach(element => {
//   if (isInView(element)) {
//     element.classList.add('in-view-2');
//   }
// });
// }

// // Listen for scroll events
// window.addEventListener('scroll', checkAnimation1);
// window.addEventListener('scroll', checkAnimation2);

// // Initial check on page load
// checkAnimation1();
// checkAnimation2();