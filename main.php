 <?php require_once('head.php'); ?>
<body>
    <div class="container-fluid main_container">

  <div class="wrapper main_wrapper">
      
      <?php require_once('header.php'); ?>
      <?php require_once('bannerinclude.php') ?>
      
  </div>



  <!--  <div class="container read_more_container">-->
  <!--      <div class="row read_morerow">-->
            
  <!--          <div class="col-sm-2">-->
  <!--              <div class="read_more">-->
  <!--                  <img src="websitelogo.jpeg">-->
  <!--              </div>-->
  <!--          </div>-->
  <!--          <div class="col-sm-7 readmoretext_col">-->
  <!--              <p>-->
  <!--                 Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.-->
  <!--              </p>-->
  <!--          </div>-->
  <!--          <div class="col-sm-3 mt-4">-->
  <!--              <button class="btn btn-primary read_morebtn">Read More</button>-->
  <!--          </div>-->

  <!--      </div>-->
  <!--</div>-->
  
  
  
    <div class="readmore_col">
        <div class="read_morerow">
            <div class="row">
                <div class="col-sm-2">
                    <div class="read_more">
                        <img src="websitelogo.jpeg">
                    </div>
                </div>
                
                <div class="col-sm-7 readmoretext_col">
                    <p>
                       Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                    </p>
                </div>
                
                <div class="col-sm-3 mt-4 text-right">
                    <button class="btn btn-primary read_morebtn" style="clip-path:  polygon(12% 0%, 100% 0, 100% 100%, 0% 100%)">Read More</button>
                </div>
            </div>
        </div>
  </div>

   <div class="blackwrapper blackdata">
      <div class="black_morerow"> 
          <div class="row ">
             <div class="col-md-6 col-lg-3 projects_data">
                  <h5 class="project_data">Projects</h5>
                  <h5 class="project_no">1478</h5>
             </div>
             
             <div class="col-md-6 col-lg-3 projects_data">
                   <h5 class="project_data">Completed Sq.Ft.</h5>
                   <h5 class="project_no">400 000</h5>
             </div>
             <div class="col-md-6 col-lg-3 projects_data">
                  <h5 class="project_data">Under Construction</h5>
                  <h5 class="project_no">764</h5>
             </div>
             <div class="col-md-6 col-lg-3 projects_data">
                 <h5 class="project_data">Upcoming</h5>
                  <h5 class="project_no">1021</h5>
             </div>
          </div>
      </div>
   </div>


        <div class="company_detail_demo">
            
           <div class="black_morerow">
            <div class="row">
                <?php for($i=1;$i<=4;$i++){ ?>
                <div class="col-sm-6 mt-5">
                    <div class="completedcard"> 
                        <div class="completed_text">
                           
                           <div class="completed_data">
                               <p class="completed_span compeleted_span_new p-1">completed</p>
                           </div>
                               
                           
                        </div>
                        
                        <div class="row img_data_new">
                            
                            <div class="col-sm-12 col-md-12 col-lg-2 company_logo">
                                <img src="logopalace.png">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-8 card_col_completed">
                              <h5>Amet minim mollit non</h5>
                               <p>Santa Ana</p>
                            </div>

                            <div class="col-sm-12 main_card_logo">
                                  <img src="poolimg.png">
                            </div>

                            <div style="padding: 10px 15px 1px 15px;">
                                <p>Amet minim amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                <div>
                                    <ul class="learn_more_btn" style="padding-left:0;">
    
                                        <li class="data1">
                                            <a href="" class="btn btn-primary learnmorebroucher"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Download Brochure (2.3 Mb,pdf)</a>
                                        </li>
    
                                        <li class="data2_new">
                                              <a href="" class="btn btn-primary learnmorebroucher">Learn More</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            


                        </div>

                    </div> 
                </div>
                 <?php } ?>
            </div>
          </div>
          
        </div>
        
         <div class="container">
             <div class="col-sm-12 showmore_btn">
                <a href="" class="btn btn-primary showmoredata">Show more</a>
             </div>
         </div>
         
         <div class="customer_say">
            
            <div class="testimonial_container"> 
             <h2 class="testimonial_heading">What Our Customers Say?</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                	<!-- Carousel indicators -->
                	<ol class="carousel-indicators">
                		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                		<li data-target="#myCarousel" data-slide-to="1"></li>
                		<!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
                	</ol>   
                	<!-- Wrapper for carousel items -->
                	<div class="carousel-inner testimonial_carosule_inner">
                	    		
                		<div class="carousel-item active">
                			
                		<div class="row">	
                			<div class="col-sm-3">
                			    <div class="img-box"><img src="testimonalimg.png"></div>
                			</div>
                			
                			<div class="col-sm-7">
                			    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                			    <p class="overview"><b>Michael Holz</b>Project Manager, Microsoft</p>
                			</div>
                			
                			
                			<div class="col-sm-2">
                			   <div class="comma_img">
                			       <img src="commas.png">
                			   </div>
                			</div>
                		</div>
                			
                		</div>
                		
                		
                			<div class="carousel-item">
                			
                		<div class="row">	
                			<div class="col-sm-3">
                			    <div class="img-box"><img src="testimonalimg.png"></div>
                			</div>
                			
                			<div class="col-sm-7">
                			    <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                			    <p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>
                			</div>
                			
                			
                			<div class="col-sm-2">
                			   <div class="comma_img">
                			       <img src="commas.png">
                			   </div>
                			</div>
                		</div>
                		
                		</div>
                		
                	
                	</div>
                	
                	
                </div>
             </div>
         </div>
         
          <div class="wrpr_contact">
             
             <div class="black_morerow contactus_blackmore">
                 
                 <div class="contactus">
                     <h3>Contact Us</h3>
                 </div>
             
                 <div class="contact_form">
                       <form>
                              <div class="row">
                                    
                                    <div class="col" style="padding: 0;">
                                      <input type="text" class="form-control name_form" placeholder="Name">
                                    </div>
                                    
                                    <div class="col" style="padding-right: 0;">
                                      <input type="text" class="form-control name_form" placeholder="Phone">
                                    </div>
                              </div>
                              
                            <div class="form-group mt-2">
                                    <textarea class="form-control name_form" id="exampleFormControlTextarea1" rows="4" placeholder="Comments"></textarea>
                            </div>
                            
                            <div class="row">
                                    
                                 <p class="col-sm-6" style="padding-left:0 !important">Amet minim mollit non deserunt</p>
                                
                                <div class="col-sm-6 contact_send_btn" style="padding-right: 0;padding-left:0 !important">
                                  <button type="button" class="btn btn-primary send_formbtn">Send</button>
                                </div>
                                
                            </div>
                            
                              
                        </form>
                 </div>
             </div>
         </div>
         
  
         
  </div>
    <?php require_once('footer.php'); ?>
</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>