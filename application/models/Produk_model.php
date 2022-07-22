<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

  public function view()
  {
    return $this->db->order_by('id_produk','DESC')->get('produk');
  }
  public function view_by_status($status)
  {
    return $this->db->get_where('produk',array('status'=>$status));
  }
  public function save($table,$data)
  {
    $this->db->insert($table,$data);
  }
  public function edit($id,$table,$data)
  {
    $this->db->where('id_produk',$id);
    $this->db->update($table,$data);
  }
  public function view_by_id($id)
  {
    return $this->db->get_where('produk',array('id_produk'=>$id));
  }
  public function kategori()
  {
    return $this->db->group_by('kategori')->get('produk');
  }
  public function status()
  {
    return $this->db->group_by('status')->get('produk');
  }
  public function delete($id,$table)
  {
    $this->db->where('id_produk',$id);
    $this->db->delete($table);
  }

}

/* End of file Produk_model.php */
