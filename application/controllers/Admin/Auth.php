<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/March/2018*************************
 * ************FlawlessIndia Pvt Ltd************
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{	
		//echo 'ajay'; die;
		$this->load->view('admin/login-page');
		
	}
	public function adminLogin(){

	//	print_r($_POST);die;
		$username = $this->input->post('inputEmail');
        $password = md5($this->input->post('inputPass'));
       // $ddlLoginType = $this->input->post('ddlLoginType');
       $ddlLoginType = 1;
        $sess_data = array();
        if ($ddlLoginType == 1) {
            $data = array('username' => $username, 'password' => $password, 'user_type' => $ddlLoginType);
            $tableName = 'tbl_login';
            $this->load->model('admin/Login_Model');
            $usedetails['result'] = $this->Login_Model->getData($tableName, $data);
              
            if (!empty($usedetails['result'])) {
                $uid = $usedetails['result'][0]->id;
                $name = $usedetails['result'][0]->name;
                $username = $usedetails['result'][0]->username;
                $user_type = $usedetails['result'][0]->user_type;
                $user_status = $usedetails['result'][0]->status;
                $mobile = $usedetails['result'][0]->mobile;
                $sess_data = array(
                    'name' => $name,
                    'username' => $username,
                    'user_type' => $user_type,
                    'user_status' => $user_status,
                    'mobile' => $mobile,
                    'uid' => $uid,
                );
                
                $this->session->set_userdata('logindetails', $sess_data);

                redirect('Admin/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('Admin/Auth');
                
            }
        }else{

            $data = array('username' => $username, 'password' => $password, 'user_type' => $ddlLoginType);
            $tableName = 'tbl_login';
            $this->load->model('admin/Login_Model');
            $usedetails['result'] = $this->Login_Model->getData($tableName, $data);

            if (!empty($usedetails['result'])) {
                $uid = $usedetails['result'][0]->id;
                $name = $usedetails['result'][0]->name;
                $username = $usedetails['result'][0]->username;
                $user_type = $usedetails['result'][0]->user_type;
                $user_status = $usedetails['result'][0]->status;
                $mobile = $usedetails['result'][0]->mobile;
                $sess_data = array(
                    'name' => $name,
                    'username' => $username,
                    'user_type' => $user_type,
                    'user_status' => $user_status,
                    'mobile' => $mobile,
                    'uid' => $uid,
                );
           
                $this->session->set_userdata('logindetails', $sess_data);
               
                redirect('Admin/Dashboard');
            } else {

                $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
                redirect('Admin/Auth');
            }
        }

    }
		
	
}
