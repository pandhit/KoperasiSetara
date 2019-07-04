<?php 
class Model_usaha extends CI_Model {

    function get_usaha()
    {
        $getusaha = $this ->db->get('tb_usaha')->result();
        return $getusaha;
    }
    function add_usaha($datausaha)
    {
        $addusaha=$this->db->insert("tb_usaha",$datausaha);
        return $addusaha;
    }

    function update_usaha($idusaha,$datausaha)
    {
        $this->db->where('nomor',$idusaha);
        $updateusaha=$this->db->update("tb_usaha",$datausaha);
        return $updateusaha;
    }

    function delete_usaha($idusaha)
    {
        $this->db->where('nomor',$idusaha);
        $deleteusaha=$this->db->delete("tb_usaha");
        return $deleteusaha;
    }
    function getDataUsahaById($id)
    {       
        $this->db->where('nomor',$id);
        $dataBerita = $this->db->get('tb_usaha')->row();
        return $dataBerita;
    }
}
?>