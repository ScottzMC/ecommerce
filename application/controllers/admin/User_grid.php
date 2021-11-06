<?php

  class User_grid extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['users'] = $this->Admin_model->display_user_grid();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/user_grid', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }
  }

?>
