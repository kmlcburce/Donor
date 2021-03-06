<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		
		$this->load->view('client/header');
		$this->load->view('client/index');
		$this->load->view('client/footer');

		
	}
	public function result()
	{
		$this->load->model("model_admin");
		$data["get_hospital"] = $this->model_admin->get_hospital();
		$data2["get_user"] =	$this->model_admin->get_user();

		$this->load->view('client/header');
		$this->load->view('client/result', $data);
		$this->load->view('client/footer');
	}
	public function blog(){
		$this->load->view('client/header');
		$this->load->view('client/blog');
		$this->load->view('client/footer');
	}
	public function contact(){
		$this->load->view('client/header');
		$this->load->view('client/contact');
		$this->load->view('client/footer');
	}
	public function about(){
		$this->load->view('client/header');
		$this->load->view('client/about');
		$this->load->view('client/footer');
	}
	public function donorform(){
		$this->load->view('client/header');
		$this->load->view('client/donorform');
		$this->load->view('client/footer');
	}
}

