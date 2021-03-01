 <script src="js/jquery-3.1.1.min.js"></script>
 <script src="js/parallax.js"></script>
 <script src="js/smooth-scroll.min.js"></script>
 <script src="js/scripts.js"></script>
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <!-- Initialize Swiper -->
 <script>
     var swiper = new Swiper('.swiper-container', {
         slidesPerView: 1,
         spaceBetween: 8,
         // init: false,
         pagination: {
             el: '.swiper-pagination',
             clickable: true,
         },
         breakpoints: {
             640: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             768: {
                 slidesPerView: 4,
                 spaceBetween: 40,
             },
             1024: {
                 slidesPerView: 5,
                 spaceBetween: 50,
             },
         }
     });
 </script>