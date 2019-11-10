<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?> 
    <footer class="section">
        <div class="container">
            <p><b>Indonesia</b>: Condongcatur, Depok, Sleman, Yogyakarta 55598</p>
            <hr>
            <p><b>Copyright &copy; 2020 by Sarana Teknotama</b></p>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo base_url().'/asset/jquery.min.js';?>"></script>
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
              url:'<?php echo base_url();?>Distance',
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
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("result").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest) {
                xmlhttp=new XMLHttpRequest();
            } else {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("result").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","<?php echo base_url('MainPage/cari');?>?q="+str,true);
            xmlhttp.send();
        }
    </script>
</body>