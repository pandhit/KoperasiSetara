<?php 
class Model_berita extends CI_Model {
    

    function getDataBeritaById($id)
    {
        //mendapatkan semua data alat dari tabel tb_alat
        $this->db->where('id',$id);
        $dataBerita = $this->db->get('tb_berita')->row();
        return $dataBerita;
    }

    function get_berita()
    {
        $getberita = $this ->db->get('tb_berita')->result();
        return $getberita;
    }
    function add_berita($databerita)
    {
        $addberita=$this->db->insert("tb_berita",$databerita);
        return $addberita;
    }
    function update_berita($idberita,$databerita)
    {
        $this->db->where('id',$idberita);
        $updateberita=$this->db->update("tb_berita",$databerita);
        return $updateberita;
    }
    function delete_berita($idberita)
    {
        $this->db->where('id',$idberita);
        $deleteberita=$this->db->delete("tb_berita");
        return $deleteberita;
    }

}
?>