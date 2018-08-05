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

	public function pname_test()
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
		$config["base_url"] = base_url() . "slim-led-panels";
		$config["total_rows"] = $this->Home_model->record_count();
		$config["per_page"] = 9;
		$config["uri_segment"] = 4;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
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
        $data['productslid'] = $this->Home_model->getproductslid($catt_id);
        $data['reviewresult'] = $this->Home_model->getreview($por_id);
        $data['reviewcount'] = $this->Home_model->getreviewcount($por_id);
        $data['catname'] = $this->Home_model->getcatname($catt_id);    
		$this->load->view('include/header',$data);
		$this->load->view('product/productdetail');
		$this->load->view('include/footer',$data);    
        }
	    
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
		$config["base_url"] = base_url().$caturl;
	
				$config["total_rows"] =$this->Home_model->record_count();
				$config["per_page"] = 9;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $this->Home_model->record_count();
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';

				$this->pagination->initialize($config);
				if($this->uri->segment(2)){
				$page = ($this->uri->segment(2)) ;
				}
				else{
				$page = 1;
				}
				$data["productresult"] = $this->Home_model->getproduct($config["per_page"], $page,$cat_id);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links); 
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
        }
        $data['productresult'] = $this->Home_model->getproduct($cat_id);
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
