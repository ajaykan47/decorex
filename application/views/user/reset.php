<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
        <main class="main"> 
            <div class="container"> 
                <div class="row sec-padding">
                     <div class="col-md-12 col-sm-12">
                         <div class="login-wrap">
                            <div class="bm-30">
                                <span class="icon lh"><i class="icofont icofont-ui-unlock"></i></span>
                                <h3>Forgot Password?</h3>
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

                            <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" action="<?php echo base_url();?>Reset/ForgotPassword" method="post">
                                
                    <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="E-mail Address" class="form-control"  type="text">
                        </div>
                      </div>
                                

                                <div class="form-group flx-element">
                                    <div class="check-wrap">
                                        <input type="checkbox">
                                        <!--<label>Remember me</label>-->
                                    </div>

                                    
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Reset Password">
                                </div>

                                Don’t have an account yet? <a href="<?php echo base_url('signup.html');?>"><strong>Signup Now!</strong></a> 
                            </form>
                         </div>
                     </div>
                </div>              
            </div>  
        </main>
        <!--main-->
<script>
                function FormValidation(){   
                var x=document.myform.email.value;    
                var atpos = x.indexOf("@");
                var dotpos = x.lastIndexOf(".");
                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
                  document.getElementById('email').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("email").style.borderColor="green"; 
                }
                var inputPass=document.myform.inputPass.value;  
                if(inputPass == ""){
                document.getElementById('inputPass').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("inputPass").style.borderColor="green";  
                }
                }  
                </script>