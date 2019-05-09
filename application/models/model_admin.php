<?php
class model_admin extends CI_Model{


	function get_resource(){
		$query=$this->db->get("resource_table");
		return $query;
	}
<<<<<<< HEAD
	function get_user(){
		$query=$this->db->get("user_table");
		return $query;	}
		function get_message(){
			$query=$this->db->get("message_table");
		return $query;
		}
	function get_hospital(){
		$query=$this->db->get("hospital_table");
		return $query;
	}
=======
>>>>>>> 9123b5724c82738da6b8dd2e215d4df9145a1f51
	function delete_item($item_id){
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
	function update_item($data,$id){
		$this->db->where("item_id",$id);
		$this->db->update("resource_table",$data);
	}
	function delete_donor($d_id){
		$this->db->where("d_id",$d_id);
		$this->db->delete("donor_table");
	}
}