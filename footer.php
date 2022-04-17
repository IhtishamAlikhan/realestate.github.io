 <div class="container-fluid footer_sec footer_container mt-5">
        
        <div class="desktop_footer">    
            <div class="black_morerow">
              <div class="row">
                   <div class="col-sm-4">
                       <p class="footer_record">SR ELITE INFRA.</p>
                       <p class="footer_record">4517 Washington Ave. Manchester, Kentucky 39495</p>
                   </div>
                   <div class="col-sm-4">
                        <div class="footer_imgsec">
                             <img src="footernewlogo.png">
                        </div>
                   </div>
                   <div class="col-sm-4 aboutus_coldata">
                        <ul class="footer_li">
                            <li class="footer_record"><a href="main.php">About Us</a></li>
                            <li class="footer_record"><a href="secondpage.php">Projects</a></li>
                            
                <!--            <li class="nav-item dropdown">-->
                <!--                <a class="nav-link project_footer dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--                    Projects-->
                <!--                 </a>-->
                <!--            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">-->
                <!--                <a class="dropdown-item" href="#">Action</a>-->
                <!--                <a class="dropdown-item" href="#">Another action</a>-->
                <!--                <a class="dropdown-item" href="#">Something else here</a>-->
                <!--            </div>-->
                <!--</li>-->
                            <li class="footer_record"><a href="thirdpage.php">Contact Us</a></li>
                        </ul>
                  </div>
              </div>
            </div>
            
            
         </div>
         
          
          <div class="tablet_footernew">    
          
            <div class="black_morerow">
              <div class="row">
                  
                   <div class="col-sm-4">
                        <div class="footer_imgsec_new text-center">
                             <img src="footernewlogo.png">
                        </div>
                   </div>
                   
                  
                   <div class="col-sm-5 center_footertablet">
                       
                       <p class="footer_record">SR ELITE INFRA.</p>
                       <p class="footer_record">4517 Washington Ave. Manchester, Kentucky 39495</p>
                   </div>
                   
                  
                   <div class="col-sm-3 aboutus_coldata_new">
                        <ul>
                            <li class="footer_record"><a href="main.php">About Us</a></li>
                            <li class="footer_record"><a href="secondpage.php">Projects</a></li>
                            <li class="footer_record"><a href="thirdpage.php">Contact Us</a></li>
                        </ul>
                  </div>
                  
              </div>
            </div>
            
            
         </div>
         
         
         
         
    </div>     
         
    <div class="container-fluid pl-0 pr-0 ">
        
          <div class="row copyright_data">
                 <div class="col-sm-12 footer_reserved pt-4 pb-2 ">
                     <p>© 2021 All right reserved</p>
                 </div>
            </div>
    </div>    
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="owlcarousel/owl.carousel.js"></script>

<script src="owlcarousel/owl.carousel.min.js"></script>

<script>
    
    $('.project_btn').click(function(e){
         e.stopPropagation();
         if($(this).hasClass('active'))
           {
             $(this).removeClass('active');
           $('.drop_downwhite').hide();
           }else{ 
            $(this).addClass('active');
            $('.drop_downwhite').css("display", "flex");
           }
    });

 $(document).click(function(){
           $('.project_btn').removeClass('active');
           $('.drop_downwhite').hide();
    });
    

    
    // $('.project_btn').mouseleave(function(){
        
    //       $('.drop_downwhite').hide();
        
    // });
    
    
//     $(document).ready(function(){
//   $(".owl-carousel").owlCarousel();
// });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

 $('.counting_sec ul li').click(function(){
           if($(this).hasClass('active'))
           {
             $('.counting_sec ul li').css({"background":"#F0F3F6 ","color":"#272F39"});
             $(this).removeClass('active');
             $(this).css({"background":"#F0F3F6 ","color":"#272F39"});
           }else{
              $('.counting_sec ul li').css({"background":"#F0F3F6 ","color":"#272F39"}); 
             $(this).addClass('active');
             $(this).css({"background":"#CF9C53 ","color":"#fff"});
           }
    });
   
</script>

<script type="text/javascript">
$(document).ready(function () {
    //to disable the entire page
    $("body").on("contextmenu",function(e){
        return false;
    });
    
    //to disable a section
    $("#id").on("contextmenu",function(e){
        return false;
    });
});
</script>