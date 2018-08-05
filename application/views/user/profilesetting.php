<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['Value'] = $this->session->userdata('Userlogindetails');
$idH = $data['Value']['reguser_id'];

foreach ($editResult as $val):
   $usermail = $val->reguser_email;
endforeach;
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
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Profile setting</li>
                </ul>
            </div>
        </div>


    </div>
</div>
<div style="float:right">
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

<main class="dash-content bg-soft-gray sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                $this->load->view('user/sidebar');
                ?>
                <div class="account-content">
                    <div class="checkout-info flx-element ">
                        <form name="myform" onsubmit="return FormValidation()" onchange="return FormValidation()"
                              method="post" action="<?php echo base_url(); ?>Profilesetting/update">
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" name="f_name" id="f_name" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_name;
                                    } ?>">
                                </div>
                                <!--first name-->
                                <input type="hidden" value="<?php if(!empty($idH)){echo $idH;}?>" name="hidden">

                                <div class="form-group col-sm-4">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" id="l_name"  name="last_name" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_lastname;
                                    } ?>">
                                </div>
                                <!--last name-->

                                <div class="form-group col-sm-4">
                                    <label>Date of Birth</label>
                                    <input type="date" name="user_dob" id="user_dob" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_dob;
                                    } ?>">
                                </div>
                                <!--email address-->
                                <div class="form-group col-sm-6">
                                    <label>Mobile Number</label>
                                    <input type="text" name="number" maxlength="10" id="number" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_mobile;
                                    } ?>">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Email address</label>
                                    <input type="text" name="email" id="email" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_email;
                                    } ?>">
                                </div>


                                <div class="form-group col-sm-12">
                                    <label>Current Address</label>
                                    <input type="text" name="add" id="add" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_add;
                                    } ?>">
                                </div>

                                <div class="form-group col-sm-12">
                                    <label>Permanent Address</label>
                                    <input type="text" name="altAdd" id="altAdd" value="<?php if (!empty($editResult)) {
                                        echo $editResult[0]->reguser_alterAdd;
                                    } ?>">
                                </div>
                                <!--confirm pass-->
                                <div class="form-group col-sm-12">
                                    <input type="submit" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    function FormValidation() {
        var x = document.myform.f_name.value;
        if (x == "") {
            document.getElementById('f_name').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("f_name").style.borderColor = "green";
        }
        var dateof = document.myform.dob.value;
        if (dateof == "") {
            document.getElementById('user_dob').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("user_dob").style.borderColor = "green";
        }
        var y = document.myform.number.value;
        if (y.length != 10) {
            document.getElementById('number').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("number").style.borderColor = "green";
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
        var paddress = document.myform.add.value;
        if (paddress == "") {
            document.getElementById('add').style.borderColor = "red";
            return false;
        } else {
            document.getElementById("add").style.borderColor = "green";
        }
    }
</script>