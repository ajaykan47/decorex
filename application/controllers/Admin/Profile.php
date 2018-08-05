<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Aanchal
 * Date: 08-04-2018
 * Time: 09:22 PM
 */
class Profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $data['title'] = 'Banner';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/profile/index');
        $this->load->view('admin/footer');
    }

}