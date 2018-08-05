<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<footer>
           <div class="ft1">
  <img src="<?php echo base_url();?>front_assets/assets/images/12.png" style="position: absolute; transform: translate(0%, -4%); width: 100%">
            </div>
            <div class="footer-top  pad1">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h5>Customer Service</h5>

                            <ul class="footer-nav">
                                 <li><a href="<?php echo base_url('login.html');?>">My Account</a></li>
                                <li><a href="<?php echo base_url('login.html');?>">Order History</a></li>
                               <li><a href="<?php echo base_url('deliveryinformation.html');?>">Delivery Information</a></li>
                                <li><a href="<?php echo base_url('returnpolicy.html')?>">Return Policy</a></li>
                                
                            </ul>
                        </div>
                        <!--widget-->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h5>Information</h5>

                            <ul class="footer-nav">
                                <li><a href="<?php echo base_url('about.html');?>">About Us</a></li>
                                 <li><a href="<?php echo base_url('contact.html');?>">Contact Us</a></li>
                                
                                <li><a href="<?php echo base_url('privacy-policy.html');?>">Privacy Policy</a></li>
                                <li><a href="<?php echo base_url('tos.html');?>">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <!--widget-->

                       

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <h5>Contact us</h5>
                            <div class="contact-info">
                                <p>
                                    <i class="fa fa-map-marker"></i><?php if(!empty($companyinfo[0]->branch_add)){echo $companyinfo[0]->branch_add;}?>
                                </p>

                                <p>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:<?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?>"><?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?></a>
                                </p>
 
                                <p class="clr">
                                    <i class="fa fa-mobile"></i><a href="tel:<?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?>"><?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?></a> 
                                    
                                </p>
                                <p class="clr">
                                    <i class="fa fa-phone"></i><a href="tel:<?php if(!empty($companyinfo[0]->alt_mob)){echo $companyinfo[0]->alt_mob;}?>"><?php if(!empty($companyinfo[0]->alt_mob)){echo $companyinfo[0]->alt_mob;}?></a>
                                </p>
                            </div>
                        </div>
                        <!--widget-->
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row footer-bottom">
                        <div class="col-md-6 col-sm-6 clr">
                            Copyright &copy; 2018 - Decorex All right reserved, Powered By <a href="http://www.flawlessindia.in/" target="_blank">Flawless India</a>
                        </div>
                        <div class="col-md-3 col-sm-3 cards text-center">
                            <ul class="cards clr">
                                <li><i class="icofont icofont-paypal"></i></li>
                                <li><i class="icofont icofont-maestro"></i></li>
                                <li><i class="icofont icofont-discover"></i></li>
                                <li><i class="icofont icofont-american-express"></i></li>
                            </ul>
                        </div>
                        <!--cards-->

                        <div class="col-md-4 col-sm-4 text-right">
                            <ul class="social clr">
                                 <?php foreach($Socialicon as $Socialiconvalu):?>
                                <li>
                                    <a href="<?php if(!empty($Socialiconvalu->link)){echo $Socialiconvalu->link;}?>" target="_blank"><i class="fa fa-<?php if(!empty($Socialiconvalu->name)){echo $Socialiconvalu->name;}?>"></i></a>
                                </li>
                             <?php endforeach ;?>
                            </ul>
                        </div>
                        <!--social-->
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-->
    </div> 
    <!--wrap-->

    <div id="morphsearch" class="morphsearch">
        <div class="morphsearch-content">
            <div class="container">
                <span class="morphsearch-close"></span>

                <form class="morphsearch-form">
                    <input class="morphsearch-input" type="search" placeholder="Search..."/>
                    <button class="morphsearch-submit" type="submit"><i class="pe-7s-search"></i></button>
                </form> 
            </div>
        </div><!-- /morphsearch-content -->        
    </div>
    <!--search wrap-->

 
    <!--quick view-->

    <a href="#" class="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    
    <!-- jQuery library -->
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery.imgzoom.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/demo.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/touch.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/count-up.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/youtube-jquery.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery.fractionslider.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jarallax.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jarallax-video.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/lightcase.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/threesixty.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/jquery.amaran.min.js"></script>
    <script src="<?php echo base_url();?>front_assets/assets/js/main.js"></script>
<script type="text/javascript">
        $('.imgBox').imgZoom({
            boxWidth: 300,
            boxHeight: 300,
            marginLeft: 5,
            origin: 'data-origin'
        });
    </script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript">
    $(document).ready(function(){

        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = 1;
            $.ajax({
                url : "<?php echo site_url('Cart/add_to_cart');?>",
                method : "POST",
                data : {
                    product_id: product_id,
                    product_name: product_name,
                    product_price: product_price,
                    quantity: quantity
                },
                success: function(data){

                    $('#detail_cart').html(data);
                   
                }
            });
        });
		

    /*     $('#detail_cart').load("<?php echo site_url('Cart/load_cart');?>"); */

    /*     $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id");
            $.ajax({
                url : "<?php echo site_url('Cart/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        }); */
    });
	
</script>



</body>

</html>