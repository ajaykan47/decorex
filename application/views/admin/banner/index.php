<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */
?>
<?php
$id = "";
$title = "";
$filename = "";
$file_path = "";
$status = "";
$descr = "";
/*echo"<pre>";
print_r($editResult);die;*/
if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->banner_id;
        $title = $value->title;
        $filename = $value->filename;
        $file_path = $value->file_path;
        $status = $value->status;
        $descr = $value->descr;

    }
}


 $buttoName = '';
if (!empty($editResult[0]->banner_id)) {
    $frmaction = base_url() . "Admin/Banner/updateBanner";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised gradient-mint white shadow-z-4';
} else {
    $frmaction = base_url() . "Admin/Banner/addBanner";
    $buttoName = 'Add Banner';
    $BtnClass = 'btn btn-raised gradient-nepal white card-shadow';
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
                                <h4 class="card-title" id="horz-layout-basic">Banner Setting</h4>
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
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add Banner</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Banner Title : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtBannerTitle" name="txtBannerTitle"
                                                           class="form-control" value="<?php echo $title; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Short Description : </label>
                                                <div class="col-md-7">
                                                    <textarea name="txtShortDesc" rows="5" cols="70"
                                                              id="txtShortDesc"> <?php echo $descr ;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Select Banner Image (1920*700): </label>
                                                <div class="col-md-7">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" class="form-control" id="userfile"
                                                               name="userfile" placeholder="" >
                                                        <span class="file-custom"></span>
                                                         </label>
                                                    <?php
                                                    if (!empty($id)) {
                                                        ?>

                                                        <img src="
                          <?php echo base_url() . 'uploads/banner/' . $filename; ?>" height="100" width="100">

                                                    <?php } ?>
                                                    <input type="hidden" class="form-control" id="" name="hidden_id"
                                                    value="<?php echo $id; ?>">
                                                    <input type="hidden" class="form-control" id="" name="file_name"
                                                    value="<?php echo $filename; ?>">
                                                    <input type="hidden" class="file-custom" id="" name="full_path"
                                                           value="<?php echo $file_path; ?>">

                                                    </span>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Status : </label>
                                                <div class="col-md-7">
                                                    <select name="status" id="status" class="form-control" >
                                                        <option value="">--Select Status--</option>
                                                        <option value="active" <?php  if($status=='active') { echo 'selected';} ?>>Active</option>
                                                        <option value="inactive" <?php  if($status=='inactive') { echo 'selected';} ?>>Inactive</option>

                                                    </select>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-actions">


                                            </input>
                                            <input type="submit" class="<?php echo $BtnClass; ?>" value="<?php echo $buttoName; ?>">

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
