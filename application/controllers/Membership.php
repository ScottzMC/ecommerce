<?php

  class Membership extends CI_Controller{

    public function index(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['membership'] = $this->Data_model->display_membership();

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/membership/index', $data);
      $this->load->view('shop/menu/footer');

    }

    // Comparison

    public function compare($code){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['detail'] = $this->Data_model->display_product_detail($code);
      $data['membership'] = $this->Data_model->display_membership();

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/membership/compare', $data);
      $this->load->view('shop/menu/footer');
    }

    // End of Comparison

    // Subscribe

    public function subscribe(){

      $submit_monthly = $this->input->post('btn_monthly');
      $submit_yearly = $this->input->post('btn_yearly');
      $payment_type = $this->input->post('payment_type');
      $email = $this->session->userdata('uemail');
      $time = time();
      $date = date('Y-m-d H:i:s');

      $format = $this->db->query("SELECT fund FROM users WHERE email = '$email' ")->result();
      foreach($format as $form){
        $funds = $form->fund;
      }

      if(isset($submit_monthly)){

        $query = $this->db->query("SELECT * FROM membership WHERE membership = 'Premium member' ")->result();
        foreach($query as $qry){
          $membership_monthly = $qry->membership;
          $membership_description_monthly = $qry->description;
          $membership_price_monthly = $qry->price;
          $membership_discount_monthly = $qry->discount;
          $membership_duration_monthly = $qry->duration;
        }

        $membership_order_array = array(
          'email' => $email,
          'payment_type' => $payment_type,
          'membership' => $membership_monthly,
          'price' => $membership_price_monthly,
          'created_time' => $time,
          'created_date' => $date
        );

        $user_membership_monthly = array(
          'membership' => $membership_monthly,
          'membership_duration' => $membership_duration_monthly,
          'membership_active' => $date
        );

        $insert_membership_order = $this->Data_model->add_membership_order($membership_order_array);
        if(!empty($payment_type) == 'ewallet'){
          $update_payment = $this->Data_model->update_user_payment($membership_price_monthly, $email);
          $update_user_membership = $this->Data_model->update_user_membership($user_membership_monthly, $email);
        }else if(!empty($payment_type) == 'ewallet' && $funds < 0 || $funds == 0){ ?>
          <script>
            alert("Low funds");
          </script>
  <?php }else{
          $update_user_membership = $this->Data_model->update_user_membership($user_membership_monthly, $email);
        }
        redirect('membership/monthly_success');

      }else if(isset($submit_yearly)){
        $sequel = $this->db->query("SELECT * FROM membership WHERE membership = 'Elite member' ")->result();
        foreach($sequel as $sql){
          $membership_yearly = $sql->membership;
          $membership_description_yearly = $sql->description;
          $membership_price_yearly = $sql->price;
          $membership_discount_yearly = $sql->discount;
          $membership_duration_yearly = $sql->duration;
        }

        $membership_order_array = array(
          'email' => $email,
          'payment_type' => $payment_type,
          'membership' => $membership_yearly,
          'price' => $membership_price_yearly,
          'created_time' => $time,
          'created_date' => $date
        );

        $user_membership_yearly = array(
          'membership' => $membership_yearly,
          'membership_duration' => $membership_duration_yearly,
          'membership_active' => $date
        );

        $insert_membership_order = $this->Data_model->add_membership_order($membership_order_array);
        if(!empty($payment_type) == 'ewallet' && $funds > 0){
          $update_payment = $this->Data_model->update_user_payment($user_membership_yearly, $email);
          $update_user_membership = $this->Data_model->update_user_membership($user_membership_yearly, $email);
        }else if(!empty($payment_type) == 'ewallet' && $funds < 0 || $funds == 0){ ?>
          <script>
            alert("Low funds");
          </script>
  <?php }else{
          $update_user_membership = $this->Data_model->update_user_membership($user_membership_yearly, $email);
        }
        redirect('membership/yearly_success');
      }
    }

    // End of Subscribe

    // Success

    public function monthly_success(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/membership/monthly_success', $data);
      $this->load->view('shop/menu/footer');
    }

    public function yearly_success(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/membership/yearly_success', $data);
      $this->load->view('shop/menu/footer');
    }

    // End of Success

  }

?>
