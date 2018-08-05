<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
<div class="navbar navbar-default menu-bar sec-bg">
                <div class="container"> 
                   
                    <div class="row"> 
                        <div class="col-md-6">
                        <div class="left bd">
                            <h4 class="bm-0 text-white">My Account</h4> 
                        </div>
                        </div>
                       <div class="col-md-6">
                         <ul class="breadcrumb">
                            <li><a href="<?php echo base_url();?>">Home</a></li>
                            <li class="active">Orders</li>
                        </ul>
                        </div>
                        </div>
                    
                    </div> 
                </div>
        <main class="dash-content bg-soft-gray sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        $this->load->view('user/sidebar');
                        ?>

                        <div class="account-content">
                             <table class="shop_table account-orders-table">
                                <thead>
                                    <tr>
                                        <th><span class="nobr">Order</span></th>
                                        <th><span class="nobr">Date</span></th>
                                        <th><span class="nobr">Status</span></th>
                                        <th><span class="nobr">Total</span></th>
                                        <th><span class="nobr">Actions</span></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="order">
                                        <td class="" data-title="Order">
                                            <a href="#"> #91</a>
                                        </td>
                                        <td data-title="Date">
                                            <time datetime="2018-04-17T17:29:30+00:00">April 17, 2018</time>
                                        </td>
                                        <td data-title="Status">
                                            On hold
                                        </td>
                                        <td data-title="Total">
                                            <span>$20.00 for 1 item</span>
                                        </td>
                                        <td data-title="Actions">
                                            <a href="#" class="btn btn-default view"> view</a>
                                        </td>
                                    </tr>

                                    <tr class="order">
                                        <td class="" data-title="Order">
                                            <a href="#"> #92</a>
                                        </td>
                                        <td data-title="Date">
                                            <time datetime="2018-04-17T17:29:30+00:00">April 17, 2018</time>
                                        </td>
                                        <td data-title="Status">
                                            On hold
                                        </td>
                                        <td data-title="Total">
                                            <span>$15.00 for 1 item</span>
                                        </td>
                                        <td data-title="Actions">
                                            <a href="#" class="btn btn-default view"> view</a>
                                        </td>
                                    </tr>

                                    <tr class="order">
                                        <td class="" data-title="Order">
                                            <a href="#"> #93</a>
                                        </td>
                                        <td data-title="Date">
                                            <time datetime="2018-04-17T17:29:30+00:00">April 17, 2018</time>
                                        </td>
                                        <td data-title="Status">
                                            On hold
                                        </td>
                                        <td data-title="Total">
                                            <span>$25.00 for 1 item</span>
                                        </td>
                                        <td data-title="Actions">
                                            <a href="#" class="btn btn-default view"> view</a>
                                        </td>
                                    </tr>

                                    <tr class="order">
                                        <td class="" data-title="Order">
                                            <a href="#"> #94</a>
                                        </td>
                                        <td data-title="Date">
                                            <time datetime="2018-04-17T17:29:30+00:00">April 17, 2018</time>
                                        </td>
                                        <td data-title="Status">
                                            On hold
                                        </td>
                                        <td data-title="Total">
                                            <span>$30.00 for 1 item</span>
                                        </td>
                                        <td data-title="Actions">
                                            <a href="#" class="btn btn-default view">  view</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>      
                </div>    
            </div>
        </main>
        <!--main-->

       