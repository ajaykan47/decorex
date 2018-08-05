<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 4/6/2018
 * Time: 10:15 AM
 */
class Quality extends CI_Controller
{


    function __construct()
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
        $data['title'] = 'Quality';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_quality';
        $DbKey = 'quality_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $this->load->view('admin/quality/index', $data);
        $this->load->view('admin/footer');

    }

    public function addQuality()
    {

        $this->form_validation->set_rules('txtBannerTitle', 'Quality Name ', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');

            $data['title'] = 'Quality';
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/quality/index');
            $this->load->view('admin/footer');

        } else {

            $upload_data = "";
            $banner_title = $this->input->post('txtBannerTitle');
            $status = $this->input->post('status');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "active";
            } else {
                $status = "inactive";
            }


            $config['upload_path'] = './uploads/quality';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/quality/addQuality', $error);

            } else {

                $upload_data = $this->upload->data();

                $dataArr = array('filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],
                    'title' => $banner_title,
                    'status' => $status,
                    'created_at' => $createdate
                );
                $tableName = "tbl_quality";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your data successfully Inserted');
                    redirect(base_url() . "Admin/Quality");
                } else {
                    $this->session->set_flashdata('error', 'Your data not Inserted');
                    redirect(base_url() . "Admin/Quality");
                }
            }
        }
    }


    public function updateQuality()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');
        $banner_title = $this->input->post('txtBannerTitle');
        $status = $this->input->post('status');
        $updated_at = date('Y-m-d H:i:s');
        if (!empty($status)) {
            $status = "active";
        } else {
            $status = "inactive";
        }

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/quality';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Quality/addQuality', $error);

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
            'title' => $banner_title,
            'status' => $status,
            'updated_at' => $updated_at
        );
        $tableName = "tbl_quality";
        $DbKey = "quality_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect('Admin/Quality/listQuality');
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect('Admin/Quality/listQuality');
        }

    }

    public function listQuality()
    {
        $data['title'] = 'List Quality';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_quality";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/quality/list', $data);

    }


    public function deleteQuality()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'quality_id';
        $tableName = 'tbl_quality';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Quality  Successfully Deleted...!');
            redirect('Admin/Quality/listQuality');
        } else {
            $this->session->set_flashdata('error', 'Banner Not Deleted. Please Try Again...!');
            redirect('Admin/Quality/listQuality');
        }
    }

}