<?php

  class Menu extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['menu'] = $this->Admin_model->display_menu();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/menu', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Menu

    public function add_menu(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['menu'] = $this->Admin_model->display_menu();

      $this->form_validation->set_rules('type', 'Type', 'trim|required');
      $this->form_validation->set_rules('category', 'Category', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/menu', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $type = $this->input->post('type');
        $category = $this->input->post('category');

        $str_type = str_replace(' ', '-', $type);
        $str_category = str_replace(' ', '-', $category);

        $add_menu = array('type' => $str_type, 'category' => $str_category);
        $insert_menu = $this->Admin_model->insert_menu($add_menu);

        if($insert_menu){
          redirect('admin/edit/menu');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgMenuError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/menu', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Menu

    // Edit Menu

    public function edit_menu($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['edit_menu'] = $this->Admin_model->display_menu_by_id($id);

      $this->form_validation->set_rules('type', 'Type', 'trim|required');
      $this->form_validation->set_rules('category', 'Category', 'trim|required');
      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_menu', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $type = $this->input->post('type');
        $category = $this->input->post('category');

        $update_type_info = $this->Admin_model->update_type_info($id, $type);
        $update_category_info = $this->Admin_model->update_category_info($id, $category);

        if(!empty($update_type_info) || !empty($update_category_info)){
          redirect('admin/edit/menu');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_menu', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Menu

    // Delete About Content

    public function delete_menu(){
      $id = $this->input->post('menu_id');

      $this->Admin_model->delete_menu($id);
    }

    // End of Delete Menu
  }

?>
