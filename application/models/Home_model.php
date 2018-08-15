<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getcompanyinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_logo');
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    /*******Pgination***********/
    public function record_count()
    {
        return $this->db->count_all("tbl_product");
    }

    public function fetch_allproduct($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("tbl_product");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    /*******Pgination***********/


    public function getExistEmail($email)
    {
        $this->db->select('reguser_email');
        $this->db->from('tbl_userLogin');
        $this->db->where('reguser_email', $email);
        //return $this->db->get()->row()->reguser_email;
        $query = $this->db->get();
        return $query->result();
    }

    public function getsocialicon()
    {
        $this->db->select('*');
        $this->db->from('tbl_socialicon');
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getcategory()
    {
        $this->db->select('cat_id,name,cat_url');
        $this->db->from('tbl_category');
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getbanner()
    {
        $this->db->select('*');
        $this->db->from('tbl_banner');
        $this->db->where('status', 'active');
        $query = $this->db->get();
        return $query->result();
    }

    public function gethomecontent()
    {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('title_name', 1);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getClientlogo()
    {
        $this->db->select('*');
        $this->db->from('tbl_clients');
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAboutcontent()
    {
        $this->db->select('*');
        $this->db->from('tbl_page');
        $this->db->where('title_name', 2);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAboutStory()
    {
        $this->db->select('*');
        $this->db->from('tbl_heading');
        $this->db->where('title_name', 1);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAboutcount()
    {
        $this->db->select('*');
        $this->db->from('tbl_happyclient');
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function gethomeproduct()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('page_title', 1);
        $this->db->limit(48);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getnewarrivalproduct()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('new_arrival', 2);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getcategoryid($caturl)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('cat_url', $caturl);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getcategorycheck($caturl)
    {
        $this->db->select('cat_url');
        $this->db->from('tbl_category');
        $this->db->where('cat_url', $caturl);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSeocategory($caturl)
    {
        $this->db->select('seo_title,meta_descr,meta_keyword_descr');
        $this->db->from('tbl_category');
        $this->db->where('cat_url', $caturl);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getcategorychecksearch($searchcat)
    {
        $this->db->select('cat_url,cat_id,name');
        $this->db->from('tbl_category');
        $this->db->like('name', $searchcat);
        $this->db->or_like('cat_url', $searchcat);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function geCategoryIdByCatUrl($searchcat)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->like('name', $searchcat);
        $this->db->or_like('cat_url', $searchcat);
        $query = $this->db->get();
        return $query->result();

    }

    public function getSeocategorysearch($searchcat)
    {
        $this->db->select('seo_title,meta_descr,meta_keyword_descr');
        $this->db->from('tbl_category');
        $this->db->like('name', $searchcat);
        $this->db->or_like('cat_url', $searchcat);
        $query = $this->db->get();
        return $query->result();

    }

    public function getproductdetail($prourl)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_url', $prourl);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getproductdetailsearch($searchpro)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->like('p_name', $searchpro);
        $this->db->or_like('product_url', $searchpro);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSeoproductsearch($searchpro)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->like('p_name', $searchpro);
        $this->db->or_like('product_url', $searchpro);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSeoproduct($prourl)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->like('p_name', $prourl);
        $this->db->or_like('product_url', $prourl);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getcatname($catt_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('cat_id', $catt_id);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }


    function totalProduct()
    {
        return $this->db->count_all_results('tbl_product');
    }


    public function getproductslid($catt_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('cat_id', $catt_id);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getImage($id)
    {
        $this->db->select('filename');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    /***************************************/
    public function getProductName($id)
    {
        $this->db->select('pro.product_id,pro.p_name,pro.col1,pro.col2,pro.col3,pro.col3,pro.col4,pro.col5,pro.col6,pro.col7
        ,psp.shipping_id,psp.weight,psp.amount,pgst.tax_perctg');
        $this->db->from('tbl_product as pro');
        $this->db->join('tbl_progst as pgst', 'pgst.product_id=pro.product_id','left');
        $this->db->join('tbl_shipping as psp', 'psp.shipping_id=pgst.shipping_id');
       // $this->db->join('tbl_tax as tax', 'tax.tax_id=pgst.tax_id');
        $this->db->where('pro.product_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getProductGst($id)
    {
        $this->db->select('*')
            ->from('tbl_progst');
        //   ->join('tbl_progst as pgst','pgst.product_id=pro.product_id');
        $this->db->where('product_id', $id);
        $query = $this->db->get();
        $this->db->last_query();
        return $query->result();
    }

    /*********************/

    public function getproduct($limit, $start, $cat_id)
    {
        $this->db->select('product_id,cat_id,p_name,new_price,old_price,availability,filename,product_url,short_descr');
        $this->db->from('tbl_product');
        $this->db->where('cat_id', $cat_id);
        $this->db->where('status', 'Active');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getSubCatByIdDetail($cateId)
    {

        $this->db->select('COUNT(product_id) as count')
            ->from('tbl_product')
            ->join('tbl_category', 'tbl_category.cat_id=tbl_product.cat_id', 'left')
            ->where('tbl_product.cat_id', $cateId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        }
        return 0;
    }

    public function getPrivacycontent()
    {
        $this->db->select('*');
        $this->db->from('tbl_heading');
        $this->db->where('title_name', 2);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function gettermandcondicontent()
    {
        $this->db->select('*');
        $this->db->from('tbl_heading');
        $this->db->where('title_name', 3);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getreturncontent()
    {
        $this->db->select('*');
        $this->db->from('tbl_heading');
        $this->db->where('title_name', 4);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getdeliveryinfo()
    {
        $this->db->select('*');
        $this->db->from('tbl_heading');
        $this->db->where('title_name', 5);
        $this->db->where('status', 'Active');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSeoContent($pageName)
    {
        $this->db->select('*');
        $this->db->from('tbl_seo');
        $this->db->where('page_name', $pageName);
        $query = $this->db->get();
        return $query->result();

    }

    public function getreview($pro_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_review');
        $this->db->where('status', 'active');
        $this->db->where('product_id', $pro_id);
        $query = $this->db->get();
        return $query->result();

    }

    public function getreviewcount($pro_id)
    {

        $this->db->select('COUNT(review_id) as count')
            ->from('tbl_review')
            ->where('tbl_review.product_id', $pro_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        }
        return 0;
    }

    public function getAllDataById($idG)
    {
        $this->db->select('*');
        $this->db->from('tbl_userLogin as lgn');
        $this->db->join('tbl_userdetail as uds', 'uds.reguser_id=lgn.reguser_id');
        $this->db->where('lgn.reguser_id', $idG);
        $query = $this->db->get();
        return $query->result();

    }

    /**********************Password**********************/
    public function ForgotPassword($email)
    {
        $this->db->select('reguser_email');
        $this->db->from('tbl_userLogin');
        $this->db->where('reguser_email', $email);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function sendpassword($email)
    {
        //$email = $data['reguser_email'];
        $query1 = $this->db->query("SELECT * from tbl_userLogin where reguser_email = '" . $email . "' ");
        $row = $query1->result_array();
        if ($query1->num_rows() > 0) {
            $passwordplain = "";
            $passwordplain = rand(999999999, 9999999999);
            $newpass['reguser_pass'] = md5($passwordplain);
            $this->db->where('reguser_email', $email);
            $this->db->update('tbl_userLogin', $newpass);
            $mail_message = 'Dear ' . $row[0]['reguser_email'] . ',' . "\r\n";
            $mail_message .= 'Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>' . $passwordplain . '</b>' . "\r\n";
            $mail_message .= '';
            $mail_message .= '<br>Thanks & Regards';
            $mail_message .= '<br>Decorex JSB Lighting';
            date_default_timezone_set('Etc/UTC');


            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => SMTP_HOST,
                'smtp_port' => SMTP_PORT,
                'smtp_user' => SMTP_USER,
                'smtp_pass' => SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->initialize($config);
            $this->email->from(SMTP_EMAIL, SMTP_NAME);

            $this->email->to($email);
            $this->email->subject('Decorex JSB Lighting');

            $this->email->message($mail_message);

            $this->email->send();
            if (!$this->email->send()) {
                $this->session->set_flashdata('error', 'Failed to send password, please try again!');
            } else {
                $this->session->set_flashdata('done', 'Password sent to your email!');
            }
            redirect(base_url() . 'login.html');
        } else {
            $this->session->set_flashdata('error', 'Email not found try again!');
            redirect(base_url() . 'login.html');
        }
    }

    /* 03-Aug-2018 start review */

    public function get_count_review_one($por_id)
    {
        $this->db->select('COUNT("star_rating") as count')
            ->from('tbl_review')
            ->where('star_rating', 1)
            ->where('product_id', $por_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        } else {
            return 0;
        }
    }

    public function get_count_review_two($por_id)
    {
        $this->db->select('COUNT("star_rating") as count')
            ->from('tbl_review')
            ->where('star_rating', 2)
            ->where('product_id', $por_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        } else {
            return 0;
        }
    }

    public function get_count_review_three($por_id)
    {
        $this->db->select('COUNT("star_rating") as count')
            ->from('tbl_review')
            ->where('star_rating', 3)
            ->where('product_id', $por_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        } else {
            return 0;
        }
    }

    public function get_count_review_four($por_id)
    {
        $this->db->select('COUNT("star_rating") as count')
            ->from('tbl_review')
            ->where('star_rating', 4)
            ->where('product_id', $por_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        } else {
            return 0;
        }
    }

    public function get_count_review_five($por_id)
    {
        $this->db->select('COUNT("star_rating") as count')
            ->from('tbl_review')
            ->where('star_rating', 5)
            ->where('product_id', $por_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->count;
        } else {
            return 0;
        }
    }
    /* 03-Aug-2018 End review*/

    /**************Verfication******/
    public function updateRecordEmail($data, $verifymail)
    {

        $this->db->where('reguser_email', $verifymail);
        $this->db->update('tbl_userLogin', $data);
        $updated_status = $this->db->affected_rows();
        if ($updated_status):
            return true;
        else:
            return false;
        endif;


    }

}
