<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="navbar navbar-default menu-bar sec-bg">
                <div class="container"> 
                   
                    <div class="row"> 
                        <div class="col-md-6">
                        <div class="left bd">
                            <h4 class="bm-0 text-white">My Account</h4> 
                        </div>
                        </div>
                       <div class="col-md-6">
                         <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active">Account detail</li>
                        </ul>
                        </div>
                        </div>
                    
                    </div> 
                </div>
        <main class="dash-content bg-soft-gray sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        $this->load->view('user/sidebar');
                        ?>

                        <div class="account-content"> 
                             <div class="checkout-info flx-element ">
                            <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" action="#" method="POST" >
                                <div class="row"> 
                                    <div class="form-group col-sm-4">
                                        <label>Name of in the Account</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Mobile number</label>
                                        <input type="text" name="number" id="number">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>E-mail address</label>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Branch</label>
                                        <input type="text" name="branch" id="branch">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>IFSC Code</label>
                                        <input type="text" name="ifsc_code" id="ifsc_code">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Name of Bank</label>
                                        <input type="text" name="bank_name" id="bank_name">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Residential address</label>
                                        <input type="text" name="radd" id="radd">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Postal address</label>
                                        <input type="text" name="padd" id="padd">
                                    </div>
                                    <!--confirm pass--> 

                                    <div class="form-group col-sm-12">
                                        <input type="submit" value="SUBMIT">
                                   </div> 
                                </div>
                            </form>
                            </div> 
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
                var branch=document.myform.branch.value;
                if(branch == ""){
                document.getElementById('branch').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("branch").style.borderColor="green";  
                }
                var ifsccode=document.myform.ifsc_code.value;
                if(ifsccode == ""){
                document.getElementById('ifsc_code').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("ifsc_code").style.borderColor="green";  
                } 
                var bank=document.myform.bank_name.value;
                if(bank == ""){
                document.getElementById('bank_name').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("bank_name").style.borderColor="green";  
                } 
                var address=document.myform.radd.value;
                if(address == ""){
                document.getElementById('radd').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("radd").style.borderColor="green";  
                }
                var paddress=document.myform.padd.value;
                if(paddress == ""){
                document.getElementById('padd').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("padd").style.borderColor="green";  
                }    
                }  
                </script>