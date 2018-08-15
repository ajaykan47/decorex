<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $Ajaykan47.
 * User: admin
 * Date: 5/1/2018
 * Time: 10:47 AM
 */
class Shipping extends CI_Controller
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
        $data['title'] = 'Shipping Charge';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_shipping';
        $DbKey = 'shipping_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
       // print_r($data['editResult']); die;
        $this->load->view('admin/shipping/index', $data);
        $this->load->view('admin/footer');

    }

    public function addShipping()
    {
       
        $this->form_validation->set_rules('txtweight', 'Weight ', 'required|is_unique[tbl_shipping.weight]');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again  Or Select Unique Page Name...!!!');

          redirect(base_url()."Admin/Shipping");

        } else {
            
            $txtweight = $this->input->post('txtweight');
            $txtamount = $this->input->post('txtamount');
            if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            $createdate = date('Y-m-d H:i:s');

            $data = array(
                'weight' => $txtweight,
                'amount' => $txtamount,
                'status' => $status,
                'created_at' => $createdate
               

            );
            
            $tableName = "tbl_shipping";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                redirect(base_url() . "Admin/Shipping");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/Shipping");
            }
        }
    }


    public function updateShipping()
    {
        $idH = $this->input->post('hidden_id');
        $txtweight = $this->input->post('txtweight');
        $txtamount = $this->input->post('txtamount');
        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
        } else {
            $status = "Inactive";
        }
        $createdate = date('Y-m-d H:i:s');

        $data = array(
            'weight' => $txtweight,
            'amount' => $txtamount,
            'status' => $status,
            'updated_at' => $createdate
            

        );
        $tableName = "tbl_shipping";
        $DbKey = "shipping_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect(base_url()."Admin/Shipping/listShipping");
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect(base_url()."Admin/Shipping/listShipping");
        }
    }

    public function listShipping()
    {
        $data['title'] = 'List Shipping';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_shipping";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/shipping/list', $data);

    }

    public function deleteShipping()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'shipping_id';
        $tableName = 'tbl_shipping';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Shipping  Successfully Deleted...!');
         
            redirect(base_url()."Admin/Shipping/listShipping");
        } else {
            $this->session->set_flashdata('error', 'Shipping Not Deleted. Please Try Again...!');
          
            redirect(base_url()."Admin/Shipping/listShipping");
        }
    }


}