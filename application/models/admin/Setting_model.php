<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by $ajaykan47.
 * User: FlawlessIndia
 * Date: 02-04-2018
 * Time: 09:50 PM
 */
class Setting_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertData($tableName, $data)
    {
        if ($this->db->insert($tableName, $data)) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function getList($tableName)
    {
        $this->db->select('*')
            ->from($tableName);
        $query = $this->db->get();
        return $query->result();

    }

    public function getListById($tableName, $DbKey, $idG)
    {

        $this->db->select('*')
            ->from($tableName)
            ->where($DbKey, $idG);
        $query = $this->db->get();
        return $query->result();

    }

    public function updateRecord($DbKey, $idH, $tableName, $data)
    {

        $this->db->where($DbKey, $idH);
        if ($this->db->update($tableName, $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRecord($DbKey, $idH, $tableName)
    {
        $this->db->where($DbKey, $idH);
        if ($this->db->delete($tableName)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDashboardData()
    {

        $this->db->select('count(banner_id) as TotalCat');
        $this->db->from('tbl_banner');
        $TotalCat = $this->db->get();

        $this->db->select('count(product_id) as TotalProduct');
        $this->db->from('tbl_product');
        $TotalProduct = $this->db->get();

        $this->db->select('count(socialicon_id) as TotalQuickLink');
        $this->db->where('Status !=', 'Inactive');
        $this->db->from('tbl_socialicon');
        $TotalQuickLink = $this->db->get();


        $this->db->select('count(client_id) as TotalClient');
        $this->db->where('status=', 'Active');
        $this->db->from('tbl_clients');
        $TotalClient = $this->db->get();


        $res = array_merge($TotalCat->result(), $TotalProduct->result(), $TotalQuickLink->result(), $TotalClient->result());
        $array = json_decode(json_encode($res), TRUE);
        return $array;
    }

    public function getBanner()
    {
        $this->db->select('banner_id,title,filename,status')
            ->from('tbl_banner')
            ->where('status=', 'active');
        $query = $this->db->get();
        return $query->result();

    }

    public function getCatSubcategoryByjoining($idG)
    {
        $this->db->select('sub.*,cat.cat_id,cat.name')
            ->from('tbl_subcategory as sub')
            ->join('tbl_category as cat', 'cat.cat_id=sub.cat_id', 'left')
            ->where('sub.subcat_id', $idG);
        $query = $this->db->get();
        return $query->result();
    }

}