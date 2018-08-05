<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery_model extends CI_Model

{
	public function record_count()

	{
		return $this->db->count_all("tbl_gallery");
	}
	public function insert_data($dataArr)

	{
		$this->db->insert('tbl_gallery', $dataArr);
		return $this->db->insert_id();
	}
	public function update_data($dataArr, $hidden_id)

	{
		$this->db->where('gallery_id', $hidden_id);
		$this->db->update('tbl_gallery', $dataArr);
		return $this->db->affected_rows();
	}
	public function galleryList()

	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
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
	public function selectgalleryDetailsById($idG)

	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('gallery_id', $idG);
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
public function getGallryFirstList($idG)

	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('gal_type', $idG);
		$this->db->group_by('title');
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
	public function getGallrySecondList($idG)

	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('title', $idG);		
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
	public function galleryDelete($id)
	{
		$this->db->where('gallery_id', $id);
		$this->db->delete('tbl_gallery');
		return $this->db->affected_rows();
	}
	/*************Video*****Link*********/
    public function insert_data_Link($dataArr)
    {
        $this->db->insert('tbl_video_gallery', $dataArr);
        return $this->db->insert_id();
    }
 public function videoLinkList()

    {
        $this->db->select('*');
        $this->db->from('tbl_video_gallery');
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

    public function videoLinkDelete($id)
    {
        $this->db->where('video_glry_id', $id);
        $this->db->delete('tbl_video_gallery');
        return $this->db->affected_rows();
    }
	/*************Video*****Link*********/


}