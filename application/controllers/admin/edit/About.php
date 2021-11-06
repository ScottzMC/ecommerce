<?php

  class About extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['about_content'] = $this->Admin_model->display_about_content();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/about', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add About Content

    public function add_about(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['about_content'] = $this->Admin_model->display_about_content();

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/about', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $title = $this->input->post('title');
        $body = $this->input->post('body');

        $add_about = array('title' => $title, 'body' => $body);
        $insert_about = $this->Admin_model->insert_about_content($add_about);

        if($insert_about){
          redirect('admin/edit/about');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgAboutContentError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/about', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add About Content

    // Edit About Content

    public function edit_about($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['about_content'] = $this->Admin_model->display_about_content();
      $data['edit_about_content'] = $this->Admin_model->display_about_content_by_id($id);

      $this->form_validation->set_rules('title', 'Title', 'trim|required');
      $this->form_validation->set_rules('body', 'Body', 'trim|required');
      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_about', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $body = $this->input->post('body');
        $title = $this->input->post('title');

        $update_content_info = $this->Admin_model->update_about_content_info($id, $body);
        $update_title_info = $this->Admin_model->update_about_title_info($id, $title);

        if(!empty($update_title_info) || !empty($update_content_info)){
          redirect('admin/edit/about');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_about', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit About Content

    // Delete About Content

    public function delete_about_content(){
      $id = $this->input->post('about_id');

      $this->Admin_model->delete_about_content($id);
    }

    // End of Delete About Content

  }

?>
