<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountdetail extends CI_Controller {
     public function __construct()
     {
         parent::__construct();
         $this->load->model('Home_model');
         if (!($this->session->userdata('Userlogindetails'))) {
             redirect(base_url().'login.html');
         }
             
     }
	
	public function index()
	{
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
		$data['categoryvalue'] = $this->Home_model->getcategory();
		$this->load->view('user/userheader',$data);
		$this->load->view('user/accountdetail');
		$this->load->view('include/footer',$data);
	}
}
