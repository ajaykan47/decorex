<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $ajaykan47.
 * User: Aanchal
 * Date: 06-04-2018
 * Time: 01:07 AM
 */ ?>

<?php
$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];

$filename = '';
$id = '';
$new_arrival ="";
if (!empty($editResult)) {
    foreach ($editResult as $value) {
        $id = $value->product_id;
        $filename = $value->filename;
        $page_title = $value->page_title;
        $new_arrival = $value->new_arrival;
    }
}

$buttoName = '';
if (!empty($editResult[0]->product_id)) {
    $frmaction = base_url() . "Admin/Product/updateProduct";
    $buttoName = 'Save Changes ';
    $BtnClass = 'btn btn-raised btn-danger';
} else {
    $frmaction = base_url() . "Admin/Product/addProduct";
    $buttoName = 'Add Product';
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
                        <div class="content-header">Product Forms</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="horz-layout-basic">Product </h4>
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
                                            <h4 class="form-section"><i class="ft-file-text"></i> Add Product Details</h4>


                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="client_title">Select Category
                                                    : </label>
                                                <div class="col-md-7">
                                                    <select name="category_id" required id="category_id" class="form-control" >
                                                    <option value="">---Select Category---</option>
                                                        <?php
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
                                                <label class="col-md-3 label-control" for="product_name">Product Name (Unique) <strong style="color: red;">*</strong>
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="client_title" name="product_name"
                                                           required class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->p_name;
                                                           } else {
                                                               echo set_value('product_name');
                                                           } ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="new_price">New Price
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="new_price" name="new_price"
                                                           required class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->new_price;
                                                           } else {
                                                               echo set_value('new_price');
                                                           } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="old_price">Old Price
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="old_price" name="old_price"
                                                           class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->old_price;
                                                           } else {
                                                               echo set_value('old_price');
                                                           } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="availability">Availability
                                                    : </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="availability" name="availability"
                                                           required class="form-control"
                                                           value="<?php if (!empty($editResult)) {
                                                               echo $editResult[0]->availability;
                                                           } else {
                                                               echo set_value('availability');
                                                           } ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="short_description">Product Description
                                                    : </label>
                                                <div class="col-md-7">
                                                    <textarea id="ckeditor"  class="ckeditor" name="short_description"><?php if(!empty($editResult)){ echo $editResult[0]->short_descr;}?></textarea>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="full_descr">Description
                                                    : </label>
                                                <div class="col-md-7">
                                                   <textarea id="ckeditor"  class="ckeditor" name="full_descr"><?php if(!empty($editResult)){ echo $editResult[0]->full_descr;}?></textarea>

                                                </div>
                                            </div>
                                           <div class="form-group row">
                                                <label class="col-md-3 label-control" for="info_descr">Information
                                                    : </label>
                                                <div class="col-md-7">
                                                   <textarea id="ckeditor"  class="ckeditor" name="info_descr"><?php if(!empty($editResult)){ echo $editResult[0]->info_descr;}?></textarea>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Select Product Image (<strong style="color: red;">Size 215 * 250</strong>): </label>
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
                                  <?php echo base_url() . 'uploads/product/' . $filename; ?>" height="60" width="60">

                                                        <?php ?>
                                                        <input type="hidden" class="form-control" id="" name="hidden_id"
                                                               value="<?php echo $id; ?>">
                                                        <input type="hidden" class="form-control" id="" name="file_name"
                                                               value="<?php echo $filename; ?>">


                                                        </span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        
                                        <div class="form-group col-md-6 mb-2">
                                                             <label for="projectinput1">Select For Our Product</label>
                                                                    <select name="title_name" class="form-control">
                                                                        <option value="">--Select --</option>
                                                                      <option value="1" <?php if(!empty($page_title) && $page_title==1){ echo 'selected';}?>>HOME PRODUCT</option>
                                                                        
                                                                </select>
                                            </div>
                                        <div class="form-group col-md-6 mb-2">
                                                             <label for="projectinput1">Select For New Arrivals</label>
                                                                    <select name="new_pro" class="form-control">
                                                                        <option value="">--Select --</option>
                                                                      <option value="2" <?php if(!empty($new_arrival) && $new_arrival==2){ echo 'selected';}?>>New Arrivals Product</option>
                                                                        
                                                                </select>
                                            </div>
                                               <!--------------------Seo------------->
                                            <?php if($user_type==1){?>
                                            <a href="javascript:showhide('showSeo')">
                                                Click for Seo Content
                                            </a>


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
                                                    <!--<div class="form-group row">
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
                                                    </div>-->

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
                                                    <!--<div class="form-group row">
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
                                                    </div>-->

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

                                            <?php }
                                            }?>

                                            

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
     <script type="text/javascript">
        function showhide(showSeo) {
            var e = document.getElementById(showSeo);
            e.style.display = (e.style.display == 'block') ? 'none' : 'block';
        }
    </script>




