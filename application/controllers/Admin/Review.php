<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {
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
        $data['title'] = 'Review';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_review';
        $DbKey = 'review_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $this->load->view('admin/review/index', $data);
        $this->load->view('admin/footer');

    }
	
	
    public function addReview()
    {
            $this->form_validation->set_rules('name', 'Name', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');

           echo"does not same password";

          }else{
            $upload_data = "";
            $name = $this->input->post('name');
            $star_rating = $this->input->post('star');
            $email = $this->input->post('email');
            $product_id = $this->input->post('product_id');
            $product_url = $this->input->post('product_url');
            $messasge = $this->input->post('messasge');
            $status = $this->input->post('status');
            $createdate = date('d-m-y H:i:s');
            if (!empty($status)) {
                $status = "active";
            } else {
                $status = "inactive";
            }
            $config['upload_path'] = './uploads/review';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {
                
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Review/addReview', $error);

            } else {

                $upload_data = $this->upload->data();
            $dataArr = array(
                    'filename' => $upload_data['file_name'],
                    'name' => $name,
                    'star_rating' => $star_rating,
                    'e_mail' => $email,
                    'product_id' => $product_id,
                    'full_descr' => $messasge,
                    'status' => $status,
                    'created_at' => $createdate
                );
                $tableName = "tbl_review";
                $res = $this->Setting_model->insertData($tableName, $dataArr);
                $data = array('upload_data' => $this->upload->data());
                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your data successfully Inserted');
                    redirect(base_url() . $product_url);
                } else {
                    $this->session->set_flashdata('error', 'Your data not Inserted');
                    redirect(base_url() . $product_url);
            }
        }      
    }
    }
    public function updateReview()
    {
       /* echo"<pre>";
        print_r($_POST);die;*/
        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $name = $this->input->post('name');
        $star_rating = $this->input->post('star');
        $email = $this->input->post('email');
        $product_id = $this->input->post('product_id');
        $product_url = $this->input->post('product_url');
        $messasge = $this->input->post('messasge');
        $status = $this->input->post('status');
        $updated_at = date('d-m-Y H:i:s');

        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/review';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Review/addReview', $error);

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
            }
        } else {

            $file_name = $filename;
        }
        $data = array(
            'filename' => $file_name,
            'name' => $name,
            'star_rating' => $star_rating,
            'e_mail' => $email,
            'product_id' => $product_id,
            'full_descr' => $messasge,
            'status' => $status,
            'updated_at' => $updated_at
        );
        $tableName = "tbl_review";
        $DbKey = "review_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Review  Successfully updated...!!');
            redirect('Admin/Review/listReview');
        } else {
            $this->sssion->set_flashdata('error', 'Review  is not successfully updated...!!');
            redirect('Admin/Review/listReview');
        }

    }
 public function listReview()
    {
        $data['title'] = 'List Review';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_review";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/review/list', $data);

    }
    public function deleteReview()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'review_id';
        $tableName = 'tbl_review';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Review  Successfully Deleted...!');
            redirect('Admin/Review/listReview');
        } else {
            $this->session->set_flashdata('error', 'Review Not Deleted. Please Try Again...!');
            redirect('Admin/Review/listReview');
        }
    }
    }


