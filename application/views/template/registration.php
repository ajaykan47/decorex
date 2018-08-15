<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Registration/Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div>
<div style="background-color: #ffcf01; padding: 13px 0;  padding-left: 25%; padding-right: 44%; font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 152px" src="http://www.decorex.in/uploads/logo/logo2.png" alt="logo" width="152" height="108"></div>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Hey <?php echo $name;?>,</p>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Your User Name is : <?php echo $usermail;?> and </p>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Password is : <?php echo $userpassword;?> </p>
<p><a href="http://www.decorex.in/Signup/varifyUser?verify=<?php echo $usermail; ?>">Click Activation Link</a></p>
<p style="Margin-top: 0;color: #565656;font-family: Georgia,serif;font-size: 16px;line-height: 25px;Margin-bottom: 25px">Welcome to Decorex. Having you as a part of this Business Community makes us proud!</br>
                    You are receiving this e-mail because user at has given yours as an e-mail address to connect their account.</p>
</div>
</body>
</html>