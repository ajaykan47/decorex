<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .searchNodata {
        color: #f23939;
        background-color: #3a4a6b;
        padding: 13px 31px 10px 18px;
        box-sizing: initial;
        font-size: 24px;
        margin-right: 37%;
        float: right;
    }
</style>
<form action="<?php echo base_url('Cart/add_to_cart'); ?>" method="post" enctype="multipart/form-data">
    <main class="main single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?><?php if (!empty($catname[0]->cat_url)) {
                                echo $catname[0]->cat_url;
                            } ?>"><?php if (!empty($catname[0]->name)) {
                                    echo $catname[0]->name;
                                } ?></a></li>
                        <li class="active"><?php if (!empty($productdetail[0]->p_name)) {
                                echo $productdetail[0]->p_name;
                            } ?></li>
                    </ul>
                </div>
            </div>
            <!--breadcrumb-->
            <?php if (empty($productdetail[0])) { ?>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img style="width:100%;" src="<?php echo base_url(); ?>front_assets/assets/images/search.png"
                             alt="search">
                    </div>
                </div>
            <?php } ?>
            <?php if (!empty($productdetail[0])) { ?>
            <div class="product sec-mar">
                <div class="detail-special bg-white border rarius">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="product-detail">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <!--<span id="rad2">
                                            <div>Ajay </div> </span>-->
                                        <div class="imgBox">
                                            <img src="<?php echo base_url('uploads/product/'); ?><?php if (!empty($productdetail[0]->filename)) {
                                                echo $productdetail[0]->filename;
                                            } ?>"
                                                 alt="<?php echo $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $productdetail[0]->filename); ?>"
                                                 data-origin="<?php echo base_url('uploads/product/'); ?><?php if (!empty($productdetail[0]->filename)) {
                                                     echo $productdetail[0]->filename;
                                                 } ?>">
                                        </div>

                                        <!-- End Gallery -->
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <div class="wrap">
                                            <p><b><?php if (!empty($productdetail[0]->p_name)) {
                                                    echo $productdetail[0]->p_name;
                                                } ?></b></p>

                                            <div class="price-wrap">
                                                <div class="price">
                                                    <del><?php if (!empty($productdetail[0]->old_price)) {
                                                            echo $productdetail[0]->old_price;
                                                        } ?></del>
                                                    <ins><?php if (!empty($productdetail[0]->new_price)) {
                                                            echo $productdetail[0]->new_price;
                                                        } ?></ins>
                                                </div>
                                            </div>
                                            <!--price wrap-->

                                            <div class="disc bm-25">
                                                <p><?php if (!empty($productdetail[0]->short_descr)) {
                                                        echo $productdetail[0]->short_descr;
                                                    } ?></p>
                                            </div>
                                            <!--disc-->

                                            <div class="flx-element bm-30">
                                                <div><strong>Availability
                                                        :</strong> <?php if (!empty($productdetail[0]->availability)) {
                                                        echo $productdetail[0]->availability;
                                                    } ?>
                                                    <span class="text-green"><i
                                                                class="fa fa-check-square"></i> Stock</span>
                                                </div>
                                            </div>
                                            <!--flex-->
                                            <div class="color-option bm-25">
                                                <h6 class="bm-5">Select color</h6>

                                                <div class="color-filter">
                                                    <form action="<?php echo base_url('Cart/add_to_cart'); ?>">
                                                        <div class="radio-wrap red">
                                                            <input type="radio" name="color" value="red">
                                                            <label>&nbsp;</label>

                                                        </div>
                                                        <!--red-->
                                                        <div class="radio-wrap black">
                                                            <input type="radio" name="color" value="black">
                                                            <label>&nbsp;</label>
                                                        </div>
                                                        <!--black-->
                                                        <div class="radio-wrap yellow">
                                                            <input type="radio" name="color">
                                                            <label>&nbsp;</label>
                                                        </div>
                                                        <!--yellow-->
                                                        <div class="radio-wrap blue">
                                                            <input type="radio" name="color">
                                                            <label>&nbsp;</label>
                                                        </div>
                                                        <!--blue-->

                                                </div>
                                            </div>

                                            <!--btn wrap-->
                                            <div class="social-share">
                                                <strong>Share &nbsp;</strong>
                                                <a href="#" data-toggle="tooltip" title="Facebook"><i
                                                            class="fa fa-facebook"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Twitter"><i
                                                            class="fa fa-twitter"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Pinterest"><i
                                                            class="fa fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                        <!-- Detail Info -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Main Detail -->
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="special-total-cart">
                                <ul class="list-inline-block">
                                    <li><label class="title18"> Price:</label></li>
                                    <li><strong class="color"><?php if (!empty($productdetail[0]->new_price)) {
                                                echo $productdetail[0]->new_price;
                                            } ?></strong></li>

                                    <li><span class="quardian">Best Price guarantee</span></li>


                                </ul>
                                <div class="text-center bm-20">
                                    <span>Quantity</span>
                                    <div class="detail-qty border radius inline-block">
                                        <input type="number" value="1" title="quantity" name="quantity"
                                               class="input-text qty" size="4"/>
                                        <input type="hidden" value="<?php if (!empty($productdetail[0]->p_name)) {
                                            echo $productdetail[0]->p_name;
                                        } ?>" name="product_name">
                                        <input type="hidden" value="<?php if (!empty($productdetail[0]->product_id)) {
                                            echo $productdetail[0]->product_id;
                                        } ?>" name="product_id">
                                        <input type="hidden" value="<?php if (!empty($productdetail[0]->new_price)) {
                                            echo $productdetail[0]->new_price;
                                        } ?>" name="product_price">

                                    </div>
                                </div>
                                <div class="btn-wrap bm-30">
                                    <!--  <a href="#" class="btn pri-bg"><i class="pe-7s-cart"></i> ADD TO CART</a>-->
                                    <input type="submit" value="ADD TO CART" class="btn btn-warning" name="btnProduct">
                                </div>
</form>
    <ul class="list-none">
        <li><a href="#"><span class="color"><i class="fa fa-globe"
                                               aria-hidden="true"></i></span>Free
                Worldwide
                Shipping</a></li>
        <li><a href="#"><span class="color"><i class="fa fa-check-circle-o"
                                               aria-hidden="true"></i></span>100% Money
                Back
                Guarantee</a></li>
        <li><a href="#"><span class="color"><i class="fa fa-lock"
                                               aria-hidden="true"></i></span>100% Secure
                Payments</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
<!--product-->

    <div class="row product sec-mar">
        <div class="col-md-12 col-sm-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs sec-font" role="tablist">
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#information" data-toggle="tab">Information</a></li>
                <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="description">
                    <p><?php if (!empty($productdetail[0]->full_descr)) {
                            echo $productdetail[0]->full_descr;
                        } ?></p>


                </div>
                <!--description-->

                <div role="tabpanel" class="tab-pane" id="information">
                    <p><?php if (!empty($productdetail[0]->info_descr)) {
                            echo $productdetail[0]->info_descr;
                        } ?></p>
                </div>
                <!--information-->

                <div role="tabpanel" class="tab-pane" id="reviews">

                    <h4>Reviews <?php if (!empty($reviewcount)) { ?>(<?php if (!empty($reviewcount)) {
                            echo $reviewcount;
                        } ?>)<?php } ?></h4>

                    <div class="row table total-rate-statistic">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="wrap-total-rate">
                                <div class="average-rate">
                                    <div class="average-rating" style="width:100%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="averate-info">
                                <span>Average Star Rating:</span>
                                <p class="desc"><span>5</span> out of <span>5</span> (<span>2</span>
                                    Ratings)
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="total-rate-feedback">
                                <p class="color">Feedback Rating for This Product</p>
                                <table class="table-responsive">
                                    <tbody>
                                    <tr>
                                        <td rowspan="2"><span><b>Positive</b> (100%)</span></td>
                                        <td>
                                            <div class="table">
                                                <div class="number-star"><span>5 Stars (2)</span></div>
                                                <div class="progress-star">
                                                    <div class="average-progress">
                                                        <div class="inner-average-progress"
                                                             style="width:100%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table">
                                                <div class="number-star"><span>4 Stars (2)</span></div>
                                                <div class="progress-star">
                                                    <div class="average-progress">
                                                        <div class="inner-average-progress"
                                                             style="width:0%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span><b>Neutral</b> (0%)</span></td>
                                        <td>
                                            <div class="table">
                                                <div class="number-star"><span>3 Stars (0)</span></div>
                                                <div class="progress-star">
                                                    <div class="average-progress">
                                                        <div class="inner-average-progress"
                                                             style="width:0%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><span><b>Negative </b> (0%)</span></td>
                                        <td>
                                            <div class="table">
                                                <div class="number-star"><span>2 Stars (0)</span></div>
                                                <div class="progress-star">
                                                    <div class="average-progress">
                                                        <div class="inner-average-progress"
                                                             style="width:0%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="table">
                                                <div class="number-star"><span>1 Stars (0)</span></div>
                                                <div class="progress-star">
                                                    <div class="average-progress">
                                                        <div class="inner-average-progress"
                                                             style="width:0%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table list-tags-review">
                            <tbody>
                            <tr class="bg-color">
                                <th class="t-buyer"><strong class="white">Buyer</strong>
                                </th>
                                <th class="t-rate"><strong class="white">Rating</strong>
                                </th>
                                <th class="t-review"><strong class="white">Reviews</strong>
                                </th>
                            </tr>

                            <?php foreach ($reviewresult as $review):
                                ?>
                                <tr>
                                    <td class="review-author">
                                        <img src="<?php echo base_url('uploads/review/'); ?><?php if (!empty($review->filename)) {
                                            echo $review->filename;
                                        } ?>"
                                             alt="<?php echo $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $review->filename); ?>">
                                        <a href="javascript:void(0);"
                                           class="color"><strong><?php if (!empty($review->name)) {
                                                    echo $review->name;
                                                } ?></strong></a>
                                    </td>
                                    <td>
                                        <?php
                                        $i = 0;
                                        for ($i = 0; $i < $review->star_rating; $i++) {
                                            ?>
                                            <input class="star" type="checkbox" checked>
                                        <?php } ?>
                                    </td>
                                    <td class="review-info">
                                        <p class="silver"><?php if (!empty($review->created_at)) {
                                                echo $review->created_at;
                                            } ?></p>
                                        <p class="desc"><?php if (!empty($review->full_descr)) {
                                                echo $review->full_descr;
                                            } ?></p>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="add-review-form">
                        <h3 class="title14">Add a Review</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form name="myform" onsubmit="return FormValidation()"
                              onchange="return FormValidation()" class="review-form"
                              action="<?php echo base_url(); ?>Review/addReview" method="post"
                              enctype="multipart/form-data">
                            <div>
                                <label>Name <strong style="color: red;">*</strong></label>
                                <input class="form-control" type="text" name="name" id="name" type="text">
                            </div>
                            <div>
                                <label>Email <strong style="color: red;">*</strong></label>
                                <input name="email" id="email" type="text">
                            </div>
                            <div>
                                <label>Your Rating</label>

                                <input class="star" type="checkbox" id="star" name="star" value="1"
                                       title="bookmark page">
                                <input class="star" type="checkbox" id="star" name="star" value="2"
                                       title="bookmark page">
                                <input class="star" type="checkbox" id="star" name="star" value="3"
                                       title="bookmark page">
                                <input class="star" type="checkbox" id="star" name="star" value="4"
                                       title="bookmark page">
                                <input class="star" type="checkbox" id="star" name="star" value="5"
                                       title="bookmark page">

                            </div>

                            <div>
                                <label>Your Review <strong style="color: red;">*</strong></label>
                                <textarea name="messasge" id="message"></textarea>
                            </div>
                            <div>
                                <label>Image <strong style="color: red;">*</strong></label>
                                <input type="file" class="form-control" id="userfile"
                                       name="userfile" placeholder="">
                            </div>

                            <input type="hidden" name="product_id"
                                   value="<?php if (!empty($productdetail[0]->product_id)) {
                                       echo $productdetail[0]->product_id;
                                   } ?>">
                            <input type="hidden" name="product_url"
                                   value="<?php if (!empty($productdetail[0]->product_url)) {
                                       echo $productdetail[0]->product_url;
                                   } ?>">

                            <div>
                                <input class="btn-rect radius" value="Submit" type="submit">
                            </div>
                        </form>
                    </div>
                </div>

                <!--reviews-->
            </div>
        </div>
    </div>
<?php } ?>
<!--descripton tab-->
</div>
<!--container-->
<?php if (!empty($productslid)) { ?>
    <div class="trending">
        <div class="bg-soft-gray sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="title mid-sep">

                            <h2>Related Products</h2>

                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 product-wrap product-slide-wrap">
                        <ul class="products product-slider">
                            <?php foreach ($productslid as $productslidvalue): ?>
                                <li class="product">
                                    <figure class="img-animi">
                                        <div class="actions trans">
                                            <a class="link-layer" href="#">&nbsp;</a>
                                            <!--  <a href="#" class="actn add-to-cart" data-toggle="tooltip"data-placement="top" title="Add to Cart"><i class="pe-7s-cart"></i></a>-->
                                            <a data-productid="<?php echo $productslidvalue->product_id; ?>"
                                               data-productname="<?php echo $productslidvalue->p_name; ?>"
                                               data-productprice="<?php echo $productslidvalue->new_price; ?>"
                                               href="#" class="add_cart actn add-to-cart" data-toggle="tooltip"
                                               data-placement="top" title="Add to Cart"><i
                                                        class="pe-7s-cart"></i></a>
                                            <a data-toggle="modal"
                                               data-target="#<?php if (!empty($productslidvalue->product_id)) {
                                                   echo $productslidvalue->product_id;
                                               } ?>" class="actn" title="Quick View"><i class="pe-7s-look"></i></a>
                                        </div>
                                        <a href="<?php echo base_url(); ?><?php if (!empty($productslidvalue->product_url)) {
                                            echo $productslidvalue->product_url;
                                        } ?>"><img src="<?php echo base_url('uploads/product/'); ?><?php if (!empty($productslidvalue->filename)) {
                                                echo $productslidvalue->filename;
                                            } ?>"
                                                   alt="<?php echo $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $productslidvalue->filename); ?>"></a>
                                    </figure>

                                    <div class="price-wrap">
                                        <div class="price">
                                            <del><?php if (!empty($productslidvalue->old_price)) {
                                                    echo $productslidvalue->old_price;
                                                } ?></del>
                                            <ins><?php if (!empty($productslidvalue->new_price)) {
                                                    echo $productslidvalue->new_price;
                                                } ?></ins>
                                        </div>
                                    </div>

                                    <p><b>
                                        <a href="<?php echo base_url(); ?><?php if (!empty($productslidvalue->product_url)) {
                                            echo $productslidvalue->product_url;
                                        } ?>"><?php if (!empty($productslidvalue->p_name)) {
                                                echo $productslidvalue->p_name;
                                            } ?></a></b></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!--tranding-->
</main>
<!--main-->

<?php foreach ($productslid as $productslidvalue): ?>
    <div class="modal fade" id="<?php if (!empty($productslidvalue->product_id)) {
        echo $productslidvalue->product_id;
    } ?>" role="dialog">

        <div class="modal-dialog">
            <form action="<?php echo base_url(); ?>Cart/add_to_cart" method="post"
                  enctype="multipart/form-data">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="qv-wrap">
                            <div class="row product">
                                <div class="col-md-6 col-sm-6 image pdt-single-slider">
                                    <div class="product-thumb-slider layout-btm-thumb">
                                        <div class="slide-top">
                                            <ul class="qv-single-image single-2">
                                                <li>
                                                    <figure><img
                                                                src="<?php echo base_url('uploads/product/'); ?><?php if (!empty($productslidvalue->filename)) {
                                                                    echo $productslidvalue->filename;
                                                                } ?>"
                                                                alt="<?php echo $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $productslidvalue->filename); ?>">
                                                    </figure>
                                                </li>

                                            </ul>
                                        </div>


                                    </div>
                                </div>
                                <!--slider-->

                                <div class="col-md-6 col-sm-6 summary ">
                                    <div class="wrap">
                                        <p><b><?php if (!empty($productslidvalue->p_name)) {
                                                echo $productslidvalue->p_name;
                                            } ?><b></p>

                                        <div class="price-wrap">
                                            <div class="price">
                                                <del><?php if (!empty($productslidvalue->old_price)) {
                                                        echo $productslidvalue->old_price;
                                                    } ?></del>
                                                <ins><?php if (!empty($productslidvalue->new_price)) {
                                                        echo $productslidvalue->new_price;
                                                    } ?></ins>
                                            </div>
                                        </div>
                                        <!--price wrap-->

                                        <div class="disc bm-20">
                                            <?php if (!empty($productslidvalue->short_descr)) {
                                                echo $productslidvalue->short_descr;
                                            } ?>
                                        </div>
                                        <!--disc-->

                                        <div class="flx-element bm-20">
                                            <div><strong>Availability
                                                    :</strong><?php if (!empty($productslidvalue->availability)) {
                                                    echo $productslidvalue->availability;
                                                } ?>
                                                <span class="text-green"><i class="fa fa-check-square"></i> Stock</span>
                                            </div>

                                        </div>
                                        <!--flex-->

                                        <div class="color-option bm-20">
                                            <h6 class="bm-5">Select color</h6>

                                            <div class="color-filter">

                                                <div class="radio-wrap red">
                                                    <input type="radio" name="color">
                                                    <label>&nbsp;</label>
                                                </div>
                                                <!--red-->

                                                <div class="radio-wrap black">
                                                    <input type="radio" name="color">
                                                    <label>&nbsp;</label>
                                                </div>
                                                <!--black-->

                                                <div class="radio-wrap yellow">
                                                    <input type="radio" name="color">
                                                    <label>&nbsp;</label>
                                                </div>
                                                <!--yellow-->

                                                <div class="radio-wrap blue">
                                                    <input type="radio" name="color">
                                                    <label>&nbsp;</label>
                                                </div>
                                                <!--blue-->

                                            </div>
                                        </div>
                                        <!--color option-->
                                        <div class="btn-wrap bm-20">
                                            <input type="number" value="1" title="Qty" name="quantity"
                                                   class="input-text qty" size="4" min="0">
                                            <input type="text" value="<?php if (!empty($productslidvalue->new_price)) {
                                                echo $productslidvalue->new_price;
                                            } ?>" name="product_price" class="">
                                            <input type="text" value="<?php if (!empty($productslidvalue->product_id)) {
                                                echo $productslidvalue->product_id;
                                            } ?>" name="product_id" class="">
                                            <input type="text" value="<?php if (!empty($productslidvalue->p_name)) {
                                                echo $productslidvalue->p_name;
                                            } ?>" name="product_name" class="">
                                            <input type="submit" value="ADD TO CART" class="btn btn-primary"
                                                   name="btnProduct">
                                        </div>
                                        <!--btn wrap-->
            </form>
            <div class="share pri-font">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i> facebook</a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i> twitter</a>
                <a href="#" class="pin"><i class="fa fa-pinterest-p"></i> pinterest</a>
            </div>
        </div>
    </div>
    <!--summery-->
    </div>
    </div>
    <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
    </div>
    </div>
    </div>
    </div>

    <!--quick view-->


    </div>
<?php endforeach; ?>
<script>
    function FormValidation() {
        var x = document.myform.name.value;
        if (x == "") {
            document.getElementById('name').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("name").style.borderColor = "green";
        }

        var x = document.myform.email.value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
            document.getElementById('email').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("email").style.borderColor = "green";
        }

        var message = document.myform.message.value;
        if (message == "") {
            document.getElementById('message').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("message").style.borderColor = "green";
        }

    }
</script>


