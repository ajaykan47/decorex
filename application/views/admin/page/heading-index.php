<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<?php
$buttoName = '';
if (!empty($editResult[0]->hd_id)) {
    $frmaction = base_url() . "Admin/Page/updateHeading";
    $buttoName = 'Change ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Page/addHeading";
    $buttoName = 'Add';
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
                                <h4 class="card-title" id="horz-layout-basic">Heading Setting</h4>
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



                                <div class="px-3">
                                    <form class="form form-horizontal" action="<?php echo $frmaction; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Heading</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Select Page :  </label>
                                                <div class="col-md-8">
                                                    <select required name="title_name" class="form-control">
                                                        <option value="">--Select Page--</option>
                                                        <option value="1" <?php if(!empty($editResult) && $editResult[0]->title_name==1){ echo 'selected';}?>>About Us</option>
                                                        <option value="2" <?php if(!empty($editResult) && $editResult[0]->title_name==2){ echo 'selected';}?>>Privacy Policy</option>
                                                        <option value="3" <?php if(!empty($editResult) && $editResult[0]->title_name==3){ echo 'selected';}?>>Terms & Conditions</option>
                                                        <option value="4" <?php if(!empty($editResult) && $editResult[0]->title_name==4){ echo 'selected';}?>>Return Policy</option>
                                                        <option value="5" <?php if(!empty($editResult) && $editResult[0]->title_name==5){ echo 'selected';}?>>Delivery Information</option>
                                                        <!--<option value="6" <?php if(!empty($editResult) && $editResult[0]->title_name==6){ echo 'selected';}?>>CONTACT US</option-->>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Heading Title :  </label>
                                                <div class="col-md-8">
                                                    <input type="text" id="txtFacebook" name="txtName" class="form-control"
                                                           value="<?php if(!empty($editResult)){ echo $editResult[0]->head_title;}?>">
                                                </div>
                                            </div>



                                            <input type="hidden" name="hidden_id" value="<?php if(!empty($editResult)){ echo $editResult[0]->hd_id;}?>">

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Heading Paragraph :  </label>
                                                <div class="col-md-8">
                                                     <textarea id="ckeditor"  class="ckeditor" id="projectinput9" rows="5"
                                                               name="full_descr"
                                                               placeholder="About Project"><?php if(!empty($editResult)){ echo $editResult[0]->head_descr;}?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Status
                                                    : </label>
                                                <div class="col-md-7">

                                                    <input type="radio" required name="txtStatus"
                                                           value="Active" <?php if (!empty($editResult) && $editResult[0]->status == 'Active') {
                                                        echo 'checked';
                                                    } ?> checked> Active<br>
                                                    <input type="radio" required name="txtStatus"
                                                           value="Inactive" <?php if (!empty($editResult) && $editResult[0]->status == 'Inactive') {
                                                        echo 'checked';
                                                    } ?>> Inactive<br>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <!--  <input type="submit" class="btn btn-raised btn-warning mr-1" value="Reset">-->

                                            </input>
                                            <input type="submit" class="<?php echo $BtnClass?>" value="<?php echo $buttoName; ?>">

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
    <script src="<?php echo base_url(); ?>backend_assets/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>
