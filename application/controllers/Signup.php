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
            if($exitMail==$email){
                  $emailValid = $this->input->post('email');
            }else{
                
             $this->session->set_flashdata('error', 'You are Already Registered Please Login or Reset Password !!');
            redirect(base_url() . "signup.html"); 
            }
            $password = md5($this->input->post('password'));

            $createdate = date('Y-m-d H:i:s');
            $reguser_add='Mayur Kanta';
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
                $data = array(
                    'reguser_name' => $name,
                    'reguser_lastname' => 'null',
                    'reguser_mobile' => $mobile,
                    'reguser_altmail' =>'null' ,
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
                if(!empty($result) && $result >0 )
                {
                $data = array(
                'to' => $email,
                'subject' => '[Decorex] Please Confirm Your E-mail Address',
                'message' => '
                    <p>Hi !</p>
                    <p>Welcome to Decorex. Having you as a part of this Business Community makes us proud!</br>
                    You are receiving this e-mail because user at has given yours as an e-mail address to connect their account.
                     </p>
                     <p>To Confirm it was you:</p>
                    <p><a href="' . base_url('Signup/varify_user?email=' . $email . 'ajay' . $varif_code) . '">Click here</a></p>
                    <p>For any queries, mail us at ' . INFO_EMAIL . '.</p>
                    <p>Thanks & Regards,<br>Team Decorex <br>
                                        Mobile: +91 8882029116
                                        </p>
                '
            );
            sendmail($data);
            
                $this->session->set_flashdata('Regdone', 'You are successfully Register Please Go to Your E-mail Account and Click Activation Link  Thanks !');
                redirect(base_url() . "signup.html");
        } else {
             $this->session->set_flashdata('Regerror', 'Your data not Inserted');
                redirect(base_url() . "signup.html");
            }
        
            }}}
    
    
     public function varifyUser($email, $varify_code) {
        $this->db->select('*');
        $this->db->from('tbl_userLogin');
        $this->db->where(array('reguser_email' => $email, 'varify' => $varify_code));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->db->where('reguser_email', $email);
            $this->db->update('tbl_userLogin', array('varify' => 'yes'));
            return $query->result();
        } else {
            return false;
        }
    }
    
    
}


