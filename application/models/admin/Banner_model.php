<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banner_model extends CI_Model

{
	public function record_count()

	{
		return $this->db->count_all("tbl_banner");
	}
	public function insert_data($dataArr)

	{
		$this->db->insert('tbl_banner', $dataArr);
		return $this->db->insert_id();
	}
	public function update_data($dataArr, $hidden_id)

	{
		$this->db->where('banner_id', $hidden_id);
		$this->db->update('tbl_banner', $dataArr);
		return $this->db->affected_rows();
	}
	public function bannerList()

	{
		$this->db->select('*');
		$this->db->from('tbl_banner');
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
	public function selectBannerDetailsById($idG)

	{
		$this->db->select('*');
		$this->db->from('tbl_banner');
		$this->db->where('banner_id', $idG);
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
	public function bannerDelete($id)

	{
		$this->db->where('banner_id', $id);
		$this->db->delete('tbl_banner');
		return $this->db->affected_rows();
	}
}