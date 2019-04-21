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
		$this->load->view("admin/admin_index",$data);
	}
		public function login()
	{
		$this->load->view('admin/admin_login');
	}
	
	public function add_donor_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname", "First name", 'required');
		$this->form_validation->set_rules("lname", "Last Name", 'required');
		$this->form_validation->set_rules("email", "Email", 'required');
		$this->form_validation->set_rules("address", "Address", 'required');
		$this->form_validation->set_rules("region", "Region", 'required');
		$this->form_validation->set_rules("notes", "Notes", 'required');

		if ($this->form_validation->run()) 
		{
			//true
			$this->load->model("model_admin");
			$data = array(
				"d_fname" 	=>$this->input->post("fname"),
				"d_lname" 	=>$this->input->post("lname"),
				"d_email" 	=>$this->input->post("email"),
				"d_address" =>$this->input->post("address"),
				"d_region" 	=>$this->input->post("region"),
				"d_notes" 	=>$this->input->post("notes"),
			);
			
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
		
		$this->form_validation->set_rules("address", "Address", 'required');
		$this->form_validation->set_rules("organ_type", "Organ Type", 'required');
		$this->form_validation->set_rules("blood_type", "Blood Type", 'required');
		$this->form_validation->set_rules("body_type", "Body Type", 'required');
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
			
			redirect(base_url()."main/added_prod");
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
	public function update_product()
	{
		$prod_id = $this->uri->segment(3);
		$this->load->model("model_admin");
		$data["product_data"] = $this->model_admin->fetch_single_product($prod_id);
		$data["fetch_product_data"] = $this->Admin_model->fetch_product_data();
		$this->load->view("/main/index",$data);
	}
	function fetch_single_product($item_id){
		$this->db->where("item_id",$item_id);
		$query = $this->db->get("resource_table");
		return $query;
	}
	
	public function delete_branch()
	{
		$u_id = $this->uri->segment(3);
		$this->load->model("Admin_model");
		$this->Admin_model->delete_branch($u_id);
		redirect(base_url() . "/Admin/deleted");
	}
	public function delete_product()
	{
		$prod_id = $this->uri->segment(3);
		$this->load->model("Admin_model");
		$this->Admin_model->delete_product($prod_id);
		redirect(base_url() . "/Admin/deleted");
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
	public function updated()
	{
		$this->index();
	}
}