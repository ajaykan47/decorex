<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<?php
$id = "";
$title = "";
$filename = "";
$file_path = "";
$status = "";

if (!empty($res)) {
    foreach ($res as $value) {
        $id = $value->gallery_id;
        $title = $value->title;
        $filename = $value->filename;
        $file_path = $value->file_path;
        $status = $value->status;


    }
}

if (!empty($id)) {
    $frmaction = base_url() . "Admin/Gallery/updategallery";
} else {
    $frmaction = base_url() . "Admin/Gallery/savegallery";
}
?>
<?php $buttoName = '';
if (!empty($editResult[0]->gallery_id)) {
    $buttoName = 'Change Gallery';
    $BtnClass = 'btn btn-raised gradient-crystal-clear white shadow-big-navbar';
} else {
    $buttoName = 'Add Gallery';
    $BtnClass = 'btn btn-raised gradient-crystal-clear white shadow-big-navbar';
}
?>
<!-- Navbar (Header) Ends-->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- Basic form layout section start -->
            <section id="horizontal-form-layouts">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Add Gallery</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">All Gallery </h4>
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
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add Gallery</h4>


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="client_title">Image Title
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" required value="" name="gal_type" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product_name">Gallery Name
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="client_title" name="gallery_title"
                                                           required class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->gallery_title;
                                                           } else {
                                                               echo set_value('gallery_title');
                                                           } ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product_title">Select Image
                                                    : </label>
                                                <div class="col-md-7">
                                                    <p>
                                                        <label>Upload Images</label>
                                                        <span class="field"> <input type="file" class="form-control"
                                                                                    id="" name="userfile[]"
                                                                                    multiple placeholder="">
                                                            <?php
                                                            if (!empty($id)) {
                                                                ?>

                                                                <img src="
                          <?php echo base_url() . 'uploads/gallery/' . $filename; ?>" height="60" width="60">

                                                            <?php } ?>
                                                            <input type="hidden" class="form-control" id=""
                                                                   name="hidden_id"
                                                                   value="<?php echo $id; ?>">
                  <input type="hidden" class="form-control" id="" name="file_name" value="<?php echo $filename; ?>">
                    <input type="hidden" class="form-control" id="" name="full_path" value="<?php echo $file_path; ?>">

					 </span>
                                                    </p>
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




