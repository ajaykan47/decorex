<?php

/**
 * Created by $ajaykan47.
 * User: admin
 * Date: 7/12/2018
 * Time: 2:18 PM
 */
class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('Admin/Auth');
        }
        $this->load->model('admin/Setting_model');

    }

    public function index()
    {
        echo 'lis '; die;
        $data['title'] = 'List Customer';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $data['result'] = $this->Setting_model->getList();
        $this->load->view('admin/customer/list', $data);
    }


}