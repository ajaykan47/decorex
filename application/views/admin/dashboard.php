<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
error_reporting(0);
$DashboardCount = call_user_func_array('array_merge', $result);
$data['value'] = $this->session->userdata('logindetails');
//print_r($data['value']);die;
$role = $data['value']['user_type'];
?>
<!-- Navbar (Header) Starts-->
<!-- Navbar (Header) Ends-->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">

                                        <h3 class="font-large-dashboard mb-0">Total Banner</h3>
                                        <div class="count_total">
                                            <a href="<?php echo base_url(); ?>Admin/Banner/listBanner">
                                                <span><?php if (!empty($DashboardCount['TotalCat'])) {
                                                        echo $DashboardCount['TotalCat'];
                                                    } ?></span>
                                            </a></div>
                                        </a>
                                    </div>
                                    <div class="media-right white text-right">
                                        <i class="icon-bulb font-large-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="Widget-line-chart"
                                 class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-dashboard mb-0">Total Product</h3>
                                        <div class="count_total">
                                            <a href="<?php echo base_url(); ?>Admin/Product/listProduct">
                                                <span><?php if (!empty($DashboardCount['TotalProduct'])) {
                                                        echo $DashboardCount['TotalProduct'];
                                                    } ?></span>
                                            </a></div>
                                    </div>
                                    <div class="media-right white text-right">
                                        <i class="icon-pie-chart font-large-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="Widget-line-chart2"
                                 class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-dashboard mb-0">Total Quick Link</h3>
                                        <div class="count_total">
                                            <a href="<?php echo base_url(); ?>Admin/Setting/listSocialicon">
                                                <span><?php if (!empty($DashboardCount['TotalQuickLink'])) {
                                                        echo $DashboardCount['TotalQuickLink'];
                                                    } ?></span>
                                            </a></div>
                                    </div>
                                    <div class="media-right white text-right">
                                        <i class="icon-graph font-large-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="Widget-line-chart3"
                                 class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="card-block pt-2 pb-0">
                                <div class="media">
                                    <div class="media-body white text-left">
                                        <h3 class="font-large-dashboard mb-0">Our Client</h3>
                                        <div class="count_total">
                                            <a href="<?php echo base_url();?>Admin/OurClient/listClient">
                                            <span><?php if (!empty($DashboardCount['TotalClient'])) {
                                                    echo $DashboardCount['TotalClient'];
                                                } ?></span>
                                            </a> </div>
                                    </div>
                                    <div class="media-right white text-right">
                                        <i class="icon-wallet font-large-1"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="Widget-line-chart4"
                                 class="height-75 WidgetlineChart WidgetlineChartShadow mb-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row match-height">
                <div class="col-xl-6 col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-img">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0"
                                            class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>

                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="<?php echo base_url(); ?>/uploads/banner/<?php  if(!empty($banner)){echo $banner[0]->filename;}?>"
                                                 class="d-block w-100"
                                                 alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>/uploads/banner/<?php  if(!empty($banner)){echo $banner[1]->filename;}?>"
                                                 class="d-block w-100"
                                                 alt="Second slide">
                                        </div>
                                         <div class="carousel-item">
                                            <img src="<?php echo base_url(); ?>/uploads/banner/<?php  if(!empty($banner)){echo $banner[2]->filename;}?>"
                                                 class="d-block w-100"
                                                 alt="Second slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-example-generic" role="button"
                                       data-slide="prev">
                                        <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-generic" role="button"
                                       data-slide="next">
                                        <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <a href="javascript:void(0);" target="_blank" class="btn btn-floating halfway-fab btn-large gradient-blackberry"><i
                                            class="ft-plus"></i></a>
                            </div>
                            <div class="card-block mt-3">
                                <h4 class="card-title">Home Slider</h4>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img">
                                <img class="card-img-top img-fluid height-300"
                                     src="<?php echo base_url(); ?>backend_assets/app-assets/img/photos/weather-1.jpg"
                                     alt="Card image cap">
                                <h4 class="card-title">Sunny</h4>
                                <a class="btn btn-floating halfway-fab bg-primary"><i class="ft-plus"></i></a>
                            </div>
                            <div class="card-block mt-2">
                                <div class="row">
                                    <div class="col-2 text-center">
                                        <span class="display-block">Mon</span>
                                        <i class="wi wi-day-sunny display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">13&deg;</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="display-block">Tue</span>
                                        <i class="wi wi-day-cloudy display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">12&deg;</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="display-block">Wed</span>
                                        <i class="wi wi-day-cloudy-gusts display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">10&deg;</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="display-block">Thu</span>
                                        <i class="wi wi-day-cloudy-windy display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">12&deg;</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="display-block">Fri</span>
                                        <i class="wi wi-day-fog display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">9&deg;</span>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="display-block">Sat</span>
                                        <i class="wi wi-day-lightning display-block warning font-large-1 my-3"></i>
                                        <span class="display-block">6&deg;</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
    <link href="<?php echo base_url(); ?>backend_assets/app-assets/css/custom.css" rel="stylesheet">