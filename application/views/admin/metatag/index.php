<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */
//error_reporting(0);
$id = "";
$title = "";
$MetaKeyword = "";
$MetaDescr = "";
$metaTag = "";
foreach ($editResult as $metVal) {
    $id = $metVal->seo_id;
    $title = $metVal->seo_title;
    $MetaKeyword = $metVal->seo_keyword;
    $MetaDescr = $metVal->seo_descr;
    $metaTag = $metVal->seo_matatag;
    $page_name = $metVal->page_name;

}
?>
<?php
$buttoName = '';
if (!empty($editResult[0]->seo_id)) {
    $frmaction = base_url() . "Admin/MetaTag/updateMetaTag";
    $buttoName = 'Save Changes';
    $BtnClass = 'btn btn-raised btn-warning';
} else {
    $frmaction = base_url() . "Admin/MetaTag/addMetaTag";
    $buttoName = 'Add Meta Tag';
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
                                <h4 class="card-title" id="horz-layout-basic">Meta-Tag Setting</h4>

                            </div>
                            <div class="card-body">

                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add MetaTag
                                                For Seo...!</h4>
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
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Select Page
                                                    : </label>
                                                <div class="col-md-7">
                                                    <select name="selectPage" id="" class="form-control" required> 
                                                        <option value="">--Select Page---</option>
                                                        <option value="Home" <?php if (!empty($editResult) && ($page_name == "Home")) {
                                                            echo 'selected';
                                                        } ?>>Home
                                                        </option>
                                                        <option value="About" <?php if (!empty($editResult) && ($page_name == "About")) {
                                                            echo 'selected';
                                                        } ?>>About
                                                     </option>
                                                        <option value="Privacypolicy" <?php if (!empty($editResult) && ($page_name == "Privacypolicy")) {
                                                            echo 'selected';
                                                        } ?>>Privacy Policy
                                                        </option>
                                                        <option value="Termscondition" <?php if (!empty($editResult) && ($page_name == "Termscondition")) {
                                                            echo 'selected';
                                                        } ?>>Terms & Condition
                                                        </option>
                                                        <option value="Returnpolicy" <?php if (!empty($editResult) && ($page_name == "Returnpolicy")) {
                                                            echo 'selected';
                                                        } ?>>Return Policy
                                                        </option>
                                                        
                                                        <option value="Deliveryinformation" <?php if (!empty($editResult) && ($page_name == "Deliveryinformation")) {
                                                            echo 'selected';
                                                        } ?>>Delivery Information
                                                        </option>
                                                        <option value="Cart" <?php if (!empty($editResult) && ($page_name == "Cart")) {
                                                            echo 'selected';
                                                        } ?>>Cart
                                                        </option>
                                                        <option value="Checkout" <?php if (!empty($editResult) && ($page_name == "Checkout")) {
                                                            echo 'selected';
                                                        } ?>>Checkout
                                                        </option>
                                                         <option value="Login" <?php if (!empty($editResult) && ($page_name == "Login")) {
                                                            echo 'selected';
                                                        } ?>>Login
                                                        </option>
                                                        <option value="Signup" <?php if (!empty($editResult) && ($page_name == "Signup")) {
                                                            echo 'selected';
                                                        } ?>>Signup
                                                        </option>
                                                        <option value="Contact" <?php if (!empty($editResult) && ($page_name == "Contact")) {
                                                            echo 'selected';
                                                        } ?>>Contact
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Meta Title
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtMetatitle" name="txtMetatitle" required=""
                                                           class="form-control" value="<?php echo $title; ?>">
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" id="" name="hidden_id"
                                                   value="<?php echo $id; ?>">
                                            <!--<div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Meta Tag
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtMetatTag" name="txtMetatTag" required=""
                                                           class="form-control" value="<?php echo $metaTag; ?>">
                                                </div>
                                            </div>-->
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Meta Keyword
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtMetaKeyword" name="txtMetaKeyword"
                                                           
                                                           class="form-control" value="<?php echo $MetaKeyword; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtBannerTitle">Meta
                                                    Description
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="txtMetaDescr" name="txtMetaDescr" 
                                                           class="form-control" value="<?php echo $MetaDescr; ?>">
                                                </div>
                                            </div>
                                            <!--<div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput5"> Status
                                                        : </label>
                                                    <div class="col-md-7">
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="">--Select Status--</option>
                                                            <option value="active" <?php /*if ($status == 'active') {
                                                                echo 'selected';
                                                            } */ ?>>Active
                                                            </option>
                                                            <option value="inactive" <?php /*if ($status == 'inactive') {
                                                                echo 'selected';
                                                            } */ ?>>Inactive
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>-->
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
