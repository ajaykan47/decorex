<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */
//error_reporting(0);
$id = "";
$product_name = "";
$tax_perctg = "";
$from_date = "";
$end_date = "";
$product_id = "";
$shipping_id = "";

foreach ($editResult as $metVal) {
    $id = $metVal->progst_id;
    $product_name = $metVal->product_name;
    $tax_perctg = $metVal->tax_perctg;
    $from_date = $metVal->from_date;
    $end_date = $metVal->end_date;
    $tax_id = $metVal->tax_id;
    $product_id = $metVal->product_id;
    $shipping_id = $metVal->shipping_id;
    

}
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->progst_id)) {
    $frmaction = base_url() . "Admin/Productgst/updateProductgst";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "Admin/Productgst/addProductgst";
    $buttoName = 'Add Tax';
    $BtnClass = 'btn btn-raised btn-primary';
}
?>
<!-- Navbar (Header) Ends-->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Setting Forms</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Product Tax</h4>

                            </div>
                            <div class="card-body">

                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add Tax
                                             </h4>
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
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtproduct">Product Name
                                                    : </label>
                                                <div class="col-md-7">
                                                    <?php if(!empty($editResultt)){?>
                                                    <?php 
                                                    foreach($editResultt as $prod){
                                                    ?>
                                                    <input type="text" id="txtproduct" name="txtproduct" 
                                                           class="form-control" value="<?php echo $prod->p_name; ?>">
                                                    <input type="hidden" id="product_id" name="product_id" 
                                                           class="form-control" value="<?php echo $prod->product_id; ?>">
                                                    <?php }?>
                                                    <?php }else{?>
                                                     <input type="text" id="txtproduct" name="txtproduct" 
                                                           class="form-control" value="<?php echo $product_name ?>">
                                                    <input type="hidden" id="product_id" name="product_id" 
                                                           class="form-control" value="<?php echo $product_id ?>">
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <?php

                                            // print_r($editResult); die; ?>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtweight">Select Shipping Charge
                                                    : </label>
                                                <div class="col-md-7">
                                                    <select name="shipping_id" id="" class="form-control"> 
                                                        <option value="">--Select Weight---</option>
                                                         <?php

                                                        foreach ($weightResult as $valWeig) {
                                                            ?>
                                                            <option value="<?php echo $valWeig->shipping_id; ?>" <?php if(!empty($editResult) && ($editResult[0]->shipping_id==$valWeig->shipping_id)){echo 'selected';}?>><?php
                                                                echo $valWeig->weight;
                                                                ?></option>
                                                            <?php
                                                        }
                                                        ?> 
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Select Type Tax
                                                    : </label>
                                                <div class="col-md-7">
                                                    <select name="tax_id" id="" class="form-control" required> 
                                                        <option value="">--Select Tax Type---</option>
                                                         <?php
                                                        foreach ($ddlResult as $val) {
                                                            ?>
                                                            <option value="<?php echo $val->tax_id; ?>" <?php if(!empty($editResult)&&($editResult[0]->tax_id==$val->tax_id)){echo 'selected';}?>><?php
                                                                echo $val->tax_type;
                                                                ?></option>
                                                            <?php
                                                        }
                                                        ?> 
                                                    </select>
                                                </div>
                                            </div>

                                            <input type="hidden" class="form-control" id="" name="hidden_id"
                                                   value="<?php echo $id; ?>">
                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txttax">Tax in Percentage(%)
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txttax" name="txttax"
                                                           
                                                           class="form-control" value="<?php echo $tax_perctg; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtFromdate">From Date
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="date" id="txtFromdate" name="txtFromdate" 
                                                           class="form-control" value="<?php echo $from_date; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtEnddate">End Date
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="date" id="txtEnddate" name="txtEnddate" 
                                                           class="form-control" value="<?php echo $end_date; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Status
                                                    : </label>
                                                <div class="col-md-7">

                                                    <input type="radio" required name="status"
                                                           value="Active" <?php if (!empty($editResult) && $editResult[0]->status == 'Active') {
                                                        echo 'checked';
                                                    } ?> checked> Active<br>
                                                    <input type="radio" required name="status"
                                                           value="Inactive" <?php if (!empty($editResult) && $editResult[0]->status == 'Inactive') {
                                                        echo 'checked';
                                                    } ?>> Inactive<br>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            </input>
                                            <input type="submit" class="<?php echo $BtnClass; ?>"
                                                   value="<?php echo $buttoName; ?>">

                                            </input>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>
