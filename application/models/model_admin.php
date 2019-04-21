<?php
class model_admin extends CI_Model{


	function get_resource(){
		$query=$this->db->get("resource_table");
		return $query;
	}
	function delete_product($item_id){
		$this->db->where("item_id",$item_id);
		$this->db->delete("resource_table");
	}
	function add_resource($data)
	{
		$this->db->insert("resource_table", $data);
	}
	function fetch_single_item($item_id){
		$this->db->where("item_id",$item_id);
		$query = $this->db->get("resource_table");
		return $query;
	}
	function update_resource($data,$id){
		$this->db->where("item_id",$id);
		$this->db->update("resource_table",$data);
	}
	function delete_donor($d_id){
		$this->db->where("d_id",$d_id);
		$this->db->delete("donor_table");
	}
	function delete_resource($item_id){
		$this->db->where("item_id",$item_id);
		$this->db->delete("resource_table");
	}
}