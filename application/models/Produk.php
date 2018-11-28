<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Produk extends CI_Model{

    public function getDataWhereDesc2column($table,$where,$order)
    {
        $res=$this->db->order_by($order)->get_where($table,$where);
        return $res->result();
    }

    public function getAllData($table){
        $res=$this->db->get($table);
        return $res->result();
    }

    public function getRowCount($table,$where){
        $res = $this->db->get_where($table,$where);
        return $res->num_rows();
    }

    public function getDataLimit($table,$limit){
        $res = $this->db->get($table,$limit,0);
        return $res->result();
    }
    
    public function getDataLimitDesc($table,$limit){
        $res = $this->db->order_by("update_at", "desc")->get($table,$limit,0);
        return $res->result();
    }

    public function getAllDataDesc($table,$kolomto){
        $res = $this->db->order_by($kolomto, "desc")->get($table);
        return $res->result();
    }

    public function getDataWhereDesc($table,$where,$kolomto)
    {
        $res=$this->db->order_by($kolomto, "desc")->get_where($table,$where);
        return $res->result();
    }
 
    public function insert($table,$data){
        $res = $this->db->insert($table, $data);
        return ($this->db->affected_rows() < 1) ? false : true;
    }
 
    public function update($table, $data, $where){
        $res = $this->db->update($table, $data, $where);
        return ($this->db->affected_rows() < 1) ? false : true;
    }

    public function updateOneColumn($table, $data, $where){
        $listpk = array("stan"=>"id_stan","produk"=>"id_produk","nota"=>"id_nota","diskon"=>"id_diskon","detail_nota"=>"id_detail_nota","detail_stan_diskon"=>"id_diskon","detail_barang_diskon"=>"id_diskon");

        $res = $this->db->where($where);
        $res = $this->db->update($table, $data);
        return ($this->db->affected_rows() < 1) ? false : true;
    }

    public function getData($where,$table){
        $res = $this->db->get_where($table,$where);
        return $res->result();
    }
 
    public function delete($table, $id){

        $listpk = array("stan"=>"id_stan","produk"=>"id_produk","nota"=>"id_nota","diskon"=>"id_diskon","detail_nota"=>"id_detail_nota","detail_stan_diskon"=>"id_diskon","detail_barang_diskon"=>"id_diskon","bahan_jadi"=>"id_bahan_jadi");

        $this->db->where($listpk[$table.""],$id);
        $this->db->delete($table);
    }

    public function DeleteWhere($table,$where)
    {
        $this->db->where($where);
        $this->db->delete($table);
        return ($this->db->affected_rows() < 1) ? false : true;
    }

    public function getSpecificColumn($table,$column)
    {
        $this->db->select($column); 
        $this->db->from($table);
        return $this->db->get()->result();
    }

    public function getDistinctSpecificColumn($table,$column)
    {
        $this->db->distinct();
        $this->db->select($column); 
        $this->db->from($table);
        return $this->db->get()->result();
    }

    public function getDistinctSpecificColumnWhere($table,$column,$where)
    {
        $this->db->distinct();
        $this->db->select($column); 
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getSpecificColumnWhere($table,$column,$where)
    {
        $this->db->select($column); 
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function getDataIn($table,$list)
    {
        $this->db->from($table);
        $this->db->where_in('id_diskon', $list);
        return $this->db->get()->result();
    }

    public function getDataInTableAndSpecificWhere($table,$list,$id_table,$where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where_in($id_table, $list);
        return $this->db->get()->result();
    }

    public function getFirstRowData($where,$table)
    {
        $res = $this->db->get_where($table,$where);
        return $res->row();
    }

    public function checkExist($table,$where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return true;    
        }
        else{
            return false;
        }
    }
}
?>