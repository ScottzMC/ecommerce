<?php

  class Shop extends CI_Controller{

    public function contact(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $submit = $this->input->post('submit');

      $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
      $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
      $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
      $this->form_validation->set_rules('message', 'Message', 'trim|required');

      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('shop/menu/nav', $data);
        $this->load->view('shop/contact', $data);
        $this->load->view('shop/menu/footer');
      }else if(isset($submit)){
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $time = time();
        $date = date('Y-m-j H:i:s');

        $insert_items = array(
          'fullname' => $fullname,
          'email' => $email,
          'subject' => $subject,
          'message' => $message,
          'created_time' => $time,
          'created_date' => $date
        );

        $add_contact = $this->Data_model->insert_contact_details($insert_items);

        if($add_contact){ ?>
          <script>
            alert('Message Sent');
            window.location.href="<?php echo base_url('shop/home'); ?>";
          </script>
  <?php }else{
          $statusMsg = '<div class="alert alert-danger>Registration Failed</div>';
          $this->session->set_flashdata('msgError', $statusMsg);
          $this->load->view('shop/menu/nav', $data);
          $this->load->view('shop/contact', $data);
          $this->load->view('shop/menu/footer');
        }
      }
    }

    public function about(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['about'] = $this->Data_model->display_about();

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/about', $data);
      $this->load->view('shop/menu/footer');
    }

    public function faq(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['faq'] = $this->Data_model->display_faq();

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/faq', $data);
      $this->load->view('shop/menu/footer');
    }

    public function policy(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['policy'] = $this->Data_model->display_policy();

      $this->load->view('shop/menu/nav', $data);
      $this->load->view('shop/policy', $data);
      $this->load->view('shop/menu/footer');
    }
  }

?>
