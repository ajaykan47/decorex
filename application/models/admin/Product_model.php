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
    public function getproductnameById($tableName, $id)
    {
        $this->db->select('product_id,p_name')
            ->from($tableName)
            ->where("product_id", $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getcategorynameById($tableName, $id)
    {
        $this->db->select('cat_id,name')
            ->from($tableName)
            ->where("cat_id", $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getDDLtaxtype($tableName)
    {
        $this->db->select('tax_id,tax_type')
            ->from($tableName)
            ->order_by("tax_id", "asc");
        $query = $this->db->get();
        return $query->result();
    }
    public function getDDLweight($tableName)
    {
        $this->db->select('shipping_id,weight')
            ->from($tableName)
            ->order_by("shipping_id", "asc");
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
    public function gettaxtypeJoining($id)
    {
        $this->db->select('pd.*,tax.tax_type,tax.tax_id');
        $this->db->from('tbl_progst as pd');
        $this->db->join('tbl_tax as tax', 'tax.tax_id=pd.tax_id', 'left');
        $this->db->join('tbl_product as p', 'p.product_id=pd.product_id', 'left');
        $this->db->where('pd.product_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
    public function gettaxtypeforcatJoining($id)
    {
        $this->db->select('pd.*,tax.tax_type,tax.tax_id');
        $this->db->from('tbl_catgst as pd');
        $this->db->join('tbl_tax as tax', 'tax.tax_id=pd.tax_id', 'left');
        $this->db->join('tbl_category as c', 'c.cat_id=pd.cat_id', 'left');
        $this->db->where('c.cat_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
     public function getcategoryid($id)
    {
        $this->db->select('catgst_id,cat_id');
        $this->db->from('tbl_catgst');
        $this->db->where('catgst_id',$id);
        $query = $this->db->get();
        return $query->result();

    }
     public function getproductid($id)
    {
        $this->db->select('progst_id,product_id');
        $this->db->from('tbl_progst');
        $this->db->where('progst_id',$id);
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