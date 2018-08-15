<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $Ajaykan47.
 * User: admin
 * Date: 5/1/2018
 * Time: 10:47 AM
 */
class Categorygst extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('Admin/Auth');
        }
        $this->load->model('admin/Setting_model');
        $this->load->model('admin/Product_model');
    }

    public function index()
    {
        
        $idG = $this->input->get('id');
        $id = $this->input->get('idd');
        $idG = base64_decode($idG);
        $id = base64_decode($id);
         
        $data['title'] = 'Category GST';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_catgst';
        $DbKey = 'catgst_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $tableName = 'tbl_category';
        $data['editResultt'] = $this->Product_model->getcategorynameById($tableName, $id);
        $table = 'tbl_tax';
        $data['ddlResult'] = $this->Product_model->getDDLtaxtype($table);
        $table = 'tbl_shipping';
        $data['weightResult'] = $this->Product_model->getDDLweight($table);
        $this->load->view('admin/categorygst/index', $data);
        $this->load->view('admin/footer');

    }

    public function addCategorygst()
    {
       
        $this->form_validation->set_rules('tax_id', 'Tax Type ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again  Or Select Unique Page Name...!!!');

          redirect(base_url()."Admin/Categorygst");

        } else {
            
            $tax_id = $this->input->post('tax_id');
            $shipping_id = $this->input->post('shipping_id');
            $txtcategory = $this->input->post('txtcategory');
            $cat_id = $this->input->post('cat_id');
            
            if(!empty($this->input->post('txttax')))
            {
               $txttax = $this->input->post('txttax'); 
            }else
            {
                $txttax = "";
            }
            $txtFromdate = $this->input->post('txtFromdate');
            
            if(!empty($this->input->post('txtEnddate'))){
                $txtEnddate = $this->input->post('txtEnddate');
            }else{
                $txtEnddate = "";
               }
             if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            $createdate = date('Y-m-d H:i:s');
            $id = base64_encode($cat_id);
            $data = array(
                'name' => $txtcategory,
                'cat_id' => $cat_id,
                'shipping_id' => $shipping_id,
                'tax_perctg' => $txttax,
                'from_date' => $txtFromdate,
                'end_date' => $txtEnddate,
                'created_at' => $createdate,
                'status' => $status,
                'tax_id' => $tax_id

            );
            $tableName = "tbl_catgst";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                 redirect(base_url() . "Admin/Categorygst/listCategorygst?idd=$id");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/Categorygst/listCategorygst?idd=$id");
            }
        }
    }


    public function updateCategorygst()
    {
       
        $idH = $this->input->post('hidden_id');
        $tax_id = $this->input->post('tax_id');
        $shipping_id = $this->input->post('shipping_id');
            $txtcategory = $this->input->post('txtcategory');
            $cat_id = $this->input->post('cat_id');
            $id = base64_encode($cat_id);
            if(!empty($this->input->post('txttax')))
            {
               $txttax = $this->input->post('txttax'); 
            }else
            {
                $txttax = "";
            }
            $txtFromdate = $this->input->post('txtFromdate');
            
            if(!empty($this->input->post('txtEnddate'))){
                $txtEnddate = $this->input->post('txtEnddate');
            }else{
                $txtEnddate = "";
               }
        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
        $updated_at = date('Y-m-d H:i:s');

        $data = array(
            'name' => $txtcategory,
            'cat_id' => $cat_id,
            'shipping_id' => $shipping_id,
            'tax_perctg' => $txttax,
            'from_date' => $txtFromdate,
            'end_date' => $txtEnddate,
            'updated_at' => $updated_at,
            'status' => $status,
            'tax_id' => $tax_id

        );
        $tableName = "tbl_catgst";
        $DbKey = "catgst_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect(base_url()."Admin/Categorygst/listCategorygst?idd=$id");
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect(base_url()."Admin/Categorygst/listCategorygst?idd=$id");
        }
    }

    public function listCategorygst()
    {
        $id = $this->input->get('idd');
        $id = base64_decode($id);
        $data['title'] = 'List Category GST';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_catgst";
        $data['result'] = $this->Product_model->gettaxtypeforcatJoining($id);
        $this->load->view('admin/categorygst/list', $data);

    }

    public function deleteCategorygst()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data['result'] = $this->Product_model->getcategoryid($idH);
        foreach($data['result'] as $catid)
        {
           $cat_id = $catid->cat_id; 
        }
        $id = base64_encode($cat_id);
        $DbKey = 'catgst_id';
        $tableName = 'tbl_catgst';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', '  Successfully Deleted...!');
            redirect(base_url()."Admin/Categorygst/listCategorygst?idd=$id");
        } else {
            $this->session->set_flashdata('error', 'Not Deleted. Please Try Again...!');
            redirect(base_url()."Admin/Categorygst/listCategorygst?idd=$id");
        }
    }


}