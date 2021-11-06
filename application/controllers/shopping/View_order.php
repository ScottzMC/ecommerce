<?php

  class View_order extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['order_item'] = $this->Data_model->display_order_items($this->session->userdata('uemail'));

      if(!empty($this->session->userdata('uemail'))){
        $this->load->view('shop/menu/nav', $data);
        $this->load->view('shop/shopping/view_order', $data);
        $this->load->view('shop/menu/footer');
      }else{
        redirect('shop/home');
      }
    }
  }

?>
