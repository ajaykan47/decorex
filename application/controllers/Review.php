<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {
    public function __construct()
     {
         parent::__construct();
         $this->load->model('admin/Setting_model');   
     }
	
	
    public function addReview()
    {
        /*echo"<pre>";
        print_r($_POST);die;*/
            $this->form_validation->set_rules('name', 'Name', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');

           echo"Something Missing Please Try Again !!!";

          }else{
            $upload_data = "";
            $name = $this->input->post('name');
            if(!empty($this->input->post('star')))
            {
             $star = $this->input->post('star');   
            }else
            {
              $star = 0;  
            }
            $email = $this->input->post('email');
            $product_id = $this->input->post('product_id');
            $product_url = $this->input->post('product_url');
            $messasge = $this->input->post('messasge');
            $status = $this->input->post('status');
            $createdate = date('d-m-y H:i:s');
            if (!empty($status)) {
                $status = "inactive";
            } else {
                $status = "active";
            }
            
            
            if ($_FILES["userfile"]['name'] != 'Null') {
                $config['upload_path'] = './uploads/review/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 0;
                $config['max_width'] = 1924;
                $config['max_height'] = 704;
                $new_name = time() . '-' . $_FILES["userfile"]['name'];
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('userfile')) {
                    $testmo_image = $this->upload->data()['file_name'];

                } else {
                    $error = array('error' => $this->upload->display_errors());
                    $testmo_image = '';

                }
            $dataArr = array(
                    'filename' => $testmo_image,
                    'name' => $name,
                    'star_rating' => $star,
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


    }


