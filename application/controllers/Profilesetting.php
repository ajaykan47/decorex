<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilesetting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!($this->session->userdata('Userlogindetails'))) {
            redirect('Login');
        }
        $this->load->model('Home_model');
        $this->load->library('user_agent');
        $this->load->model('admin/Setting_model');

    }

    public function index()
    {
        $data['Value'] = $this->session->userdata('Userlogindetails');
        $idG = $data['Value']['reguser_id'];
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('user/userheader', $data);
        $data['editResult'] = $this->Home_model->getAllDataById($idG);
        $this->load->view('user/profilesetting', $data);
        $this->load->view('include/footer', $data);
    }

    public function update()
    {

        $idH = $this->input->post('hidden');
        $firstname = $this->input->post('f_name');
        $lastname = $this->input->post('last_name');
        $mobile = $this->input->post('number');
        $email = $this->input->post('email');
        $address = $this->input->post('add');
        $Altaddress = $this->input->post('altAdd');
        $userdob = $this->input->post('user_dob');
        $createdate = date('Y-m-d H:i:s');
        $ipAddress = $this->input->ip_address();
        $browser = $this->agent->agent_string();
        $dataArr = array(
            'reguser_email' => $email,

        );
        $tableName = "tbl_userLogin"; 
        $DbKey = "reguser_id";
        $res = $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr);
        if (!empty($res)) {
            $data = array(
                'reguser_name' => $firstname,
                'reguser_lastname' => $lastname,
                'reguser_lastname' => $lastname,
                'reguser_mobile' => $mobile,
                'reguser_altmail' => 'null',
                'reguser_agent' => $browser,
                'reguser_ip' => $ipAddress,
                'reguser_add' => $address,
                'reguser_alterAdd' => $Altaddress,
                'reguser_dob' => $userdob,
                'cnf1' => 'null',
                'cnf2' => 'null',
                'cnf3' => 'null',
                'updated_at' => $createdate,

            );
            $tableName = "tbl_userdetail";
            $DbKey = "reguser_id";
            $this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data);
            $this->session->set_flashdata('done', 'You are Successfully Update The Profile Record...!');
            redirect(base_url() . "profilesetting.html");
        } else {
            $this->session->set_flashdata('error', 'Your Given info is not updated Please try Again...');
            redirect(base_url() . "signup.html");
        }
    }

}
