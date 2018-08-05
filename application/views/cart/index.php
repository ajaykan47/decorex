<?php

defined('BASEPATH') OR exit('No direct script access allowed');
$CI =& get_instance();
$CI->load->model('Home_model');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url('product.html');?>">Shop</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
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

<!--page title-->
<?php $cartData= $this->cart->contents();?>
<?php if(!empty($cartData)){?>
<main class="main cart">
    <div class="container">
        <form action="<?php echo base_url('Cart/update_cart');?>" method="post">
            <div class="row sec-mar">
                <div class="col-md-12 col-sm-12">
                    <!-- <form  method="POST" action="<?php //  echo base_url('cart/update_cart');?>" enctype="multipart">-->
                    <table class="table_shop">
                        <thead>
                        <tr>
                            <th class="pdt_remove"></th>
                            <th class="pdt_name">Product</th>
                            <th class="pdt_price">Price</th>
                            <th class="pdt_qty">Quantity</th>
                            <th class="pdt_subtotal">Total</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php

                        $no = 0;
                        $grand_total = 0;

                        $cartData= $this->cart->contents();


                        foreach ($cartData as $items) {
                            $no++;
                            $img= $CI->Home_model->getImage($items['id']);


                            echo form_hidden('cart[' . $items['id'] . '][id]',    $items['id']);
                            echo form_hidden('cart[' . $items['id'] . '][rowid]', $items['rowid']);
                            echo form_hidden('cart[' . $items['id'] . '][name]',  $items['name']);
                            echo form_hidden('cart[' . $items['id'] . '][price]', $items['price']);
                            // echo form_hidden('cart[' . $items['id'] . '][qty]', $items['qty']);

                            ?>

                            <tr class="crt_itm"><?php $id=$items['rowid']; ?>
                                <td class="pdt_remove" data-title="Remove"> <a href="<?php echo base_url().'cart/delete_cart/'.$id;?>"><i class="pe-7s-close"></i></a> </td>

                                <td class="pdt_name" data-title="Product Name">
                                    <figure class="pdt_thumb">
                                        <img src="<?php echo base_url();?>front_assets/assets/images/cart-pdt-thumb1.jpg" alt="">
                                    </figure>

                                    <span class="pdt_title"><?php if(!empty($items['name'])){echo $items['name'];
                                            // echo $items['rowid'];
                                        }?></span>
                                </td>

                                <td class="pdt_price" data-title="Price">Rs. <?php if(!empty($items['price'])){ echo number_format($items['price']); }?></td>
                                <?php echo form_input(array('name' =>'rowid1[]', 'type'=>'hidden', 'value' => $items['rowid'], 'maxlength' => '3', 'size' => '10')); ?>
                                <td class="pdt_qty" data-title="Quantity">
                                    <?php echo form_input(array('name' =>'qty[]', 'type'=>'number','class'=>'form-control', 'style'=>'width:57%' ,'value' => $items['qty'], 'maxlength' => '3', 'size' => '5','min'=>'0')); ?>
                                    <input type="submit" value="Update">
                                </td>
                                <td class="pdt_subtotal" data-title="Total">Rs. <?php if(!empty($items['subtotal'])) {echo number_format($items['subtotal']); } ?></td>
                                <?php $total=$grand_total+$items['subtotal'];?>
                            </tr>
                        <?php }    ?>
                        <!--single item-->


                        <!--single item-->


                        <!--single item-->


                        <!--single item-->

                        <tr>
                            <td colspan="5" class="cupon-action">
                                <div class="flx-element">
                                    <a href="<?php echo base_url();?>"><div class="btn btn_cart">Continue shopping</div></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <!--shop table-->

                <div class="bdr-box cart-collaterals">
                    <h4>Cart Totals</h4>

                    <table class="table_shop">
                        <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>Rs. <?php echo $subtotal= $this->cart->total();?></td>
                        </tr>

                        <tr>
                            <td>Shipping</td>
                            <td>Rs. 25.00</td>
                        </tr>
                        <tr>
                            <?php
                            $total= $subtotal+25;
                            $gstAmt=($total*18)/100;
                            ?>
                            <td>GST(18%)</td>
                            <td>Rs. <?php echo $gstAmt; ?></td>
                        </tr>

                        <tr>
                            <td>Grand Total</td>
                            <td><?php

                                echo $total+$gstAmt ;?></td>
                        </tr>
                        </tbody>
                    </table>



                    <a href="<?php echo base_url();?>checkout.html" class="proceed_to_checkout btn pri-bg">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </form>

    </div>
    <?php }else{ ?>
        <strong style="padding-left: 41%;" class="ceneter">Your Cart is Empty !! </strong><br/><br/><br/>

    <?php } ?>
</main>
<!--main-->


     

