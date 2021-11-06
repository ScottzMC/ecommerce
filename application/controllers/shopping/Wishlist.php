<?php

  class Wishlist extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $session_email = $this->session->userdata('uemail');

      $data['wishlist'] = $this->Data_model->display_wishlist($session_email);

      if(!empty($session_email)){
        $this->load->view('shop/menu/nav', $data);
        $this->load->view('shop/shopping/wishlist', $data);
        $this->load->view('shop/menu/footer');
      }else{
        redirect('shop/home');
      }
    }

    public function add(){
      $insert_items = array(
        'id' => $this->input->post('id'),
        'email' => $this->input->post('email'),
        'title' => $this->input->post('title'),
        'price' => $this->input->post('price'),
        'product_code' => $this->input->post('product_code'),
        'type' => $this->input->post('type'),
        'category' => $this->input->post('category'),
        'image' => $this->input->post('image')
      );

      $this->Data_model->add_wishlist($insert_items);
      redirect('shopping/wishlist');
    }

    public function delete(){
      $id = $this->input->post('wish_id');
      $this->Data_model->delete_wishlist($id);
      redirect('shopping/wishlist');
    }
  }

?>
