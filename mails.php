<?php
date_default_timezone_set('Asia/Kolkata');
$currentDateTime=date('d-m-Y H:i:s');
$timestamp = date('d-m-Y h:i A', strtotime($currentDateTime));

require("class.phpmailer.php");

if( isset($_POST['contactPage']) )
{
    $urlweb="http://www.decorex.in/contact.html";
}else{
$urlweb="http://www.decorex.in/contact.html";
}
 
 
if (!isset($_POST['name']) || $_POST['name'] == '') {
     $url = "$urlweb?response=1#error";
     header("Location: $url");
    die();
}

if (!isset($_POST['number']) || $_POST['number'] == '') {
     $url = "$urlweb?response=3#error";
     header("Location: $url");
    die();
}

if (!isset($_POST['email']) || $_POST['email'] == '') {
    $url = "$urlweb?response=2#error";
    header("Location: $url");
    die();
}

if (isset($_POST['email'])) {
    if (!validate_email($_POST['email'])) {
       $url = "$urlweb?response=21#error";
       header("Location: $url");
       die();
    }
}




function validate_mobile($number)
{
    return preg_match('/^[0-9]{10}+$/', $number);
}
function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "decorex.in";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "reply@decorex.in";
$mail->Password = "reply@123";

$mail->From = "reply@decorex.in";
$mail->FromName = "Enquiry For Contact Us mail.";
$mail->AddAddress("reply@decorex.in");
$mail->addBCC('vivek.lawrence@flawlessindia.in');
$mail->addBCC('enquiry@flawlessindia.in');
//$mail->addBCC('ajay@flawlessindia.in');





$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message=$_POST['message'];

$mail->IsHTML(true);
$mail->Subject = "Flawless India Infotech Enquiry $timestamp";
$mail->Body = "Name : <b>".$name."</b><br/><br/> E-mail : <b>".$email."</b><br/><br/> Mobile : <b>" .$number."</b><br/><br/> Message : <b>".$message;

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
?> 
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        img{background-size: 100% ;
        background-attachment: fixed;
        }
    </style>
    
<meta http-equiv=REFRESH CONTENT=3;url="http://www.decorex.in">
    </head>
    <body style="background-color:#e6e6e6">
    <section>
        <div class="container">
        <div class="row">
            <div class="col-md-12 ">
            <figure>
            <center><img src="co.jpg" alt="co.jpg" class="img-responsive" style="max-width:50%;"></center>
            </figure>
                </div>
            </div>
        </div>
        </section>
    </body>
</html>
    

<?
}

?>