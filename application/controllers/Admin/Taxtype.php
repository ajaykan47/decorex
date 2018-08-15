<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $Ajaykan47.
 * User: admin
 * Date: 5/1/2018
 * Time: 10:47 AM
 */
class Taxtype extends CI_Controller
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
        $data['title'] = 'Tax Type';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_tax';
        $DbKey = 'tax_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
       // print_r($data['editResult']); die;
        $this->load->view('admin/taxtype/index', $data);
        $this->load->view('admin/footer');

    }

    public function addTaxtype()
    {
       
        $this->form_validation->set_rules('txttax', 'Tax Type ', 'required|is_unique[tbl_tax.tax_type]');
        $this->form_validation->set_rules('txttax', 'Tax Type ', 'required|trim');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again..!!!');

          redirect(base_url()."Admin/Taxtype");

        } else {
            
            $txttax = $this->input->post('txttax');
            if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            if (!empty($this->input->post('taxparcent'))) {
                $taxparcent = $this->input->post('taxparcent');
            } else {
                $taxparcent = 0;
            }
            $createdate = date('Y-m-d H:i:s');
            $data = array(
                'tax_type' => $txttax,
                'tax_pcent' => $taxparcent,
                'status' => $status,
                'created_at' => $createdate
               

            );
            
            $tableName = "tbl_tax";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                redirect(base_url() . "Admin/Taxtype");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/Taxtype");
            }
        }
    }


    public function updateTaxtype()
    {
        $idH = $this->input->post('hidden_id');
        $txttax = $this->input->post('txttax');
        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
        } else {
            $status = "Inactive";
        }
        $createdate = date('Y-m-d H:i:s');

        $data = array(
            'tax_type' => $txttax,
            'status' => $status,
            'updated_at' => $createdate
            

        );
        $tableName = "tbl_tax";
        $DbKey = "tax_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect(base_url()."Admin/Taxtype/listTaxtype");
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect(base_url()."Admin/Taxtype/listTaxtype");
        }
    }

    public function listTaxtype()
    {
        $data['title'] = 'List Tax Type';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_tax";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/taxtype/list', $data);

    }

    public function deleteTaxtype()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'tax_id';
        $tableName = 'tbl_tax';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Tax Type  Successfully Deleted...!');
         
            redirect(base_url()."Admin/Taxtype/listTaxtype");
        } else {
            $this->session->set_flashdata('error', 'Tax Type Not Deleted. Please Try Again...!');
          
            redirect(base_url()."Admin/Taxtype/listTaxtype");
        }
    }


}