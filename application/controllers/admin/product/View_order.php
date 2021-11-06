<?php

  class View_order extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['orders'] = $this->Admin_model->display_all_orders();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/product/view_order', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    public function deliver_order(){
      $pid = $this->input->post('order_id');
      $status = "Delivered";
      $this->Admin_model->deliver_order($pid, $status);
    }

    public function cancel_order(){
      $pid = $this->input->post('order_id');
      $status = "Cancelled";
      $this->Admin_model->cancel_order($pid, $status);
    }

    public function delete_order(){
      $did = $this->input->post('deleted_id');
      $this->Admin_model->delete_order($did);
    }
  }

?>
