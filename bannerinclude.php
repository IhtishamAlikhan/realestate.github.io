      
      
      <?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
      
         $pageul=$uriSegments['2'];
      ?>
      
      <div class="carosuel_data">
                  <div id="demo1" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo1" data-slide-to="0" class="active main_carousel_indicator"></li>
                            <li data-target="#demo1" data-slide-to="1" class="main_carousel_indicator"></li>
                            <!-- <li data-target="#demo1" data-slide-to="2" class="main_carousel_indicator"></li> -->
                        </ul>
                        
                        <!-- The slideshow -->
                        
                        <?php if($pageul=="secondpage.php"){
                            
                               $carosueldata='carousel_data_second';
                              
                              }else if( $pageul=="thirdpage.php"){
                                  
                                $carosueldata='carousel_data_third';
                                   
                              }else{
                                  
                               $carosueldata='carousel_data';
                               
                              }
                        ?>
                     
                        <div class="carousel-inner  <?php echo $carosueldata?>">
                            
                            <?php if($pageul=="thirdpage.php"){ ?>
                            
                              <div class="row third_datacarosuelrow">
                                  
                                   <ul class="carosuel_dataimg">
                                       <li class="imgli_data">
                                               <img src="logopalace.png">
                                        </li>
                                        <li class="secondli">
                                             <strong><p>Amet minim mollit non</p></strong>
                                             <p>2972 Westheimer Rd. Santa Ana, Illinois 85486 </p>
                                         </li>
                                   </ul>
                                   
                             </div>
                             
                             <?php } ?>
                            <?php for($i=1;$i<3;$i++){?>
                            <div class="carousel-item <?php if($i==1){?> active <?php } ?>">
                            <img src="<?php if($i==1){ echo "carouselmain_image2.png"; }else{echo "carouselmain_image1.png";} ?>" class="carosuel_main_image" alt="Los Angeles" width="100%" >
                            
                              <?php if($pageul=="main.php"){ ?>
                              <div class="learn_morediv_new">
            
                                   <div class="row">   
                                   
                                        <div class="col-sm-5 col-xs-12 col_data1">
                                             
                                             <ul class="learnmore_url">
                                                 <li class="firstli">
                                                     <div class="place_logo">
                                                          <img src="logopalace.png">
                                                     </div>
                                                 </li>
                                                 
                                                 <li class="ml-2 completed_newli">
                                                     <div>
                                                         <span><strong style="color: black;">Amet minim mollit non</strong></span><br>
                                                     <span>Santa Ana</span><br>
                                                      <span class="completed_span_new">Completed</span>
                                                      <button style="padding: 4px !important;margin-left: 20px;" type="button" class=" hideondesktop">Learn more</button>
                                                     </div>
                                                     
                                                      
                                              
                                                 </li>
                                                 
                                                
                                             </ul>
                                             
                                        </div>
                                         
                                         <div class="col-sm-7 learnmorewrpr col_data1">
                                             
                                             <div class="colnewdata">
                                                <button type="button" class="btn btn-primary learn_morebtn">Learn more</button>
                                              </div>
                                              
                                         </div>
                                     
                                    </div> 
            
                            </div>
                              
                              <?php } ?>
                             
                            </div>
                            <?php } ?>
                            
                            <!--<div class="carousel-item">-->
                            <!--`<img src="carouselmain_image1.png" alt="Chicago" class="carosuel_main_image" width="100%">-->
                              
                            <!--    <?php if($pageul=="main.php"){ ?>-->
                            <!--  <div class="learn_morediv_new">-->
                                   
                            <!--        <div class="row">   -->
                                   
                            <!--             <div class="col-sm-5 col_data1">-->
                                             
                            <!--                 <ul class="learnmore_url">-->
                            <!--                     <li class="firstli">-->
                            <!--                         <div class="place_logo">-->
                            <!--                              <img src="logopalace.png">-->
                            <!--                         </div>-->
                            <!--                     </li>-->
                                                 
                            <!--                     <li class="ml-2 completed_newli">-->
                            <!--                         <span><strong style="color: black;">Amet minim mollit non</strong></span><br>-->
                            <!--                         <span>Santa Ana</span><br>-->
                            <!--                          <span class="completed_span_new">Completed</span>-->
                            <!--                     </li>-->
                                                
                            <!--                 </ul>-->
                                             
                            <!--             </div>-->
                                         
                            <!--             <div class="col-sm-7 col_data1">-->
                                             
                            <!--                 <div class="colnewdata">-->
                            <!--                    <button type="button" class="btn btn-primary learn_morebtn">Learn more</button>-->
                            <!--                  </div>-->
                                              
                            <!--             </div>-->
                                     
                            <!--        </div> -->
                                 
            
                            <!--</div>-->
                            <!--   <?php } ?>-->
                            
                            <!--</div>-->
                        
                        </div>
                        
        
                        <!-- Left and right controls -->
                        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a> -->
                    </div>
                    
            
                    
     </div>