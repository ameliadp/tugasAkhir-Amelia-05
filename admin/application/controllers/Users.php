<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model("Users_model", "users_model");
    }

	public function index()
	{

        $user = $this->users_model->get_user();

		$data = array(
            "data" => $user,
            "header" => "Users", //nama header
			"content" => "users" //views/users.php
		);
		$this->load->view('template/admin_tpl', $data);
	}

    public function _form($action = "add", $id = null){
        $data = array(
            "action" => $action == "add" ? base_url("users/insert") : base_url("users/update"),
            "header" => ucfirst($action)." Users",
			"content" => "user_frm"
		);

        if($action == "edit"){
            $data['data'] = $this->users_model->get_user_id($id);
        }
		$this->load->view('template/admin_tpl', $data);
    }

    public function add()
    {
        $this->_form('add');
    }

    public function edit($id)
    {
        $this->_form('edit', $id);
    }

    public function insert()
    {
        $this->users_model->insert_user();
        redirect('users');
    }

    public function update()
    {
        $this->users_model->update_user();
        redirect('users');
    }

    public function delete($id)
    {
        $this->users_model->delete_user($id);
        redirect('users');
    }
}
