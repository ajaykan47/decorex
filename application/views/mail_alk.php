<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	function __construct() {

        parent::__construct();

        $this->load->model('Payment_model');
        $this->load->model('Home_model');
    }

	public function booking()
	{
		$pack_url= $this->input->post('pack_url');
		if($this->session->userdata('login_email')=='')
		{

			echo "<script>
			alert('Please login first!');
			window.location.href='".base_url()."package-details/".$pack_url."';
			</script>";
		}
		else
		{
			$email = $this->session->userdata('login_email');
			$data['usedetails'] = $this->Home_model->user_details($email);
				/*$dataArr = array('first_name' => $first_name,'adult_price'=>$package_price, 'package_chprice'=>$package_chprice,'cat_id'=>$cat_id,'total_adult_no'=>$total_adult_no,'total_child_no'=>$total_child_no,'total_child_price'=>$total_child_price,'total_adult_price'=>$total_adult_price,'last_name' => $last_name,'email_tour' => $email_tour,'package_name' => $package_name,'total_price' => $total_price, 'phone' => $phone);
				$this->session->set_userdata($dataArr);
*/
				$data['destination']		=	$this->Home_model->fetchDestination();
				$data['packagetype']		=	$this->Home_model->fetchPackageType();
				$data['populartRes']		=	$this->Home_model->fetchMostPopularTour();
				$data['destnationTour']		=	$this->Home_model->fetchDestnationTour();
				$data['topDestination']		=	$this->Home_model->fetchTopDestination();
				$data['fetchBestTour']		=	$this->Home_model->fetchBestTour();
				$data['destination']		=	$this->Home_model->fetchDestination();
				$data['quicklink']			= 	$this->Home_model->fetchQuicklink();
				$data['footer_contact']		= 	$this->Home_model->fetchFootercontct();
				$data['fetchServices']		=	$this->Home_model->fetchServices();
				$data['fetchInstagram']		=	$this->Home_model->fetchInstagram();
				$data['title']				=	"Package Booking";
				$this->load->view('booking-package',$data);
			
		}

	}

	public function confirmPayment()
	{
		
			//echo 'yes';die;
			$id= $this->uri->segment(2);		
		
				$data['destination']		=	$this->Home_model->fetchDestination();
				$data['packagetype']		=	$this->Home_model->fetchPackageType();
				$data['populartRes']		=	$this->Home_model->fetchMostPopularTour();
				$data['destnationTour']		=	$this->Home_model->fetchDestnationTour();
				$data['topDestination']		=	$this->Home_model->fetchTopDestination();
				$data['fetchBestTour']		=	$this->Home_model->fetchBestTour();
				$data['destination']		=	$this->Home_model->fetchDestination();
				$data['quicklink']			= 	$this->Home_model->fetchQuicklink();
				$data['footer_contact']		= 	$this->Home_model->fetchFootercontct();
				$data['fetchServices']		=	$this->Home_model->fetchServices();
				$data['fetchInstagram']		=	$this->Home_model->fetchInstagram();
				$data['title']  ='Confirmation';
			$data['paymentRes']= $this->Payment_model->fetchbookingdetails($id);
			foreach ($data['paymentRes'] as $key => $value) {
				//echo '<pre>';print_r($value);
			}
			$imgurl=base_url().'assets/front_end/images/logo_sticky.png';

		
		$mail_message = '<!DOCTYPE html>
						<html lang="en">
						  <head>
							<meta charset="utf-8">
							<meta http-equiv="X-UA-Compatible" content="IE=edge">
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<title>Bootstrap 101 Template</title>

							<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
							<style>
								body 
								{
								padding: 0;
								margin: 0;
								}
								html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
								@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
								*[class="table_width_100"] {
									width: 96% !important;
								}
								*[class="border-right_mob"] {
									border-right: 1px solid #dddddd;
								}
								*[class="mob_100"] {
									width: 100% !important;
								}
								*[class="mob_center"] {
									text-align: center !important;
								}
								*[class="mob_center_bl"] {
									float: none !important;
									display: block !important;
									margin: 0px auto;
								}	
								.iage_footer a {
									text-decoration: none;
									color: #929ca8;
								}
								img.mob_display_none {
									width: 0px !important;
									height: 0px !important;
									display: none !important;
								}
								img.mob_width_50 {
									width: 40% !important;
									height: auto !important;
								}
								}
								.table_width_100 {
									width: 680px;
								}
						</style>
					</head>
				 <body>
   
   

<div id="mailsub" class="notification" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
	<!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
	</td></tr>
	<!--header -->
	<tr><td align="center" bgcolor="#ffffff">
		<!-- padding --><div style="height: 5px; line-height: 30px; font-size: 10px;"> </div>
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="left"><!-- 

				Item --><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;">
					<table class="mob_center" width="115" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
						<tr><td align="left" valign="middle">
							<!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>
							<table width="115" border="0" cellspacing="0" cellpadding="0" >
								<tr><td align="left" valign="top" class="mob_center">
									<a href="#" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
									<font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
									<img src="'.$imgurl.'" width="217" height="61" alt="Tour" border="0" style="display: block;" class="img-responsive" /></font></a>
								</td></tr>
							</table>						
						</td></tr>
					</table></div><!-- Item END--><!--[if gte mso 10]>
					</td>
			</tr>
		</table>
		<!-- padding --><div style="height:15px; line-height: 50px; font-size: 10px;"> </div>
	</td></tr>
	<!--header END-->

	<!--content 1 -->
	<tr><td align="center" bgcolor="#fbfcfd">
		<table width="90%" border="0" cellspacing="0" cellpadding="0">
			<tr><td align="left">
				<!-- padding --><div style="height: 10px; line-height: 60px; font-size: 10px;"> </div>
				
				<!-- padding --><div style="height: 10px; line-height: 40px; font-size: 10px;"> </div>
			</td></tr>
			
            
            <tr><td align="left">
				<div style="line-height: 24px;">
					<font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
					<span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
						Dear Admin,
						
						<br>
						The below mention Tour Payment Information.
						</span></font>
				</div>
			</td></tr>
			
		</table>
        <tr><td bgcolor="#fbfcfd" style="padding:20px;">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
					<tr>
						<th>First Name </th> <td>'.$value->cust_firstname.'</td>
					</tr>
					<tr>
						<th>Last Name </th> <td>'.$value->cust_lastname.'</td>
					</tr>
					<tr>
						<th>Email Id </th> <td> '.$value->cust_email.'</td>
					</tr>
					<tr>
						<th>Phone NO </th> <td>  '.$value->cust_phone.'</td>
					</tr>
					<tr>
						<th>Address</th> <td>'.$value->cust_address.'</td>
					</tr>
					<tr>
						<th>City</th> <td>'.$value->cust_city.'</td>
					</tr>
					<tr>
						<th>Country </th> <td> '.$value->cust_country.'</td>
					</tr>
					<tr>
						<th>Package Category</th> <td>'.$value->cat_name.'</td>
					</tr>
					<tr>
						<th>Package Name </th> <td>'.$value->pack_name.'</td>
					</tr>
					<tr>
						<th>Booking Date </th> <td>'.date('d-m-Y',strtotime($value->booking_date)).'</td>
					</tr>
					<tr>
						<th>Total Amount </th> <td>'.$value->pack_totalprice.'</td>
					</tr>
					<tr>
						<th>Adult Price </th> <td> '.$value->pack_adultprice.'</td>
					</tr>
					<tr>
						<th>Child price </th> <td>  '.$value->pack_childprice.'</td>
					</tr>
					<tr>
						<th>Total Adult</th> <td> '.$value->total_adults.'</td>
					</tr>
					<tr>
						<th>Total Child</th> <td> '.$value->total_children.'</td>
					</tr>
					<tr>
						<th>User Id</th> <td> '.$value->cust_userid.'</td>
					</tr>
					<tr>
						<th>Payment Status</th> <td> '.$value->payment_status.'</td>
					</tr>
					<tr>
						<th>Transcation Id</th> <td> '.$value->transaction_id.'</td>
					</tr>

						<br>
						<br>
						<br>
						<br>
						Thanks and Regards<br>
						Team Travel
						</tbody>
          </table></div>		
		</td></tr>
		</html>
			     </body>
			    </html>';

			$this->email->from('donotreply@tourtravel.com', 'Tour And Travel');
			$this->email->to('ajaykan47@gmail.com');
			$this->email->cc($value->cust_email);
			$this->email->set_mailtype("html");
			$this->email->subject('Tour : Tour And Travel- Payment Information');
			$this->email->message($mail_message);
			$this->email->send();
			
			$this->load->view('invoice',$data);
			//redirect(base_url());

	}
}





public function investorList()
	{	$data['meta_title'] ="Investor List";
		$config = array();
        $config["base_url"] = base_url() . "admin/investor/investorList";
        $config["total_rows"] = $this->Investor_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;        
        $data["insvestorlist"] = $this->Investor_model->investorListMod($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();        	

		$this->load->view('admin/template/header',$data);	
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/investor-list',$data);
		$this->load->view('admin/template/footer');
	}
	
	
///////////////////////////
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Investor_model extends CI_Model

{
	public function record_count()

	{
		return $this->db->count_all("tbl_investor");
	}
	public function insert_data($dataArr)

	{
		$this->db->insert('tbl_investor', $dataArr);
		return $this->db->insert_id();
	}
	public function update_data($dataArr, $hidden_id)

	{
		$this->db->where('id', $hidden_id);
		$this->db->update('tbl_investor', $dataArr);
		return $this->db->affected_rows();
	}
	public function investorListMod($limit, $start)

	{
		$this->db->select('*');
		$this->db->from('tbl_investor');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function selectInvestorDetailsById($idG)

	{
		$this->db->select('*');
		$this->db->from('tbl_investor');
		$this->db->where('id', $idG);
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function investorDelete($id)

	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_investor');
		return $this->db->affected_rows();
	}
}//////////////////////////////
	
	
	
	
	
	