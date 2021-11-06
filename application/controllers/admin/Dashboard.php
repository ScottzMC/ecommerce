<?php

  class Dashboard extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_user_count'] = $this->Admin_model->display_user_count();
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['total_product_count'] = $this->Admin_model->display_product_count();
        $data['user_status'] = $this->Admin_model->display_all_users();
        $data['user_product'] = $this->Admin_model->display_all_products();
        $data['order'] = $this->Admin_model->display_all_orders();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }
  }

?>
