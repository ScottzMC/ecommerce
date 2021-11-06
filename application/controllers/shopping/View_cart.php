<?php

  class View_cart extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/shopping/view_cart', $data);
      $this->load->view('shop/menu/footer');
    }

    public function add(){
      $insert_items = array(
        'id' => $this->input->post('id'),
        'name' => $this->input->post('title'),
        'price' => $this->input->post('price'),
        'qty' => 1,
        'product_code' => $this->input->post('product_code'),
        'type' => $this->input->post('type'),
        'category' => $this->input->post('category'),
        'image' => $this->input->post('image')
      );

     $this->cart->insert($insert_items);
     redirect('shopping/view_cart');
    }

    public function remove($rowid){
      if($rowid=="all"){
         $this->cart->destroy();
      }else{
        $data = array(
          'rowid'   => $rowid,
          'qty'     => 0
        );

        $this->cart->update($data);
      }
      redirect('shopping/view_cart');
    }

    public function clear(){
      $this->cart->destroy();
      redirect('shopping/view_cart');
    }

    public function update_cart(){
      foreach($_POST['cart'] as $id => $cart){
       $price = $cart['price'];
       $amount = $price * $cart['qty'];
       $this->Data_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
    }

      redirect('shopping/view_cart');
    }
  }

?>
