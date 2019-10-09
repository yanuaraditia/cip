<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
    $(document).ready(function() {
    $(".navbar-burger").click(function() {
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
          $.ajax({
              type:'POST',
              url:'calc_distance.php',
              data:'latitude='+latitude+'&longitude='+longitude,
              success:function(msg){
                  if(msg){
                    $("#location").html(msg);
                  }else{
                      $("#location").html('Not Available');
                  }
              }
          });
      }
      </script>
</body>