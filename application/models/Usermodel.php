<?php
class Usermodel extends CI_model{

    function create($formArray){
        $this->db->insert("books",$formArray);//insert into user (name,email,created)value(?,?,?)
    }
    
    function all(){
        return $users = $this->db->get('books')->result_array();//selct * from books
    }

    function getuser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('books')->row_array();
    }
    function updateuser($userId,$formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('books',$formArray);// update user set  name =? email =? ,user_id=?
    }
    function deleteuser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete('books');
    }
}