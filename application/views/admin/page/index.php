<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */?>
<?php
$id = "";
$title = "";
$page_title = "";
$full_descr = "";
$vision = "";
$mission = "";
$worldwide = "";
$filename = "";
$file_path = "";
$status = "";
$descr = "";

if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->p_id;
        $title = $value->title_name;
        $page_title = $value->page_title;
        $full_descr = $value->full_descr;
        $vision = $value->vision;
        $mission = $value->mission;
        $worldwide = $value->worldwide;
        $filename = $value->filename;
        $file_path = $value->file_path;
        $status = $value->status;


    }
}

//echo '<pre>';
//print_r($editResult);die;
$buttoName = '';
if (!empty($editResult[0]->p_id)) {
    $frmaction = base_url() . "Admin/Page/updatePage";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised gradient-ibiza-sunset white sidebar-shadow';
} else {
    $frmaction = base_url() . "Admin/Page/addPage";
    $buttoName = 'Save Record';
    $BtnClass = 'btn btn-raised gradient-pomegranate white big-shadow';
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
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="alert alert-info" role="alert">
                                                    <strong>PROJECT INFO</strong>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="px-3">
                                                    <form class="form" action="<?php echo $frmaction; ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="ft-user"></i> Page Info
                                                            </h4>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput1">Page Name</label>
                                                                    <select required name="title_name" class="form-control">
                                                                        <option value="">--Select Page--</option>
                                                                        <option value="1" <?php if(!empty($title) && $title==1){ echo 'selected';}?>>HOME</option>
                                                                        <option value="2" <?php if(!empty($title) && $title==2){ echo 'selected';}?>>ABOUT US</option>
                                                                        <!--<option value="3" <?php if(!empty($title) && $title==3){ echo 'selected';}?>>Infertility</option>
                                                                        <option value="4" <?php if(!empty($title) && $title==4){ echo 'selected';}?>>Ultrasonography</option>-->
                                                                        <!--<option value="5" <?php if(!empty($title) && $title==5){ echo 'selected';}?>>MEDIA GALLERY</option>
                                                                        <option value="6" <?php if(!empty($title) && $title==6){ echo 'selected';}?>>CONTACT US</option>-->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6 mb-2">
                                                                    <label for="projectinput4">Page Title</label>
                                                                    <input required type="text" id="projectinput4"
                                                                         class="form-control" placeholder="Title"
                                                                           name="page_title" value="<?php echo $page_title; ?>">
                                                                </div>
                                                            </div>
                                                            <h4 class="form-section"><i class="ft-file-text"></i> Full
                                                                Description</h4>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label for="projectinput9">About Project</label>
                                                                    <textarea required id="projectinput9" rows="5"
                                                                              class="ckeditor form-control" name="full_descr"
                                                                              placeholder="About Project"><?php echo $full_descr; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control">Select Image : </label>
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
                          <?php echo base_url() . 'uploads/page_img/' . $filename; ?>" height="100" width="100">

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

                                                            <div class="form-actions right">
                                                            <input type="submit" class="<?php echo $BtnClass; ?>" value="<?php echo $buttoName;?>">

                                                            
                                                        </div>
                                                        </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="px-3">

                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="ft-info"></i> Our Vision
                                                                Section</h4>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 mb-2">
                                                                    <label for="userinput1">Our Vision</label>
                                                                    <textarea id="projectinput9" rows="5"
                                                                               class="ckeditor form-control" name="vision"
                                                                              placeholder="About vision"><?php echo $vision; ?></textarea>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="row">
                                                               <div class="form-group col-md-12 mb-2">
                                                                    <label for="userinput2">Mission</label>
                                                                    <textarea id="projectinput9" rows="5"
                                                                               class="ckeditor form-control" name="mission"
                                                                              placeholder="Mission Description"><?php echo $mission; ?></textarea>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="form-actions right">
                                                            <input type="submit" class="<?php echo $BtnClass; ?>" value="<?php echo $buttoName;?>">

                                                            </input>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>-->


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
   