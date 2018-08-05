<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.png">
        <title>Decorex JSP Lighting </title>   
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
         <style>
             body{
                 background-image: linear-gradient(-90deg, #8e306e, #533058);
             }
             .sec{
                 padding:60px 0;
             }
             .bx1{
                 padding: 20px;
    background-color: #f2f2f2;
    border: 1px #fff;
    border-radius: 20px;
    box-shadow: 0 6px 20px 0 rgba(255, 110, 64, 0.5);
}
            .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-bottom: 4px solid #0084cb;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
             
         </style>
    </head>
    <body>
        <section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-md-8">
                    <div class="bx1">
                	  <form action="<?= $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                        <input type="hidden" name="key" value="<?= $mkey ?>" />
                        <input type="hidden" name="hash" value="<?= $hash ?>"/>
                        <input type="hidden" name="txnid" value="<?= $tid ?>" />
                        <div class="form-group">
                            <label class="control-label">Total Payable Amount</label>
                            <input class="form-control" name="amount" value="<?= $amount ?>"  readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Your Name</label>
                            <input class="form-control" name="firstname" id="firstname" value="<?= $name ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" name="email" id="email" value="<?= $mailid ?>" readonly/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input class="form-control" name="phone" value="<?= $phoneno ?>" readonly />
                        </div>
                        <!--<div class="form-group">
                            <label class="control-label">Product Info</label>
                            <textarea class="form-control" name="productinfo"  readonly><?/*= $productinfo */?></textarea>

                        </div>-->
                          <input class="form-control" type="hidden" name="productinfo" value="<?= $productinfo ?>" readonly />
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input class="form-control" name="address1" value="<?= $address ?>" readonly/>     
                        </div>
                        <div class="form-group">
                            <input name="surl" value="<?= $sucess ?>" size="64" type="hidden" />
                            <input name="furl" value="<?= $failure ?>" size="64" type="hidden" />                             
                            <input type="hidden" name="service_provider" value="" size="64" /> 
                            <input name="curl" value="<?= $cancel ?> " type="hidden" />
                        </div>
                        <div class="form-group text-center">
                        <input type="submit" value="Pay Now" class="btn btn-success" /></td>
                        </div>
                    </form>  
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>    
       </section>
    </body>
</html>    