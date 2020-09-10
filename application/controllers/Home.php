<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth']);
		$this->load->helper(['language']);

		$this->lang->load('auth');
	}

	public function index() {

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login', 'refresh');
		}
		//Get Users
		$this->data['users'] = $this->ion_auth->users()->result();

		// Pass the Users to the view
		$this->load->view('home', $this->data);
	}
}
