<?php defined('BASEPATH') OR exit('No direct script access allowed');
     class User_model extends CI_Model{
         public function get_name($name){
             $query=$this->db->query("select * from user where uname='$name'");
         return $query->row();
         }

         public function insert_name($name,$pass){
             $query=$this->db->query("insert into user(uid,uname,pass) value(null,'$name','$pass')");
             return $query;
         }

         public function get_sel($name,$pass){
             //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
             $arr=array(
                 'uname'=>$name,
                 'pass'=>$pass,
             );
             $query=$this->db->get_where('user',$arr);
             return $query->row();
         }
         public function get_data(){
             $query=$this->db->get('blog');
                return $query->result();
         }

         public function fenye($startno,$pagenum){
          $sql="select * from blog limit ".$startno.",".$pagenum;
          $query=$this->db->query($sql);
          return $query->result();
         }
         public function get_allrows(){
            //echo $this->db->count_all('my_table');
             $query=$this->db->count_all('blog');
             return $query;
         }
     }


?>