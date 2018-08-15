<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('user_agent');
    }

    public function index()
    {
        $pageName = "Signup";
        $data['MetaResult'] = $this->Home_model->getSeoContent($pageName);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        $seo_matatag = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->seo_keyword;
            $seo_descr = $metaVAL->seo_descr;
            $seo_matatag = $metaVAL->seo_matatag;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        $data['metatag'] = $seo_matatag;
        /*-------Seo meta tag end-----*/
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('include/header', $data);
        $this->load->view('signup/index');
        $this->load->view('include/footer', $data);
    }

    public function addRegister()
    {

        $varif_code = random_code();
        $this->form_validation->set_rules('name', 'Password', 'required');
        $this->form_validation->set_rules('mobile', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Password', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('conf_pass', 'Confirm Password', 'required|matches[password]');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');
            redirect(base_url() . "signup.html");

        } else {


            $name = $this->input->post('name');
            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');

            $exitMail = $this->Home_model->getExistEmail($email);
            foreach ($exitMail as $exitMaill) {
                $reguser_email = $exitMaill->reguser_email;
            }
            if ($reguser_email != $email) {
                $emailValid = $this->input->post('email');
            } else {

                $this->session->set_flashdata('error', 'You are Already Registered Please Login or Reset Password !!');
                redirect(base_url() . "signup.html");
            }
            $password = md5($this->input->post('password'));

            $createdate = date('Y-m-d H:i:s');
            $reguser_add = 'Mayur Kanta';
            $ipAddress = $this->input->ip_address();
            $browser = $this->agent->agent_string();
            $dataArr = array(
                'reguser_email' => $emailValid,
                'reguser_pass' => $password,
                'verify' => 'no'
            );


            $tableName = "tbl_userLogin";
            $res = $this->Setting_model->insertData($tableName, $dataArr);
            if (!empty($res)) {

                /****Mail**For**Otp***********/
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
                $data = array(
                    'name' => $name,
                    'usermail' => $emailValid,
                    'userpassword' => $this->input->post('password'),
                );
                $this->email->to($email);
                $this->email->subject('Decorex JSB Lighting');
                $message = $this->load->view('template/registration', $data, TRUE);
                $this->email->message($message);

                $result = $this->email->send();

                $data = array(
                    'reguser_name' => $name,
                    'reguser_lastname' => 'null',
                    'reguser_mobile' => $mobile,
                    'reguser_altmail' => 'null',
                    'reguser_agent' => $browser,
                    'reguser_ip' => $ipAddress,
                    'reguser_add' => 'null',
                    'reguser_alterAdd' => 'null',
                    'cnf1' => 'null',
                    'cnf2' => 'null',
                    'cnf3' => 'null',
                    'reguser_id' => $res,
                    'created_at' => $createdate
                );
                $tableName = "tbl_userdetail";
                $result = $this->Setting_model->insertData($tableName, $data);
                if (!empty($result) && $result > 0) {

                    $this->session->set_flashdata('Regdone', 'You are successfully Register Please Go to Your E-mail Account and Click Activation Link  Thanks !');
                    redirect(base_url() . "login.html");
                } else {
                    $this->session->set_flashdata('Regerror', 'Your data not Inserted');
                    redirect(base_url() . "signup.html");
                }

            }
        }
    }


    public function varifyUser()
    {

        $verifymail = $this->input->get('verify');
        $data = array(
            'verify' => 'yes'
        );
        if ($this->Home_model->updateRecordEmail($data, $verifymail)) {
            $this->session->set_flashdata('done', 'Verification done...!!');
            redirect(base_url() . "login.html");
        } else {
            $this->session->set_flashdata('error', 'Your Activation Code is Not Valid...!!');
            redirect(base_url() . "login.html");
        }

    }


}


