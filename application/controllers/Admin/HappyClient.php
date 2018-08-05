<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HappyClient extends CI_Controller
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
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Awards Holded';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_happyclient';
        $DbKey = 'tml_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
       // print_r($data['editResult']);die;
        $this->load->view('admin/happyclient/index',$data);
        $this->load->view('admin/footer');
    }

    public function addHappyClient()
    {

       $this->form_validation->set_rules('icon_class', 'icon_class', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');


        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Please Fill Required Detail');
            $data['title'] = 'Awards Holded';
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/happyclientadd');
            $this->load->view('admin/template/footer');
        } else {
            if (!empty($this->input->post('icon_class'))) {
                $icon_class = $this->input->post('icon_class');
            } else {
                $icon_class = "";
            }
            if (!empty($this->input->post('name'))) {
                $name = $this->input->post('name');
            } else {
                $name = "";
            }
			if (!empty($this->input->post('counting'))) {
                $counting = $this->input->post('counting');
            } else {
                $counting = "";
            }

            $status = $this->input->post('status');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "Active";
            } else {
                $status = "Inactive";
            }
           

            $data = array(
                'icon_class' => $icon_class,
                'name' => $name,
                'counting' => $counting,
                'status' => $status,
                
                'created_at' => $createdate);

            $tableName = "tbl_happyclient";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully saved');
                redirect(base_url() . "Admin/HappyClient");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again');
                redirect(base_url() . "Admin/HappyClient");
            }
        }

    }

    public function updateHappyClient()
    {
       
        $upload_data = "";
        $idH = $this->input->post('category_id');
        $status = $this->input->post('status');
        if (!empty($this->input->post('icon_class'))) {
            $icon_class = $this->input->post('icon_class');
        } else {
            $icon_class = "";
        }
        if (!empty($this->input->post('name'))) {
            $name = $this->input->post('name');
        } else {
            $name = "";
        }
		if (!empty($this->input->post('counting'))) {
            $counting = $this->input->post('counting');
        } else {
            $counting = "";
        }

        
       

      

        $data = array(
            'icon_class' => $icon_class,
            'name' => $name,
            'counting' => $counting,
            'status' => $status,
            
            'updated_at' => date('Y-m-d H:i:s'));

        $tableName = "tbl_happyclient";
        $DbKey="tml_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName,$data)) {

            $this->session->set_flashdata('done', 'Information Successfully updated...!!');
            redirect('Admin/HappyClient/listHappyClient');
        } else {
            $this->sssion->set_flashdata('error', 'Information is not successfully updated...!!');
            redirect('Admin/HappyClient/listHappyClient');
        }

    }

    public function listHappyClient()
    {
        $data['title'] = 'List Awards Holded';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_happyclient";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/happyclient/list', $data);

    }

    public function deleteHappyClient()
    {
        $id = $this->input->get('id');
        $idG = base64_decode($id);
        $DbKey = 'tml_id';
        $tableName = 'tbl_happyclient';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idG, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Record Successfully Deleted...!');
            redirect('Admin/HappyClient/listHappyClient');
        } else {
            $this->session->set_flashdata('error', 'Record Not Deleted. Please Try Again...!');
            redirect('Admin/HappyClient/listHappyClient');
        }
    }

}
