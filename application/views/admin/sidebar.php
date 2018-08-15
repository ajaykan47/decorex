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

<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">
    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="man-of-steel"
         data-image="<?php echo base_url('backend_assets'); ?>/app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="<?php echo base_url(); ?>Admin/Dashboard" class="logo-text float-left">
                    <div class="logo-img"><img src="<?php echo base_url('backend_assets'); ?>/app-assets/img/logo.png"/>
                        <div style="font-size: 16px;!important;"> <?php if ($user_type == 1) {
                                echo 'Administrator';
                            } else {
                                echo 'Sub-Admin';
                            } ?></div>
                    </div>
                    <span class="text align-middle">
                    </span></a><a id="sidebarToggle" href="javascript:;"
                                  class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i
                            data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose"
                                                                                                  href="javascript:;"
                                                                                                  class="nav-close d-block d-md-block d-lg-none d-xl-none"><i
                            class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="has-sub nav-item"><a href="<?php echo base_url('Admin/Dashboard'); ?>"><i
                                    class="ft-home"></i><span data-i18n=""
                                                              class="menu-title">Dashboard</span><span
                                    class="tag badge badge-pill badge-danger float-right mr-1 mt-1"></span></a>

                    </li>
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="ft-settings font-medium-4 fa fa-spin white align-middle"></i><span
                                    data-i18n=""
                                    class="menu-title">Setting</span></a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url(); ?>Admin/Setting/ChangeLogo" class="menu-item">WebSite
                                    Info
                                </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Setting/ListWebInfo" class="menu-item">
                                    List Info</a>
                            </li>
                            <li><a href="<?php echo base_url() ?>Admin/Setting/socialIcon" class="menu-item">Social Icon
                                    Link</a>
                            <li><a href="<?php echo base_url() ?>Admin/Setting/listSocialicon" class="menu-item">List
                                    Social Icon
                                </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Taxtype" class="menu-item">Add Tax
                              
                                </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Taxtype/ListTaxtype" class="menu-item">
                                    List Tax Type</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Shipping" class="menu-item">Add Shipping
                              
                                </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Shipping/ListShipping" class="menu-item">
                                    List Shipping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="icon-social-dropbox font-medium-4 fa fa-spin white align-middle"></i><span
                                    data-i18n=""
                                    class="menu-title">Banner</span></a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url(); ?>Admin/Banner" class="menu-item">Add Banner
                                </a>
                            </li>
                            <li><a href="<?php echo base_url() ?>Admin/Banner/listBanner" class="menu-item">List
                                    Banner</a>
                            </li>
                            <!--  <li><a href="<?php /*echo base_url()*/ ?>Admin/Setting/themeColor" class="menu-item">Theme Color</a>
                            </li>-->

                        </ul>
                    </li>
                    
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="fa-star font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                          class="menu-title">Page Content</span></a>
                        <ul class="menu-content">
                            <!--<li><a href="<?php echo base_url(); ?>Admin/Page" class="menu-item">Add Home/About Content
                                </a>
                            </li>-->
                            <li><a href="<?php echo base_url() ?>Admin/Page/listPage" class="menu-item">Update Home/About
                                    </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Page/heading" class="menu-item">Add Other Page 
                                </a>
                            </li>
                            <li><a href="<?php echo base_url() ?>Admin/Page/listHeading" class="menu-item">List Other Page</a>
                            </li>

                        </ul>
                    </li>
                     <li class="has-sub nav-item"><a href="#"><i
                                    class="ft-layers font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                            class="menu-title">Our Client</span></a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url(); ?>Admin/OurClient" class="menu-item">Add Cient</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/OurClient/listClient" class="menu-item">List
                                    Client</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="ft-aperture font-medium-4 fa fa-spin white align-middle"></i><span
                                    data-i18n=""
                                    class="menu-title">Category</span></a>
                        <ul class="menu-content">
                            <li><a href="<?php echo base_url(); ?>Admin/Category" class="menu-item">Add Category</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Category/listCategory" class="menu-item">Category
                                    List</a>
                            </li>

                        </ul>
                    </li>
                   
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="fa-signal font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                            class="menu-title">Product</span></a>
                        <ul class="menu-content">


                            <li><a href="<?php echo base_url(); ?>Admin/Product" class="menu-item">Add Product</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>Admin/Product/listProduct" class="menu-item">Product
                                    List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="ft-edit font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                          class="menu-title">Awards Holded</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="<?php echo base_url(); ?>Admin/HappyClient" class="menu-item">Add
                                    Awards Holded</a>
                            <li><a href="<?php echo base_url(); ?>Admin/HappyClient/ListHappyClient" class="menu-item">List
                                    Awards Holded</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="icon-social-dropbox font-medium-4 fa fa-spin white align-middle"></i><span
                                    data-i18n=""
                                    class="menu-title">Review</span></a>
                        <ul class="menu-content">
                            <!--<li><a href="<?php echo base_url(); ?>Admin/Review" class="menu-item">Add Review
                                </a>
                            </li>-->
                            <li><a href="<?php echo base_url() ?>Admin/Review/listReview" class="menu-item">List
                                    Review</a>
                            </li>
                            <!--  <li><a href="<?php /*echo base_url()*/ ?>Admin/Setting/themeColor" class="menu-item">Theme Color</a>
                            </li>-->

                        </ul>
                    </li>
                    
                    <li class="has-sub nav-item"><a href="#"><i
                                    class="ft-box font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                         class="menu-title">Seo Keyword</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="<?php echo base_url(); ?>Admin/MetaTag" class="menu-item">Add
                                    Keyword</a>

                            <li class="has-sub"><a href="<?php echo base_url(); ?>Admin/MetaTag/listMetaTag"
                                                   class="menu-item">List
                                    Keyword</a>

                            </li>
                        </ul>
                    </li>

                    <!--<li class="has-sub nav-item"><a href="#"><i
                                    class="ft-box font-medium-4 fa fa-spin white align-middle"></i><span data-i18n=""
                                                                                                         class="menu-title">Customer</span></a>
                        <ul class="menu-content">
                          

                            <li class="has-sub"><a href="<?php echo base_url(); ?>Admin/Customer"
                                                   class="menu-item">List
                                    Customer</a>

                            </li>
                        </ul>
                    </li>-->

                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
               <!-- <form role="search" class="navbar-form navbar-right mt-1">
                    <div class="position-relative has-icon-right">
                        <input type="text" placeholder="Search" class="form-control round"/>
                        <div class="form-control-position"><i class="ft-search"></i></div>
                    </div>
                </form>-->
            </div>
            <div class="navbar-container">
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-2"><a id="navbar-fullscreen" href="javascript:;"
                                                     class="nav-link apptogglefullscreen"><i
                                        class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">fullscreen</p></a></li>


                        <li class="dropdown nav-item">
                            <a id="dropdownBasic3" href="#" data-toggle="dropdown"
                               class="nav-link position-relative dropdown-toggle"><i
                                        class="ft-user font-medium-3 blue-grey darken-4"></i>
                                <p class="d-none">User Settings</p>
                            </a>
                            <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3"
                                 class="dropdown-menu dropdown-menu-right">
                                <a href=""
                                   class="dropdown-item py-1"><i
                                            class="ft-settings mr-2"></i><span>Settings</span></a>
                                <a href="<?php echo base_url() ?>Admin/Profile" class="dropdown-item py-1">
                                    <i class="ft-edit mr-2"></i>
                                    <span>User Profile</span></a>
                                <!--<a href="javascript:;" class="dropdown-item py-1"><i
                                            class="ft-mail mr-2"></i><span>My Inbox</span></a>-->
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url(); ?>Admin/Dashboard/logout" class="dropdown-item"><i
                                            class="ft-power mr-2"></i><span>Logout</span></a>
                                <a href="<?php echo base_url(); ?>Admin/Reset" class="dropdown-item"><i
                                            class="ft-edit mr-2"></i><span>Change Password</span></a>            
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
