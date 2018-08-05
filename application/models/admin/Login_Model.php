<?php

/******************************
 * Created by $Ajaykan47****
 * User: Mudrak InfoTech****
 * Date: 11/6/2017**********
 * Time: 10:38 AM*************
 *******************************
 */
class Login_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getData($tableName, $data)
    {
        $query = $this->db->get_where($tableName, $data);
        //echo $this->db->last_query(); die;
        return $query->result();

    }

    public function getAllData($Wheredata)
    {
        $this->db->select('*');
        $this->db->from('tbl_userLogin as lgn');
        $this->db->join('tbl_userdetail as usd', 'usd.userd_id=lgn.reguser_id');
        $this->db->where($Wheredata);
        $query = $this->db->get();
        return $query->result();

    }

}