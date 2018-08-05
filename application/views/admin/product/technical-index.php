<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */ ?>
<?php

//print_r($editResult); die;
$buttoName = '';
if (!empty($editResult[0]->ts_id)) {
    $frmaction = base_url() . "Admin/Product/updateSpecification";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Product/addSpecification";
    $buttoName = 'Add Specification';
    $BtnClass = 'btn btn-raised btn-primary';
}
?>
<!-- Navbar (Header) Ends-->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
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

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="alert alert-info" role="alert">
                                                    <strong>Technical Specification</strong>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="px-3">
                                                    <form class="form" action="<?php echo $frmaction; ?>" method="POST"
                                                          enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="ft-user"></i> Page Info
                                                            </h4>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput1">Product </label>
                                                                    <select name="product_id" required id="product_id"
                                                                            class="form-control">
                                                                        <option value="">---Select product---</option>
                                                                        <?php
                                                                        foreach ($ddlProduct as $val) {
                                                                            ?>
                                                                            <option value="<?php echo $val->product_id; ?>" <?php if(!empty($editResult) && $editResult[0]->product_id==$val->product_id){ echo 'selected';}?>><?php echo $val->p_name; ?></option>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <!------Hidden_id------>
                                                                <input type="hidden" name="hidden_id" value="<?php if(!empty($editResult)){ echo $editResult[0]->ts_id; } ; ?>">
                                                                <!------Hidden_id------>

                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput4">Top Dimension</label>
                                                                    <input name="top_dimension" required class="form-control"
                                                                        placeholder="L 1960 x W 533 mm"   id="top_dimension" value="<?php if(!empty($editResult)){ echo $editResult[0]->top_dimension; } ; ?>" </input>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput1">Battery Backup </label>
                                                                    <input name="battery_backup" required
                                                                           class="form-control"
                                                                         placeholder="3 hrs" value="<?php if(!empty($editResult)){ echo $editResult[0]->battery_backup; } ; ?>" id="battery_backup" </input>
                                                                </div>
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput4">Height
                                                                        adjustment</label>

                                                                    <input name="height_adjustment" required
                                                                           id="height_adjustment"
                                                                         value="<?php if(!empty($editResult)){ echo $editResult[0]->height_adjustment; } ; ?>"  class="form-control">

                                                                    </input>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput1">Table top
                                                                        sliding </label>
                                                                    <input name="table_top_sliding" required
                                                                           id="table_top_sliding" placeholder="300 mm"
                                                                      value="<?php if(!empty($editResult)){ echo $editResult[0]->table_top_sliding; } ; ?>"     class="form-control">

                                                                    </input>
                                                                </div>
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput4">Trendelenburg /
                                                                        Reverse</label>

                                                                    <input name="trendelenburg" required placeholder="30° / 25°"
                                                                           id="trendelenburg"
                                                                          value="<?php if(!empty($editResult)){ echo $editResult[0]->trendelenburg; } ; ?>" class="form-control">


                                                                    </input>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput1">Lateral tilt </label>
                                                                    <input type="text" name="lateral_tilt"
                                                                     placeholder="20° / 20°"  value="<?php if(!empty($editResult)){ echo $editResult[0]->lateral_tilt; } ; ?>"    class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput4">Kidney elevator</label>

                                                                    <input name="kidney" required placeholder="150 mm"
                                                                           id="kidney"
                                                                       value="<?php if(!empty($editResult)){ echo $editResult[0]->kidney; } ; ?>"    class="form-control">


                                                                </div>
                                                            </div>

                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="px-3">
                                                    <div class="form-body">

                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput1">
                                                                    Leg Rest (up / down)</label>
                                                                <input id="leg_rest"
                                                                       class="form-control" name="leg_rest"
                                                                     value="<?php if(!empty($editResult)){ echo $editResult[0]->leg_rest; } ; ?>"  placeholder="80° / 25°">
                                                            </div>
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput2">Head Rest (up / down)</label>
                                                                <input id="head_rest" rows="5"
                                                                       class="form-control" name="head_rest"
                                                                  value="<?php if(!empty($editResult)){ echo $editResult[0]->head_rest; } ; ?>"     placeholder="20° / 60° ">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput3">Power supply</label>
                                                                <input id="projectinput9" rows="5"
                                                                       class="form-control" name="Power_supply"
                                                                    value="<?php if(!empty($editResult)){ echo $editResult[0]->Power_supply; } ; ?>"   placeholder="24 VDC"></div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput3">Patient Weight Capacity</label>
                                                                <input id="capacity_supply" rows="5"
                                                                       class="form-control" name="capacity_supply"
                                                                 value="<?php if(!empty($editResult)){ echo $editResult[0]->capacity_supply; } ; ?>"  placeholder="300 Kgs (666 lbs)">
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput3">Back Rest (up / down)</label>
                                                                <input id="capacity_supply" rows="5"
                                                                       class="form-control" name="back_rest"
                                                                 value="<?php if(!empty($editResult)){ echo $editResult[0]->back_rest; } ; ?>"  placeholder="300 Kgs (666 lbs)">
                                                            </div>

                                                        </div>

                                                        <br/>
                                                        <br/>
                                                        <br/>

                                                    </div>

                                                    <div class="form-actions right">
                                                        <input type="submit" class="<?php echo $BtnClass ;?>" value="<?php echo $buttoName;?>">

                                                        </input>
                                                    </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


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
