<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class User extends CI_Controller{
       public function __construct()
       {
           parent::__construct();
           $this->load->library('pagination');
       }

      public function reg(){
            $this->load->view('reg.php');
        }
        public function login(){
            $this->load->view('login.php');
        }

       public function index(){
            $this->load->model('user_model');

          $rows=$this->user_model->get_allrows();

//          $allrows=$rows->allrows;
          $site=site_url('user/index');
           $config['base_url'] = "$site";
           $config['total_rows'] = $rows;
           $config['per_page'] = 4;

           $this->pagination->initialize($config);

//           $rs=$this->user_model->get_data();
           $startno=$this->uri->segment(3)==null?0:$this->uri->segment(3);
           $rs=$this->user_model->fenye($startno,$config['per_page']);
           $arr['bloglist']=$rs;
           $this->load->view('index.php',$arr);
       }

        public function do_reg(){
            $name=$this->input->post('name');
            $pass=$this->input->post('pass');

            $this->load->model('user_model');
            $rs=$this->user_model->get_name($name);
                if($rs){
                redirect('user/reg');
                }else{
                 $query=$this->user_model->insert_name($name,$pass);
                    if($query){
                        redirect('user/login');
                    }
                }
        }
        public function do_login(){
            $name=$this->input->post('name');
            $pass=$this->input->post('pass');

            $this->load->model('user_model');
            $rs=$this->user_model->get_sel($name,$pass);
            if($rs){
                $arr=array(
                    'id'=>$rs->uid,
                    'name'=>$rs->uname,
                );
                $this->session->set_userdata($arr);
                 redirect('user/index');
            }

        }

//      public function index(){
//          $this->load->model('user_model');
//          $rows=$this->user_model->get_allrows();
//          $site=site_url('user/index');
//      }


  }

?>