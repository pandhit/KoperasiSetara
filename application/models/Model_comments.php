<?php 
class Model_comments extends CI_Model {

    function get_comments()
    {
        $getcomments = $this ->db->get('tb_comments')->result();
        return $getcomments;
    }
    function add_comments($datacomments)
    {
        $addcomments=$this->db->insert("tb_comments",$datacomments);
        return $addcomments;
    }

    function update_comments($idcomments,$datacomments)
    {
        $this->db->where('id',$idcomments);
        $updatecomments=$this->db->update("tb_comments",$datacomments);
        return $updatecomments;
    }

    function delete_comments($idcomments)
    {
        $this->db->where('id',$idcomments);
        $deletecomments=$this->db->delete("tb_comments");
        return $deletecomments;
    }
    function getDataUsahaById($id)
    {       
        $this->db->where('id',$id);
        $dataBerita = $this->db->get('tb_comments')->row();
        return $dataBerita;
    }
}
?>