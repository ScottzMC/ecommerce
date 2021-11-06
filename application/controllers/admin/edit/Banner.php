<?php

  class Banner extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['banner'] = $this->Admin_model->display_banners();
        $data['category_menu'] = $this->Admin_model->display_menu();

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/banner', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    public function get_banner_menu(){
       $type = $this->input->post('banner_type');
       $category = $this->Admin_model->get_menu_banner_category();
       if(count($category) > 0){
         $category_select = '';
         $category_select.= '<option value="">Select Category</option>';
         foreach($category as $cat){
           $category_select .='<option value="'.$cat->category.'">'.$cat->category.'</option>';
         }
         echo json_encode($category_select);
       }
    }

    // Add Banner

    public function add_banner(){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['banner'] = $this->Admin_model->display_banners();
      $data['category_menu'] = $this->Admin_model->display_menu();

      $this->form_validation->set_rules('banner_type', 'Banners Type', 'trim|required');

      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/banner', $data);
        $this->load->view('admin/menu/footer');
      }else if(!empty($_FILES['fileBanner']['name'])){
        $files = $_FILES;
        //$images = array();
        $cpt = count($_FILES['fileBanner']['name']);
        for($i=0; $i<$cpt; $i++){
          $_FILES['fileBanner']['name']= $files['fileBanner']['name'][$i];
          $_FILES['fileBanner']['type']= $files['fileBanner']['type'][$i];
          $_FILES['fileBanner']['tmp_name']= $files['fileBanner']['tmp_name'][$i];
          $_FILES['fileBanner']['error']= $files['fileBanner']['error'][$i];
          $_FILES['fileBanner']['size']= $files['fileBanner']['size'][$i];

          $config = array(
              'upload_path'   => "./uploads/banners/",
              'allowed_types' => "gif|jpg|png|jpeg",
              'overwrite'     => TRUE,
              'max_size'      => "3000",  // Can be set to particular file size
              //'max_height'    => "768",
              //'max_width'     => "1024"
          );

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          $this->upload->do_upload('fileBanner');
          $fileName = $_FILES['fileBanner']['name'];
        }

        $type = $this->input->post('banner_type');

        $add_banner_data = array('image' => $fileName, 'type' => $type);

        $insert_banner = $this->Admin_model->insert_banner($add_banner_data);

        if($insert_banner){
          redirect('admin/edit/banner');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgAddedError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/banner', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Add Banner

    // Edit Banner

    public function edit_banner($id){
      $data['total_order_count'] = $this->Admin_model->display_order_count();
      $data['edit_banner'] = $this->Admin_model->display_banners_by_id($id);
      $data['category_menu'] = $this->Admin_model->display_menu();

      $this->form_validation->set_rules('banner_type', 'Banner Type', 'trim|required');
      $form_valid = $this->form_validation->run();

      if($form_valid == FALSE){
        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/edit/edit_banner', $data);
        $this->load->view('admin/menu/footer');
      }else if(!empty($_FILES['fileBanner']['name'])){
        $files = $_FILES;
        //$images = array();
        $cpt = count($_FILES['fileBanner']['name']);
        for($i=0; $i<$cpt; $i++){
          $_FILES['fileBanner']['name']= $files['fileBanner']['name'][$i];
          $_FILES['fileBanner']['type']= $files['fileBanner']['type'][$i];
          $_FILES['fileBanner']['tmp_name']= $files['fileBanner']['tmp_name'][$i];
          $_FILES['fileBanner']['error']= $files['fileBanner']['error'][$i];
          $_FILES['fileBanner']['size']= $files['fileBanner']['size'][$i];

          $config = array(
              'upload_path'   => "./uploads/banners/",
              'allowed_types' => "gif|jpg|png|jpeg",
              'overwrite'     => TRUE,
              'max_size'      => "3000",  // Can be set to particular file size
              //'max_height'    => "768",
              //'max_width'     => "1024"
          );

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          $this->upload->do_upload('fileBanner');
          $fileName = $_FILES['fileBanner']['name'];
        }

        $type = $this->input->post('banner_type');

        if(!empty($_FILES['fileBanner']['name'])){
          $update_banner_image = $this->Admin_model->update_banner_image($id, $fileName);
          $update_banner_type = $this->Admin_model->update_banner_type($id, $type);
        }
        if($update_banner_type || $update_banner_image){
          $statusMsg = '<div class="alert alert-success" role="alert">Added Slider Details</div>';
          redirect('admin/edit/banner');
        }else{
          $statusMsg = '<div class="alert alert-danger" role="alert">Error!!. Try Again</div>';
          $this->session->set_flashdata('msgEditError', $statusMsg);
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/edit/edit_banner', $data);
          $this->load->view('admin/menu/footer');
        }
      }
    }

    // End of Edit Banner

    // Delete Banners

    public function delete_banner(){
      $id = $this->input->post('banner_id');
      $this->Admin_model->delete_banner($id);
    }

    // End of Delete Banners
  }

?>
