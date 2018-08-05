<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**************
 * Created by $ajaykan47.
 * User: Aanchal
 * Date: 05-04-2018
 * Time: 12:05 AM
 ***********************************/
$buttoName = '';
if (!empty($editResult[0]->usefl_id)) {
    $frmaction = base_url() . "Admin/Page/updateQuick";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Page/addQuickLink";
    $buttoName = 'Add Quick Link';
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
                                <h4 class="card-title" id="horz-layout-basic">Quick Link Setting
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
                                <!-- <p class="mb-0">This is the basic horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. To define form sections use <code>form-section</code> class with any heading tags.</p>-->
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" action="<?php echo $frmaction; ?>" method="POST" enctype="">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Social Icon Link</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">Name :  </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtFacebook" name="txtName" class="form-control"
                                                           value="<?php if(!empty($editResult)){ echo $editResult[0]->title_name;}?>">
                                                </div>
                                            </div>
                                            <input type="hidden" name="hidden_id" value="<?php if(!empty($editResult)){ echo $editResult[0]->usefl_id;}?>">

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5"> Link :  </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtTwitter" name="txtLink" class="form-control"
                                                           value="<?php if(!empty($editResult)){ echo $editResult[0]->page_link ;}?>">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>
