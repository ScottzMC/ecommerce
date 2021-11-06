<?php

  class Home extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['new'] = $this->Data_model->display_home_new();
      $data['best'] = $this->Data_model->display_home_best();

      //$this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/home', $data);
      //$this->load->view('shop/menu/footer');
    }
  }

?>
