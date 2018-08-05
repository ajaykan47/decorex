<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
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
        $data['title'] = 'Add Web Info';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/setting/changelogo');
        $this->load->view('admin/footer');

    }

    /*******************Website Info ********************************/
    public function changeLogo()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Add Web Info';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_logo';
        $DbKey = 'logo_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        /*  echo '<pre>';
          print_r($data['editResult']);die;*/
        $this->load->view('admin/setting/changelogo', $data);
        $this->load->view('admin/footer');

    }

    public function addLogo()
    {

        $this->form_validation->set_rules('txtCompany', 'Company Name ', 'required|is_unique[tbl_logo.company_name]');
        $this->form_validation->set_rules('txtEmail', 'Company Name ', 'required|is_unique[tbl_logo.personal_email]');
        $this->form_validation->set_rules('txtBranchAdd', 'Branch Address ', 'required');
        $this->form_validation->set_rules('txtMobile', 'Mobile ', 'required');
        $this->form_validation->set_rules('txtStatus', 'Status ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('errorValidation', 'Something Missing Please Try Again or This Record is Already Exists !');

            redirect(base_url() . "Admin/Setting/changeLogo");

        } else {

            $company_name = $this->input->post('txtCompany');
            $logo_title = $this->input->post('txtLogoTitle');
            $txtBranchAdd = $this->input->post('txtBranchAdd');
            $txtMobile = $this->input->post('txtMobile');
            $txtAltMobile = $this->input->post('txtAltMobile');
            $txtEmail = $this->input->post('txtEmail');
            $txtmonsat = $this->input->post('txtmonsat');
            $txtsunday = $this->input->post('txtsunday');

            if (!empty($this->input->post('txtCf1'))) {
                $cf1 = $this->input->post('txtCf1');
            } else {
                $cf1 = 'Null';
            }
            if (!empty($this->input->post('txtCf2'))) {
                $cf2 = $this->input->post('txtCf2');
            } else {
                $cf2 = 'Null';
            }
            if (!empty($this->input->post('txtCf3'))) {
                $cf3 = $this->input->post('txtCf3');
            } else {
                $cf3 = 'Null';
            }
            if (!empty($this->input->post('txtStatus'))) {
                $status = $this->input->post('txtStatus');
            } else {
                $status = "Inactive";
            }

            $config['upload_path'] = './uploads/logo';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/addLogo', $error);

            } else {

                $upload_data = $this->upload->data();

                $dataArr = array(
                    'filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],
                    'company_name' => $company_name,
                    'branch_add' => $txtBranchAdd,
                    'mobile' => $txtMobile,
                    'alt_mob' => $txtAltMobile,
                    'personal_email' => $txtEmail,
                    'mon_sat' => $txtmonsat,
                    'sunday' => $txtsunday,
                    'logo_title' => $logo_title,
                    'cf1' => $cf1,
                    'cf2' => $cf2,
                    'cf3' => $cf3,
                    'status' => $status,
                    'created_at' => date('Y-m-d H:i:s')
                );
                $tableName = "tbl_logo";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your Record is successfully saved');
                    redirect(base_url() . "Admin/Setting/changeLogo");
                } else {
                    $this->session->set_flashdata('error', 'Your Banner Info is not Save Please Try Again !!');
                    redirect(base_url() . "Admin/Setting/changeLogo");
                }
            }
        }
    }

    public function ListWebInfo()
    {

        $data['title'] = 'List Category';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_logo";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/setting/list-website-info', $data);

    }

    public function updateInfoLWeb()
    {
        $upload_data = "";

        $idH = $this->input->post('logoID');

        $company_name = $this->input->post('txtCompany');
        $logo_title = $this->input->post('txtLogoTitle');
        $txtBranchAdd = $this->input->post('txtBranchAdd');
        $txtMobile = $this->input->post('txtMobile');
        $txtAltMobile = $this->input->post('txtAltMobile');
        $txtEmail = $this->input->post('txtEmail');
        $txtmonsat = $this->input->post('txtmonsat');
        $txtsunday = $this->input->post('txtsunday');
        $status = $this->input->post('status');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');

        if (!empty($this->input->post('txtCf1'))) {
            $cf1 = $this->input->post('txtCf1');
        } else {
            $cf1 = 'Null';
        }
        if (!empty($this->input->post('txtCf2'))) {
            $cf2 = $this->input->post('txtCf2');
        } else {
            $cf2 = 'Null';
        }
        if (!empty($this->input->post('txtCf3'))) {
            $cf3 = $this->input->post('txtCf3');
        } else {
            $cf3 = 'Null';
        }
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = "Inactive";
        }

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/logo';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/banneradd', $error);

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {

            $file_name = $filename;
            $full_path = $fullpath;
        }
        $data = array(
            'filename' => $file_name,
            'file_path' => $full_path,
            'company_name' => $company_name,
            'branch_add' => $txtBranchAdd,
            'mobile' => $txtMobile,
            'alt_mob' => $txtAltMobile,
            'personal_email' => $txtEmail,
            'mon_sat' => $txtmonsat,
            'sunday' => $txtsunday,
            'logo_title' => $logo_title,
            'cf1' => $cf1,
            'cf2' => $cf2,
            'cf3' => $cf3,
            'status' => $status,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $tableName = "tbl_logo";
        $DbKey = "logo_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('update', 'Information Successfully updated...!!');
            redirect('Admin/Setting/ListWebInfo');
        } else {
            $this->sssion->set_flashdata('updateError', 'Information is not successfully updated...!!');
            redirect('Admin/Setting/ListWebInfo');
        }
    }


    public function deleteInformation()
    {
        $idH = $this->input->get('id');
        $idG = base64_decode($idH);
        $DbKey = 'logo_id';
        $tableName = 'tbl_logo';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('delete', 'Record  Successfully Deleted...!');
            redirect('Admin/Setting/ListWebInfo');
        } else {
            $this->session->set_flashdata('delError', 'Record Not Deleted. Please Try Again...!');
            redirect('Admin/Setting/ListWebInfo');
        }
    }


    /*******************Website Info*****end here**********ajaykan47*****************/

    public function socialIcon()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Social Icon';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_socialicon';
        $DbKey = 'socialicon_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $this->load->view('admin/setting/socialicon',$data);
        $this->load->view('admin/footer');

    }

    public function addSocialIcon()
    {

        $txtFacebook = $this->input->post('txtName');
        $txtTwitter = $this->input->post('txtLink');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'name' => $txtFacebook,
            'link' => $txtTwitter,
            'created_at' => date('Y-m-d H:i:s'),
            'status' => $status
        );
        $tableName = "tbl_socialicon";
        $res = $this->Setting_model->insertData($tableName, $data);
        if ($res > 0) {
            $this->session->set_flashdata('done', 'Successfully Save Social Site Link');
            redirect(base_url() . 'Admin/Setting/socialIcon');
            exit();
        } else {
            $this->session->set_flashdata('error', 'Social Site Link not Save Successfully Please Try Again !!');
            redirect(base_url() . 'Admin/Setting/socialIcon');
            exit();
        }
    }

    public function listSocialicon()
    {

        $data['title'] = 'Social Icon List';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_socialicon";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/setting/social-icon-list', $data);
    }
    public function updateSocialLink(){

        $idH = $this->input->post('hidden_id');
        $txtFacebook = $this->input->post('txtName');
        $txtTwitter = $this->input->post('txtLink');
        if (!empty($this->input->post('txtStatus'))) {
            $status = $this->input->post('txtStatus');
        } else {
            $status = 'inactive';
        }
        $data = array(
            'name' => $txtFacebook,
            'link' => $txtTwitter,
            'created_at' => date('Y-m-d H:i:s'),
            'status' => $status
        );
        $tableName = "tbl_socialicon";
        $DbKey="socialicon_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName,$data)) {

            $this->session->set_flashdata('done', 'Information Successfully updated...!!');
            redirect('Admin/Setting/listSocialicon');
        } else {
            $this->sssion->set_flashdata('error', 'Information is not successfully updated...!!');
            redirect('Admin/Setting/listSocialicon');
        }
    }





    public function deleteSocialIconLink()
    {

        $idH = $this->input->get('id');
        $idG = base64_decode($idH);
        $DbKey = 'socialicon_id';
        $tableName = 'tbl_socialicon';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('delete', 'Category  Successfully Deleted...!');
            redirect('Admin/Setting/listSocialicon');
        } else {
            $this->session->set_flashdata('delError', 'Category Not Deleted. Please Try Again...!');
            redirect('Admin/Setting/listSocialicon');
        }

    }

    /*******************Social Icon List end here*******************/

    public function themeColor()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/setting/themecolor');
        $this->load->view('admin/footer');

    }

}
