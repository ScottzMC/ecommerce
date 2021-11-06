<?php

  class Policy extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['policy_content'] = $this->Admin_model->display_policy_content();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/policy', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Policy Content

    public function add_policy(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['policy_content'] = $this->Admin_model->display_policy_content();

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/policy', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $title = $this->input->post('title');
        $body = $this->input->post('body');
        $date = date('Y-m-d H:i:s');

        $add_policy = array('title' => $title, 'body' => $body, 'created_date' => $date);
        $insert_policy = $this->Admin_model->insert_policy_content($add_policy);

        if($insert_policy){
          redirect('admin/edit/policy');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgAboutContentError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/policy', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Policy Content

    // Edit Policy Content

    public function edit_policy($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['policy_content'] = $this->Admin_model->display_policy_content();
      $data['edit_policy_content'] = $this->Admin_model->display_policy_content_by_id($id);

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_policy', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $body = $this->input->post('body');
        $title = $this->input->post('title');

        $update_content_info = $this->Admin_model->update_policy_content_info($id, $body);
        $update_title_info = $this->Admin_model->update_policy_title_info($id, $title);

        if(!empty($update_title_info) || !empty($update_content_info)){
          redirect('admin/edit/policy');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_policy', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Policy Content

    // Delete Policy Content

    public function delete_policy_content(){
      $id = $this->input->post('policy_id');

      $this->Admin_model->delete_policy_content($id);
    }

    // End of Delete Policy Content

  }

?>
