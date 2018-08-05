<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:02 PM
 */
//echo '<pre>';
//print_r($editResult);die;
$buttoName = '';
if (!empty($editResult[0]->subcat_id)) {
    $frmaction = base_url() . "Admin/SubCategory/updateSubCategory";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised gradient-mint white shadow-z-4';
} else {
    $frmaction = base_url() . "Admin/SubCategory/addSubCategory";
    $buttoName = 'Add Sub-Category';
    $BtnClass = 'btn btn-raised gradient-pomegranate white big-shadow';
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
                                <h4 class="card-title" id="horz-layout-basic">Sub-Category </h4>
                                <!-- <p class="mb-0">This is the basic horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. To define form sections use <code>form-section</code> class with any heading tags.</p>-->
                            </div>
                            <div class="card-body">
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
                                <div class="px-3">
                                    <form class="form form-horizontal"
                                          action="<?php echo $frmaction; ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-file-text"></i>Sub-Category</h4>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="txtCategoryTitle">Category
                                                    Name
                                                    : </label>
                                                <div class="col-md-7">
                                                    <select name="category_id" required id="category_id" class="form-control" >
                                                        <option value="">---Select Category---</option>
                                                        <?php
                                                        //print_r($ddlResult); die;
                                                        foreach ($ddlResult as $val) {
                                                            ?>
                                                            <option value="<?php echo $val->cat_id; ?>" <?php if(!empty($editResult)&&($editResult[0]->cat_id==$val->cat_id)){echo 'selected';}?>><?php
                                                                echo $val->name;
                                                                ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput5">
                                                    Sub-Category : </label>
                                                <div class="col-md-7">
                                                            <input name="subcategory" class="form-control" required
                                                                      id="subcategory" value="<?php if (!empty($editResult)) {
                                                                echo $editResult[0]->subcat_name;
                                                            } else {
                                                                echo set_value('subcategory');
                                                            } ?>"> </input>
                                                </div>
                                            </div>

                                            <!-----hidden---field--->
                                            <input type="hidden" name="subcategory_id" required
                                                   value="<?php if (!empty($editResult)) {
                                                       echo $editResult[0]->subcat_id;
                                                   } ?>">
                                            <a href="javascript:showhide('showSeo')">
                                                Click for Seo Content
                                            </a>
                                            <!--------------------Seo------------->
                                            <?php if(!empty($editResult)){ ?>

                                                <div id="showSeo" style="display:block;">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="txtSeoTitle">Title
                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="txtSeoTitle" name="txtSeoTitle"
                                                                   class="form-control"
                                                                   value="<?php if(!empty($editResult)) {
                                                                       echo $editResult[0]->seo_title;
                                                                   } else {
                                                                       echo set_value('txtSeoTitle');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="MetaTag">Meta Tag

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="MetaTag" name="MetaTag"
                                                                   class="form-control"
                                                                   value="<?php if(!empty($editResult)) {
                                                                       echo $editResult[0]->meta_tag;
                                                                   } else {
                                                                       echo set_value('MetaTag');
                                                                   } ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="txtCategoryTitle">Meta
                                                            Keywords

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="TxtMetaKey" name="TxtMetaKey"
                                                                   class="form-control"
                                                                   value="<?php if(!empty($editResult)) {
                                                                       echo $editResult[0]->meta_keyword_descr;
                                                                   } else {
                                                                       echo set_value('TxtMetaKey');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="TxtMetaDescr">Meta
                                                            Description

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="TxtMetaDescr" name="TxtMetaDescr"
                                                                   class="form-control"
                                                                   value="<?php if (!empty($editResult)) {
                                                                       echo $editResult[0]->meta_descr;
                                                                   } else {
                                                                       echo set_value('TxtMetaDescr');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--------------------Seo------------->


                                            <?php }else{?>

                                                <div id="showSeo" style="display:none;">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="txtCategoryTitle">Title

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="txtSeoTitle" name="txtSeoTitle"
                                                                   class="form-control"
                                                                   value="<?php if (!empty($editResult)) {
                                                                       echo $editResult[0]->seo_title;
                                                                   } else {
                                                                       echo set_value('txtSeoTitle');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="MetaTag">Meta Tag

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="MetaTag" name="MetaTag"
                                                                   class="form-control"
                                                                   value="<?php if (!empty($editResult)) {
                                                                       echo $editResult[0]->meta_tag;
                                                                   } else {
                                                                       echo set_value('MetaTag');
                                                                   } ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="TxtMetaKey">Meta
                                                            Keywords

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="TxtMetaKey" name="TxtMetaKey"
                                                                   class="form-control"
                                                                   value="<?php if (!empty($editResult)) {
                                                                       echo $editResult[0]->meta_descr;
                                                                   } else {
                                                                       echo set_value('TxtMetaKey');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="TxtMetaDescr">Meta
                                                            Description

                                                            : </label>
                                                        <div class="col-md-7">
                                                            <input type="text" id="TxtMetaDescr" name="TxtMetaDescr"
                                                                   class="form-control"
                                                                   value="<?php if (!empty($editResult)) {
                                                                       echo $editResult[0]->meta_keyword_descr;
                                                                   } else {
                                                                       echo set_value('TxtMetaDescr');
                                                                   } ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--------------------Seo------------->

                                            <?php }?>


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

                                        <div class="form-actions form-group row">
                                            <!-- <input type="submit" class="btn btn-raised btn-warning mr-1" value="Reset">-->


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
    <script type="text/javascript">
        function showhide(showSeo) {
            var e = document.getElementById(showSeo);
            e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        }
    </script>
