<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Navbar (Header) Ends-->
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper"><!-- DOM - jQuery events table -->

            <!-- Row created callback -->
            <!-- File export table -->
            <section id="file-export">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Product Tax </h4>
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

                             
                            <div class="card-body collapse show">
                                <div class="card-block card-dashboard">
                                <?php
                                $idH = $this->input->get('idd');
                                $idH = base64_decode($idH);
                                ?>
                                <a style="float:right;" href="<?php echo base_url();?>Admin/Productgst?idd=<?php echo base64_encode($idH); ?>" class="btn btn-primary">Add Tax</a>
                                    <!--<p class="card-text">Exporting data from a table can often be a key part of a complex application. The Buttons extension for DataTables provides three plug-ins that provide overlapping functionality for data export.</p>-->
                                    <table class="table table-striped table-bordered file-export">
                                         
                                        <thead>
                                            
                                        <tr>
                                            <th>Sn.</th>
                                            <th>Tax Type</th>
                                            <th>Product Name</th>
                                            <th>Tax</th>
                                            <th>Create Date</th>
                                            <th>Update Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <!--<a href="<?php echo base_url(); ?>Admin/Productgst"
                                                       class="btn btn-danger">
                                                        Add
                                                    </a>-->

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        $sn = 1;
                                        foreach ($result as $row) :?>
                                            <tr>
                                                <td><?php echo $sn++; ?></td>
                                                <td><?php echo $row->tax_type; ?></td>
                                                <td><?php echo $row->product_name; ?></td>
                                                <td><?php echo $row->tax_perctg; ?></td>
                                                <td><?php echo $row->created_at; ?></td>
                                                <td><?php echo $row->updated_at; ?></td>
                                                <td><?php if($row->status=='Active'){echo
                                                    '<label class="label btn-success"> Active </label>';
                                                    }else{
                                                        echo   '<label class="label btn-warning"> InActive </label>';
                                                    } ?></td>
                                                <td class="center">
                                                    <a href="<?php echo base_url(); ?>Admin/Productgst?id=<?php echo base64_encode($row->progst_id); ?>"
                                                       class="btn btn-primary">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger"
                                                       href="<?php echo base_url(); ?>Admin/Productgst/deleteProductgst?id=<?php echo base64_encode($row->progst_id); ?>"
                                                       onclick="return confirm('Would you want to delete?');">Delete</a>
                                                    
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- File export table -->

        </div>
    </div>

    <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2018 <a
                        href="http://flawlessindia.in" id="pixinventLink"
                        target="_blank" class="text-bold-800 primary darken-2">Decorex </a>, All rights reserved. Developed By Flawless India</span>
        </p>
    </footer>

</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a
            class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 mt-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab"
                                            aria-expanded="true" class="nav-link active">Activity</a></li>
                    <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab"
                                            aria-expanded="false" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab"
                                            aria-expanded="false" class="nav-link">Settings</a></li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1"
                         class="tab-pane active">
                        <div id="activity" class="col-12 timeline-left">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                            <div id="timeline" class="timeline-left timeline-wrapper">
                                <ul class="timeline">
                                    <li class="timeline-line"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-purple bg-lighten-1"><i
                                                        class="ft-shopping-cart"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="deep-purple-text medium-small">just
                                                now</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe
                                                Purchased new equipments for zonal office.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-info bg-lighten-1"><i
                                                        class="fa fa-plane"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your
                                                Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-success bg-lighten-1"><i
                                                        class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="green-text medium-small">5
                                                Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
                                                Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-warning bg-lighten-1"><i
                                                        class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="amber-text medium-small">1
                                                Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy
                                                Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-red bg-lighten-1"><i
                                                        class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="deep-orange-text medium-small">2
                                                Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice
                                                mail for conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-cyan bg-lighten-1"><i
                                                        class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="brown-text medium-small">1
                                                Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya
                                                Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-amber bg-lighten-1"><i
                                                        class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="deep-purple-text medium-small">3
                                                Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy
                                                Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right"
                                                                          title="Portfolio project work"
                                                                          class="bg-grey bg-lighten-1"><i
                                                        class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#"
                                                                                         class="grey-text medium-small">1
                                                Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice
                                                mail for conference.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="chatapp" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                            <div class="collection border-none">
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-12.63.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth
                                                Elliott </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portrai/avatar-s-6.66.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary
                                                Adams </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Hello Boo </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-11.64.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb
                                                Richards </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Keny ! </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-18.67.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June
                                                Lane </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Ohh God </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portrai/avatar-s-1.68.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward
                                                Fletcher </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Love you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portrai/avatar-s-2.69.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal
                                                Bates </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can we </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portrai/avatar-s-3.65.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan
                                                Watts </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Great! </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-15.6a.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard
                                                Wood </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Do it </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-19.6b.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie
                                                Ellis </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Got that </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-14.6c.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn
                                                Wood </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Like you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-13.6d.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel
                                                Russell </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-22.6e.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah
                                                Graves </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Okay you </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portrai/avatar-s-9.6f.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew
                                                Hoffman </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can do </p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96"
                                                                src="app-assets/img/portra/avatar-s-20.70.delaye"
                                                                class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila
                                                Lynch </h4><span
                                                    class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Leave it </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                        <div id="settings" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications1" checked="checked" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="notifications1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity1" checked="checked" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="recent-activity1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications2" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="notifications2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity2" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="recent-activity2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-emails" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="show-emails" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-stats" type="checkbox"
                                                           class="custom-control-input cz-bg-image-display">
                                                    <label for="show-stats" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
<!-- Theme customizer Starts-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a
            class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon"
                                                                              class="customizer-toggle bg-danger"><i
                class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
    <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
        <div class="cz-bg-color">
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate"
                                       class="gradient-pomegranate d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna"
                                       class="gradient-king-yna d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset"
                                       class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr"
                                       class="gradient-flickr d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss"
                                       class="gradient-purple-bliss d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel"
                                       class="gradient-man-of-steel d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love"
                                       class="gradient-purple-love d-block rounded-circle"></span></div>
            </div>
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="black"
                                       class="bg-black d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="white"
                                       class="bg-grey d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary"
                                       class="bg-primary d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="success"
                                       class="bg-success d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning"
                                       class="bg-warning d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="info"
                                       class="bg-info d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger"
                                       class="bg-danger d-block rounded-circle"></span></div>
            </div>
        </div>
        <!-- Sidebar Options Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>
        <div class="cz-bg-image row">
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/01.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/02.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/03.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/04.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/05.jpg" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="app-assets/img/sidebar-bg/06.jpg" width="90" class="rounded"></div>
        </div>
        <!-- Sidebar BG Image Ends-->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Sidebar Bg Image</span>
                <div class="float-right">
                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="sidebar-bg-img" type="checkbox" checked=""
                               class="custom-control-input cz-bg-image-display">
                        <label for="sidebar-bg-img" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <hr>
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Compact Menu</span>
                <div class="float-right">
                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu">
                        <label for="cz-compact-menu" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
            <label for="cz-sidebar-width">Sidebar Width</label>
            <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                <option value="small">Small</option>
                <option value="medium" selected="">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <!-- Sidebar Width Ends-->
    </div>
</div>
<!-- Theme customizer Ends-->
<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//jquery-3.2.1.min.77.del"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js//popper.min.78.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//bootstrap.min.79.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//perfect-scrollbar.jquer"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js/prism.min.js"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//jquery.matchHeight-min"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//screenfull.min.7d.delay"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js/pa/pace.min.7e.delaye"
        type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//datatables.min.f1.delay"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//dataTables.buttons.min"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//buttons.flash.min.f4.de"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js/d/jszip.min.f5.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js/pdfmake.min.f6.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors/js/d/vfs_fonts.f7.delaye"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//buttons.html5.min.f8.de"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/vendors//buttons.print.min.f9.de"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="<?php echo base_url(); ?>backend_assets/app-assets/js/app-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/js/notification-sidebar.81.delay"
        type="text/javascript"></script>
<script src="<?php echo base_url(); ?>backend_assets/app-assets/js/customizer.js" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo base_url(); ?>backend_assets/app-assets/js/data-/datatable-advanced.fa.d"
        type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
</body>

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-1/dt-advanced-initialization.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Mar 2018 07:08:06 GMT -->
</html>