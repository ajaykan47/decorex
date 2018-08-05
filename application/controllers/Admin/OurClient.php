<?php
/***************************
 * *****************************
 * Created by $ajaykan47.************
 * Company: FlawlessIndia Pvt Ltd.
 * Date: 06-04-2018***************
 * Time: 12:51 AM********************
 *************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class OurClient extends CI_Controller
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
        $data['title'] = 'Our Client';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar',$data);
        $tableName = 'tbl_clients';
        $DbKey = 'client_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $this->load->view('admin/client/index', $data);
        $this->load->view('admin/footer');
    }

    public function addClientLogo()
    {

       // $this->form_validation->set_rules('client_title', 'Name', 'required');

       /* if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Please Fill Required Detail');
            redirect(base_url() . "Admin/OurClient");
        } else {*/
            if (!empty($this->input->post('client_title'))) {
                $client_title = $this->input->post('client_title');
            } else {
                $client_title = "";
            }
            if (!empty($this->input->post('status'))) {
                $status = "Active";
            } else {
                $status = "Inactive";
            }

            $createdate = date('Y-m-d H:i:s');

            if ($_FILES["userfile"]['name'] != '') {
                $config['upload_path'] = './uploads/ourclient/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;
                $new_name =$_FILES["userfile"]['name'];
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('userfile')) {
                    $client_logo = $this->upload->data()['file_name'];

                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $client_logo = '';

                }
            } else {
                $client_logo = '';

            }

            $data = array(
                'client_title' => $client_title,
                'status' => $status,
                'client_logo' => $client_logo,
                'created_at' => $createdate);

            $tableName = "tbl_clients";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully saved...!');
                redirect(base_url() . "Admin/OurClient");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect(base_url() . "Admin/OurClient");
            }
        }

    

    public function listClient()
    {
        $data['title'] = 'List client';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar',$data);
        $tableName = "tbl_clients";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/client/client-list', $data);
    }

    public function updateClientlogo()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        if (!empty($this->input->post('client_title'))) {
            $client_title = $this->input->post('client_title');
        } else {
            $client_title = "";
        }

        $status = $this->input->post('status');
       /* if (!empty($status)) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }*/

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/ourclient';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/OurClient/addClientLogo', $error);

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {

            $file_name = $filename;
        }

        $data = array(
            'client_title' => $client_title,
            'status' => $status,
            'client_logo' => $file_name,
            'updated_at' => date('Y-m-d H:i:s'));

        $tableName = "tbl_clients";
        $DbKey = "client_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Information Successfully updated...!!');
            redirect('Admin/OurClient/listClient');
        } else {
            $this->sssion->set_flashdata('error', 'Information is not successfully updated...!!');
            redirect('Admin/OurClient/listClient');
        }
    }

    public function deleteOurClient(){

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'client_id';
        $tableName = 'tbl_clients';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Record Successfully Deleted...!');
            redirect('Admin/OurClient/listClient');
        } else {
            $this->session->set_flashdata('error', 'Record Not Deleted Please Try Again...!');
            redirect('Admin/OurClient/listClient');
        }
    }


}
