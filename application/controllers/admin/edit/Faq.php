<?php

  class Faq extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['faq_content'] = $this->Admin_model->display_faq_content();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/faq', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Faq Content

    public function add_faq(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['faq_content'] = $this->Admin_model->display_faq_content();

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/faq', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $title = $this->input->post('title');
        $body = $this->input->post('body');
        $date = date('Y-m-d H:i:s');

        $add_faq = array('title' => $title, 'body' => $body, 'created_date' => $date);
        $insert_faq = $this->Admin_model->insert_faq_content($add_faq);

        if($insert_faq){
          redirect('admin/edit/faq');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgAboutContentError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/faq', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Faq Content

    // Edit Faq Content

    public function edit_faq($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['faq_content'] = $this->Admin_model->display_faq_content();
      $data['edit_faq_content'] = $this->Admin_model->display_faq_content_by_id($id);

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_faq', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $body = $this->input->post('body');
        $title = $this->input->post('title');

        $update_content_info = $this->Admin_model->update_faq_content_info($id, $body);
        $update_title_info = $this->Admin_model->update_faq_title_info($id, $title);

        if(!empty($update_title_info) || !empty($update_content_info)){
          redirect('admin/edit/faq');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_faq', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Faq Content

    // Delete Faq Content

    public function delete_faq_content(){
      $id = $this->input->post('faq_id');

      $this->Admin_model->delete_faq_content($id);
    }

    // End of Delete Faq Content

  }

?>
