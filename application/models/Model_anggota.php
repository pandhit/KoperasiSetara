<?php 
class Model_anggota extends CI_Model {

    function get_anggota()
    {
        $getanggota = $this ->db->get('tb_anggota')->result();
        return $getanggota;
    }
    function get_anggota_by_id($id)
    {
        $this->db->select('a.*,b.nama_usaha');
        $this->db->from('tb_anggota as a');
        $this->db->Join('tb_usaha as b','b.nomor=a.usaha');
        $this->db->where('id',$id);
        $getanggota = $this ->db->get()->row();
        return $getanggota;
    }
    function add_anggota($dataanggota)
    {
        $addanggota=$this->db->insert("tb_anggota",$dataanggota);
        return $addanggota;
    }

    function update_anggota($idanggota,$dataanggota)
    {
        $this->db->where('id',$idanggota);
        $updateanggota=$this->db->update("tb_anggota",$dataanggota);
        return $updateanggota;
    }

    function delete_anggota($idanggota)
    {
        $this->db->where('id',$idanggota);
        $deleteanggota=$this->db->delete("tb_anggota");
        return $deleteanggota;
    }
}
?>