<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');

    }

    public function index()
    {
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('include/header', $data);
        $this->load->view('product/productdetail');
        $this->load->view('include/footer');
    }


}


