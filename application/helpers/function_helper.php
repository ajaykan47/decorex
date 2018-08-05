<?php
function createUrl($string)
{
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string);
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/'), '-', $string);
    $string = str_replace('amp', 'and', $string);
   // $string .= '.html';
    return strtolower(trim($string, '-'));
}

function sendmail($data) {
    require_once(FCPATH . 'assets/phpmailer/class-phpmailer.php');
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = 'STARTTLS';
    $mail->SMTPAutoTLS = true;
    $mail->Host = SMTP_HOST;
    $mail->Port = SMTP_PORT;

    $from_email = isset($data['from']) ? $data['from'] : SMTP_EMAIL;
    $from_name = isset($data['from_name']) ? $data['from_name'] : SMTP_NAME;

    $mail->SetFrom($from_email, $from_name);
    $mail->isHTML(true);
    $mail->Subject = $data['subject'];
    $mail->MsgHTML($data['message']);
    $mail->AddAddress($data['to']);
    $mail->SMTPDebug = 0;

    /* Send mail and return result */
    if (!$mail->Send()) {
        $errors = $mail->ErrorInfo;
        return false;
    } else {
        $mail->ClearAddresses();
        $mail->ClearAllRecipients();
        return true;
    }
}

function random_code($length = 16) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $code = substr(str_shuffle($chars), 0, $length);
    return $code;
}