<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class User extends CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->model('user_model');
     }
     public function index(){
         echo 123;
     }

     public function reg(){
         $this->load->view('reg.php');
     }

     public function do_reg(){
         $name=$this->input->post('uname');
         $pass=$this->input->post('pass');


         $rs=$this->user_model->checkname($name);
         if($rs){
             redirect(user/reg);
             //$this->reg();
         }else {
             $rs = $this->user_model;
         }
     }
     public function login(){
         $this->load->view('login.php');
     }

     public function do_login(){
         $name=$this->input->post('uname');
         $pass=$this->input->post('pass');

         $this->load->model

 }
?>