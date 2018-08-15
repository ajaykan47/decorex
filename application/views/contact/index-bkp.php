<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
        <div class="pg-header jarallax overlay parlx-pad sec-mar">
            <img class="jarallax-img" src="<?php echo base_url();?>front_assets/assets/images/page-title.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> 
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>              
                </div>
            </div>
        </div>
        <!--page title-->

        <main class="main"> 
            <div class="container">
                <div class="row sec-mar contact-form"> 
                    <div class="col-md-6 col-sm-6 left-block">
                        <div class="title bm-30"><h2>Make an enquiry</h2></div>
                        <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" action="" Method="POST">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" name="name" id="name" placeholder="Name">
                                </div>
                                <!--name-->
                                <div class="form-group col-sm-6">
                                    <input type="tel" name="number" id="number" placeholder="Phone">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <!--name-->
                                <div class="form-group col-sm-12">
                                    <textarea placeholder="Message" name="message" id="message"></textarea>
                                </div>
                                <!--message-->    

                                <div class="form-group col-sm-12">
                                    <input type="submit" value="SUBMIT">
                               </div>                            
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="title bm-20"><h2>Company information</h2></div>
                        <div class="contact-bottom ">
                            <div class="wrap style-2">
                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-phone"></i></span> 
                                    </div>

                                    <div>
                                        <p><a href="tel:<?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?>"><?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?></a></p> 
                                        
                                    </div>
                                 </div>

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-mail"></i></span> 
                                    </div>

                                    <div>
                                        <p> <a href="mailto:<?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?>"><?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?></a></p>   
                                       
                                    </div>
                                 </div>

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-map-marker"></i></span> 
                                    </div>

                                    <div>
                                        <p><?php if(!empty($companyinfo[0]->branch_add)){echo $companyinfo[0]->branch_add;}?></p>
                                    </div>
                                 </div>

                                 <div class="info">
                                    <div class="icon-wrap">
                                        <span class="icon radius-circle pri-bg text-white"><i class="pe-7s-clock"></i></span> 
                                    </div>

                                    <div>
                                        <p>
                                            Mon-Sat : <?php if(!empty($companyinfo[0]->mon_sat)){echo $companyinfo[0]->mon_sat;}?> <br>
                                            Sun : <?php if(!empty($companyinfo[0]->sunday)){echo $companyinfo[0]->sunday;}?>
                                        </p>
                                    </div>
                                 </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--form-->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="map-hold sec-mar">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.9738204238965!2d77.42845741468096!3d28.660502532406692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1c95a896c9f%3A0x7d6912d3af06937b!2sDecorex+Led+Light!5e0!3m2!1sen!2sin!4v1530251628996" width="600px" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                         </div> 
                    </div>
                </div>
             </div> 
             <!--enquiry form--> 
        </main>
        <!--main-->
 <script>  
                function FormValidation(){  
                var x=document.myform.name.value;  
                if (x == ""){  
                  document.getElementById('name').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("name").style.borderColor="green";  
                } 
                var y=document.myform.number.value;    
                if(y.length != 10){
                  document.getElementById('number').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("number").style.borderColor="green"; 
                } 
                var x=document.myform.email.value;    
                var atpos = x.indexOf("@");
                var dotpos = x.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
                  document.getElementById('email').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("email").style.borderColor="green"; 
                }
                var message=document.myform.message.value;
                if(message == ""){
                document.getElementById('message').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("message").style.borderColor="green";  
                }
                }  
                </script>