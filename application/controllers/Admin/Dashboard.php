<?php
/**************************************
 * Created By Ajaykan47*******************
 * 09th/March/2018*************************
 * ************FlawlessIndia Pvt Ltd************
 * ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

          if(!($this->session->userdata('logindetails'))){
           redirect('Admin/Auth');
       }
       $this->load->model('admin/Setting_model');
    }


    public function index()
	{	
        $data['title']= 'Dashboard';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
        $data['result'] = $this->Setting_model->getDashboardData();
        $data['banner'] = $this->Setting_model->getBanner();
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');

	}

	public function logout(){

        $this->session->sess_destroy();
        redirect('Admin/Auth');
        exit();
    }

		
	
}
