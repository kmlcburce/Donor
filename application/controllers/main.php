<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model("model_admin");
		$data["get_resource"] = $this->model_admin->get_resource();
		$data2["get_user"]	= $this->model_admin->get_user();
		$data3["get_message"] = $this->model_admin->get_message();
		$this->load->view("admin/admin_header");
		$this->load->view("admin/admin_index",$data);
		$this->load->view("admin/admin_index2",$data2);
		$this->load->view("admin/admin_header");
		$this->load->view("admin/admin_index3",$data3);
		$this->load->view("admin/admin_footer");
	}
	public function index2(){
		
		$this->load->model("model_admin");
		$data["get_resource"] = $this->model_admin->get_resource();
		$data2["get_message"] = $this->model_admin->get_message();
		$this->load->view("admin/admin_header");
		$this->load->view("admin/admin_index",$data);
		$this->load->view("admin/admin_index3",$data2);
		$this->load->view("admin/admin_footer");

	}
	public function message(){
		$this->load->model("model_admin");
		$data["get_message"] = $this->model_admin->get_message();
		$this->load->view("admin/admin_header");
		$this->load->view("admin/admin_message",$data);
		$this->load->view("admin/admin_footer");
	}
	public function login()

	{
		

		$this->load->view("admin/admin_header");
		$this->load->view('admin/admin_login');
		$this->load->view("admin/admin_footer");
		
	
	}
	public function verify()
	{
		$this->load->model("model_admin");
		$check = $this->model_admin->validate();
		if($check == TRUE)
		{
			redirect(base_url()."main/index");
		}
		else
		{
			redirect(base_url()."main/login");
		}
	}
	public function dashboard(){
		$this->load->view("admin/admin_header");
		$this->load->view('admin/admin_dashboard');
		$this->load->view("admin/admin_footer");
	}
	public function add_donor_validation()
	{
		$this->load->library('form_validation');
		

		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("model_admin");
			
			
			redirect(base_url()."main/added_prod");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function add_resource_validation()
	{
		$this->load->library('form_validation');
		/*$this->form_validation->set_rules("d_fname", "First name", 'required');
		$this->form_validation->set_rules("d_lname", "Last Name", 'required');
		$this->form_validation->set_rules("d_email", "Email", 'required');
		$this->form_validation->set_rules("d_address", "Address", 'required');
		

		$this->form_validation->set_rules("address", "Address", 'required');
		$this->form_validation->set_rules("organ_type", "Organ Type", 'required');
		$this->form_validation->set_rules("blood_type", "Blood Type", 'required');
		$this->form_validation->set_rules("body_type", "Body Type", 'required');*/
		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("model_admin");
			$data = array(
				"address" 		=>$this->input->post("address"),
				"organ_type" 	=>$this->input->post("organ_type"),
				"blood_type" 	=>$this->input->post("blood_type"),
				"body_type" 	=>$this->input->post("body_type"),
				

			);
			$data2 = array(
				"d_fname" 	=>$this->input->post("fname"),
				"d_lname" 	=>$this->input->post("lname"),
				"d_email" 	=>$this->input->post("email"),
				"d_address" =>$this->input->post("address"),
				"d_region" 	=>$this->input->post("region"),
				"d_notes" 	=>$this->input->post("notes"),
			);
			if($this->input->post("ep_sub")){
				$this->model_admin->update_item($data,$this->input->post("hidden_id"));
				redirect(base_url()."main/update");
			}
			if($this->input->post("ap_sub")){
				$this->model_admin->add_item($data);
				$this->model_admin->add_donor($data2);
			redirect(base_url()."main/index");
		}
		else
		{
			//false
			$this->index();
		}
	}
}
	public function add_message_validation()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules("m_to", "m_to", 'required');
		$this->form_validation->set_rules("m_from", "m_from", 'required');
		$this->form_validation->set_rules("m_subject", "m_subject", 'required');
		$this->form_validation->set_rules("m_message", "m_message", 'required');
		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("model_admin");

			$data = array(
				"m_to" 		=>$this->input->post("m_to"),
				"m_from" 	=>$this->input->post("m_from"),
				"m_subject" 	=>$this->input->post("m_subject"),
				"m_message" 	=>$this->input->post("m_message"),
				

			);
			
			redirect(base_url()."main/message");
		}
		else
		{
			//false
			$this->index();
		}
	}
	public function added_prod()
	{
		$this->index();
	}
	public function update_item()
	{
		$item_id = $this->uri->segment(3);
		$this->load->model("model_admin");
		$data["item_data"] = $this->model_admin->fetch_single_item($item_id);
		$data["fetch_item_data"] = $this->model_admin->fetch_item_data();
		$this->load->view("/admin/admin_header");
		$this->load->view("/admin/admin_update",$data);
		$this->load->view("/admin/admin_footer");
	}
	function fetch_single_item($item_id){
		$this->db->where("item_id",$item_id);
		$query = $this->db->get("resource_table");
		return $query;
	}
	
	
	public function delete_item()
	{
		$item_id = $this->uri->segment(3);
		$this->load->model("model_admin");
		$this->model_admin->delete_item($item_id);
		redirect(base_url() . "/main/deleted");
	}
	public function deleted()
	{
		$this->index();
	}

	/*public function update_product()
	{
		$prod_id = $this->uri->segment(3);
		$this->load->model("model_admin");
		$data["product_data"] = $this->model_admin->fetch_single_product($prod_id);
		$data["fetch_product_data"] = $this->Admin_model->fetch_product_data();
		$this->load->view("admin/index",$data);
	}*/
	public function update($data)
	{
		$this->db->where('item_id',$data);
		$this->load->view("admin_update");
	}
}
