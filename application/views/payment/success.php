<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.png">
        <title>Decorex</title>   
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <style>
             
             body{
                 background-image: linear-gradient(-90deg, #8e306e, #533058);
             }
             .sec{
                 padding:60px 0;
             }
         </style>
    </head>
    <body>
        <section class="sec">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-md-8 text-center">
                    <?php 
                        echo "<h3>Thank You. Your order status is ". $status .".</h3>";
                        echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
                        echo "<h4>We have received a payment of Rs. " . $amount . ". Your order  will dispatch soon.</h4>";
                    ?>
                 </div> 
                <div class="col-md-2"></div>
            </div>
        </div> 
        </section>
    </body>
</html>  