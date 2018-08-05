    <?php
    /************************
     * Created by $ajaykan47.
     * User: admin
     * Date: 4/3/2018
     * Time: 12:16 PM
     **********************************/
    defined('BASEPATH') OR exit('No direct script access allowed');

    class  Category extends CI_Controller
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
            $data['title'] = 'Category';
            $this->load->view('admin/header',$data);
            $this->load->view('admin/sidebar');
            $tableName = 'tbl_category';
            $DbKey = 'cat_id';
            $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
            // print_r($data['editResult']); die;
            $this->load->view('admin/category/index', $data);
            $this->load->view('admin/footer');


        }

        public function addCategory()
        {
        /*echo"<pre>";    
         print_r($_POST); die;*/

            $this->form_validation->set_rules('txtCategoryTitle', 'Category Name ', 'required|is_unique[tbl_category.name]');
            if (($this->form_validation->run() == FALSE)) {
                $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

               redirect(base_url()."Admin/Category");
            } else {
				/*$upload_data = "";*/
                if (!empty($this->input->post('txtCategoryTitle'))) {
                    $txtCategoryTitle = $this->input->post('txtCategoryTitle');
                } else {
                    $txtCategoryTitle = 'Null';
                }
                $cat_url=createUrl($txtCategoryTitle);

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
                    $TxtMetaKey = $this->input->post('TxtMetaKey');
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
				/* $config['upload_path'] = './uploads/category';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
               // $this->load->view('Admin/Category/addCategory', $error);

            } else {

                $upload_data = $this->upload->data();*/

                $data = array(
				    /*'filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],*/
                    'name' => $txtCategoryTitle,
                    'cat_url'=>$cat_url,
                    'seo_title'=>$txtSeoTitle,
                    'meta_tag'=>$MetaTag,
                    'meta_descr'=>$TxtMetaDescr,
                    'meta_keyword_descr'=>$TxtMetaKey,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $txtStatus

                );

                $tableName = "tbl_category";
                $res = $this->Setting_model->insertData($tableName, $data);
				/*$data = array('upload_data' => $this->upload->data());*/
                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your data successfully saved');
                    redirect(base_url() . "Admin/Category");
                } else {
                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again');
                    redirect(base_url() . "Admin/Category");
                }
            }
        }
		

        public function listCategory()
        {
            $data['title'] = 'List Category';
            $this->load->view('admin/header',$data);
            $this->load->view('admin/sidebar');
            $tableName = "tbl_category";
            $data['result'] = $this->Setting_model->getList($tableName);
            $this->load->view('admin/category/list', $data);
        }
        public function updateCategory()
        {
				 /*$upload_data = "";*/
            $idH = $this->input->post('category_id');
            if (!empty($this->input->post('txtCategoryTitle'))) {
                $txtCategoryTitle = $this->input->post('txtCategoryTitle');
            } else {
                $txtCategoryTitle = 'Null';
            }
            $cat_url=createUrl($txtCategoryTitle);

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
			/*$filename = $this->input->post('file_name');
			$fullpath = $this->input->post('full_path');*/
            if (!empty($this->input->post('TxtMetaKey'))) {
                $TxtMetaKey = $this->input->post('TxtMetaKey');
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
			
			
        /*if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/category';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Category/addCategory', $error);

            } else {

                $upload_data = $this->upload->data();
                $data = array('upload_data' => $this->upload->data());
                $file_name = $upload_data['file_name'];
                $full_path = $upload_data['full_path'];
            }
        } else {

            $file_name = $filename;
            $full_path = $fullpath;
        }*/

            $data = array(
			 /*'filename' => $file_name,
            'file_path' => $full_path,*/
                'name' => $txtCategoryTitle,
                'cat_url'=>$cat_url,
                'seo_title'=>$txtSeoTitle,
                'meta_tag'=>$MetaTag,
                'meta_descr'=>$TxtMetaDescr,
                'meta_keyword_descr'=>$TxtMetaKey,
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus

            );

            $tableName="tbl_category";
            $DbKey="cat_id";
            if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName,$data)) {

                $this->session->set_flashdata('done', 'Category  data Successfully updated...!!');
                redirect('Admin/Category/listCategory');
            } else {
                $this->sssion->set_flashdata('error', 'Category data is not successfully updated...!!');
                redirect('Admin/Category/listCategory');
            }

        }

        public function deleteCategory()
        {
            $idH = $this->input->get('id');
            $idH = base64_decode($idH);
            $DbKey='cat_id';
            $tableName='tbl_category';
            $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
            if ($returnid > 0) {
                $this->session->set_flashdata('done', 'Category  Successfully Deleted...!');
                redirect('Admin/Category/listCategory');
            } else {
                $this->session->set_flashdata('error', 'Category Not Deleted. Please Try Again...!');
                redirect('Admin/Category/listCategory');
            }
        }


    }