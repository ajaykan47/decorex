<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $Ajaykan47.
 * User: admin
 * Date: 5/1/2018
 * Time: 10:47 AM
 */
class Productgst extends CI_Controller
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
        $data['title'] = 'Product GST';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_progst';
        $DbKey = 'progst_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        $tableName = 'tbl_product';
        $data['editResultt'] = $this->Product_model->getproductnameById($tableName, $id);
        $table = 'tbl_tax';
        $data['ddlResult'] = $this->Product_model->getDDLtaxtype($table);
        $table = 'tbl_shipping';
        $data['weightResult'] = $this->Product_model->getDDLweight($table);
        $this->load->view('admin/productgst/index', $data);
        $this->load->view('admin/footer');

    }

    public function addProductgst()
    {

        $this->form_validation->set_rules('tax_id', 'Tax Type', 'required|is_unique[tbl_progst.name]');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again  Or Select Unique Page Name...!!!');

            redirect(base_url() . "Admin/Productgst");

        } else {

            $tax_id = $this->input->post('tax_id');
            $txtproduct = $this->input->post('txtproduct');
            $shipping_id = $this->input->post('shipping_id');
            $product_id = $this->input->post('product_id');
            $pro_id = $product_id;
            $pro_id = base64_encode($pro_id);
            if (!empty($this->input->post('txttax'))) {
                $txttax = $this->input->post('txttax');
            } else {
                $txttax = "";
            }
            $txtFromdate = $this->input->post('txtFromdate');

            if (!empty($this->input->post('txtEnddate'))) {
                $txtEnddate = $this->input->post('txtEnddate');
            } else {
                $txtEnddate = "";
            }
            if (!empty($this->input->post('status'))) {
                $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            $createdate = date('Y-m-d H:i:s');

            $data = array(
                'product_name' => $txtproduct,
                'product_id' => $product_id,
                'shipping_id' => $shipping_id,
                'tax_perctg' => $txttax,
                'from_date' => $txtFromdate,
                'end_date' => $txtEnddate,
                'created_at' => $createdate,
                'status' => $status,
                'tax_id' => $tax_id

            );
            $tableName = "tbl_progst";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                redirect(base_url() . "Admin/Productgst/listProductgst?idd=$pro_id");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/Productgst/listProductgst?idd=$pro_id");
            }
        }
    }


    public function updateProductgst()
    {

        $idH = $this->input->post('hidden_id');
        $tax_id = $this->input->post('tax_id');
        $txtproduct = $this->input->post('txtproduct');
        $product_id = $this->input->post('product_id');
        $shipping_id = $this->input->post('shipping_id');
        $pro_id = base64_encode($product_id);
        if (!empty($this->input->post('txttax'))) {
            $txttax = $this->input->post('txttax');
        } else {
            $txttax = "";
        }
        $txtFromdate = $this->input->post('txtFromdate');

        if (!empty($this->input->post('txtEnddate'))) {
            $txtEnddate = $this->input->post('txtEnddate');
        } else {
            $txtEnddate = "";
        }
        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
        } else {
            $status = "Inactive";
        }
        $updated_at = date('Y-m-d H:i:s');

        $data = array(
            'product_name' => $txtproduct,
            'product_id' => $product_id,
            'shipping_id' => $shipping_id,
            'tax_perctg' => $txttax,
            'from_date' => $txtFromdate,
            'end_date' => $txtEnddate,
            'updated_at' => $updated_at,
            'status' => $status,
            'tax_id' => $tax_id

        );
        $tableName = "tbl_progst";
        $DbKey = "progst_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {
            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect(base_url() . "Admin/Productgst/listProductgst?idd=$pro_id");
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect(base_url() . "Admin/Productgst/listProductgst?idd=$pro_id");
        }
    }

    public function listProductgst()
    {

        $id = $this->input->get('idd');
        $id = base64_decode($id);
        $data['title'] = 'List Product GST';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_progst";
        /* $data['result'] = $this->Setting_model->getList($tableName);*/
        $data['result'] = $this->Product_model->gettaxtypeJoining($id);
        $this->load->view('admin/productgst/list', $data);

    }

    public function deleteProductgst()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $data['result'] = $this->Product_model->getproductid($idH);
        foreach ($data['result'] as $proid) {
            $product_id = $proid->product_id;
        }
        $id = base64_encode($product_id);
        $DbKey = 'progst_id';
        $tableName = 'tbl_progst';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'MeatTag  Successfully Deleted...!');
            //  redirect('Admin/MetaTag/listMetaTag');
            redirect(base_url() . "Admin/Productgst/listProductgst?idd=$id");
        } else {
            $this->session->set_flashdata('error', 'MeatTag Not Deleted. Please Try Again...!');
            //  redirect('Admin/MetaTag/listMetaTag');
            redirect(base_url() . "Admin/Productgst/listProductgst?idd=$id");
        }
    }


}