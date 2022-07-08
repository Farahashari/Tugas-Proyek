<?php

class produk_model extends CI_Model{
    private $table = 'produk';

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save ($data){
        $sql = "INSERT INTO produk (id, kode, nama, stok, harga_beli, harga_jual, jenis_id, deskripsi) VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE produk SET id=?, kode=?, nama=?, stok=?, harga_beli=?, harga_jual=?, jenis_id=?, deskripsi=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE FROM produk WHERE id=?";
        $this->db->query($sql, array($id));
    }  

    public function update_foto($array){
        $sql = "UPDATE produk SET foto=? WHERE id=?";
        $this->db->query($sql, $array);
    }

    public function tampil_data(){
        return $this->db->get('produk');
    }
}

?>