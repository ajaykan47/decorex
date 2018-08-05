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
                            <li class="active">Dashboard</li>
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
                            <h2>Hello User</h2>
                            <p>
                               From your account dashboard you can view your <a href="#">recent orders</a>, <a href="#">manage your shipping</a> and <a href="#">billing addresses</a> and <a href="#">edit your password and account details</a>.
                            </p>
                        </div>
                    </div>      
                </div>    
            </div>
        </main>
        <!--main-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(function(){
        $('#logout').click(function(){
            if(confirm('Are you sure to logout')) {
                return true;
            }
            return false;
        });
    });
</script>
