<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
        <main>
           <div class="hero-banner">
            <div class="slider-wrapper">
                <div class="slider">
                    
                    <?php foreach($Banner as $Bannervalue):?>
                    <div class="slide">
                        <img src="<?php echo base_url('uploads/banner/');?><?php if(!empty($Bannervalue->filename)){echo $Bannervalue->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $Bannervalue->filename); ?>" data-in="fade" style="width: 100%">
                        <h3 data-position="150,200" data-in="top" data-delay="200" style="font-size: 50px; color:#a02b7c; text-shadow: 2px 2px #fff"><?php if(!empty($Bannervalue->title)){echo $Bannervalue->title;}?></h3>
                        <h2 data-position="200,200" data-in="top" data-delay="300" class="pri-font">
                            <strong><?php if(!empty($Bannervalue->descr)){echo $Bannervalue->descr;}?></strong>
                        </h2>
                        <div data-position="340,205" data-in="bottom" data-delay="800">
                            <a class="btn">SHOP NOW</a>
                        </div>
                    </div>
                    <?php endforeach ;?>
                    <!--slide 1-->
                </div>
            </div>
        </div>
        <!--banner-->
            <div class="container">
            <div class="row pd1">
                <div class="col-md-9">
                    <div class="txt1 text-center">
                <h2><?php if(!empty($homecontent[0]->page_title)){echo $homecontent[0]->page_title;}?></h2>
                    <?php if(!empty($homecontent[0]->full_descr)){echo $homecontent[0]->full_descr;}?>
                        </div>
                </div>
                <div class="col-md-3 ">
                    <?php if(!empty($homecontent[0]->filename)){?>
                <img src="<?php echo base_url('uploads/page_img/');?><?php if(!empty($homecontent[0]->filename)){echo $homecontent[0]->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $homecontent[0]->filename); ?>" class="pull-right" style="max-width: 72%">
                <?php }?>
                </div>
                </div>
            </div>
            <div class="shop-feature boxed sec-mar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 shp-ftr-wrap">
                            <?php foreach($Clientlogo as $Clientlogovalu):?>
                            <div class="feature-box delivery">
                               <figure>
                                <img src="<?php echo base_url('uploads/ourclient/');?><?php if(!empty($Clientlogovalu->client_logo)){echo $Clientlogovalu->client_logo;}?>" alt="..">
                                </figure>
                            </div>
                            <?php endforeach ;?>
                           
                        </div> 
                    </div>      
                </div>
            </div> 
            <!--shop feature-->

            <div class="container">
                <div class="sec-mar elec-featured-pdt">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="bdr-title title-bar">
                                <h3><span>Our Products</span></h3>
                            </div>

                            <div class="product-wrap">
                                <ul class="products">
                                    <?php
                                   
                                    foreach($homeproduct as $homeproductvalue):?>
                                    <li class="product last">
                                        <figure class="img-animi">
                                            <div class="actions trans">
                                                <a class="link-layer" href="#">&nbsp;</a>
                                                <a data-productid="<?php echo $homeproductvalue->product_id;?>" data-productname="<?php echo $homeproductvalue->p_name; ?>" data-productprice="<?php echo $homeproductvalue->new_price; ?>" href="#" class="add_cart actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <!--<a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>-->
                                                <a data-toggle="modal" data-target="#<?php if(!empty($homeproductvalue->product_id)){echo $homeproductvalue->product_id;}?>" class="actn"   title="Quick View"><i class="pe-7s-look"></i></a>
                                            </div>

                                            <a href="<?php echo base_url()?><?php if(!empty($homeproductvalue->product_url)){echo $homeproductvalue->product_url;}?>"><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($homeproductvalue->filename)){echo $homeproductvalue->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $homeproductvalue->filename); ?>"></a>
                                        </figure>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del><?php if(!empty($homeproductvalue->old_price)){echo $homeproductvalue->old_price;}?></del>
                                                <ins><?php if(!empty($homeproductvalue->new_price)){echo $homeproductvalue->new_price;}?></ins>
                                            </div>
                                        </div>
                                        <p><b><a href="<?php echo base_url()?><?php if(!empty($homeproductvalue->product_url)){echo $homeproductvalue->product_url;}?>"><?php if(!empty($homeproductvalue->p_name)){echo $homeproductvalue->p_name;}?></a></b></p>
                                    </li>
                                    <?php endforeach ;?>

                                    
                                    
                                </ul>
                                
                                <div class="clearfix"></div>
                            </div>
                            <!--products-->
                        </div>
                    </div>
                </div>
                
     <!-- Modal -->
<?php foreach($homeproduct as $homeproductvalue):?>            
  <div class="modal fade" id="<?php if(!empty($homeproductvalue->product_id)){echo $homeproductvalue->product_id;}?>" role="dialog">
     
    <div class="modal-dialog">
        <form action="<?php echo base_url('Cart/add_to_cart'); ?>" method="post" enctype="multipart/form-data">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           
            <div class="qv-wrap">
            <div class="row product">
                <div class="col-md-6 col-sm-6 image pdt-single-slider">
                    <div class="product-thumb-slider layout-btm-thumb">
                        <div class="slide-top">
                            <ul class="qv-single-image single-2">
                                <li>
                                    <figure><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($homeproductvalue->filename)){echo $homeproductvalue->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $homeproductvalue->filename); ?>"></figure>
                                </li>
                               
                            </ul>
                        </div>

                        
                    </div>
                </div>
                <!--slider-->

                <div class="col-md-6 col-sm-6 summary ">
                    <div class="wrap">
                        <p><b><?php if(!empty($homeproductvalue->p_name)){echo $homeproductvalue->p_name;}?></b></p>

                        <div class="price-wrap">
                            <div class="price"><del><?php if(!empty($homeproductvalue->old_price)){echo $homeproductvalue->old_price;}?></del><ins><?php if(!empty($homeproductvalue->new_price)){echo $homeproductvalue->new_price;}?></ins></div>
                        </div>
                        <!--price wrap-->

                        <div class="disc bm-20">
                            <?php if(!empty($homeproductvalue->short_descr)){echo $homeproductvalue->short_descr;}?>
                        </div>
                        <!--disc-->

                        <div class="flx-element bm-20">
                            <div><strong>Availability :</strong><?php if(!empty($homeproductvalue->availability)){echo $homeproductvalue->availability;}?>
                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                            </div>
                            
                        </div>
                        <!--flex-->

                        <div class="color-option bm-20">
                            <h6 class="bm-5">Select color</h6>

                            <div class="color-filter">
                                <form action="<?php echo base_url('Cart/add_to_cart'); ?>">
                                    <?php if(!empty($homeproductvalue->col1)){?>
                                    <div class="radio-wrap white1">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col1)){echo $homeproductvalue->col1;}?>">
                                        <label>&nbsp;</label>

                                    </div>
                                    <?php } ?>
                                    <!--red-->
                                  
                                    <?php if(!empty($homeproductvalue->col2)){?>
                                    <div class="radio-wrap white2">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col2)){echo $homeproductvalue->col2;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--black-->
                                    <?php } ?>
                                    <?php if(!empty($homeproductvalue->col3)){?>
                                    <div class="radio-wrap white3">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col3)){echo $homeproductvalue->col3;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--yellow-->
                                    <?php } ?>
                                    <?php if(!empty($homeproductvalue->col4)){?>
                                    <div class="radio-wrap red">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col4)){echo $homeproductvalue->col4;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                    <?php } ?>
                                    <?php if(!empty($homeproductvalue->col5)){?>
                                    <div class="radio-wrap blue">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col5)){echo $homeproductvalue->col5;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                    <!--blue-->
                                    <?php } ?>
                                    <?php if(!empty($homeproductvalue->col6)){?>
                                    <div class="radio-wrap green">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col6)){echo $homeproductvalue->col6;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($homeproductvalue->col7)){?>
                                    <div class="radio-wrap pinck">
                                        <input type="radio" name="color" value="<?php if(!empty($homeproductvalue->col7)){echo $homeproductvalue->col7;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <?php } ?>
                                    <!--blue-->
                               
                            </div>
                        </div>
                        <!--color option--> 

                        <div class="btn-wrap bm-20">
                            <input type="number" value="1" title="Qty" name="quantity" class="input-text qty" size="4" min="0">
                            <input type="hidden" value="<?php if (!empty($homeproductvalue->new_price)) { echo $homeproductvalue->new_price; } ?>" name="product_price" class="">
                            <input type="hidden" value="<?php if (!empty($homeproductvalue->product_id)) { echo $homeproductvalue->product_id; } ?>" name="product_id" class="">
                            <input type="hidden" value="<?php if (!empty($homeproductvalue->p_name)) { echo $homeproductvalue->p_name; } ?>" name="product_name" class="">
                            <input type="submit" value="ADD TO CART" class="btn btn-primary" name="btnProduct">
                            <!-- <a href="#" class="btn pri-bg" onclick="add_cart('<?php /*echo $homeproductvalue->product_id; */?>')"><i class="pe-7s-cart"></i> ADD TO CART</a>-->

                        </div>
                        </form>
                        <!--btn wrap-->

                        <div class="share pri-font">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                            <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
                        </div>
                    </div>
                </div>
                <!--summery-->
            </div>
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      </div>
    </div>
     
    <!--quick view-->

            </div>
     <?php endforeach ;?>

            <div class="container" style=" background-image: url(<?php echo base_url();?>front_assets/assets/images/fancy-feather.png); background-size: contain;background-attachment: fixed;background-position: center;background-repeat: no-repeat;"> 
                <div class="row sec-mar">
                    <div class="col-md-12 col-sm-12 col-xs-12 left-block pull-right elec-new-arrival">
                        <div class="bdr-title">
                            <h3><span>New Arrivals</span></h3>
                        </div>

                        <div class="product-wrap elec-pdct">
                            <ul class="products product-slider">
                                <?php foreach($newarrivalproduct as $newarrival):?>
                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <!--<a href="#" class="actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart" ><i class="pe-7s-cart"></i></a>-->
                                            <a data-productid="<?php echo $newarrival->product_id;?>" data-productname="<?php echo $newarrival->p_name; ?>" data-productprice="<?php echo $newarrival->new_price; ?>" href="#" class="add_cart actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                            <a data-toggle="modal" data-target="#<?php if(!empty($newarrival->product_id)){echo $newarrival->product_id;}?>" class="actn"   title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>

                                        <a href="<?php echo base_url()?><?php if(!empty($newarrival->product_url)){echo $newarrival->product_url;}?>"><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($newarrival->filename)){echo $newarrival->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $newarrival->filename); ?>"></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del><?php if(!empty($newarrival->old_price)){echo $newarrival->old_price;}?></del>
                                            <ins><?php if(!empty($newarrival->new_price)){echo $newarrival->new_price;}?></ins>
                                        </div>
                                    </div>
                                    <p><b><a href="<?php echo base_url()?><?php if(!empty($newarrival->product_url)){echo $newarrival->product_url;}?>"><?php if(!empty($newarrival->p_name)){echo $newarrival->p_name;}?></a></b></p>
                                </li>
                                <?php endforeach ;?>
                                <!--product-->
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--products--> 
                    </div>
                    <!--left-->

                  
                </div>
                <!--new arrival-->

            </div>
                <!-- Modal -->
      
<?php foreach($newarrivalproduct as $newarrival):?>            
  <div class="modal fade" id="<?php if(!empty($newarrival->product_id)){echo $newarrival->product_id;}?>" role="dialog">
     
    <div class="modal-dialog">
    <form action="<?php echo base_url('Cart/add_to_cart'); ?>" method="post" enctype="multipart/form-data">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           
            <div class="qv-wrap">
            <div class="row product">
                <div class="col-md-6 col-sm-6 image pdt-single-slider">
                    <div class="product-thumb-slider layout-btm-thumb">
                        <div class="slide-top">
                            <ul class="qv-single-image single-2">
                                <li>
                                    <figure><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($newarrival->filename)){echo $newarrival->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $newarrival->filename); ?>"></figure>
                                </li>
                               
                            </ul>
                        </div>

                        
                    </div>
                </div>
                <!--slider-->

                <div class="col-md-6 col-sm-6 summary ">
                    <div class="wrap">
                        <p><b><?php if(!empty($newarrival->p_name)){echo $newarrival->p_name;}?></b></p>

                        <div class="price-wrap">
                            <div class="price"><del><?php if(!empty($newarrival->old_price)){echo $newarrival->old_price;}?></del><ins><?php if(!empty($newarrival->new_price)){echo $newarrival->new_price;}?></ins></div>
                        </div>
                        <!--price wrap-->

                        <div class="disc bm-20">
                            <?php if(!empty($newarrival->short_descr)){echo $newarrival->short_descr;}?>
                        </div>
                        <!--disc-->

                        <div class="flx-element bm-20">
                            <div><strong>Availability :</strong><?php if(!empty($newarrival->col1)){echo $newarrival->col1;}?>
                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                            </div>
                            
                        </div>
                        <!--flex-->

                        <div class="color-option bm-20">
                            <h6 class="bm-5">Select color</h6>

                            <div class="color-filter">
                                <form action="<?php echo base_url('Cart/add_to_cart'); ?>">
                                    <?php if(!empty($newarrival->col1)){?>
                                    <div class="radio-wrap white1">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col1)){echo $newarrival->col1;}?>">
                                        <label>&nbsp;</label>

                                    </div>
                                    <?php } ?>
                                 
                                    <?php if(!empty($newarrival->col2)){?>
                                    <div class="radio-wrap white2">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col2)){echo $newarrival->col2;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--black-->
                                    <?php } ?>
                                    <?php if(!empty($newarrival->col3)){?>
                                    <div class="radio-wrap white3">
                                        <input type="radio" name="color" value="<?php echo $newarrival->col3;?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--yellow-->
                                    <?php } ?>
                                    <?php if(!empty($newarrival->col4)){?>
                                    <div class="radio-wrap red">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col4)){echo $newarrival->col4;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                    <?php } ?>
                                    <?php if(!empty($newarrival->col5)){?>
                                    <div class="radio-wrap blue">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col5)){echo $newarrival->col5;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                    <!--blue-->
                                    <?php } ?>
                                    <?php if(!empty($newarrival->col6)){?>
                                    <div class="radio-wrap green">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col6)){echo $newarrival->col6;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($newarrival->col7)){?>
                                    <div class="radio-wrap pinck">
                                        <input type="radio" name="color" value="<?php if(!empty($newarrival->col7)){echo $newarrival->col7;}?>">
                                        <label>&nbsp;</label>
                                    </div>
                                    <?php } ?>
                                    <!--blue-->
                                </form>
                            </div>
                        </div>
                        <!--color option--> 

                        <div class="btn-wrap bm-20">
                            <input type="number" value="1" title="Qty" name="quantity" class="input-text qty" size="4" min="0">
                            <input type="hidden" value="<?php if (!empty($newarrival->new_price)) { echo $newarrival->new_price; } ?>" name="product_price" class="">
                            <input type="hidden" value="<?php if (!empty($newarrival->product_id)) { echo $newarrival->product_id; } ?>" name="product_id" class="">
                            <input type="hidden" value="<?php if (!empty($newarrival->p_name)) { echo $newarrival->p_name; } ?>" name="product_name" class="">
                            <input type="submit" value="ADD TO CART" class="btn btn-primary" name="btnProduct">
                            <!-- <a href="#" class="btn pri-bg" onclick="add_cart('<?php /*echo $homeproductvalue->product_id; */?>')"><i class="pe-7s-cart"></i> ADD TO CART</a>-->

                        </div>
                        </form>
                        <!--btn wrap-->

                        <div class="share pri-font">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                            <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
                        </div>
                    </div>
                </div>
                <!--summery-->
            </div>
        </div>
        <div class="modal-footer">
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      </div>
    </div>
     
    <!--quick view-->

            </div>
     <?php endforeach ;?>
            <!--container-->

        </main>
    <!--/**********Add to Cart************/-->


    
        
        