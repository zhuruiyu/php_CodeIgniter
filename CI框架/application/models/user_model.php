<?php defined('BASEPATH') OR exit('No direct script access allowed');

  class User_model extends CI_Model{
      public function checkname($name){
           $query=$this->db->query("select * from user where uname='$name'");
           return $query->row();
      }
      public function get_insert($name,$pass){
          $this->db->query("insert into user(uid,uname,pass) values(null,'$name','$pass')");
//          $query=$this->db->insert;
          return $query;
      }
     // $this->db->get('user');

//      public function get_check($name){
//          $query=$this
//      }


        public function get_sel($name,$pass){
            $query=$this->db->
        }
  }

?>