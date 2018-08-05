<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');

    }

    public function index()
    {
        $pageName = "Cart";
        $data['MetaResult'] = $this->Home_model->getSeoContent($pageName);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        $seo_matatag = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->seo_keyword;
            $seo_descr = $metaVAL->seo_descr;
            $seo_matatag = $metaVAL->seo_matatag;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        $data['metatag'] = $seo_matatag;
        /*-------Seo meta tag end-----*/
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $this->load->view('include/header', $data);
        $this->load->view('cart/index');
        $this->load->view('include/footer', $data);
    }

    function add_to_cart()
    {

        $probtn = $this->input->post('btnProduct');
        $p = $this->input->post('product_price');
        $q = $this->input->post('quantity');
        $data = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $p * $q,
            'qty' => $q,
        );

        $this->cart->insert($data);
        if (!empty($probtn)) {
            redirect(base_url() . 'cart.html');

        } else {
            echo count($this->cart->contents());
        }


    }


    function load_cart()
    {
        echo $this->show_cart();
    }

    function delete_cart($id)
    {

        $data = array(
            'rowid' => $id,
            'qty' => 0,
        );
        $this->cart->update($data);

        redirect(base_url() . 'cart.html');
    }


    public function update_cart()
    {
        $i = 0;
        foreach ($this->cart->contents() as $item) {
            $qty1 = count($this->input->post('qty'));
            for ($i = 0; $i < $qty1; $i++) {
                // $_POST['qty'][$i];
                 //$_POST['rowid1'][$i];
                $data = array('rowid' => $_POST['rowid1'][$i], 'qty' => $_POST['qty'][$i]);
                $this->cart->update($data);
            }
            redirect(base_url() . 'cart.html');

        }

    }






    public function billingAddress()
    {

        $userid = $this->input->post("user_id");
        $full_address = $this->input->post("fulladdress");
        $fullname = $this->input->post("fullname");
        $email = $this->input->post("email");
        $contact = $this->input->post("contact");
        $postelcode = $this->input->post("postelcode");
        $city = $this->input->post("city_id");
        $state = $this->input->post("state_id");

        $data = array(
            'reguser_name' => $fullname,
            'full_address' => $full_address,
            'email' => $email,
            'contact' => $contact,
            'pincode' => $postelcode,
            'city_id' => $city,
            'state_id' => $state,
            'reguser_id' => $userid
        );
        $result = $this->Shop_model->insertdata($table = 'user_address', $data);
        $url = $this->session->userdata("url");
        //print_r($url()); exit();
        redirect($url);
    }


}
