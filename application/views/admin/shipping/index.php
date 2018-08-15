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
$weight = "";
$amount = "";

foreach ($editResult as $metVal) {
    $id = $metVal->shipping_id;
    $weight = $metVal->weight;
    $amount = $metVal->amount;
   

}
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->shipping_id)) {
    $frmaction = base_url() . "Admin/Shipping/updateShipping";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "Admin/Shipping/addShipping";
    $buttoName = 'Add Shipping';
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
                                <h4 class="card-title" id="horz-layout-basic">Shipping Charge</h4>

                            </div>
                            <div class="card-body">

                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add Shipping Charge
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
                                                <label class="col-md-3 label-control" for="txtweight">Weight
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtweight" name="txtweight" required=""
                                                           class="form-control" value="<?php echo $weight; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtamount">Amount
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtamount" name="txtamount" required=""
                                                           class="form-control" value="<?php echo $amount; ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" id="" name="hidden_id"
                                                   value="<?php echo $id; ?>">
                                            
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
