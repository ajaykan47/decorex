<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<?php
  $CI =& get_instance();
  $CI->load->model('Home_model');
   ?>
<style>
.searchNodata{
	color: #f23939;
background-color: #3a4a6b;
padding: 13px 31px 10px 18px;
box-sizing: initial;
font-size: 24px;     margin-right: 37%;
    float: right;
}

#pagination{
margin: 40 40 0;
}

.input_country {
display: inline;
margin: 53px;
}
ul.tsc_pagination li a
{
border:solid 1px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
padding:6px 9px 6px 9px;
}
ul.tsc_pagination li
{
padding-bottom:1px;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
color:#FFFFFF;
box-shadow:0px 1px #EDEDED;
-moz-box-shadow:0px 1px #EDEDED;
-webkit-box-shadow:0px 1px #EDEDED;
}
ul.tsc_pagination
{
margin:4px 0;
padding:0px;
height:100%;
overflow:hidden;
font:12px 'Tahoma';
list-style-type:none;
}
ul.tsc_pagination li
{
float:left;
margin:0px;
padding:0px;
margin-left:5px;
}
ul.tsc_pagination li a
{
color:black;
//display:block;
text-decoration:none;
padding:7px 10px 7px 10px;
}
ul.tsc_pagination li a img
{
border:none;
}
ul.tsc_pagination li a
{
color:#0A7EC5;
border-color:#8DC5E6;
background:#F8FCFF;
}
ul.tsc_pagination li a:hover,
ul.tsc_pagination li a.current
{
text-shadow:0px 1px #388DBE;
border-color:#3390CA;
background:#58B0E7;
background:-moz-linear-gradient(top, #B4F6FF 1px, #63D0FE 1px, #58B0E7);
background:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #B4F6FF), color-stop(0.02, #63D0FE), color-stop(1, #58B0E7));
}
</style>
        <div class="pg-header jarallax overlay parlx-pad sec-mar">
            <img class="jarallax-img" src="<?php echo base_url();?>front_assets/assets/images/page-title.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> 
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active"><?php if(!empty($categoryid[0]->name)){echo $categoryid[0]->name;}?></li>
                        </ul>
                    </div>              
                </div>
            </div>
        </div>
        <!--page title-->

        <main class="main"> 
            <div class="container"> 
                <div class="row sec-mar"> 
                   
                    <div class="col-md-9 col-sm-9 pull-right left-blk">
                         <?php if(empty($productresult[0])){?>
                                    
                <div class="col-md-12">
                    <img style="width:100%;" src="<?php echo base_url();?>front_assets/assets/images/search.png" alt="search">
                    
                </div>
                                    <?php }?>
                        <?php if(!empty($productresult)){?>
                        <!--<div class="sorting-outer">
                            <div class="sorting-wrap">
                                Showing 1–12 of 292 results
                            </div>
							ho gya kya? 
                            
                        </div>-->
                        <!--sorting outer-->
              
                        <div class="product-wrap">
                            <ul class="products">
                                <?php
                              //  echo '<pre>';
                              //  print_r($productresult);die;
                                foreach($productresult as $productvalue):?>
                                <li class="product last">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a data-productid="<?php echo $productvalue->product_id;?>" data-productname="<?php echo $productvalue->p_name; ?>" data-productprice="<?php echo $productvalue->new_price; ?>" href="#" class="add_cart actn add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>

                                            <a data-toggle="modal" data-target="#<?php if(!empty($productvalue->product_id)){echo $productvalue->product_id;}?>" class="actn"   title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="<?php echo base_url()?><?php if(!empty($productvalue->product_url)){echo $productvalue->product_url;}?>"><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($productvalue->filename)){echo $productvalue->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $productvalue->filename);?>"></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price"><del><?php if(!empty($productvalue->old_price)){echo $productvalue->old_price;}?></del><ins><?php if(!empty($productvalue->new_price)){echo $productvalue->new_price;}?></ins></div>
                                    </div>
                                    <p><b><a href="<?php echo base_url()?><?php if(!empty($productvalue->product_url)){echo $productvalue->product_url;}?>"><?php if(!empty($productvalue->p_name)){echo $productvalue->p_name;}?></a></b></p> 
                                </li>
                               <?php endforeach ;?>
                              
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--product wrap-->
 
                        <div class="bottom-sorting">
                            
                            <!--<div class="result-count">Showing 1 - 12 of 120 results</div>-->
                            <!--result count-->

                            <div class="pagination">
                                <ul class="tsc_pagination">
                                     <?php 
                                     
                                     foreach ($links as $link) 
                          {
                            echo "<li>". $link."</li>";
                          } ?>
                                </ul>
                            </div>
                            <!--pegination--> 
                        </div>
                        <!--bottom sorting-->
                        <?php }?>
                    </div>
                    <!--left-->

                    <div class="col-md-3 col-sm-3 sidebar">
                        <div class="sidebar_widget"> 
                            <div class="widget_title"><h4>Categories</h4></div>

                            <ul class="detail-cat">
                                <?php foreach($categoryvalue as $category):?>
                                <li> <a href="<?php echo base_url();?><?php if(!empty($category->cat_url)){echo $category->cat_url;}?>"><?php if(!empty($category->name)){echo $category->name;}?>
                                     <?php
                                       $data['resultSub']= $CI->Home_model->getSubCatByIdDetail($category->cat_id);
                                       $count = $data['resultSub'];
                                       ?>
                                    <?php if(!empty($count)){?>
                                    <span class="item-count">[<?php if(!empty($count)){echo $count;}?>]</span><?php } ?>
                                    </a></li>
                                <?php endforeach ;?>
                            </ul>
                        </div>
                        <!--category--> 
                    </div>
                    <!--sidebar-->
                </div>                  
            </div>  
        </main>
        <!--main-->



<?php foreach($productresult as $productvalue):?>            
  <div class="modal fade" id="<?php if(!empty($productvalue->product_id)){echo $productvalue->product_id;}?>" role="dialog">
     
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
                                    <figure><img src="<?php echo base_url('uploads/product/');?><?php if(!empty($productvalue->filename)){echo $productvalue->filename;}?>" alt="<?php echo  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $productvalue->filename); ?>"></figure>
                                </li>
                               
                            </ul>
                        </div>

                        
                    </div>
                </div>
                <!--slider-->

                <div class="col-md-6 col-sm-6 summary ">
                    <form class="wrap">
                        <p><b><?php if(!empty($productvalue->p_name)){echo $productvalue->p_name;}?></b></p>

                        <div class="price-wrap">
                            <div class="price"><del><?php if(!empty($productvalue->old_price)){echo $productvalue->old_price;}?></del><ins><?php if(!empty($productvalue->new_price)){echo $productvalue->new_price;}?></ins></div>
                        </div>
                        <!--price wrap-->

                        <div class="disc bm-20">
                            <?php if(!empty($productvalue->short_descr)){echo $productvalue->short_descr;}?>
                        </div>
                        <!--disc-->

                        <div class="flx-element bm-20">
                            <div><strong>Availability :</strong><?php if(!empty($productvalue->availability)){echo $productvalue->availability;}?>
                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                            </div>
                            
                        </div>
                        <!--flex-->

                        <div class="color-option bm-20">
                            <h6 class="bm-5">Select color</h6>

                            <div class="color-filter">
                                <form>
                                    <div class="radio-wrap red">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--red-->

                                    <div class="radio-wrap black">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--black-->

                                    <div class="radio-wrap yellow">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--yellow-->

                                    <div class="radio-wrap blue">
                                        <input type="radio" name="color">
                                        <label>&nbsp;</label>
                                    </div>
                                    <!--blue-->
                                </form>
                            </div>
                        </div>
                        <!--color option--> 

                        <div class="btn-wrap bm-20">
                            <input type="number" value="1" title="Qty" name="quantity" class="input-text qty" size="4" min="0">
                            <input type="hidden" value="<?php if (!empty($productvalue->new_price)) { echo $productvalue->new_price; } ?>" name="product_price" class="">
                            <input type="hidden" value="<?php if (!empty($productvalue->product_id)) { echo $productvalue->product_id; } ?>" name="product_id" class="">
                            <input type="hidden" value="<?php if (!empty($productvalue->p_name)) { echo $productvalue->p_name; } ?>" name="product_name" class="">
                            <input type="submit" value="ADD TO CART" class="btn btn-primary" name="btnProduct">

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

<!--/**********Add to Cart************/-->

