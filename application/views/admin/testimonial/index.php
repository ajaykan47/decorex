<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */
if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->tml_id;
        $filename = $value->image_file;

    }
}

$buttoName = '';
if (!empty($editResult[0]->tml_id)) {
    $frmaction = base_url() . "Admin/Testimonial/updateTestimonial";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Testimonial/addTestimonial";
    $buttoName = 'Add Testimonial';
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
                        <div class="content-header">Testimonial Forms</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Testimonial </h4>
                                <?php if ($this->session->flashdata('done')) { ?>
                                    <p style="float: right;" class="disMes alert alert-success"> Your Testimonial Added
                                        Successfully...!
                                        </p>
                                <?php } ?>

                                <?php if ($this->session->flashdata('error')) { ?>
                                    <p style="float: right;" class="disMes alert alert-danger">Your Testimonial Not
                                        Added Successfully...!</p>
                                <?php } ?>
                                <?php if ($this->session->flashdata('errorValidation')) { ?>
                                    <p style="float: right;" class="disMes alert alert-warning">Something Missing Please
                                        Try Again or This Record Already Exists</p>
                                <?php } ?>
                            </div>
                            <div class="card-body">

                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Testimonial</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtTestimonialTitle"> Title
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtTestimonialTitle" name="txtTestimonialTitle"
                                                           required class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->tml_name;
                                                           } else {
                                                               echo set_value('txtTestimonialTitle');
                                                           } ?>">
                                                </div>
                                            </div>

                                            <input type="hidden" name="category_id" required
                                                   value="<?php if (!empty($editResult)) {
                                                       echo $editResult[0]->tml_id;
                                                   } ?>">

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Short
                                                    Description : </label>
                                                <div class="col-md-7">
                                                            <textarea name="txtShortDesc"  class="ckeditor"
                                                                      id="txtShortDesc"> <?php if (!empty($editResult)) {
                                                                    echo $editResult[0]->description;
                                                                } else {
                                                                    echo set_value('txtShortDesc');
                                                                } ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Select  Image : </label>
                                                <div class="col-md-7">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" class="form-control" id="userfile"
                                                               name="userfile" placeholder="">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    <?php
                                                    if (!empty($id)) {
                                                        ?>
                                                        <img src="
                                  <?php echo base_url() . 'uploads/testimonial/' . $filename; ?>" height="60" width="60">

                                                        <?php ?>
                                                        <input type="hidden" class="form-control" id="" name="hidden_id"
                                                               value="<?php echo $id; ?>">
                                                        <input type="hidden" class="form-control" id="" name="file_name"
                                                               value="<?php echo $filename; ?>">


                                                        </span>
                                                    <?php } ?>
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
    <script src="<?php echo base_url(); ?>backend_assets/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>
