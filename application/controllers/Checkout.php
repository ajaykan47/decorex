<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');

    }

    public function index()
    {

        $pageName = "Checkout";
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
        $this->load->view('checkout/index');
        $this->load->view('include/footer', $data);
    }


    public function check()
    {
       
           
        $customer_name = $this->input->post('f_name');
        $product_info = $this->input->post('productinfo');
        $customer_emial = $this->input->post('email');
        $customer_mobile = $this->input->post('number');
        $customer_cmy = $this->input->post('com_name');
        $customer_address = $this->input->post('com_country');
        $add = $this->input->post('add');
        $city = $this->input->post('city');
        $zip_code = $this->input->post('zip_code');
        $amount = $this->input->post('totalAmt');
        $pay_mod = $this->input->post('pay_mod');
        $createAccount = $this->input->post('createAccount');
        $passWord = date('hmydhis');

        if (!empty($createAccount)) {
            $verify = 'yes';
        } else {
            $verify = 'no';
        }


        $money = $amount;
        $formatedNumber = number_format($money, 2, '.', '');
        if ($createAccount == 'on') {
            $data = array(
                'reguser_email' => $customer_emial,
                'reguser_pass' => md5($passWord),
                'verify' => $verify

            );
            $this->db->insert('tbl_userLogin', $data);
        }
        if ($pay_mod == "paypal") {
            $MERCHANT_KEY = "Pgcx0M";
            $SALT = "pB7RTuqb";


            $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

            $udf1 = '';
            $udf2 = '';
            $udf3 = '';
            $udf4 = '';
            $udf5 = '';

            $hashstring = ($MERCHANT_KEY . '|' . $txnid . '|' . $formatedNumber . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '||' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT);

            $hash = (strtolower(hash('sha512', $hashstring)));

            $success = base_url() . '';
            $fail = base_url() . '';
            $cancel = base_url() . '';

            $data = array(
                'mkey' => $MERCHANT_KEY,
                'tid' => $txnid,
                'hash' => $hash,
                'amount' => $formatedNumber,
                'name' => $customer_name,
                'productinfo' => $product_info,
                'mailid' => $customer_emial,
                'phoneno' => $customer_mobile,
                'address' => $customer_address,
                'action' => "https://secure.payu.in/_payment",

                'sucess' => $success,
                'failure' => $fail,
                'cancel' => $cancel,
                'purchase_date' => date('Y-m-d H:i:s')
            );
            if (!$cancel) {
                $this->db->insert('tbl_order', $data);
            }
            $this->load->view('payment/confirmation', $data);
        } else {
            redirect(base_url());

            // echo 'You Choose Other Option Please Contact To developer'; die;
        }
    }

    public function successtransation()
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Your transaction has been completed successfully');
       // window.location.href='www.decorex.in';
        </script>";


    }

    public function canceltransation()
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Your Order is Successfully Cancel Sorry for the inconvence...!!!');
       // window.location.href='www.decorex.in';
        </script>";
    }

    public function failtransation()
    {
        echo "<script language='javascript' type='text/javascript'>
        alert('Your transaction is Fail Please Try Again...!!!');
       // window.location.href='www.decorex.in';
        </script>";


    }

}
