<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?> 
    <label id="location"></label>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
    $(document).ready(function() {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
    });
        (function($){
        $(function(){  
            var scroll = $(document).scrollTop();
            var headerHeight = $('#navigation').outerHeight();
            
            $(window).scroll(function() {
            var scrolled = $(document).scrollTop();
            if (scrolled > headerHeight){
                $('#navigation').addClass('off-canvas');
                $('#search').addClass('is-fixed-top');
            } else {
                $('#navigation').removeClass('off-canvas');
                $('#search').removeClass('is-fixed-top');
            }

                if (scrolled > scroll){
                $('#navigation').addClass('ce');
                } else {
                $('#navigation').removeClass('off-canvas');
                $('#search').removeClass('is-fixed-top');
                }             
            scroll = $(document).scrollTop();  
            });
            
        });
        })(jQuery); 
    </script>
    <script>
      $(document).ready(function(){
          if(navigator.geolocation){
              navigator.geolocation.getCurrentPosition(showLocation);
          }else{ 
              $('#location').html('Geolocation is not supported by this browser.');
          }
      });

      function showLocation(position){
          var latitude = position.coords.latitude;
          var longitude = position.coords.longitude;
          $('#location').load('distance_calc?latitude='+latitude+'&longitude='+longitude);
      }
      </script>
</body>