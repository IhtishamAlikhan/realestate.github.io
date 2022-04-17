<style>
    .drop_downwhite{
    display:none;
}

.project_btn:hover + .drop_downwhite {
    display: flex;
}
.uprul{display: flex;width: 320px;margin: 0 auto;margin-top: 20px;margin-bottom: 17px;padding:0;}
.uprul li{list-style-type: none;}
.uprul a{color: black;}
.carosuel_main_image{height:500px;}
</style>
<div class="row">
          <div class="img_wrapper_logo">
            <img src="websitenewlogo.png">
          </div>
      </div>

     <!-- <nav class="navbar navbar-expand-lg navbar-light nav_bar_toggle">-->
 
     <!--       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">-->
     <!--           <span class="navbar-toggler-icon"></span>-->
     <!--       </button>-->
            
     <!--       <div class="collapse navbar-collapse" id="navbarNavDropdown">-->
     <!--           <ul class="navbar-nav aboutus_navbar">-->

     <!--           <li class="nav-item nav_data active">-->
     <!--               <a class="nav-link" href="#">About Us</a>-->
     <!--           </li>-->
                
     <!--           <li class="nav-item nav_data dropdown">-->
     <!--               <a class="nav-link dropdown-toggle project_btn" href="#" aria-haspopup="true" aria-expanded="false">-->
     <!--                   Projects-->
     <!--               </a>-->
                   
     <!--           </li>-->
                
     <!--           <li class="nav-item nav_data">-->
     <!--               <a class="nav-link" href="#">Contact Us</a>-->
     <!--           </li>-->
                
     <!--           </ul>-->
     <!--       </div>-->
            
     <!--</nav>-->
      
      <ul class="uprul" style="">

            <li class=" active">
                <a class="nav-link" href="#">About Us</a>
            </li>
            
            <li class=" dropdown">
                <a class="nav-link dropdown-toggle project_btn" href="#" aria-haspopup="true" aria-expanded="false">
                    Projects
                </a>
               
            </li>
            
            <li class="">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        
        </ul>
     
     
    <div style="position: absolute;z-index: 99; width: 95%; margin: 0 auto;left: 0; right: 0;box-shadow: 4px 4px 4px #cccc;">
         <div class="row drop_downwhite">
      
             <div class="col-sm-4 project_dropdown">    
                <h6>Current Projects</h6>
                   
                  <?php 
                    $k=1;
                  for($i=1;$i<=6;$i++){
                    if($k==1)
                    {
                        $margin='mt-5';
                    }else{
                        $margin='';
                    }
                  ?> 
                  <ul class="current_projectdata <?php echo $margin?>">
                      
                      <li>
                          <div class="webistesmall_logo">
                              <img src="logopalace.png">
                          </div>
                      </li>
                      
                      <li class="headerlinknew">
                          <a href="">
                          <span><strong>Amet minim mollit non</strong></span><br>
                          <span>Santa Ana</span>
                          </a>
                      </li>
                  </ul> 
                  
                 <?php $k++;} ?>
                 
                 
                  
            </div>
            
            <div class="col-sm-4">    
                 <h6>Completed Projects</h6>
                 
                  <?php 
                   $k=1;
                  for($i=1;$i<=7;$i++){
                       
                          if($k==1)
                    {
                        $margin='mt-5';
                    }else{
                        $margin='';
                    }
                  ?> 
                   
                   <ul class="current_projectdata <?php echo $margin?>">
                      
                      <li>
                          <div class="webistesmall_logo">
                              <img src="logopalace.png">
                          </div>
                      </li>
                      
                     <li class="headerlinknew">
                         <a href="">
                          <span><strong>Amet minim mollit non</strong></span><br>
                          <span>Santa Ana</span>
                         </a> 
                      </li>
                  </ul>
                  
                  
                  <?php $k++;} ?>
                  
                 
            </div>
            
            <div class="col-sm-4">    
                                     <h6>Upcoming Projects</h6>
                                      
                                       <?php
                                        $k=1;
                                       for($i=1;$i<=4;$i++){
                                       
                                              if($k==1)
                                        {
                                            $margin='mt-5';
                                        }else{
                                            $margin='';
                                        }
                                       
                                       ?> 
                                       
                                       <ul class="current_projectdata <?php echo $margin?>">
                                          
                                          <li>
                                              <div class="webistesmall_logo">
                                                  <img src="logopalace.png">
                                              </div>
                                          </li>
                                          
                                          <li class="headerlinknew">
                                              <a href="">
                                              <span><strong>Amet minim mollit non</strong></span><br>
                                              <span>Santa Ana</span>
                                              </a>
                                          </li>
                                      </ul>
                                      
                                      
                                      <?php $k++;} ?> 
                                       
                                </div>
        </div>                
    </div>
     
    
