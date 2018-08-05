<?php
/************************
 * Created by $ajaykan47.
 * User: admin
 * Date: 4/3/2018
 * Time: 12:16 PM
 **********************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class  SubCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!($this->session->userdata('logindetails'))) {
            redirect('Admin/Auth');
        }
        $this->load->model('admin/Product_model');
        $this->load->model('admin/Setting_model');
    }

    public function index()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Sub Category';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_category";
        $data['ddlResult'] = $this->Product_model->getDDLCategory($tableName);
        $data['editResult'] = $this->Setting_model->getCatSubcategoryByjoining($idG);
       // print_r($data['editResult']); die;
        $this->load->view('admin/subcategory/index', $data);
        $this->load->view('admin/footer');


    }

    public function addSubCategory()
    {
       // print_r($_POST); die;

        $this->form_validation->set_rules('category_id', 'Category Name ', 'required');
       // $this->form_validation->set_rules('subcategory', 'Category Name ', 'required|is_unique[tbl_subcategory.subcat_name]');
        $this->form_validation->set_rules('subcategory', 'Category Name ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record is Already Exists !');

            $data['title'] = 'Sub-Category';
            $this->load->view('admin/header',$data);
            $this->load->view('admin/sidebar');
            $tableName = "tbl_category";
            $data['ddlResult'] = $this->Product_model->getDDLCategory($tableName);
            $this->load->view('admin/subcategory/index',$data);
            $this->load->view('admin/footer');
        } else {
            if (!empty($this->input->post('category_id'))) {
                $category_id = $this->input->post('category_id');
            } else {
                $category_id = 'Null';
            }
            if (!empty($this->input->post('subcategory'))) {
                $subcategory = $this->input->post('subcategory');
            } else {
                $subcategory = 'Null';
            }

            if (!empty($this->input->post('txtSeoTitle'))) {
                $txtSeoTitle = $this->input->post('txtSeoTitle');
            } else {
                $txtSeoTitle = 'Null';
            }
            if (!empty($this->input->post('MetaTag'))) {
                $MetaTag = $this->input->post('MetaTag');
            } else {
                $MetaTag = 'Null';
            }
            if (!empty($this->input->post('TxtMetaKey'))) {
                $TxtMetaKey = $this->input->post('txtCategoryTitle');
            } else {
                $TxtMetaKey = 'Null';
            }
            if (!empty($this->input->post('TxtMetaDescr'))) {
                $TxtMetaDescr = $this->input->post('TxtMetaDescr');
            } else {
                $TxtMetaDescr = 'Null';
            }

            if (!empty($this->input->post('txtStatus'))) {
                $txtStatus = $this->input->post('txtStatus');
            } else {
                $txtStatus = 'Inactive';
            }

            $data = array(
                'cat_id' => $category_id,
                'subcat_name' => $subcategory,
                'seo_title'=>$txtSeoTitle,
                'meta_tag'=>$MetaTag,
                'meta_descr'=>$TxtMetaDescr,
                'meta_keyword_descr'=>$TxtMetaKey,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus

            );

            $tableName = "tbl_subcategory";
            $res = $this->Setting_model->insertData($tableName, $data);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully saved');
                redirect(base_url() . "Admin/SubCategory");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again');
                redirect(base_url() . "Admin/SubCategory");
            }
        }
    }

    public function listSubCategory()
    {
        $data['title'] = 'List Sub-Category';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_subcategory";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/subcategory/list', $data);
    }
    public function updateSubCategory()
    {

        $idH = $this->input->post('subcategory_id');
        if (!empty($this->input->post('category_id'))) {
            $category_id = $this->input->post('category_id');
        } else {
            $category_id = 'Null';
        }
        if (!empty($this->input->post('subcategory'))) {
            $subcategory = $this->input->post('subcategory');
        } else {
            $subcategory = 'Null';
        }

        if (!empty($this->input->post('txtSeoTitle'))) {
            $txtSeoTitle = $this->input->post('txtSeoTitle');
        } else {
            $txtSeoTitle = 'Null';
        }
        if (!empty($this->input->post('MetaTag'))) {
            $MetaTag = $this->input->post('MetaTag');
        } else {
            $MetaTag = 'Null';
        }
        if (!empty($this->input->post('TxtMetaKey'))) {
            $TxtMetaKey = $this->input->post('txtCategoryTitle');
        } else {
            $TxtMetaKey = 'Null';
        }
        if (!empty($this->input->post('TxtMetaDescr'))) {
            $TxtMetaDescr = $this->input->post('TxtMetaDescr');
        } else {
            $TxtMetaDescr = 'Null';
        }

        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = 'Inactive';
        }

        $data = array(
            'cat_id' => $category_id,
            'description' => $subcategory,
            'seo_title'=>$txtSeoTitle,
            'meta_tag'=>$MetaTag,
            'meta_descr'=>$TxtMetaDescr,
            'meta_keyword_descr'=>$TxtMetaKey,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus

        );

        $tableName="tbl_subcategory";
        $DbKey="subcat_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName,$data)) {

            $this->session->set_flashdata('done', 'Sub-Category  data Successfully updated...!!');
            redirect('Admin/subcategory/listSubCategory');
        } else {
            $this->sssion->set_flashdata('error', 'Sub-Category data is not successfully updated...!!');
            redirect('Admin/subcategory/listSubCategory');
        }

    }

    public function deleteSubCategory()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey='subcat_id';
        $tableName='tbl_subcategory';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Sub-Category  Successfully Deleted...!');
            redirect('Admin/SubCategory/listSubCategory');
        } else {
            $this->session->set_flashdata('error', 'Sub-Category Not Deleted. Please Try Again...!');
            redirect('Admin/SubCategory/listSubCategory');
        }
    }


}