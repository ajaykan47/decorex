<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct()
     {
         parent::__construct();
         $this->load->model('Home_model');
             
     }
	
	public function index()
	{
        $pageName = "Home";
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
        $data['homecontent'] = $this->Home_model->gethomecontent();
        $data['Clientlogo'] = $this->Home_model->getClientlogo();
        $data['Banner'] = $this->Home_model->getbanner();
        $data['homeproduct'] = $this->Home_model->gethomeproduct();
        $data['newarrivalproduct'] = $this->Home_model->getnewarrivalproduct();
		$this->load->view('include/header',$data);
		$this->load->view('home/index');
		$this->load->view('include/footer',$data);
	}
}
