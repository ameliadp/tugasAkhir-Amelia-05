<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			"content" => "index"
		);
		$this->load->view('template/admin_tpl', $data);
	}

	public function dapur()
	{
		$this->load->view('index');
	}
}
