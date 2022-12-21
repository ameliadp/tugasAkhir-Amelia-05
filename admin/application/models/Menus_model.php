<?php 

class Menus_model extends CI_Model {

public $gambar;
public $nama;
public $harga;

public function get_menu()
{
        $query = $this->db->get('menu');
        return $query->result();
}

public function get_menu_id($id)
{
        $this->db->where('id', $id);
        $query = $this->db->get('menu');
        return $query->row();
}


public function insert_menu()
{
        $this->gambar = $this->input->post('gambar');
        $this->nama = $this->input->post('nama');
        $this->harga  = $this->input->post('harga');

        $this->db->insert('menu', $this);
}

public function update_menu()
{
        $nama = $this->input->post('nama');
        $data = array(
            "gambar" => $this->input->post('gambar'),
            "harga" => $this->input->post('harga'),
        );
        $id  = $this->input->post('id');

        $this->db->update('menu', $data, array('id' => $id));
}

public function delete_menu($id)
{    
    $this->db->delete('menu', array('id' => $id));
}
}

?>