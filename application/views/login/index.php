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
                                <h3>Login Account</h3>
                                <?php if ($this->session->flashdata('error')) { ?>
                                <p class="disMes alert-warning">Please Check Your User Name,Password</p>
                                <?php } ?>

                                <?php if ($this->session->flashdata('Regdone')) { ?>
                                    <p class="disMes alert-warning">You are successfully Register Please Go to Your E-mail Account and Click Activation Link  Thanks !</p>
                                <?php } ?>

                                <p>Enter your username and password to login.</p>
                            </div>

                            <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" action="<?php echo base_url();?>Login/userLogin" method="post">
                                <div class="form-group">
                                    <label>Username / Email <span>*</span></label>
                                    <input type="text" name="email" id="email" placeholder="User Name / E-mail">
                                </div>

                                <div class="form-group">
                                    <label>Password <span>*</span></label>
                                    <input type="password" name="inputPass" id="inputPass" placeholder=" Password">
                                </div>

                                <div class="form-group flx-element">
                                    <div class="check-wrap">
                                        <input type="checkbox">
                                        <!--<label>Remember me</label>-->
                                    </div>

                                    <a href="<?php echo base_url('reset-password.html');?>">Lost Password?</a>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="login">
                                </div>

                                Don’t have an account yet? <a href="<?php echo base_url('signup.html');?>"><strong>Signup Now!</strong></a> 
                            </form>
                         </div>
                     </div>
                </div>              
            </div>  
        </main>
        <!--main-->
		<style>
		.alert-warning {
    color: #8a6d3b;
    background-color: #f0474752;
    border-color: #faebcc;
    width: -39px;
            padding: 3% 1% 3% 5%;
}
		</style>
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