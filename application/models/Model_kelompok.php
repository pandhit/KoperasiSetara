<?php 
class Model_kelompok extends CI_Model {

    function get_kelompok($nama)
    {
        $this->db->like('nama',$nama);
        $getkelompok = $this ->db->get('tb_kelompok')->result();
        return $getkelompok;
    }
}
?>