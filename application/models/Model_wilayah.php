<?php 
class Model_wilayah extends CI_Model {

    function get_wilayah()
    {
        $getwilayah = $this ->db->get('tb_wilayah')->result();
        return $getwilayah;
    }
    function add_wilayah($datawilayah)
    {
        $addwilayah=$this->db->insert("tb_wilayah",$datawilayah);
        return $addwilayah;
    }

    function update_wilayah($idwilayah,$datawilayah)
    {
        $this->db->where('id',$idwilayah);
        $updatewilayah=$this->db->update("tb_wilayah",$datawilayah);
        return $updatewilayah;
    }

    function delete_wilayah($idwilayah)
    {
        $this->db->where('id',$idwilayah);
        $deletewilayah=$this->db->delete("tb_wilayah");
        return $deletewilayah;
    }

}
?>