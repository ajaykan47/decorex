<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
  $CI =& get_instance();
  $CI->load->model('Home_model');
?> 
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url('product.html');?>">Shop</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>  
            <!--breadcrumb-->
            <div class="checkout-info">
                Returning customer? <a href="<?php echo base_url('login.html');?>">Click here</a> to login
            </div>
            <!--checkout info-->
            <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()" class="checkout sec-mar" action="<?php echo base_url();?>Checkout/check" method="post">

                <div class="row">
                    <div id="customer_details" class="col-md-8 col-sm-8 checkout-left"> 
                        <h3>Billing Address</h3>

                        <div class="row billing-fields">
                            <div class="col-sm-6 form-group">
                                <label>First Name <span>*</span></label>
                                <input class="" type="text" name="f_name" id="f_name">
                            </div> 
                            <!--first name--> 

                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input class="" type="text" name="l_name" id="l_name">
                            </div>
                            <!--last name-->

                            <div class="col-sm-6 form-group">
                                <label>Email <span>*</span></label>
                                <input class="" type="text" name="email" id="email">
                            </div>  
                            <!--email-->

                            <div class="col-sm-6 form-group">
                                <label>Mobile No.</label>
                                <input class="" type="text" name="number" id="number">
                            </div> 
                            <!--tel--> 

                            <div class="col-sm-12 form-group">
                                <label>Company Name</label>
                                <input class="" type="text" name="com_name" id="com_name">
                            </div> 
                            <!--company--> 

                            <div class="col-sm-12 form-group">
                                <label>Country</label>
                                <input class="" type="text" name="com_country" id="com_country">
                            </div>
                            <!--country-->

                            <div class="col-sm-12 form-group">
                                <label>Address <span>*</span></label>
                                <input class="" type="text" name="add" id="add" placeholder="Street address">
                               <!-- <input type="text" placeholder="Apartment, Suit, Unit etc">-->
                            </div>
                            <!--country-->

                            <div class="col-sm-6 form-group">
                                <label>Town / City</label>
                                <input class="" type="text" name="city" id="city">
                            </div>
                            <!--town-->

                            <div class="col-sm-6 form-group">
                                <label>Zip code<span>*</span></label>
                                <input class="" type="text" name="zip_code" id="zip_code">
                            </div>
                            <!--zip-->                             
                        </div> 
                        <!--billing field-->

                        <div class="row account-field">
                            <div class="col-sm-12 form-group">
                                <div class="check-wrap">
                                    <input type="checkbox" name="createAccount">
                                    <label> Create an account?</label>
                                </div>
                            </div>                            
                        </div> 
                        <!--account--> 

                        <div class="row additional-fields">
                            <div class="col-sm-12">
                                <h3>Additional information</h3>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Order notes</label>
                                <textarea class="" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>       
                    </div> 
                    <!--left-->
                    <div class="col-md-4 col-sm-4 checkout-right">
                       

                        <div class="bdr-box bm-30 bg-soft-gray checkout-review">
                            <h3>Your order</h3> 
                           <table class="table_shop checkout_review"> 
                                <?php
								
								  $no = 0;
								 
								 $cartData=  $this->cart->contents();     
						
                                foreach ($cartData as $items) {
                                    $no++;
                        			$img= $CI->Home_model->getImage($items['id']);
                                    $ProName = $CI->Home_model->getProductName($items['id']);
                        			?>
                                <tbody>
                                    
                                    <tr>
                                        <td><?php echo $ProName[0]->p_name; ?>
                                        <input type="hidden" value="<?php echo $ProName[0]->p_name; ?>" name="productinfo">
                                        </td>
                                       <td><?php echo number_format($items['qty']); ?> X <?php echo number_format($items['price']); ?></td>
                                       <td>Rs.<?php if(!empty($items['subtotal'])) {echo number_format($items['subtotal']); } ?></td>
                                    </tr>

                                </tbody>     
                                             <?php }

                                                 ?>
                                <tfoot>
                                    
                                  <?php
                                   $subtotal= $this->cart->total();
                                   $grand_total = 0;
                                  $total=($grand_total+$subtotal+50);
                                   $gst=($total*18)/100;
                                  ?>
                                    <tr>
                                        <td>Total Rs.</td>
                                        <td><input style="width: 100%;
    background-color: #e3e3e3;
    border: none;" type="text" readonly value="<?php echo ($total+$gst); ?>" name="totalAmt"></td>
                                    </tr>
                                </tfoot>    
                               
                           </table>                        
                        </div>
                        <!--checkout review--> 

                        <div class="bdr-box checkout-payment">
                            <ul class="pay_mthd">
                                <li>
                                    <input type="radio" name="pay_mod" value="bacs" checked="checked">
                                    <label> Direct Bank Transfer </label>
                                    <div class="payment_box payment_method_bacs">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>

                                <li>
                                    <input type="radio" name="pay_mod" value="check">
                                    <label> Cheque Payments </label>
                                </li>

                                <!--<li>
                                    <input type="radio" name="pay_mod" value="cod">
                                    <label> Cash on Delivery </label>
                                </li>-->

                                <li>
                                    <input type="radio" name="pay_mod" value="paypal">
                                    <label> PayPal <img src="<?php echo base_url();?>front_assets/assets/images/check-out-paypal.jpg" alt=""></label>
                                </li>
                            </ul>

                            <div class="place-order">
                                <input type="submit" value="place order">
                            </div>
                        </div>

                    </div> 
                    <!--right-->  
                </div>
            </form>
            <!--checkout-->               
        </div>
       <!--container--> 
	   <style>
	   .{
		   border-radius: 4px;
    box-shadow: 0.2px 5px 18px black;
	   }
	   </style>
<script>  
                function FormValidation(){  
                var x=document.myform.f_name.value;  
                if (x == ""){  
                  document.getElementById('f_name').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("f_name").style.borderColor="green";  
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
                var y=document.myform.number.value;    
                if(y.length != 10){
                  document.getElementById('number').style.borderColor = "red";    
                return false;   
                }else{
                  document.getElementById("number").style.borderColor="green"; 
                } 
                
                var company=document.myform.com_name.value;
                if(company == ""){
                document.getElementById('com_name').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("com_name").style.borderColor="green";  
                }
                var address=document.myform.add.value;
                if(address == ""){
                document.getElementById('add').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("add").style.borderColor="green";  
                } 
                var city=document.myform.city.value;
                if(city == ""){
                document.getElementById('city').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("city").style.borderColor="green";  
                } 
                var code=document.myform.zip_code.value;
                if(code == ""){
                document.getElementById('zip_code').style.borderColor = "red";    
                  return false;  
                }else{ 
                  document.getElementById("zip_code").style.borderColor="green";  
                }     
                }  
                </script>