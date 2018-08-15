<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Reset extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Home_model');
        $this->load->model('admin/Setting_model');
    }

    public function index()
    {

        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('include/header', $data);
        $this->load->view('user/reset');
        $this->load->view('include/footer', $data);
    }


    	public function ForgotPassword()
       {
             $email = $this->input->post('email');
             $findemail = $this->Home_model->ForgotPassword($email);
             if($findemail > 0){
              $this->Home_model->sendpassword($email);
               }else{
              $this->session->set_flashdata('error','Sorry !! : Email not found in Decorex Warehouse Please Check...!!');
              redirect('reset-password.html');
          }
       }



    public function forgotPasschange()
    {

        // print_r($_POST); die;
        $user_name = $this->input->post('username');
        $password = $this->input->post('password');
        $idH = $this->input->post('user_id');

        if ($idH > 0) {

            $data = array('reguser_email' => $user_name,
                'reguser_pass' => $password,
                'updated_at' => date('Y-m-d H:i:s')
            );
            $tableName = 'tbl_userLogin';
            $DbKey = "user_id";
            //	$id=array('reguser_email'=>$user_name);
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
                $this->session->set_flashdata('done', 'Your Password  Successfully Reset...!!');

                $fromName = 'Decorex(JSB Lighting)';

                $nodeRequestEmail = '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td class="pattern" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= ' <td style="background: #eee; padding: 20px 0;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '  <td class="col col1" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td style="padding: 0 10px;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';

                $nodeRequestEmail .= ' <td
        style="font-family: arial,sans-serif; font-size: 16px; color: #000; padding-bottom: 8px;">
       <p>  Dear User ,</p>
        </td>';
                $nodeRequestEmail .= ' </tr>';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td class="description"
        style="font-family: arial,sans-serif; font-size: 12px; color: #333; padding-bottom: 8px;">
        
        <span>Password has been successfully Updated.</span>
        </td>';
                $nodeRequestEmail .= '   </tr>';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td 
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <strong>Sincerely,</Strong><br/>
        <strong>Decorex Lighting</Strong></br/>
        </td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';
                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';

                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => SMTP_HOST,
                    'smtp_port' => SMTP_PORT,
                    'smtp_user' => SMTP_USER,
                    'smtp_pass' => SMTP_PASS,
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1'
                );
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->initialize($config);
                $this->email->from(SMTP_EMAIL, SMTP_NAME);

                $this->email->to($user_name);
                $this->email->subject('Decorex JSB Lighting');

                $this->email->message($nodeRequestEmail);

                $this->email->send();


                //echo $this->email->print_debugger();
                $this->sssion->set_flashdata('done', 'Your Profile data is  successfully updated...!!');
                redirect('Login');

            } else {
                $this->sssion->set_flashdata('error', 'Your Profile data is not successfully updated...!!');
                redirect('Login/changepassword');
            }

        } else {
            $data = array('reguser_name' => $user_name,
                'reguser_pass' => $password,
                'updated_at' => date('Y-m-d H:i:s')
            );
            $tableName = 'tbl_userLogin';
            $DbKey = "reguser_id";
            //	$id=array('reguser_name'=>$user_name);
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
                $this->session->set_flashdata('doe', 'Your Profile data Successfully updated...!!');

                //$this->load->library('email');

                $nodeRequestEmail = '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td class="pattern" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= ' <td style="background: #eee; padding: 20px 0;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '  <td class="col col1" width="600">';
                $nodeRequestEmail .= '<table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td style="padding: 0 10px;">';
                $nodeRequestEmail .= ' <table cellpadding="0" cellspacing="0">';
                $nodeRequestEmail .= ' <tr>';

                $nodeRequestEmail .= ' <td
        style="font-family: arial,sans-serif; font-size: 16px; color: #000; padding-bottom: 8px;">
       <p>  Dear User ,</p>
        </td>';
                $nodeRequestEmail .= ' </tr>';
                $nodeRequestEmail .= ' <tr>';
                $nodeRequestEmail .= '<td class="description"
        style="font-family: arial,sans-serif; font-size: 12px; color: #333; padding-bottom: 8px;">
        
        <span>Password has been successfully Updated.</span>
        </td>';
                $nodeRequestEmail .= '   </tr>';
                $nodeRequestEmail .= '<tr>';
                $nodeRequestEmail .= '<td 
        style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #000">
        <strong>Sincerely,</Strong><br/>
        <strong>Decorex JSB Lighting</Strong></br/>
        </td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';
                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $nodeRequestEmail .= '</td>';

                $nodeRequestEmail .= '</tr>';
                $nodeRequestEmail .= '</table>';
                $fromEmail = 'decorex@flawlessindia.co.in';
                $fromName = 'Decorex JSB Lighting';
                $this->load->library('email');
                $this->email->set_newline("\r\n");

                $this->email->from($fromEmail, $fromName);
                $this->email->to($user_name);

                $this->email->subject('Reset Password');
                $this->email->message($nodeRequestEmail, TRUE);
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->set_header('Content-type', 'text/html');
                $this->email->send();

                redirect('Login');

            } else {
                $this->sssion->set_flashdata('msgupter', 'Your Profile data is not successfully updated...!!');
                redirect('Login/changepassword');
            }


        }

    }


}
