<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Product extends CI_Controller {
    public function __construct()
     {
         parent::__construct();
         $this->load->model('Home_model');
           $this->load->library('pagination');
             
     }

	public function pname()
	{
	    
        $caturl = $this->uri->segment('1');
        $data['categorycheck'] = $this->Home_model->getcategorycheck($caturl);
        if(!empty($data['categorycheck'])){
        $data['MetaResult'] = $this->Home_model->getSeocategory($caturl);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = ""; 
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->meta_keyword_descr;
            $seo_descr = $metaVAL->meta_descr;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        /*-------Seo meta tag end-----*/    
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();
		$data['categoryvalue'] = $this->Home_model->getcategory();
		$data['categoryid'] = $this->Home_model->getcategoryid($caturl);
        foreach($data['categoryid'] as $catid)
        {
           $cat_id = $catid->cat_id; 
        }
			$config = array();
		$config["base_url"] = base_url().$caturl."?id=";
		$config["total_rows"] = $this->Home_model->record_count();
		$config["per_page"] = 9;
		$config["uri_segment"] = 4;
			$this->pagination->initialize($config);
		$pag = ($_GET['id']) ? $_GET['id'] : 0;
		$page = preg_replace("/\//", "", $pag);
	
		$data["productresult"] = $this->Home_model->getproduct($config["per_page"], $page,$cat_id);
		$data["links"] = $this->pagination->create_links();
      
		$this->load->view('include/header',$data);
		$this->load->view('product/index',$data);
		$this->load->view('include/footer',$data);
        }
        else{
        $prourl = $caturl;
        $data['MetaResult'] = $this->Home_model->getSeoproduct($prourl);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->meta_keyword_descr;
            $seo_descr = $metaVAL->meta_descr;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        /*-------Seo meta tag end-----*/    
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();    
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $data['productdetail'] = $this->Home_model->getproductdetail($prourl);
        foreach($data['productdetail'] as $cattid)
        {
           $catt_id = $cattid->cat_id; 
		   $por_id = $cattid->product_id; 
        }
		/* review start*/
        $data['resultRatingCountOne'] = $this->Home_model->get_count_review_one($por_id);
        $data['resultRatingCounttwo'] = $this->Home_model->get_count_review_two($por_id);
        $data['resultRatingCountthree'] = $this->Home_model->get_count_review_three($por_id);
        $data['resultRatingCountfour'] = $this->Home_model->get_count_review_four($por_id);
		$data['resultRatingCountfive'] = $this->Home_model->get_count_review_five($por_id);
        /* review end */ 
		$data['productslid'] = $this->Home_model->getproductslid($catt_id);
        $data['reviewresult'] = $this->Home_model->getreview($por_id);
        $data['reviewcount'] = $this->Home_model->getreviewcount($por_id);
        $data['catname'] = $this->Home_model->getcatname($catt_id);    
		$this->load->view('include/header',$data);
		$this->load->view('product/productdetail');
		$this->load->view('include/footer',$data);    
        }
	    
	}
	
	
	
    public function search()
    {
         $searchcat = $this->input->post('txtSearch');
       
        $data['categorycheck'] = $this->Home_model->geCategoryIdByCatUrl($searchcat);
        if(!empty($data['categorycheck'])){
        $this->session->set_flashdata('search', 'Something Missing Please Try Again !!!');
        $data['MetaResult'] = $this->Home_model->getSeocategorysearch($searchcat);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->meta_keyword_descr;
            $seo_descr = $metaVAL->meta_descr;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        /*-------Seo meta tag end-----*/     
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();    
        $data['categoryvalue'] = $this->Home_model->getcategory();
		$data['categoryid'] = $this->Home_model->getcategorychecksearch($searchcat);
            
        foreach($data['categoryid'] as $catid)
        {
           $cat_id = $catid->cat_id; 
           $cat_url = $catid->cat_url; 
        }
        $config = array();
		$config["base_url"] = base_url().$cat_url."?id=";
		$config["total_rows"] = $this->Home_model->record_count();
		$config["per_page"] = 9;
		$config["uri_segment"] = 4;
		$this->pagination->initialize($config);
		$pag = ($_GET['id']) ? $_GET['id'] : 0;
		$page = preg_replace("/\//", "", $pag);
		$data["productresult"] = $this->Home_model->getproduct($config["per_page"], $page,$cat_id);
		$data["links"] = $this->pagination->create_links();
		$this->load->view('include/header',$data);
		$this->load->view('product/index',$data);
		$this->load->view('include/footer',$data);
        }
        else{
        $searchpro = $searchcat;
        $this->session->set_flashdata('search', 'Something Missing Please Try Again !!!');
        $data['MetaResult'] = $this->Home_model->getSeoproductsearch($searchpro);
        $tile = "";
        $seo_keyword = "";
        $seo_descr = "";
        foreach ($data['MetaResult'] as $metaVAL) {
            $tile = $metaVAL->seo_title;
            $seo_keyword = $metaVAL->meta_keyword_descr;
            $seo_descr = $metaVAL->meta_descr;
        }
        $data['title'] = $tile;
        $data['metasdescription'] = $seo_descr;
        $data['metaskeywords'] = $seo_keyword;
        /*-------Seo meta tag end-----*/     
        $data['companyinfo'] = $this->Home_model->getcompanyinfo();
        $data['Socialicon'] = $this->Home_model->getsocialicon();    
        $data['categoryvalue'] = $this->Home_model->getcategory();
        $data['productdetail'] = $this->Home_model->getproductdetailsearch($searchpro);
        foreach($data['productdetail'] as $cattid)
        {
           $catt_id = $cattid->cat_id;
           $por_id = $cattid->product_id;
        } 
        $data['productslid'] = $this->Home_model->getproductslid($catt_id);
        $data['reviewresult'] = $this->Home_model->getreview($por_id);    
        $data['reviewcount'] = $this->Home_model->getreviewcount($por_id);    
        $data['catname'] = $this->Home_model->getcatname($catt_id);    
		$this->load->view('include/header',$data);
		$this->load->view('product/productdetail');
		$this->load->view('include/footer',$data);  
        }   
    }
}
