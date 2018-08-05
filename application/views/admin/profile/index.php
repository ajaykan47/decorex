<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$data['value'] = $this->session->userdata('logindetails');
$name = $data['value']['name'];
$username = $data['value']['username'];
$user_type = $data['value']['user_type'];
$mobile = $data['value']['mobile'];
?>
<!-- Navbar (Header) Ends-->

<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!--User Profile Starts-->
            <!--Basic User Details Starts-->
            <section id="user-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="card profile-with-cover">
                            <div class="card-img-top img-fluid bg-cover height-300"
                                 style="background: url('<?php echo base_url() ?>backend_assets/app-assets/img/photos/14.jpg') 50%;"></div>
                            <div class="media profil-cover-details row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <div class="card-block">

                                            <hr>
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                            class="icon-present font-small-3"></i> Name :</a></span>
                                                            <span class="display-block overflow-hidden"><?php if (!empty($name)) {
                                                                    echo $name;
                                                                } ?></span>
                                                        </li>
                                                        <!--<li class="mb-2">
                                                                <span class="text-bold-500 primary"><a><i class="ft-map-pin font-small-3"></i> Email :</a></span>
                                                                <span class="display-block overflow-hidden"><?php /* if(!empty($mobile)){echo $mobile;} */ ?></span>
                                                            </li>-->
                                                        <!--<li class="mb-2">
                                                                <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> Lives in:</a></span>
                                                                <span class="display-block overflow-hidden"><?php /* if(!empty($name)){echo $name;} */ ?></span>
                                                            </li>-->
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                            class="ft-user font-small-3"></i> Email:</a></span>
                                                            <span class="display-block overflow-hidden"><?php if (!empty($name)) {
                                                                    echo $username;
                                                                } ?></span>
                                                        </li>

                                                        <!-- <li class="mb-2">
                                                             <span class="text-bold-500 primary"><a><i class="ft-monitor font-small-3"></i> Website:</a></span>
                                                             <a class="display-block overflow-hidden">pixinvent.com</a>
                                                         </li>-->
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <ul class="no-list-style">
                                                        <li class="mb-2">
                                                            <span class="text-bold-500 primary"><a><i
                                                                            class="ft-smartphone font-small-3"></i> Phone Number:</a></span>
                                                            <span class="display-block overflow-hidden"><?php if (!empty($name)) { echo $mobile; } ?></span>
                                                        </li>
                                                        <!-- <li class="mb-2">
                                                             <span class="text-bold-500 primary"><a><i class="ft-briefcase font-small-3"></i> Occupation:</a></span>
                                                             <span class="display-block overflow-hidden">Ninja Developer</span>
                                                         </li>
                                                         <li class="mb-2">
                                                             <span class="text-bold-500 primary"><a><i class="ft-book font-small-3"></i> Joined:</a></span>
                                                             <span class="display-block overflow-hidden">April 1st, 2012</span>
                                                         </li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>

        </div>
    </div>

