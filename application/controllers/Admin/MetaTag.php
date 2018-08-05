<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by $Ajaykan47.
 * User: admin
 * Date: 5/1/2018
 * Time: 10:47 AM
 */
class MetaTag extends CI_Controller
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
        $data['title'] = 'Meta Tag';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_seo';
        $DbKey = 'seo_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
       // print_r($data['editResult']); die;
        $this->load->view('admin/metatag/index', $data);
        $this->load->view('admin/footer');

    }

    public function addMetaTag()
    {
       /*echo"<pre>";
        print_r($_POST);die;*/
        $this->form_validation->set_rules('selectPage', 'Page Name ', 'required|is_unique[tbl_seo.page_name]');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again  Or Select Unique Page Name...!!!');

          redirect(base_url()."Admin/MetaTag");

        } else {
            
            $selectPage = $this->input->post('selectPage');
            $txtMetatitle = $this->input->post('txtMetatitle');
            
            if(!empty($this->input->post('txtMetatTag')))
            {
               $txtMetatTag = $this->input->post('txtMetatTag'); 
            }else
            {
                $txtMetatTag = "";
            }
            $txtMetaKeyword = $this->input->post('txtMetaKeyword');
            $txtMetaDescr = $this->input->post('txtMetaDescr');

            $createdate = date('Y-m-d H:i:s');

            $data = array(
                'seo_title' => $txtMetatitle,
                'seo_keyword' => $txtMetaKeyword,
                'seo_descr' => $txtMetaDescr,
                'seo_matatag' => $txtMetatTag,
                'created_at' => $createdate,
                'page_name' => $selectPage

            );
            $tableName = "tbl_seo";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                redirect(base_url() . "Admin/MetaTag");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/MetaTag");
            }
        }
    }


    public function updateMetaTag()
    {
        $idH = $this->input->post('hidden_id');
        $selectPage = $this->input->post('selectPage');
        $txtMetatitle = $this->input->post('txtMetatitle');
        $txtMetatTag = $this->input->post('txtMetatTag');
        $txtMetaKeyword = $this->input->post('txtMetaKeyword');
        $txtMetaDescr = $this->input->post('txtMetaDescr');

        $createdate = date('Y-m-d H:i:s');

        $data = array(
            'seo_title' => $txtMetatitle,
            'seo_keyword' => $txtMetaKeyword,
            'seo_descr' => $txtMetaDescr,
            'seo_matatag' => $txtMetatTag,
            'updated_at' => $createdate,
            'page_name' => $selectPage

        );
        $tableName = "tbl_seo";
        $DbKey = "seo_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Successfully updated...!!');
            redirect(base_url()."Admin/MetaTag/listMetaTag");
        } else {
            $this->sssion->set_flashdata('error', 'Record  is not successfully updated...!!');
            redirect(base_url()."Admin/MetaTag/listMetaTag");
        }
    }

    public function listMetaTag()
    {
        $data['title'] = 'List MetaTag';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_seo";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/metatag/list', $data);

    }

    public function deleteMetaTag()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'seo_id';
        $tableName = 'tbl_seo';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'MeatTag  Successfully Deleted...!');
          //  redirect('Admin/MetaTag/listMetaTag');
            redirect(base_url()."Admin/MetaTag/listMetaTag");
        } else {
            $this->session->set_flashdata('error', 'MeatTag Not Deleted. Please Try Again...!');
          //  redirect('Admin/MetaTag/listMetaTag');
            redirect(base_url()."Admin/MetaTag/listMetaTag");
        }
    }


}