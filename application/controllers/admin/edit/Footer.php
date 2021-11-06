<?php

  class Footer extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['footer'] = $this->Admin_model->display_footer();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/footer', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Footer

    public function add_footer(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['footer'] = $this->Admin_model->display_footer();

      $this->form_validation->set_rules('address', 'Address', 'trim|required');
      $this->form_validation->set_rules('telephone', 'Telephone Number', 'trim|required');
      $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/footer', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $address = $this->input->post('address');
        $telephone = $this->input->post('telephone');
        $email = $this->input->post('email');

        $add_footer = array('address' => $address, 'telephone' => $telephone, 'email' => $email);
        $insert_footer = $this->Admin_model->insert_footer($add_footer);

        if($insert_footer){
          redirect('admin/edit/footer');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgMenuError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/footer', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Footer

    // Edit Footer

    public function edit_footer($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['edit_footer'] = $this->Admin_model->display_footer_by_id($id);

      $this->form_validation->set_rules('address', 'Address', 'trim|required');
      $this->form_validation->set_rules('telephone', 'Telephone Number', 'trim|required');
      $this->form_validation->set_rules('email', 'Email Address', 'trim|required');

      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_footer', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $address = $this->input->post('address');
        $telephone = $this->input->post('telephone');
        $email = $this->input->post('email');

        $update_address_info = $this->Admin_model->update_address_info($id, $address);
        $update_telephone_info = $this->Admin_model->update_telephone_info($id, $telephone);
        $update_email_info = $this->Admin_model->update_email_info($id, $email);

        if(!empty($update_address_info) || !empty($update_telephone_info) || !empty($update_email_info)){
          redirect('admin/edit/footer');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_footer', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Footer

    // Delete Footer

    public function delete_footer(){
      $id = $this->input->post('footer_id');

      $this->Admin_model->delete_footer($id);
    }

    // End of Delete Footer

  }

?>
