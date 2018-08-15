<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/March/2018*************************
 * ************FlawlessIndia Pvt Ltd************
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('Admin/Auth');
        }
        $this->load->model('admin/Setting_model');
    }
    
	public function index()
	{	
		
		$this->load->view('admin/reset');
		
	}
    public function adminReset()
    {
        
    
        $this->form_validation->set_rules('newpass', 'Password', 'required');
        $this->form_validation->set_rules('conpass', 'Confirm Password', 'required|matches[newpass]');
         if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'New Password and Confirm Password is not Match');
            redirect('Admin/Reset');
        } else {
        $oldpass = md5($this->input->post('oldpass'));
        $newpass = md5($this->input->post('newpass'));
        $conpass = md5($this->input->post('conpass'));
        $ddluserType = 1;
        $sess_data = array();
        if ($ddluserType == 1) {
           $data = array('password' => $oldpass, 'user_type' => $ddluserType); 
            $tableName = 'tbl_login';
            $this->load->model('admin/Login_Model');
            $usedetails['result'] = $this->Login_Model->getData($tableName, $data);
            
            if (!empty($usedetails['result'])) {
                $idH = $usedetails['result'][0]->id;
                $name = $usedetails['result'][0]->name;
                $username = $usedetails['result'][0]->username;
                $user_type = $usedetails['result'][0]->user_type;
                $password = $usedetails['result'][0]->password;
                $user_status = $usedetails['result'][0]->status;
                $mobile = $usedetails['result'][0]->mobile;
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'user_type' => $user_type,
                    'status' => $user_status,
                    'password' => $conpass,
                    'mobile' => $mobile,
                    'id' => $idH,
                );
                $tableName = "tbl_login";
                $DbKey = "id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', ' Successfully updated...!!');
            
            redirect('Admin/Auth');
        } else {
            $this->session->set_flashdata('error', 'Password  is not successfully updated...!!');
            redirect('Admin/Reset');
        }
        }
        }
        }
    }
	
		
	
}
