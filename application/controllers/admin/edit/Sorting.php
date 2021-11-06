<?php

  class Sorting extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['sorting'] = $this->Admin_model->display_sorting();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/sorting', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    // Add Sorting

    public function add_sorting(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['sorting'] = $this->Admin_model->display_sorting();

      $this->form_validation->set_rules('type', 'Type', 'trim|required');
      $this->form_validation->set_rules('sorting', 'Sorting List', 'trim|required');
      $this->form_validation->set_rules('options', 'Sorting Options', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/sorting', $data);
        $this->load->view('admin/menu/footer');
      }else{
        $type = $this->input->post('type');
        $category = $this->input->post('category');
        $sorting = $this->input->post('sorting');
        $options = $this->input->post('options');

        $str_type = str_replace(' ', '-', $type);
        $str_category = str_replace(' ', '-', $category);
        $str_sorting = str_replace(' ', '-', $sorting);
        $str_options = str_replace(' ', '-', $options);

        $add_sorting = array('type' => $str_type, 'category' => $str_category, 'sort' => $str_sorting, 'options' => $str_options);
        $insert_sorting = $this->Admin_model->insert_sorting($add_sorting);

        if($insert_sorting){
          redirect('admin/edit/sorting');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgSortingError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/sorting', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Sorting

    // Edit Sorting

    public function edit_sorting($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['edit_sorting'] = $this->Admin_model->display_sorting_by_id($id);

      $this->form_validation->set_rules('type', 'Type', 'trim|required');
      $this->form_validation->set_rules('sorting', 'Sorting List', 'trim|required');
      $this->form_validation->set_rules('options', 'Sorting Options', 'trim|required');
      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('edit');

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_sorting', $data);
        $this->load->view('admin/menu/footer');
      }
      if(isset($submit)){
        $sorting = $this->input->post('sorting');
        $options = $this->input->post('options');

        $update_sorting_info = $this->Admin_model->update_sorting_info($id, $sorting);
        $update_options_info = $this->Admin_model->update_options_info($id, $options);

        if(!empty($update_sorting_info) && !empty($update_options_info)){
          redirect('admin/edit/sorting');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_sorting', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Sorting

    // Delete Sorting

    public function delete_sorting(){
      $id = $this->input->post('sorting_id');

      $this->Admin_model->delete_sorting($id);
    }

    // End of Delete Sorting
  }

?>
