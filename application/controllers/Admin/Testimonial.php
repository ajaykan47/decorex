<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller
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
        $data['title'] = 'Testimonial';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_testimonial';
        $DbKey = 'tml_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
       // print_r($data['editResult']);die;
        $this->load->view('admin/testimonial/index',$data);
        $this->load->view('admin/footer');
    }

    public function addTestimonial()
    {

        $this->form_validation->set_rules('txtTestimonialTitle', 'Name', 'required');
        $this->form_validation->set_rules('txtShortDesc', 'Description', 'required');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Please Fill Required Detail');
            $data['title'] = 'Testimonial';
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar');
            $this->load->view('admin/testimonialadd');
            $this->load->view('admin/template/footer');
        } else {
            if (!empty($this->input->post('txtTestimonialTitle'))) {
                $tml_name = $this->input->post('txtTestimonialTitle');
            } else {
                $tml_name = "";
            }
            if (!empty($this->input->post('txtShortDesc'))) {
                $txtShortDesc = $this->input->post('txtShortDesc');
            } else {
                $txtShortDesc = "";
            }

            $status = $this->input->post('status');
            $createdate = date('Y-m-d H:i:s');
            if (!empty($status)) {
                $status = "Active";
            } else {
                $status = "Inactive";
            }
            if ($_FILES["userfile"]['name'] != '') {
                $config['upload_path'] = './Uploads/testimonial/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;
                $new_name = time() . '-' . $_FILES["userfile"]['name'];
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('userfile')) {
                    $testmo_image = $this->upload->data()['file_name'];

                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $testmo_image = '';

                }
            } else {
                $testmo_image = '';

            }

            $data = array(
                'tml_name' => $tml_name,
                'description' => $txtShortDesc,
                'status' => $status,
                'image_file' => $testmo_image,
                'created_at' => $createdate);

            $tableName = "tbl_testimonial";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully saved');
                redirect(base_url() . "Admin/Testimonial");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again');
                redirect(base_url() . "Admin/Testimonial");
            }
        }

    }

    public function updateTestimonial()
    {
        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        if (!empty($this->input->post('txtTestimonialTitle'))) {
            $tml_name = $this->input->post('txtTestimonialTitle');
        } else {
            $tml_name = "";
        }
        if (!empty($this->input->post('txtShortDesc'))) {
            $txtShortDesc = $this->input->post('txtShortDesc');
        } else {
            $txtShortDesc = "";
        }

        $status = $this->input->post('status');
        if (!empty($status)) {
            $status = "Active";
        } else {
            $status = "Inactive";
        }

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/testimonial';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Testimonial/addTestimonial', $error);

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
            'tml_name' => $tml_name,
            'description' => $txtShortDesc,
            'status' => $status,
            'image_file' => $file_name,
            'updated_at' => date('Y-m-d H:i:s'));

        $tableName = "tbl_testimonial";
        $DbKey="tml_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName,$data)) {

            $this->session->set_flashdata('done', 'Information Successfully updated...!!');
            redirect('Admin/Testimonial/listTestimonial');
        } else {
            $this->sssion->set_flashdata('error', 'Information is not successfully updated...!!');
            redirect('Admin/Testimonial/listTestimonial');
        }

    }

    public function listTestimonial()
    {
        $data['title'] = 'List Testimonial';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_testimonial";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/testimonial/list', $data);

    }

    public function deleteTestimonial()
    {
        $id = $this->input->get('id');
        $idG = base64_decode($id);
        $DbKey = 'tml_id';
        $tableName = 'tbl_testimonial';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idG, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Record Successfully Deleted...!');
            redirect('Admin/Testimonial/listTestimonial');
        } else {
            $this->session->set_flashdata('error', 'Record Not Deleted. Please Try Again...!');
            redirect('Admin/Testimonial/listTestimonial');
        }
    }

}
