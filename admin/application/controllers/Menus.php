<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model("Menus_model", "menus_model");
    }

	public function index()
	{

        $menu = $this->menus_model->get_menu();

		$data = array(
            "data" => $menu,
            "header" => "Menus", 
			"content" => "menus" 
		);
		$this->load->view('template/admin_tpl', $data);
	}

    public function _form($action = "add", $id = null){
        $data = array(
            "action" => $action == "add" ? base_url("menus/insert") : base_url("menus/update"),
            "header" => ucfirst($action)." Menus",
			"content" => "menu_frm"
		);

        if($action == "edit"){
            $data['data'] = $this->menus_model->get_menu_id($id);
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
        $this->menus_model->insert_menu();
        redirect('menus');
    }

    public function update()
    {
        $this->menus_model->update_menu();
        redirect('menus');
    }

    public function delete($id)
    {
        $this->menus_model->delete_menu($id);
        redirect('menus');
    }
}
