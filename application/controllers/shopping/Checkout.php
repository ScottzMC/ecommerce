<?php

  class Checkout extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['shipping'] = $this->Data_model->display_shipping_details($this->session->userdata('uemail'));

      //if(!empty($this->session->userdata('uemail'))){
        $this->load->view('shop/menu/nav', $data);
        $this->load->view('shop/shopping/checkout', $data);
        $this->load->view('shop/menu/footer');
      //}else{
        //show_404();
      //}
    }

    public function place_order(){
      //if($this->session->userdata('login')){
        $session_email = $this->session->userdata('uemail');

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('surname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('telephone', 'Telephone Number', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('town', 'Town/City', 'trim|required');
        $this->form_validation->set_rules('county', 'County', 'trim|required');
        $this->form_validation->set_rules('country', 'Country', 'trim|required');
        $this->form_validation->set_rules('postcode', 'Postcode', 'trim|required|max_length[100]');

        $data['shipping'] = $this->Data_model->display_shipping_details($email);

        $shuffle = str_shuffle("ABCDTUVXY");
        $unique = rand(000, 999);
        $order_code = $shuffle.$unique;

        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('surname');
        $telephone = $this->input->post('telephone');
        $customer_email = $this->input->post('email');
        $address = $this->input->post('address');
        $town = $this->input->post('town');
        $postcode = $this->input->post('postcode');
        $country = $this->input->post('country');
        $county = $this->input->post('county');
        $payment = $this->input->post('payment');
        $total_cost = $this->cart->total();

        $time = time();
        $date = date('Y-m-d H:i:s');

        $this->Data_model->update_customer_shipping_firstname($this->session->userdata('uemail'), $firstname);
        $this->Data_model->update_customer_shipping_lastname($this->session->userdata('uemail'), $lastname);
        $this->Data_model->update_customer_shipping_email($this->session->userdata('uemail'), $customer_email);
        $this->Data_model->update_customer_shipping_telephone($this->session->userdata('uemail'), $telephone);
        $this->Data_model->update_customer_shipping_address($this->session->userdata('uemail'), $address);
        $this->Data_model->update_customer_shipping_town($this->session->userdata('uemail'), $town);
        $this->Data_model->update_customer_shipping_county($this->session->userdata('uemail'), $county);
        $this->Data_model->update_customer_shipping_country($this->session->userdata('uemail'), $country);
        $this->Data_model->update_customer_shipping_postcode($this->session->userdata('uemail'), $postcode);
        
        $subject = "Receipt of Order";

          if ($cart = $this->cart->contents()):
    			foreach ($cart as $item):
    				$order_detail = array(
    					'order_id' 	   => $order_code,
                        'email'        => $customer_email,
                        'title'        => $item['name'],
    					'price' 		   => $item['price'],
                        'quantity' 		 => $item['qty'],
                        'image'        => $item['image'],
                        'status'       => 'Delivering',
                        'payment'      => $payment,
                        'created_time' => time(),
                        'created_date'  => date('Y-m-j H:i:s')
    				);
    				
    				$product_title = $item['name'];
                    $product_price = $item['price'];
                    $product_qty = $item['qty'];
                    
                    $cart_total = $this->cart->total();

    				$this->Data_model->insert_order_detail($order_detail);
    				$this->Data_model->update_user_fund($cart_total, $session_email);
    				
    				$body = "
                    Welcome to UG Store and thank you for making an order on our platform. Please find below your ordered details - 
                    Order ID - $order_code
                    Product - $product_title
                    Price - $product_price
                    Quantity - $product_qty
                    
                    To create an account, please click this link - https://scottnnaghor.com/ecommerce/account/register";

            /*if(!empty($payment) && $payment == 'ewallet'){
              $this->Data_model->update_customer_ewallet($email, $total_cost);
              $this->cart->destroy();
              redirect('shopping/checkout/success');
            }else{ */
              $this->cart->destroy();
            //}

          endforeach;
    			endif;
    			
    	 $config = Array(
         'protocol' => 'smtp',
         'smtp_host' => 'smtp.scottnnaghor.com',
         'smtp_port' => 25,
         'smtp_user' => 'admin@scottnnaghor.com', // change it to account email
         'smtp_pass' => 'TigerPhenix100', // change it to account email password
         'mailtype' => 'html',
         'charset' => 'iso-8859-1',
         'wordwrap' => TRUE
         );

         $this->load->library('email', $config);
         //$this->load->library('encrypt');
         $this->email->from('admin@scottnnaghor.com', "UG Store Team");
         $this->email->to("$customer_email");
         //$this->email->cc("testcc@domainname.com");
         $this->email->subject("$subject");
         $this->email->message("$body");
         $this->email->send();
    	    
            redirect('shopping/checkout/success');
        //}
    }

    public function success(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/shopping/order_success', $data);
      $this->load->view('shop/menu/footer');
    }

  }

?>
