<?php 

class Users_model extends CI_Model {

public $username;
public $password;
public $role;

public function get_user()
{
        $query = $this->db->get('user');
        return $query->result();
}

public function get_user_id($id)
{
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
}


public function insert_user()
{
        $password = $this->input->post('password');
        $this->username    = $this->input->post('username'); // please read the below note
        if(trim($password) != "")
            $this->password  = md5($password);
        $this->role  = $this->input->post('role');

        $this->db->insert('user', $this);
}

public function update_user()
{
        $password = $this->input->post('password');
        $data = array(
            "username" => $this->input->post('username'),
            "role" => $this->input->post('role'),
        );
        if(trim($password) != "")
            $data['password']  = md5($password);
        $id  = $this->input->post('id');

        $this->db->update('usera', $this, array('id' => $id));
}

public function delete_user($id)
{    
    $this->db->delete('user', array('id' => $id));
}
}

?>