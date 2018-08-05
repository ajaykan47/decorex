<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Aanchal
 * Date: 06-04-2018
 * Time: 01:07 AM
 */ ?>

<?php
$filename = '';
$id = '';
if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->client_id;
        $filename = $value->client_logo;

    }
}

$buttoName = '';
if (!empty($editResult[0]->client_id)) {
    $frmaction = base_url() . "Admin/OurClient/updateClientlogo";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised gradient-pomegranate white big-shadow';
} else {
    $frmaction = base_url() . "Admin/OurClient/addClientLogo";
    $buttoName = 'Save Record';
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
                        <div class="content-header">Our Client Forms</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Our Client </h4>
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
                                            <h4 class="form-section"><i class="ft-file-text"></i> Our Client</h4>

                                            <!--<div class="form-group row">
                                                <label class="col-md-3 label-control" for="client_title"> Client Name
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="client_title" name="client_title"
                                                            class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->client_title;
                                                           } else {
                                                               echo set_value('client_title');
                                                           } ?>">
                                                </div>
                                            </div>-->

                                            <input type="hidden" name="client_id" required
                                                   value="<?php if (!empty($editResult)) {
                                                       echo $editResult[0]->client_id;
                                                   } ?>">


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Select Client Logo : </label>
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
                                  <?php echo base_url() . 'uploads/ourclient/' . $filename; ?>" height="60" width="60">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>



