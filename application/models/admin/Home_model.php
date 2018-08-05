<?php

/**
 * Created by PhpStorm.
 * User: Aanchal
 * Date: 08-04-2018
 * Time: 07:41 PM
 */
class Home_model extends CI_Model
{

    public function getCat_allDDl()
    {
        $this->db->select('*')
            ->from('tbl_category');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllProduct()
    {
        $this->db->select('*')
            ->from('tbl_product');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDDLCategory()
    {
        $this->db->select('trt.treatment_id,trt.name');
        $this->db->from('tbl_treatment as trt');
        $this->db->group_by('treatment_id');
        $this->db->order_by('name', 'desc');
        $this->db->where('trt.status', 'Active');
        $query = $this->db->get();
        return $query->result();

    }
    public function getNamebyJoining()
    {
        $this->db->select('doc.*,tre.treatment_id');
        $this->db->from('tbl_doctor as doc');
        $this->db->join('tbl_treatment as tre', 'tre.treatment_id=doc.treatment_id', 'left');
        $query = $this->db->get();
        return $query->result();

    }

}