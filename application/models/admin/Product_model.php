<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: FlawlessIndia Info Tech Pvt.
 * Date: 4/6/2018
 * Time: 11:56 AM
 */
class Product_model extends CI_Model
{
    public function getDDLCategory($tableName)
    {
        $this->db->select('cat_id,name')
            ->from($tableName)
            ->order_by("cat_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getDDLProduct($tableName)
    {
        $this->db->select('product_id,p_name')
            ->from($tableName)
            ->order_by("product_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }

    public function getCategoryNamebyJoining()
    {
        $this->db->select('pd.*,cat.name,cat.cat_id');
        $this->db->from('tbl_product as pd');
        $this->db->join('tbl_category as cat', 'cat.cat_id=pd.cat_id', 'left');
        $query = $this->db->get();
        return $query->result();

    }

    public function getlistCatProductbyId($idG)
    {
        $this->db->select('pd.*');
        $this->db->from('tbl_product as pd');
        /*$this->db->join('tbl_category as cat', 'cat.cat_id=pd.cat_id', 'left');*/
        $this->db->where('product_id', $idG);
        $query = $this->db->get();
        return $query->result();

    }

    public function getProductNameByCatId($id)
    {
        $this->db->select('pd.product_id,pd.p_name');
        $this->db->from('tbl_product as pd');
        $this->db->join('tbl_category as ct', 'ct.cat_id=pd.cat_id');
        $this->db->where('pd.cat_id', $id);
        $query = $this->db->get();
        //echo $this->db->last_query(); die;
        return $query->result();
    }
   

    public function getListByID($tableName,$where){

        $query=$this->db->get_where($tableName,$where);
        return $query->result();

    }

    public function getTechnicalSpbyJoining()
    {
        $this->db->select('ts.*,pd.product_id,pd.p_name');
        $this->db->from('tbl_technical as ts');
        $this->db->join('tbl_product as pd', 'pd.product_id=ts.product_id', 'left');
        $query = $this->db->get();
        return $query->result();

    }

    public function getlistTechSpeciProductbyId($idG)
    {
        $this->db->select('ts.*,pd.product_id,pd.p_name');
        $this->db->from('tbl_technical as ts');
        $this->db->join('tbl_product as pd', 'pd.product_id=ts.product_id', 'left');
        $this->db->where('ts_id', $idG);
        $query = $this->db->get();
        return $query->result();

    }



}