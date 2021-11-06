<?php

  class Ewallet extends CI_Controller{

    public function index(){
      $session_email = $this->session->userdata('uemail');    
        
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['users'] = $this->Data_model->display_user_ewallet_by_email($session_email);

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/ewallet/index', $data);
      $this->load->view('shop/menu/footer');
    }

    // Deposit Funds

    public function deposit(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $submit = $this->input->post('deposit');

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/ewallet/deposit', $data);
      $this->load->view('shop/menu/footer');

      if(isset($submit)){
        $email = $this->session->userdata('uemail');
        $amount = $this->input->post('amount');

        $update = $this->Data_model->deposit_temp_fund($amount, $email);

        if($update){
          redirect('ewallet/complete_deposit');
        }else{
          $statusMsg = '<div class="alert alert-danger>Registration Failed</div>';
          $this->session->set_flashdata('msgError', $statusMsg);
          $this->load->view('shop/menu/nav', $data);
          $this->load->view('shop/ewallet/deposit', $data);
          $this->load->view('shop/menu/footer');
        }
      }
    }
    
    public function complete_deposit(){
      $session_email = $this->session->userdata('uemail');  
          
      if(!$this->cart->contents()){
    	$data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
      }else{
    	$data['message'] = $this->session->flashdata('message');
      }
      
      $data['deposit'] = $this->Data_model->display_temp_fund($session_email);
		  
      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/ewallet/complete_deposit', $data);
      $this->load->view('shop/menu/footer');  
    }

    public function success(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }
      
      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/ewallet/success', $data);
      $this->load->view('shop/menu/footer');
    }
    
    public function stripe_post(){
        require_once('application/libraries/stripe-php/init.php');
        
        //$cart = $this->cart->contents();
		//foreach ($cart as $item){}
		
		//$cart_total = $this->cart->total();
		$session_email = $this->session->userdata('uemail'); 
		$amount = $this->input->post('amount');
        
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        \Stripe\Charge::create ([
            "amount" => $amount * 100,
            "currency" => "gbp",
            "source" => $this->input->post('stripeToken'),
            "description" => "Test payment from Online Store" 
        ]);
        
        $update = $this->Data_model->deposit_fund($amount, $session_email);
        $this->Data_model->reduce_temp_fund($session_email);
        
        ?>
        
        <script>
            //alert('Order was successful');
            window.location.href="<?php echo site_url('ewallet/success'); ?>";
        </script>
<?php }

    // End of Deposit Funds

    // Withdraw Funds

    // End of Withdraw Funds

  }

?>
