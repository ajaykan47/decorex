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
     public function record_count() {
        return $this->db->count_all("tbl_product");
    }

    public function fetch_allproduct($limit, $start) {
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
        $this->db->where('reguser_email',$email);
       return $this->db->get()->row()->reguser_email;
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
    
  
    
     function totalProduct(){
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

    public function getproduct($limit, $start,$cat_id)
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
        $this->db->join('tbl_userdetail as uds','uds.userd_id=lgn.reguser_id');
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
        $query=$this->db->get();
        return $query->row_array();
 }
 public function sendpassword($data)
{
        $email = $data['reguser_email'];
        $query1=$this->db->query("SELECT * from tbl_userLogin where reguser_email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
      
{
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['reguser_pass'] = md5($passwordplain);
        $this->db->where('reguser_email', $email);
        $this->db->update('tbl_userLogin', $newpass); 
        $mail_message='Dear '.$row[0]['reguser_email'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Decorex JSB Lighting';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
      //  $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "flawlessindia.co.in";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "decorex@flawlessindia.co.in";    
        $mail->Password = "decorex@123";
        $mail->setFrom('ajay@flawlessindia.in', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'Password';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
if (!$mail->send()) {
     $this->session->set_flashdata('msg','Failed to send password, please try again!');
} else {
   $this->session->set_flashdata('msg','Password sent to your email!');
}
  redirect(base_url().'user/Login','refresh');        
}
else
{  
 $this->session->set_flashdata('msg','Email not found try again!');
 redirect(base_url().'user/Login','refresh');
}
}


    
    

}

?>