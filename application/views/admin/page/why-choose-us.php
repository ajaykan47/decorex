<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */?>
<?php
error_reporting(0);
$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
$buttoName = '';
if (!empty($editResult[0]->faq_id)) {
    $frmaction = base_url() . "Admin/Page/updateWhy";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Page/addWhyChoose";
    $buttoName = 'Save Record';
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
                                                    <strong>WHY CHOOSE US</strong>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="px-3">
                                                    <form class="form" action="<?php echo $frmaction; ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="ft-user"></i> Page Info
                                                            </h4>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 mb-2">
                                                                    <label for="projectinput4">Tag Name</label>
                                                                    <input required type="text" id="projectinput4"
                                                                           class="form-control" placeholder="Title"
                                                                           name="page_title" value="<?php if(!empty($editResult)){ echo $editResult[0]->faq_title; }?>" >
                                                                </div>
                                                                <input type="hidden" value="<?php if(!empty($editResult)){ echo $editResult[0]->faq_id; }?>" name="hidden_id">

                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 mb-2">
                                                                    <label for="">Short Description</label>
                                                                    <textarea required id="" rows="5"
                                                                              class="form-control" name="short_descr"
                                                                              placeholder="About Project"><?php if(!empty($editResult)){ echo $editResult[0]->faq_content; }?></textarea>
                                                                </div>

                                                            </div>

                                                            <h4 class="form-section"><i class="ft-file-text"></i> Description
                                                                </h4>

                                                            <div class="row">
                                                                <div class="form-group col-12 mb-2">
                                                                    <label for="projectinput9">Summary</label>
                                                                    <textarea required id=""
                                                                              class="ckeditor form-control" name="full_descr"
                                                                              placeholder="About Project"><?php if(!empty($editResult)){ echo $editResult[0]->paragraph_first; }?></textarea>
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
                                                    <?php
                                                    if($user_type==1){
                                                    ?>
                                                    <div class="form-body">
                                                        <h4 class="form-section"><i class="ft-info"></i> Summery Details</h4>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput1">Our Vision</label>
                                                                <textarea id="projectinput9" rows="5"
                                                                          class="form-control" name="vision"
                                                                          placeholder="About vision"><?php if(!empty($editResult)){ echo $editResult[0]->paragraph_second; }?></textarea>
                                                            </div>
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput2">Mission</label>
                                                                <textarea id="projectinput9" rows="5"
                                                                          class="form-control" name="mission"
                                                                          placeholder="Mission Description"><?php if(!empty($editResult)){ echo $editResult[0]->paragraph_third; }?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="userinput3">Worldwide Patronage</label>
                                                                <textarea id="projectinput9" rows="5"
                                                                          class="form-control" name="worldwide"
                                                                          placeholder="Worldwide Description"><?php if(!empty($editResult)){ echo $editResult[0]->paragraph_fourth; }?></textarea>
                                                            </div>

                                                        </div>


                                                    </div>
                                                    <?php }?>
                                                    <div class="form-actions">
                                                        <input type="submit" class="<?php echo $BtnClass?>" value="<?php echo $buttoName; ?>">

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
    <script src="<?php echo base_url(); ?>backend_assets/ckeditor/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.disMes').fadeOut('fast');
            }, 2000);
        });
    </script>
