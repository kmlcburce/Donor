<?php
class model_admin extends CI_Model{


	function get_resource(){
		$query=$this->db->get("resource_table");
		return $query;
	}
	function get_user(){
		$query=$this->db->get("user_table");
		return $query;	}
	function get_message(){
			$query=$this->db->get("message_table");
		return $query;
		}
	function validate(){
		$data = array(
			"r_email" 		=>$this->input->post("email"),
			"r_password" 	=>md5($this->input->post("password")),
		);
		return $this->db->get_where('registration_table', $data);
		}
	function get_hospital(){
		$query=$this->db->get("hospital_table");
		return $query;
	}
	function fetch_item_data()
	{
		$query = $this->db->get("resource_table");
		return $query;
	}
	function add_donor($data){
		$this->db->insert("donor_table", $data);
	}
	function delete_item($item_id){
		$this->db->where("item_id",$item_id);
		$this->db->delete("resource_table");
	}
	function add_item($data)
	{
		$this->db->insert("resource_table", $data);
	}
	function add_message($data)
	{
		$this->db->insert("message_table", $data);
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