<?php
error_reporting(0);
if ((strpos($_SERVER['HTTP_HOST'], 'www.') === false))
{
    header('Location: http://www.'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
defined('BASEPATH') OR exit('No direct script access allowed');
$data['Value'] = $this->session->userdata('Userlogindetails');
$idG = $data['Value']['reguser_id'];
  $CI =& get_instance();
  $CI->load->model('Home_model');
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport' />
    <title><?php if(!empty($title)){ echo $title;} ?></title>
	<meta name="description" content="<?php if(!empty($metasdescription)){echo $metasdescription;} ?>">
    <meta name="keywords" content="<?php if(!empty($metaskeywords)){ echo $metaskeywords;} ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>front_assets/assets/images/fav.png" />
    <!--Stylesheets -->
    <link href="<?php echo base_url();?>front_assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/font-awesome-animation.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/icofont.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/youtube-pop-up.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/full-screen-menu.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/fractionslider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/component.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>front_assets/assets/css/lightcase.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/slider-360.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/amaran.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/skin/yellow.css" rel="stylesheet">
    <link href="<?php echo base_url();?>front_assets/assets/css/responsive.css" rel="stylesheet">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--Google font-->
    <link href="../../../fonts.googleapis.com/b3bfcd27aea47b99c6ae69bc74d05c53.css" rel="stylesheet">
</head>

<body class="home">
    <div id="wrap">
        <header class="header-3">
            <div class="top-bar bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="site-dir">
                            <a href="tel:<?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?>"><i class="fa fa-mobile"></i><?php if(!empty($companyinfo[0]->mobile)){echo $companyinfo[0]->mobile;}?></a>
                            <a href="mailto:<?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?>"><i class="fa fa-envelope"></i><?php if(!empty($companyinfo[0]->personal_email)){echo $companyinfo[0]->personal_email;}?></a>
                        </div>
                        </div>
                        <!--site dir-->
                        <div class="col-md-6 col-sm-6 col-xs-12  hidden-xs">
                        <p class="fnt"><?php if(!empty($companyinfo[0]->company_name)){echo $companyinfo[0]->company_name;}?></p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 header-right pull-right text-right">
                           
                             <div class="account-wrap style2">
                                <div class="dropdown">
                                    <span class="drop-down-toggle">
                                        <i class="fa fa-user"></i> ACCOUNT <i class="fa fa-angle-down"></i>
                                    </span>
                                    <ul class="drop-link trans">
                                        <?php if(empty($idG)){ ?>
                                        <li><a href="<?php echo base_url('login.html');?>" class="bg-dark">Login</a></li>
                                            <li><a href="<?php echo base_url('signup.html');?>" class="bg-dark">Register</a></li>
                                        <?php }else{?>
                                            <li><a onclick="return confirm('Are you sure to logout?');" href="<?php echo base_url('Login/logout');?>" class="bg-dark">Logout</a></li>
                                        <?php }?>

                                    </ul>
                                </div>
                            </div>
                            <!--account wrap-->

                            <form action="<?php echo base_url();?>product-search" method="POST" class="search-form visible-xs">
                                <input class="search-input" type="search" name="txtSearch" placeholder="Search..."> 
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--top bar-->

            <div class="container">
                <div class="row header-mid">
                    <div class="col-md-3 col-sm-3">
                        <?php if(!empty($companyinfo[0]->filename)){?>
                        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('uploads/logo/');?><?php if(!empty($companyinfo[0]->filename)){echo $companyinfo[0]->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $companyinfo[0]->filename); ?>"></a> 
                        <?php }?>
                        <!--<a class="navbar-brand site-brand" href="index.html">neostore</a>--> 
                    </div>

                    <div class="col-md-9 col-sm-9 mid-right">
                        <div class="pdct-srch hidden-xs">
                            <form action="<?php echo base_url();?>product-search" method="POST">
                                <input type="search" name="txtSearch" placeholder="Search" class="inpt"> 
                                <button type="submit" class="btn1"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--search-->

                        <div class="call-supprt hidden-xs">
                            <i class="pe-7s-headphones"></i>
                            <h5>
                                <span class="pri-font">Support</span> 
                                <a href="tel:<?php if(!empty($companyinfo[0]->alt_mob)){echo $companyinfo[0]->alt_mob;}?>"><?php if(!empty($companyinfo[0]->alt_mob)){echo $companyinfo[0]->alt_mob;}?></a>
                            </h5>
                        </div>
                        <!--support-->
                            
                        <!--header mini cart-->

                        <div class="header-cart style2">
                            <a id="detail_cart" href="<?php echo base_url();?>" class="cart_data crt-btn drop-cart pe-7s-cart"><?php echo count($this->cart->contents());?> </a>
                            <?php if(!empty(count($this->cart->contents()))){ ?>
                            <div class="widget widget_shopping_cart ">
                                <h5 id="detail_cart" class="title">Your cart have (<span><?php if(!empty(count($this->cart->contents()))){echo count($this->cart->contents());} else { echo '0';}?></span> Items)</h5>
                                <ul class="neo-mini-cart">
                                    <?php }else{?>
                                    <div class="widget widget_shopping_cart ">
                                <h5 id="detail_cart" class="title"></h5>
                                <ul class="neo-mini-cart">
                                    <?php }?>
								<?php

								  $no = 0;

								 $cartData=  $this->cart->contents();
								
        foreach ($cartData as $items) {
            $no++;
			$img= $CI->Home_model->getImage($items['id']);
            $ProName = $CI->Home_model->getProductName($items['id']);
			?>
                                    <li class="item">
                                        <figure class="product-thumb">
                                           <a href="#"><img src="<?php echo base_url('uploads/product/'.$img[0]->filename);?>" alt=""></a>
                                        </figure>
                                        <!--product thumb-->

                                        <div class="item-disc">
                                            <h6 class="pri-font"><?php echo $ProName[0]->p_name; ?></h6>
                                            <span class="qty"><?php if(!empty($items['qty'])){echo number_format($items['qty']);} ?></span> X <span class="item-price">Rs. <?php if(!empty($items['price'])){echo number_format($items['price']); }?></span>
                                        </div>
                                        <?php $id=$items['rowid']; ?>
                                        <a href="<?php echo base_url().'cart/delete_cart/'.$id;?>" class="delete-item" ><i class="pe-7s-close"></i></a>
                                    </li>
		<?php }  ?>
                                   
                                </ul>
<?php if(!empty($items['subtotal'])){?>
                                <div class="mini-cart-total flx-element">
                                    <span>Subtotal</span> 
                                    <span>Rs. <?php echo $this->cart->total();  ?></span>
                                </div>

                                <div class="btn-hold flx-element">
                                    <a class="btn text-uppercase" href="<?php echo base_url('cart.html');?>">view cart</a>
                                    <a class="btn pri-bg text-uppercase" href="<?php echo base_url('checkout.html');?>">checkout</a>
                                </div>
                                <?php } ?>
                            </div>
                            <!--mini cart-->
                        </div>
                           
                        <!--header mini cart-->

                    </div>
                </div>
            </div>

            <div class="navbar navbar-default menu-bar sec-bg">
                <div class="container"> 
                   
                    <div class="row"> 
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                            </button> 

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                               <li>
                                   <a href="<?php echo base_url();?>">HOME</a></li>
                               <li class="active menu-item-has-children mega-menu">
                                    <a href="#">shop</a>

                                    <div class="mega-wrap">
                                        <div class="row">
                                            <div class="col-sm-12 menu-item-has-children" style="background-image: url(<?php echo base_url();?>front_assets/assets/images/fancy-feather.png); background-repeat: no-repeat;background-position: 100% 17px, 0 0; background-size: contain;">
                                                <h6>Products Category</h6>
                                                
                                                <ul>
                                                    <?php foreach($categoryvalue as $category):
                                                ?><div class="col-sm-3 menu-item-has-children">
                                                   <li><a href="<?php echo base_url();?><?php if(!empty($category->cat_url)){echo $category->cat_url;}?>"><?php if(!empty($category->name)){echo $category->name;}?></a></li>
                                                    </div>
                                                    <?php endforeach ;?>
                                                                                  
                                                </ul>
                                                
                                            </div> 
                                            
                                        </div>
                                    </div>
                                </li>
                                <li><a href="<?php echo base_url('contact.html');?>">Contact Us</a></li>    
                            </ul>
                            </div> 
                        </div>
                        <div class="col-md-3 col-sm-3 text-right text-left-xs">
                         <ul class="social social1 social11 clr">
                               <?php foreach($Socialicon as $Socialiconvalu):?>
                                <li>
                                    <a href="<?php if(!empty($Socialiconvalu->link)){echo $Socialiconvalu->link;}?>" target="_blank"><i class="fa fa-<?php if(!empty($Socialiconvalu->name)){echo $Socialiconvalu->name;}?>"></i></a>
                                </li>
                                <?php endforeach ;?>
                            </ul>
                        </div>
                        </div>
                    
                    </div> 
                </div>
             
        </header>
        <!--header-->