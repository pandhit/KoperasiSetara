<?php
class Model_admin extends CI_Model{

    function get_admin()
    {
        $getAdmin = $this ->db->get('tb_user')->result();
        return $getAdmin;
    }

    function get_admin_by_user($username)
    {   
        $this->db->where("Username",$username);
        $getloginbyuser = $this->db->get('tb_user')->row();
        return $getloginbyuser;
    }

    function get_admin_by_user_password($username,$password)
    {   
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        $getloginbyuserpass = $this->db->get('tb_user')->row();
        return $getloginbyuserpass;
    }

    function get_admin_by_id($id)
    {   
        $this->db->where("id_user",$id);
        $getloginbyId = $this->db->get('tb_user')->row();
        return $getloginbyId;
    }

    function add_admin($dataAdmin)
    {
        $addAdmin=$this->db->insert("tb_user",$dataAdmin);
        return $addAdmin;
    }

    function update_admin($idAdmin,$dataAdmin)
    {
        $this->db->where('id_user',$idAdmin);
        $updateAdmin=$this->db->update("tb_user",$dataAdmin);
        return $updateAdmin;
    }

    function delete_admin($idAdmin)
    {
        $this->db->where('id_user',$idAdmin);
        $deleteAdmin=$this->db->delete("tb_user");
        return $deleteAdmin;
    }


}
?>
