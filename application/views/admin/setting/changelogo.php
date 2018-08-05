<!-- Navbar (Header) Ends-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = "";
$title = "";
$filename = "";
$file_path = "";
$status = "";
$company_name = "";
$branch_add = "";
$mobile = "";
$alt_mob = "";
$personal_email = "";
$branch_add = "";
$headoffice_add = "";
$personal_email = "";
$mon_sat = "";
$sunday = "";

if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->logo_id;
        $title = $value->logo_title;
        $filename = $value->filename;
        $file_path = $value->file_path;
        $status = $value->status;
        $company_name = $value->company_name;
        $branch_add = $value->branch_add;
        $mobile = $value->mobile;
        $alt_mob = $value->alt_mob;
        $personal_email = $value->personal_email;
        $mon_sat = $value->mon_sat;
        $sunday = $value->sunday;

    }
}
$buttoName = '';
if (!empty($editResult[0]->logo_id)) {

    $frmaction = base_url() . "Admin/Setting/updateInfoLWeb";
    $buttoName = 'Changes Information';
    $BtnClass = 'btn btn-raised gradient-mint white shadow-z-4';
} else {
    $frmaction = base_url() . "Admin/Setting/addLogo";
    $buttoName = 'Submit';
    $BtnClass = 'btn btn-raised gradient-pomegranate white big-shadow';
}
?>
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
                                <h4 class="card-title" id="horz-layout-basic">Change Logo</h4>
                                <?php if ($this->session->flashdata('done')) { ?>
                                    <p style="float: right;" class="disMes alert alert-success">Your Record is
                                        successfully saved...!</p>
                                <?php } ?>

                                <?php if ($this->session->flashdata('error')) { ?>
                                    <p style="float: right;" class="disMes alert alert-danger">Your Banner Info is not
                                        Save Please Try Again...!</p>
                                <?php } ?>
                                <?php if ($this->session->flashdata('errorValidation')) { ?>
                                    <p style="float: right;" class="disMes alert alert-danger">Something Missing Please
                                        Try Again or This Record is Already Exists..!</p>
                                <?php } ?>

                            </div>
                            <div class="card-body">

                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-file-text"></i> Requirements</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Company
                                                    Name: </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtCompany" required class="form-control"
                                                           name="txtCompany" value="<?php if (!empty($company_name)) {
                                                        echo $company_name;
                                                    } else {
                                                        echo set_value('txtCompany');
                                                    } ?>">
                                                </div>
                                            </div>
                                            <!----Hidden Id------>
                                            <input type="hidden" class="form-control"
                                                   name="logoID" value="<?php echo $id; ?>">
                                            <!----Hidden Id------>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Logo
                                                    Title: </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtLogoTitle" required class="form-control"
                                                           name="txtLogoTitle" value="<?php if (!empty($title)) {
                                                        echo $title;
                                                    } else {
                                                        echo set_value('txtLogoTitle');
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Select Logo : </label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" class="file-custom" id=""
                                                               name="userfile" placeholder="">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    <?php
                                                    if (!empty($id)) {
                                                        ?>

                                                        <img src="
                              <?php echo base_url() . 'uploads/logo/' . $filename; ?>" height="60" width="60">

                                                    <?php } ?>
                                                    <input type="hidden" class="file-custom"" id="" name="hidden_id"
                                                    value="<?php echo $id; ?>">
                                                    <input type="hidden" class="file-custom"" id="" name="file_name"
                                                    value="<?php echo $filename; ?>">
                                                    <input type="hidden" class="file-custom" id="" name="full_path"
                                                           value="<?php echo $file_path; ?>">

                                                    </span>
                                                </div>
                                            </div>
                                             
                                           <!--<div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Header Address Bottom line 
                                                    
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtAltMobilee" class="form-control"
                                                           name="txtAltMobilee" value="<?php if (!empty($alt_mobb)) {
                                                        echo $alt_mobb;
                                                    } else {
                                                        echo set_value('txtAltMobilee');
                                                    } ?>">
                                                </div>
                                            </div>-->
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Company Branch
                                                    Address: </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtBranchAdd" required class="form-control"
                                                           name="txtBranchAdd" value="<?php if (!empty($branch_add)) {
                                                        echo $branch_add;
                                                    } else {
                                                        echo set_value('txtBranchAdd');
                                                    } ?>">
                                                </div>
                                            </div>

                                            
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtMobile">Mobile
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtMobile" required class="form-control"
                                                           name="txtMobile" value="<?php if (!empty($mobile)) {
                                                        echo $mobile;
                                                    } else {
                                                        echo set_value('txtMobile');
                                                    } ?>">
                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Support
                                                    
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtAltMobile" class="form-control"
                                                           name="txtAltMobile" value="<?php if (!empty($alt_mob)) {
                                                        echo $alt_mob;
                                                    } else {
                                                        echo set_value('txtAltMobile');
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Personal Email
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtEmail" required class="form-control"
                                                           name="txtEmail" value="<?php if (!empty($personal_email)) {
                                                        echo $personal_email;
                                                    } else {
                                                        echo set_value('txtEmail');
                                                    } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Mon-Sat
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtmonsat" class="form-control"
                                                           name="txtmonsat"
                                                           value="<?php if (!empty($mon_sat)) {
                                                               echo $mon_sat;
                                                           } else {
                                                               echo set_value('txtmonsat');
                                                           } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Sun
                                                    : </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtsunday" class="form-control"
                                                           name="txtsunday"
                                                           value="<?php if (!empty($sunday)) {
                                                               echo $sunday;
                                                           } else {
                                                               echo set_value('txtsunday');
                                                           } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Status
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="radio" name="txtStatus"
                                                           value="Active" <?php if (!empty($editResult) && $editResult[0]->status == 'Active') {
                                                        echo 'checked';
                                                    } ?> > Active<br>
                                                    <input type="radio" name="txtStatus"
                                                           value="Inactive" <?php if (!empty($editResult) && $editResult[0]->status == 'Inactive') {
                                                        echo 'checked';

                                                    } ?>> Inactive<br>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions ">
                                            <input type="submit" class="<?php echo $BtnClass; ?>"
                                                   value="<?php echo $buttoName; ?>">
                                            </input>
                                        </div>
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