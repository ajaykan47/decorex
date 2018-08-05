<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 4/3/2018
 * Time: 5:43 PM
 */
class Product extends CI_Controller
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
        $data['title'] = 'Product';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_category";
        $data['ddlResult'] = $this->Product_model->getDDLCategory($tableName);
        $data['editResult'] = $this->Product_model->getlistCatProductbyId($idG);
        //$data['']
        $this->load->view('admin/product/index', $data);
        $this->load->view('admin/footer');
    }

    public function addProduct()
    {
        //$this->load->helper('string');
      //  print_r($_POST);die;
       $this->form_validation->set_rules('category_id', 'Banner Name ', 'required');
        $this->form_validation->set_rules('product_name', 'Product Name ', 'required|is_unique[tbl_product.p_name]');
        $this->form_validation->set_rules('status', 'status', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('errorValidation', 'Something Missing Please Try Again !!!');

            $data['title'] = 'Product';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar');
            $tableName = "tbl_category";
            $data['ddlResult'] = $this->Product_model->getDDLCategory($tableName);
            $this->load->view('admin/product/index', $data);
            $this->load->view('admin/footer');


        } else {

            $upload_data = "";
            $category_id = $this->input->post('category_id');
            $product_name = $this->input->post('product_name');
             $product_title = $this->input->post('product_title');
            $page_title = $this->input->post('title_name');
            $new_arrival = $this->input->post('new_pro');
            $short_description = $this->input->post('short_description');
            $full_descr = $this->input->post('full_descr');
            if (!empty($this->input->post('info_descr'))) {
                $info_descr = $this->input->post('info_descr');
            } else {
                $info_descr = "";
            }
            if (!empty($this->input->post('new_price'))) {
                $new_price = $this->input->post('new_price');
            } else {
                $new_price = "";
            }
            if (!empty($this->input->post('old_price'))) {
                $old_price = $this->input->post('old_price');
            } else {
                $old_price = "";
            }
            if (!empty($this->input->post('availability'))) {
                $availability = $this->input->post('availability');
            } else {
                $availability = "";
            }

            if (!empty($this->input->post('status'))) {
                $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            if (!empty($this->input->post('cf1'))) {
                $cf1 = $this->input->post('cf1');
            } else {
                $cf1 = "";
            }
            if (!empty($this->input->post('cf2'))) {
                $cf2 = $this->input->post('cf2');
            } else {
                $cf2 = "";
            }

            /***********Seo Content Start Here********/
            $producct_url = createUrl($product_name);
           // $getLastId=$this->Home_model->getLastIdProduct();
           // $producct_urlRand = $producct_url=$pr++;

            if (!empty($this->input->post('txtSeoTitle'))) {
                $txtSeoTitle = $this->input->post('txtSeoTitle');
            } else {
                $txtSeoTitle = "";
            }

            if (!empty($this->input->post('MetaTag'))) {
                $MetaTag = $this->input->post('MetaTag');
            } else {
                $MetaTag = "";
            }


            if (!empty($this->input->post('TxtMetaKey'))) {
                $TxtMetaKey = $this->input->post('TxtMetaKey');
            } else {
                $TxtMetaKey = "";
            }

            if (!empty($this->input->post('TxtMetaDescr'))) {
                $TxtMetaDescr = $this->input->post('TxtMetaDescr');
            } else {
                $TxtMetaDescr = "";
            }

            /***********Seo Content Start Here********/


            $createdate = date('Y-m-d H:i:s');

            $config['upload_path'] = './uploads/product';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', 'Please Select Product Image Or Dumy image');
                redirect(base_url() . "Admin/Product");

            } else {

                $upload_data = $this->upload->data();

                $dataArr = array(
                    'filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],
                    'cat_id' => $category_id,
                    'p_name' => $product_name,
                    'new_price' => $new_price,
                    'old_price' => $old_price,
                    'availability' => $availability,
                    'product_url' => $producct_url,
                    'page_title' => $page_title,
                    'new_arrival' => $new_arrival,
                    'short_descr' => $short_description,
                    'full_descr' => $full_descr,
                    'info_descr' => $info_descr,
                    'cf1' => $cf1,
                    'cf2' => $cf2,
                    'seo_title' => $txtSeoTitle,
                    'meta_tag' => $MetaTag,
                    'meta_descr' => $TxtMetaDescr,
                    'meta_keyword_descr' => $TxtMetaKey,
                    'status' => $status,
                    'created_at' => $createdate
                );
                /***********Seo Content Start Here********/

                $tableName = "tbl_product";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your data successfully Inserted');
                    redirect(base_url() . "Admin/Product");
                } else {
                    $this->session->set_flashdata('error', 'Your data not Inserted');
                    redirect(base_url() . "Admin/Product");
                }
            }
        }

    }

    public function listProduct()
    {
        $data['title'] = 'List Product';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $data['result'] = $this->Product_model->getCategoryNamebyJoining();
        // print_r($data['result']); die;
        $this->load->view('admin/product/list', $data);
    }

    public function updateProduct()
    {
        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');

        $category_id = $this->input->post('category_id');
        $product_name = $this->input->post('product_name');
        /*$product_title = $this->input->post('product_title');*/
        $page_title = $this->input->post('title_name');
        $new_arrival = $this->input->post('new_pro');
        $short_description = $this->input->post('short_description');
        $full_descr = $this->input->post('full_descr');
        if (!empty($this->input->post('info_descr'))) {
                $info_descr = $this->input->post('info_descr');
            } else {
                $info_descr = "";
            }
            if (!empty($this->input->post('new_price'))) {
                $new_price = $this->input->post('new_price');
            } else {
                $new_price = "";
            }
            if (!empty($this->input->post('old_price'))) {
                $old_price = $this->input->post('old_price');
            } else {
                $old_price = "";
            }
            if (!empty($this->input->post('availability'))) {
                $availability = $this->input->post('availability');
            } else {
                $availability = "";
            }

        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
        } else {
            $status = "Inactive";
        }
        if (!empty($this->input->post('cf1'))) {
            $cf1 = $this->input->post('cf1');
        } else {
            $cf1 = "";
        }
        if (!empty($this->input->post('cf2'))) {
            $cf2 = $this->input->post('cf2');
        } else {
            $cf2 = "";
        }
        /***********Seo Content Start Here********/
        $producct_url = createUrl($product_name);

        if (!empty($this->input->post('txtSeoTitle'))) {
            $txtSeoTitle = $this->input->post('txtSeoTitle');
        } else {
            $txtSeoTitle = "";
        }

        if (!empty($this->input->post('MetaTag'))) {
            $MetaTag = $this->input->post('MetaTag');
        } else {
            $MetaTag = "";
        }


        if (!empty($this->input->post('TxtMetaKey'))) {
            $TxtMetaKey = $this->input->post('TxtMetaKey');
        } else {
            $TxtMetaKey = "";
        }

        if (!empty($this->input->post('TxtMetaDescr'))) {
            $TxtMetaDescr = $this->input->post('TxtMetaDescr');
        } else {
            $TxtMetaDescr = "";
        }

        /***********Seo Content Start Here********/


        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/product';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Product/addProduct', $error);

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
            'cat_id' => $category_id,
            'p_name' => $product_name,
            'new_price' => $new_price,
            'old_price' => $old_price,
            'availability' => $availability,
            'product_url' => $producct_url,
            'page_title' => $page_title,
            'new_arrival' => $new_arrival,
            'short_descr' => $short_description,
            'full_descr' => $full_descr,
            'info_descr' => $info_descr,
            'cf1' => $cf1,
            'cf2' => $cf2,
            'seo_title' => $txtSeoTitle,
            'meta_tag' => $MetaTag,
            'meta_descr' => $TxtMetaDescr,
            'meta_keyword_descr' => $TxtMetaKey,
            'status' => $status,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $tableName = "tbl_product";
        $DbKey = "product_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('update', 'Product  Successfully updated...!!');
            redirect('Admin/Product/listProduct');
        } else {
            $this->sssion->set_flashdata('updateError', 'Product  is not successfully updated...!!');
            redirect('Admin/Product/listProduct');
        }
    }


    public function deleteProduct()
    {

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'product_id';
        $tableName = 'tbl_product';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Product Successfully Deleted...!');
            redirect('Admin/Product/listProduct');
        } else {
            $this->session->set_flashdata('error', 'Product Not Deleted. Please Try Again...!');
            redirect('Admin/Product/listProduct');
        }
    }
    /****************SEO*********/


    /*******************************Technical Specification List***************************************************/

    /*******************************Technical Specification List***************************************************/
    public function TechnicalSpecification()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Product';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_product";
        $data['ddlProduct'] = $this->Product_model->getDDLProduct($tableName);
        $data['editResult'] = $this->Product_model->getlistTechSpeciProductbyId($idG);
        $this->load->view('admin/product/technical-index', $data);
        $this->load->view('admin/footer');

    }

    public function addSpecification()
    {
        $this->form_validation->set_rules('product_id', 'Product Name ', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');
            $data['title'] = 'Product Specification';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar');
            $tableName = "tbl_product";
            $data['ddlProduct'] = $this->Product_model->getDDLProduct($tableName);
            $this->load->view('admin/product/technical-index', $data);
            $this->load->view('admin/footer');


        } else {


            $product_id = $this->input->post('product_id');
            $top_dimension = $this->input->post('top_dimension');
            $height_adjustment = $this->input->post('height_adjustment');
            $table_top_sliding = $this->input->post('table_top_sliding');
            $trendelenburg = $this->input->post('trendelenburg');
            $lateral_tilt = $this->input->post('lateral_tilt');
            $kidney = $this->input->post('kidney');
            $back_rest = $this->input->post('back_rest');
            $leg_rest = $this->input->post('leg_rest');
            $head_rest = $this->input->post('head_rest');
            $Power_supply = $this->input->post('Power_supply');
            $capacity_supply = $this->input->post('capacity_supply');
            $battery_backup = $this->input->post('battery_backup');
            if (!empty($this->input->post('cf1'))) {
                $cf1 = $this->input->post('cf1');
            } else {
                $cf1 = "";
            }
            if (!empty($this->input->post('cf2'))) {
                $cf2 = $this->input->post('cf2');
            } else {
                $cf2 = "";
            }
            $dataArr = array(
                'product_id' => $product_id,
                'top_dimension' => $top_dimension,
                'height_adjustment' => $height_adjustment,
                'table_top_sliding' => $table_top_sliding,
                'trendelenburg' => $trendelenburg,
                'battery_backup' => $battery_backup,
                'lateral_tilt' => $lateral_tilt,
                'kidney' => $kidney,
                'back_rest' => $back_rest,
                'leg_rest' => $leg_rest,
                'head_rest' => $head_rest,
                'Power_supply' => $Power_supply,
                'capacity_supply' => $capacity_supply,
                'cf1' => $cf1,
                'cf2' => $cf2,
                'created_at' => date('Y-m-d H:i:s')
            );
            $tableName = "tbl_technical";
            $res = $this->Setting_model->insertData($tableName, $dataArr);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Inserted');
                redirect(base_url() . "Admin/Product/TechnicalSpecification");
            } else {
                $this->session->set_flashdata('error', 'Your data not Inserted');
                redirect(base_url() . "Admin/Product/TechnicalSpecification");
            }
        }


    }

    public function ListSpecification()
    {

        $data['title'] = 'List Product';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $data['result'] = $this->Product_model->getTechnicalSpbyJoining();
        /* echo '<pre>';
         print_r($data['result']); die;*/
        $this->load->view('admin/product/list-specification', $data);
    }

    public function updateSpecification()
    {

        $idH = $this->input->post('hidden_id');
        $product_id = $this->input->post('product_id');
        $top_dimension = $this->input->post('top_dimension');
        $height_adjustment = $this->input->post('height_adjustment');
        $table_top_sliding = $this->input->post('table_top_sliding');
        $trendelenburg = $this->input->post('trendelenburg');
        $lateral_tilt = $this->input->post('lateral_tilt');
        $kidney = $this->input->post('kidney');
        $back_rest = $this->input->post('back_rest');
        $leg_rest = $this->input->post('leg_rest');
        $head_rest = $this->input->post('head_rest');
        $Power_supply = $this->input->post('Power_supply');
        $capacity_supply = $this->input->post('capacity_supply');
        if (!empty($this->input->post('cf1'))) {
            $cf1 = $this->input->post('cf1');
        } else {
            $cf1 = "";
        }
        if (!empty($this->input->post('cf2'))) {
            $cf2 = $this->input->post('cf2');
        } else {
            $cf2 = "";
        }
        $data = array(
            'product_id' => $product_id,
            'top_dimension' => $top_dimension,
            'height_adjustment' => $height_adjustment,
            'table_top_sliding' => $table_top_sliding,
            'trendelenburg' => $trendelenburg,
            'lateral_tilt' => $lateral_tilt,
            'kidney' => $kidney,
            'back_rest' => $back_rest,
            'leg_rest' => $leg_rest,
            'head_rest' => $head_rest,
            'Power_supply' => $Power_supply,
            'capacity_supply' => $capacity_supply,
            'cf1' => $cf1,
            'cf2' => $cf2,
            'updated_at' => date('Y-m-d H:i:s')
        );
        $tableName = "tbl_technical";
        $DbKey = "ts_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('update', 'Technical Specification  Successfully Updated...!!');
            redirect('Admin/Product/ListSpecification');
        } else {
            $this->sssion->set_flashdata('updateError', 'Technical Specification  is not Successfully Updated...!!');
            redirect('Admin/Product/ListSpecification');
        }

    }

    public function deleteSpecification()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'ts_id';
        $tableName = 'tbl_technical';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Technical Specification  Successfully Deleted...!');
            redirect('Admin/Product/ListSpecification');
        } else {
            $this->session->set_flashdata('error', 'Technical Specification  Not Deleted. Please Try Again...!');
            redirect('Admin/Product/ListSpecification');
        }

    }

    /*******************************Technical Specification List***************************************************/


    /*******************************Technical Specification List***************************************************/


}