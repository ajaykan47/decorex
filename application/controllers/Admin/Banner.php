<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*****************************
 * Created by $ajaykan47.
 * User: Flawlessindia
 * Date: 02-04-2018
 * Time: 10:54 PM
 ********************/
class Banner extends CI_Controller
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
        $data['title'] = 'Banner';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_banner';
        $DbKey = 'banner_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $this->load->view('admin/banner/index', $data);
        $this->load->view('admin/footer');

    }

    public function addBanner()
    {

        $this->form_validation->set_rules('txtBannerTitle', 'Banner Name ', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');

            $data['title'] = 'Banner';
            $this->load->view('admin/header',$data);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/banner/index');
            $this->load->view('admin/footer');

        } else {

            $upload_data = "";
            $banner_title = $this->input->post('txtBannerTitle');
            $descr = $this->input->post('txtShortDesc');
            $status = $this->input->post('status');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "active";
            } else {
                $status = "inactive";
            }


            $config['upload_path'] = './uploads/banner';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Banner/addBanner', $error);

            } else {

                $upload_data = $this->upload->data();

                $dataArr = array('filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],
                    'title' => $banner_title,
                    'descr' => $descr,
                    'status' => $status,
                    'created_at' => $createdate
                );
                $tableName = "tbl_banner";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your data successfully Inserted');
                    redirect(base_url() . "Admin/Banner");
                } else {
                    $this->session->set_flashdata('error', 'Your data not Inserted');
                    redirect(base_url() . "Admin/Banner");
                }
            }
        }
    }


    public function updateBanner()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');
        $banner_title = $this->input->post('txtBannerTitle');
        $status = $this->input->post('status');
        $descr = $this->input->post('txtShortDesc');
        $updated_at = date('Y-m-d H:i:s');
        /*if (!empty($status)) {
            $status = "active";
        } else {
            $status = "inactive";
        }*/

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/banner';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Banner/addBanner', $error);

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
            'descr' => $descr,
            'status' => $status,
            'updated_at' => $updated_at
        );
        $tableName = "tbl_banner";
        $DbKey = "banner_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Banner  Successfully updated...!!');
            redirect('Admin/Banner/listBanner');
        } else {
            $this->sssion->set_flashdata('error', 'Banner  is not successfully updated...!!');
            redirect('Admin/Banner/listBanner');
        }

    }

    public function listBanner()
    {
        $data['title'] = 'List Banner';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_banner";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/banner/list', $data);

    }


    public function deleteBanner()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'banner_id';
        $tableName = 'tbl_banner';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Banner  Successfully Deleted...!');
            redirect('Admin/Banner/listBanner');
        } else {
            $this->session->set_flashdata('error', 'Banner Not Deleted. Please Try Again...!');
            redirect('Admin/Banner/listBanner');
        }
    }

}