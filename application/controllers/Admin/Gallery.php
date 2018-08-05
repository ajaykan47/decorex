<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
       
        $this->load->library('form_validation');
        $this->load->model('admin/Gallery_model');
        $this->load->model('admin/Setting_model');
    }


    public function index()
    {

        $data['title'] = 'Gallery';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gallery/index', $data);
        $this->load->view('admin/footer');

    }

    public function savegallery()
    {
        $gal_type = $this->input->post('gal_type');
        $gallery_title = $this->input->post('gallery_title');
        $status = $this->input->post('status');
        $createdate = date('Y-m-d H:i:s');
        if (!empty($status)) {
            $status = "active";
        } else {
            $status = "inactive";
        }
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {
                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['upload_path'] = './Uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '10000000';
                $config['max_width'] = '51024';
                $config['max_height'] = '5768';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                    $data_error = array('msg' => $this->upload->display_errors());
                    var_dump($data_error);
                } else {
                    $data = $this->upload->data();
                }

                $name_array[] = $data['file_name'];

            }
        $names = implode(',', $name_array);
        $arr = explode(',', $names);
        for ($i = 0; $i < count($arr); $i++) {
            $dataArr = array(
                'filename' => $arr[$i],
                'title' => $gallery_title,
                'gal_type' => $gal_type,
                'status' => $status,
                'createdate' => $createdate);
            $this->db->insert('tbl_gallery', $dataArr);

        }

        $this->session->set_flashdata('done', 'Your Gallery Images Uploaded Successfully .....!');
        redirect(base_url() . "Admin/Gallery");
    }

    public function gallerylist()
    {
        
        $data['title'] = 'Gallery List';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $data['result'] = $this->Gallery_model->galleryList();
        
        $this->load->view('admin/gallery/list', $data);

    }


    public function deletegallery()
    {
        $idH = $this->input->get('id');
        $idH = base64_decode($idH);
        $DbKey = 'gallery_id';
        $tableName = 'tbl_gallery';
        $returnid = $this->Setting_model->deleteRecord($DbKey, $idH, $tableName);
        if ($returnid > 0) {
            $this->session->set_flashdata('done', 'Gallery Image Successfully Deleted...!');
            redirect('Admin/Gallery/gallerylist');
        } else {
            $this->session->set_flashdata('error', 'Gallery Image Not Deleted. Please Try Again...!');
            redirect('Admin/Gallery/gallerylist');
        }
    }


}