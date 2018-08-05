<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmails extends CI_Controller {

    public function htmlmail(){
        $config = Array(        
           // 'protocol' => 'sendmail',
            'smtp_host' => 'flawlessindia.co.in',
            'smtp_port' => 587,
            'smtp_user' => 'decorex@flawlessindia.co.in',
            'smtp_pass' => 'decorex@123',
            'smtp_timeout' => '4',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    
        $this->email->from('your mail id', 'Anil Labs');
        $data = array(
             'userName'=> 'Ajay Kumar Panigrahi'
                 );
        $this->email->to($userEmail);  // replace it with receiver mail id
    $this->email->subject($subject); // replace it with relevant subject 
    
        $body = $this->load->view('emails/anillabs.php',$data,TRUE);
    $this->email->message($body);   
        $this->email->send();
    }
       
}