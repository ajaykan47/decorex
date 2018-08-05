<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Aanchal
 * Date: 04-04-2018
 * Time: 11:42 PM
 */
class Page extends CI_Controller
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
        $data['title'] = 'Page Content';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_page';
        $DbKey = 'p_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        // print_r($data['editResult']); die;
        $this->load->view('admin/page/index', $data);
        $this->load->view('admin/footer');

    }

    public function addPage()
    {


        $this->form_validation->set_rules('title_name', 'Page  Title', 'required');
        $this->form_validation->set_rules('page_title', 'Page  Title', 'required');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

            $data['title'] = 'Page Content';
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/page/index');
            $this->load->view('admin/footer');
        } else {
            $upload_data = "";
            if (!empty($this->input->post('title_name'))) {
                $title_name = $this->input->post('title_name');
            } else {
                $title_name = '';
            }

            if (!empty($this->input->post('page_title'))) {
                $page_title = $this->input->post('page_title');
            } else {
                $page_title = '';
            }
            if (!empty($this->input->post('status'))) {
                $status = $this->input->post('status');
            } else {
                $status = "Inactive";
            }
            
            if (!empty($this->input->post('full_descr'))) {
                $full_descr = $this->input->post('full_descr');
            } else {
                $full_descr = '';
            }
            if (!empty($this->input->post('vision'))) {
                $vision = $this->input->post('vision');
            } else {
                $vision = '';
            }
            if (!empty($this->input->post('mission'))) {
                $mission = $this->input->post('mission');
            } else {
                $mission = '';
            }
            if (!empty($this->input->post('worldwide'))) {
                $worldwide = $this->input->post('worldwide');
            } else {
                $worldwide = '';
            }

            $config['upload_path'] = './uploads/page_img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Page/addPage', $error);


            } else {

                $upload_data = $this->upload->data();

                $dataArr = array('filename' => $upload_data['file_name'],
                    'file_path' => $upload_data['full_path'],
                    'title_name' => $title_name,
                    'page_title' => $page_title,             
                    'full_descr' => $full_descr,
                    'vision' => $vision,
                    'mission' => $mission,
                    'worldwide' => $worldwide,
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => $status
                );
                $tableName = "tbl_page";
                $res = $this->Setting_model->insertData($tableName, $dataArr);

                $data = array('upload_data' => $this->upload->data());

                if (!empty($res)) {
                    $this->session->set_flashdata('done', 'Your page Content successfully Save');
                    redirect(base_url() . "Admin/Page");
                } else {
                    $this->session->set_flashdata('error', 'Your data not Save Please Try Again');
                    redirect(base_url() . "Admin/Page");
                }
            }
        }
    }

    public function listPage()
    {
        $data['title'] = 'List Menu';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_page";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/page/list', $data);
    }

    public function updatePage()
    {

        $upload_data = "";
        $idH = $this->input->post('hidden_id');
        $filename = $this->input->post('file_name');
        $fullpath = $this->input->post('full_path');

        if (!empty($this->input->post('title_name'))) {
            $title_name = $this->input->post('title_name');
        } else {
            $title_name = '';
        }

        if (!empty($this->input->post('page_title'))) {
            $page_title = $this->input->post('page_title');
        } else {
            $page_title = '';
        }
        if (!empty($this->input->post('status'))) {
            $status = $this->input->post('status');
        } else {
            $status = "Inactive";
        }
        if (!empty($this->input->post('full_descr'))) {
            $full_descr = $this->input->post('full_descr');
        } else {
            $full_descr = '';
        }
        if (!empty($this->input->post('vision'))) {
            $vision = $this->input->post('vision');
        } else {
            $vision = '';
        }
        if (!empty($this->input->post('mission'))) {
            $mission = $this->input->post('mission');
        } else {
            $mission = '';
        }
        if (!empty($this->input->post('worldwide'))) {
            $worldwide = $this->input->post('worldwide');
        } else {
            $worldwide = '';
        }


        if (!empty($_FILES['userfile']['name'])) {

            $config['upload_path'] = './uploads/page_img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('Admin/Page/addPage', $error);

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
            'title_name' => $title_name,
            'page_title' => $page_title,
            'full_descr' => $full_descr,
            'vision' => $vision,
            'mission' => $mission,
            'worldwide' => $worldwide,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $status

        );
        $tableName = "tbl_page";
        $DbKey = "p_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $data)) {

            $this->session->set_flashdata('done', 'Page Content  Successfully updated...!!');
            redirect('Admin/Page/listPage');
        } else {
            $this->sssion->set_flashdata('error', 'Page Content  is not successfully updated...!!');
            redirect('Admin/Page/listPage');
        }
    }

    public function deleteContent()
    {
        $idH = $this->input->get('id');
        $idG = base64_decode($idH);
        $DbKey = 'p_id';
        $tableName = 'tbl_page';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idG, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Page Content  Successfully Deleted...!');
            redirect('Admin/Page/listPage');
        } else {
            $this->session->set_flashdata('error', 'Page Content Not Deleted. Please Try Again...!');
            redirect('Admin/Page/listPage');
        }
    }

    /*********************************Heading Section***************Ajaykan47*********************************************************/
    public function heading()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Page Heading';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_heading';
        $DbKey = 'hd_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        // print_r($data['editResult']); die;
        $this->load->view('admin/page/heading-index', $data);
        $this->load->view('admin/footer');
    }

    public function addHeading()
    {


        $this->form_validation->set_rules('title_name', 'Page  Title', 'required');
        $this->form_validation->set_rules('txtName', 'Page  Title', 'required');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

            redirect(base_url() . "Admin/Page/heading");
        } else {

            if (!empty($this->input->post('title_name'))) {
                $title_name = $this->input->post('title_name');
            } else {
                $title_name = '';
            }

            if (!empty($this->input->post('txtName'))) {
                $txtName = $this->input->post('txtName');
            } else {
                $txtName = '';
            }
            if (!empty($this->input->post('full_descr'))) {
                $full_descr = $this->input->post('full_descr');
            } else {
                $full_descr = '';
            }
            if (!empty($this->input->post('txtStatus'))) {
                $txtStatus = $this->input->post('txtStatus');
            } else {
                $txtStatus = '';
            }
            $dataArr = array(
                'title_name' => $title_name,
                'head_title' => $txtName,
                'head_descr' => $full_descr,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus
            );
            $tableName = "tbl_heading";
            $res = $this->Setting_model->insertData($tableName, $dataArr);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your heading successfully Save');
                redirect(base_url() . "Admin/Page/heading");
            } else {
                $this->session->set_flashdata('error', 'Your heading not Save Please Try Again');
                redirect(base_url() . "Admin/Page/heading");
            }
        }
    }


    public function listHeading()
    {
        $data['title'] = 'List paragraph Heading';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_heading";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/page/heading-list', $data);
    }

    public function updateHeading()
    {


        $idH = $this->input->post('hidden_id');

        if (!empty($this->input->post('title_name'))) {
            $title_name = $this->input->post('title_name');
        } else {
            $title_name = '';
        }

        if (!empty($this->input->post('txtName'))) {
            $txtName = $this->input->post('txtName');
        } else {
            $txtName = '';
        }
        if (!empty($this->input->post('full_descr'))) {
            $full_descr = $this->input->post('full_descr');
        } else {
            $full_descr = '';
        }
        if (!empty($this->input->post('txtStatus'))) {
            $txtStatus = $this->input->post('txtStatus');
        } else {
            $txtStatus = '';
        }
        $dataArr = array(
            'title_name' => $title_name,
            'head_title' => $txtName,
            'head_descr' => $full_descr,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus
        );
        $tableName = "tbl_heading";
        $DbKey = "hd_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr)) {

            $this->session->set_flashdata('done', 'Information  Successfully updated...!!');
            redirect('Admin/Page/listHeading');
        } else {
            $this->sssion->set_flashdata('error', 'Information  is not successfully updated...!!');
            redirect('Admin/Page/listHeading');
        }


    }


    public function deleteheading()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'hd_id';
        $tableName = 'tbl_heading';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Heading Record  Successfully Deleted...!');
            redirect('Admin/Page/listHeading');
        } else {
            $this->session->set_flashdata('error', 'Heading Record Not Deleted. Please Try Again...!');
            redirect('Admin/Page/listHeading');
        }
    }




    /*********************************Heading Section********End*******Ajaykan47*********************************************************/
    /*********************************Why Choose Us*******End*******Ajaykan47**********************************************************/
    public function whyChooseUs()
    {
        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'why-choose-us';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_whychose';
        $DbKey = 'faq_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        // print_r($data['editResult']); die;
        $this->load->view('admin/page/why-choose-us', $data);
        $this->load->view('admin/footer');
    }

    public function addWhyChoose()
    {

        // Array ( [page_title] => cgfd [short_descr] => gfg [full_descr] => fgf [vision] => fgf [mission] => gfgf [worldwide] => fgfg )


        // print_r($_POST); die;

        $this->form_validation->set_rules('page_title', 'Page  Title', 'required');
        $this->form_validation->set_rules('short_descr', 'Page  Title', 'required');

        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again or This Record Already Exists !');

            redirect(base_url() . "Admin/Page/heading");
        } else {

            if (!empty($this->input->post('page_title'))) {
                $page_title = $this->input->post('page_title');
            } else {
                $page_title = '';
            }

            if (!empty($this->input->post('short_descr'))) {
                $short_descr = $this->input->post('short_descr');
            } else {
                $short_descr = '';
            }
            if (!empty($this->input->post('full_descr'))) {
                $full_descr = $this->input->post('full_descr');
            } else {
                $full_descr = '';
            }
            if (!empty($this->input->post('vision'))) {
                $vision = $this->input->post('vision');
            } else {
                $vision = '';
            }
            if (!empty($this->input->post('mission'))) {
                $mission = $this->input->post('mission');
            } else {
                $mission = '';
            }
            if (!empty($this->input->post('cf1'))) {
                $cf1 = $this->input->post('cf1');
            } else {
                $cf1 = '';
            }
            if (!empty($this->input->post('cf2'))) {
                $cf2 = $this->input->post('cf2');
            } else {
                $cf2 = '';
            }

            if (!empty($this->input->post('worldwide'))) {
                $cf3 = $this->input->post('worldwide');
            } else {
                $cf3 = '';
            }

            $dataArr = array(
                'faq_title' => $page_title,
                'faq_content' => $short_descr,
                'paragraph_first' => $full_descr,
                'paragraph_second' => $vision,
                'paragraph_third' => $mission,
                'paragraph_fourth' => $cf3,
                'cf1' => $cf1,
                'cf2' => $cf2,
                'created_at' => date('Y-m-d H:i:s')

            );
            $tableName = "tbl_whychose";
            $res = $this->Setting_model->insertData($tableName, $dataArr);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your Record Successfully Save');
                redirect(base_url() . "Admin/Page/whyChooseUs");
            } else {
                $this->session->set_flashdata('error', 'Your Record not Save Please Try Again');
                redirect(base_url() . "Admin/Page/whyChooseUs");
            }
        }

    }

    public function listWhychoose()
    {

        $data['title'] = 'List';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_whychose";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/page/why-choose-list', $data);
    }

    public function updateWhy()
    {
        $idH = $this->input->post('hidden_id');
        if (!empty($this->input->post('page_title'))) {
            $page_title = $this->input->post('page_title');
        } else {
            $page_title = '';
        }

        if (!empty($this->input->post('short_descr'))) {
            $short_descr = $this->input->post('short_descr');
        } else {
            $short_descr = '';
        }
        if (!empty($this->input->post('full_descr'))) {
            $full_descr = $this->input->post('full_descr');
        } else {
            $full_descr = '';
        }
        if (!empty($this->input->post('vision'))) {
            $vision = $this->input->post('vision');
        } else {
            $vision = '';
        }
        if (!empty($this->input->post('mission'))) {
            $mission = $this->input->post('mission');
        } else {
            $mission = '';
        }
        if (!empty($this->input->post('cf1'))) {
            $cf1 = $this->input->post('cf1');
        } else {
            $cf1 = '';
        }
        if (!empty($this->input->post('cf2'))) {
            $cf2 = $this->input->post('cf2');
        } else {
            $cf2 = '';
        }

        if (!empty($this->input->post('worldwide'))) {
            $cf3 = $this->input->post('worldwide');
        } else {
            $cf3 = '';
        }

        $dataArr = array(
            'faq_title' => $page_title,
            'faq_content' => $short_descr,
            'paragraph_first' => $full_descr,
            'paragraph_second' => $vision,
            'paragraph_third' => $mission,
            'paragraph_fourth' => $cf3,
            'cf1' => $cf1,
            'cf2' => $cf2,
            'created_at' => date('Y-m-d H:i:s')

        );
        $tableName = "tbl_whychose";
        $DbKey = "faq_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr)) {

            $this->session->set_flashdata('done', 'Data Successfully updated...!!');
            redirect('Admin/Page/listWhychoose');
        } else {
            $this->sssion->set_flashdata('error', 'Data is not successfully updated...!!');
            redirect('Admin/Page/listWhychoose');
        }


    }


    public function deleteWhy()
    {

        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'faq_id';
        $tableName = 'tbl_whychose';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Record  Successfully Deleted...!');
            redirect('Admin/Page/listWhychoose');
        } else {
            $this->session->set_flashdata('error', 'Record Not Deleted. Please Try Again...!');
            redirect('Admin/Page/listWhychoose');
        }
    }

    /**********************************Why Choose Us********End*******Ajaykan47**********************************************/

    public function quickLink()
    {

        $idG = $this->input->get('id');
        $idG = base64_decode($idG);
        $data['title'] = 'Quick Link';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = 'tbl_usefulllink';
        $DbKey = 'usefl_id';
        $data['editResult'] = $this->Setting_model->getListById($tableName, $DbKey, $idG);
        // print_r($data['editResult']); die;
        $this->load->view('admin/page/quick-link', $data);
        $this->load->view('admin/footer');
    }

    public function addQuickLink()
    {

        $this->form_validation->set_rules('txtName', 'Name', 'required|is_unique[tbl_usefulllink.title_name]');
        $this->form_validation->set_rules('txtLink', 'Link', 'required');
        $this->form_validation->set_rules('txtStatus', 'Page  Title', 'required');
        if (($this->form_validation->run() == FALSE)) {
            $this->session->set_flashdata('error', 'Something Missing Please Try Again !!!');

            redirect(base_url() . "Admin/Page/quickLink");
        } else {
            $txtName = $this->input->post('txtName');
            $txtLink = $this->input->post('txtLink');
            $txtStatus = $this->input->post('txtStatus');

            $dataArr = array(
                'title_name' => $txtName,
                'page_link' => $txtLink,
                'created_at' => date('Y-m-d H:i:s'),
                'status' => $txtStatus
            );

            $tableName = "tbl_usefulllink";
            $res = $this->Setting_model->insertData($tableName, $dataArr);
            if (!empty($res)) {
                $this->session->set_flashdata('done', 'Your data successfully Saved');
                redirect(base_url() . "Admin/Page/quickLink");
            } else {
                $this->session->set_flashdata('error', 'Your data not Save Please try again...!');
                redirect(base_url() . "Admin/Page/quickLink");
            }

        }
    }

    public function listQuick()
    {

        $data['title'] = 'List Quick Link';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $tableName = "tbl_usefulllink";
        $data['result'] = $this->Setting_model->getList($tableName);
        $this->load->view('admin/page/quick-link-list', $data);

    }


    public function updateQuick()
    {
        $idH = $this->input->post('hidden_id');
        $txtName = $this->input->post('txtName');
        $txtLink = $this->input->post('txtLink');
        $txtStatus = $this->input->post('txtStatus');

        $dataArr = array(
            'title_name' => $txtName,
            'page_link' => $txtLink,
            'updated_at' => date('Y-m-d H:i:s'),
            'status' => $txtStatus
        );

        $tableName = "tbl_usefulllink";
        $DbKey = "usefl_id";
        if ($this->Setting_model->updateRecord($DbKey, $idH, $tableName, $dataArr)) {

            $this->session->set_flashdata('done', 'Data Successfully updated...!!');
            redirect('Admin/Page/listQuick');
        } else {
            $this->sssion->set_flashdata('error', 'Data is not successfully updated...!!');
            redirect('Admin/Page/listQuick');
        }
    }


    public function deleteQlink()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'usefl_id';
        $tableName = 'tbl_usefulllink';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Quick Link Successfully Deleted...!');
            redirect('Admin/Page/listQuick');
        } else {
            $this->session->set_flashdata('error', 'Quick Link Not Deleted. Please Try Again...!');
            redirect('Admin/Page/listQuick');
        }
    }

    /*********************************Quick Link end here********Ajaykan47*******************************/
    /******************Our Client******Ajaykan47*******************************/


    /****************Our Client* end here***********Ajaykan47***************/


}
