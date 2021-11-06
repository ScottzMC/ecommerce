<?php

  class Social extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['social'] = $this->Admin_model->display_social();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/social', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Social

    public function add_social(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['social'] = $this->Admin_model->display_social();

      $this->form_validation->set_rules('social', 'Social', 'trim|required');
      $this->form_validation->set_rules('url', 'URL', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/social', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $social = $this->input->post('social');
        $url = $this->input->post('url');

        $add_social = array('social' => $social, 'url' => $url);
        $insert_social = $this->Admin_model->insert_social($add_social);

        if($insert_social){
          redirect('admin/edit/social');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgSocialError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/social', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Social

    // Edit Social

    public function edit_social($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['edit_social'] = $this->Admin_model->display_social_by_id($id);

      $this->form_validation->set_rules('social', 'Social', 'trim|required');
      $this->form_validation->set_rules('url', 'URL', 'trim|required');

      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_social', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $social = $this->input->post('social');
        $url = $this->input->post('url');

        $update_social_info = $this->Admin_model->update_social_info($id, $social);
        $update_url_info = $this->Admin_model->update_url_info($id, $url);

        if(!empty($update_social_info) || !empty($update_url_info)){
          redirect('admin/edit/social');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_social', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Social

    // Delete Social

    public function delete_social(){
      $id = $this->input->post('social_id');

      $this->Admin_model->delete_social($id);
    }

    // End of Delete Social
  }

?>
