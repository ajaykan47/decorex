<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
        <main class="main"> 
            <div class="container"> 
                <div class="row sec-padding">
                     <div class="col-md-12 col-sm-12">
                         <div class="login-wrap">
                            <div class="bm-30">
                                <span class="icon lh"><i class="icofont icofont-ui-lock"></i></span>
                                <h3>Signup Account</h3>
                                <p>Fill up the form below to signup your account</p>
                                 <?php if ($this->session->flashdata('done')) { ?>
                    <div align="center" class="disMes alert alert-success">
                        <?php echo $this->session->flashdata('done') ?>
                    </div>
                <?php } ?>
                <?php if ($this->session->flashdata('error')) { ?>
                    <div align="center" class="disMes alert alert-danger">
                        <?php echo $this->session->flashdata('error') ?>
                    </div>
                <?php } ?>
                            </div>

                            <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" action="<?php echo base_url(); ?>Signup/addRegister" method="post">
                                 <div class="form-group">
                                    <label>Name <span>*</span></label>
                                     
                                     
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                     
                                </div>
                                 <div class="form-group">
                                    <label>Mobile No. <span>*</span></label>
                                    <input type="text" name="mobile" id="mobile" placeholder="Your Mobile No.">
                                </div>
                                <div class="form-group">
                                    <label>Username / Email <span>*</span></label>
                                    <input type="text" name="email" id="email" placeholder="Your Username / Email">
                                </div>

                                <div class="form-group">
                                    <label>Password <span>*</span></label>
                                    <input type="password" name="password" id="txtPassword" placeholder="***********">
                                </div>

                                <div class="form-group">
                                    <label>Verify Password <span>*</span></label>
                                    <input type="password" name="conf_pass" id="txtConfirmPassword" placeholder="***********">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="signup">
                                </div>

                                Already have and account ! <a href="<?php echo base_url('login.html');?>"><strong>Login now</strong></a>
                            </form>
                         </div>
                     </div>
                </div>              
            </div>  
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
                var y=document.myform.mobile.value;    
                if(y.length != 10){
                  document.getElementById('mobile').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("mobile").style.borderColor="green"; 
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
                var password=document.myform.txtPassword.value;
                if(password == ""){
                document.getElementById('txtPassword').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("txtPassword").style.borderColor="green";  
                }
                    
                var confirmPassword=document.myform.txtConfirmPassword.value;
                if(confirmPassword == ""){
                document.getElementById('txtConfirmPassword').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("txtConfirmPassword").style.borderColor="green";  
                }
                    
                var password=document.myform.txtPassword.value;    
                var confirmPassword=document.myform.txtConfirmPassword.value;
                if (password != confirmPassword) { 
                  document.getElementById('txtConfirmPassword').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("txtConfirmPassword").style.borderColor="green"; 
                }
                }  
                </script> 
