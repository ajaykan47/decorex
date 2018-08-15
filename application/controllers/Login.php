<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');

    }

    public function index()
    {
        $pageName = "Login";
        $data['MetaResult'] = $this->Home_model->getSeoContent($pageName);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        //  $seo_matatag = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->seo_keyword;
            $seo_descr = $metaVAL->seo_descr;
            //  $seo_matatag = $metaVAL->seo_matatag;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        //  $data['metatag'] = $seo_matatag;
        /*-------Seo meta tag end-----*/
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('include/header', $data);
        $this->load->view('login/index');
        $this->load->view('include/footer', $data);
    }

    public function userLogin()
    {
    
        $username = $this->input->post('email');
        $password = md5($this->input->post('inputPass'));
        $sess_data = array();
        $Wheredata = array('reguser_email' => $username, 'reguser_pass' => $password,'verify'=>'yes');
        $this->load->model('admin/Login_Model');
        $usedetails['result'] = $this->Login_Model->getAllData($Wheredata);
        if (!empty($usedetails['result'])) {
            $uid = $usedetails['result'][0]->reguser_id;
            $name = $usedetails['result'][0]->reguser_name;
            $username = $usedetails['result'][0]->reguser_email;
            $user_status = $usedetails['result'][0]->activate_status;
            $mobile = $usedetails['result'][0]->reguser_mobile;
            $sess_data = array(
                'reguser_name' => $name,
                'reguser_mail' => $username,
                'status' => $user_status,
                'reguser_mobile' => $mobile,
                'reguser_id' => $uid,
            );
            $this->session->set_userdata('Userlogindetails', $sess_data);
            redirect('dashboard.html');
        } else {
            $this->session->set_flashdata('error', 'Please Check Your User Name,Password and Role Type Or Contact To Administrator');
            redirect('login.html');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login.html');
        exit();
    }
}
