<?php

  class Edit_product extends CI_Controller{

    public function edit($id){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();
        $data['category_menu'] = $this->Admin_model->display_menu();
        $data['edit_product'] = $this->Admin_model->display_product_by_id($id);

        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[30]|max_length[1000]');

        $form_valid = $this->form_validation->run();

        if($form_valid == FALSE){
          $this->load->view('admin/menu/nav', $data);
          $this->load->view('admin/product/edit_product', $data);
          $this->load->view('admin/menu/footer');
        }else if(!empty($_FILES['userFiles']['name'])){
          $title = $this->input->post('title');
          $price = $this->input->post('price');
          $type = $this->input->post('type');
          $category = $this->input->post('category');
          $description = $this->input->post('description');
          $color = $this->input->post('color');
          $brand = $this->input->post('brand');

          $str_type = str_replace(' ', '-', $type);
          $str_category = str_replace(' ', '-', $category);

          $time = time();
          $date = date('Y-m-j H:i:s');

          $files = $_FILES;
          $cpt1 = count($_FILES['userFiles1']['name']);
          $cpt2 = count($_FILES['userFiles2']['name']);
          $cpt3 = count($_FILES['userFiles3']['name']);
          $cpt4 = count($_FILES['userFiles4']['name']);
          $cpt5 = count($_FILES['userFiles5']['name']);

          for($i=0; $i<$cpt1; $i++){
            $_FILES['userFiles1']['name']= $files['userFiles1']['name'][$i];
            $_FILES['userFiles1']['type']= $files['userFiles1']['type'][$i];
            $_FILES['userFiles1']['tmp_name']= $files['userFiles1']['tmp_name'][$i];
            $_FILES['userFiles1']['error']= $files['userFiles1']['error'][$i];
            $_FILES['userFiles1']['size']= $files['userFiles1']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userFiles1');
            $fileName1 = $_FILES['userFiles1']['name'];
            //$images[] = $fileName;
          }

          for($i=0; $i<$cpt2; $i++){
            $_FILES['userFiles2']['name']= $files['userFiles2']['name'][$i];
            $_FILES['userFiles2']['type']= $files['userFiles2']['type'][$i];
            $_FILES['userFiles2']['tmp_name']= $files['userFiles2']['tmp_name'][$i];
            $_FILES['userFiles2']['error']= $files['userFiles2']['error'][$i];
            $_FILES['userFiles2']['size']= $files['userFiles2']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userFiles2');
            $fileName2 = $_FILES['userFiles2']['name'];
            //$images[] = $fileName;
          }

          for($i=0; $i<$cpt3; $i++){
            $_FILES['userFiles3']['name']= $files['userFiles3']['name'][$i];
            $_FILES['userFiles3']['type']= $files['userFiles3']['type'][$i];
            $_FILES['userFiles3']['tmp_name']= $files['userFiles3']['tmp_name'][$i];
            $_FILES['userFiles3']['error']= $files['userFiles3']['error'][$i];
            $_FILES['userFiles3']['size']= $files['userFiles3']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userFiles3');
            $fileName3 = $_FILES['userFiles3']['name'];
            //$images[] = $fileName;
          }

          for($i=0; $i<$cpt4; $i++){
            $_FILES['userFiles4']['name']= $files['userFiles4']['name'][$i];
            $_FILES['userFiles4']['type']= $files['userFiles4']['type'][$i];
            $_FILES['userFiles4']['tmp_name']= $files['userFiles4']['tmp_name'][$i];
            $_FILES['userFiles4']['error']= $files['userFiles4']['error'][$i];
            $_FILES['userFiles4']['size']= $files['userFiles4']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userFiles4');
            $fileName4 = $_FILES['userFiles4']['name'];
            //$images[] = $fileName;
          }

          for($i=0; $i<$cpt5; $i++){
            $_FILES['userFiles5']['name']= $files['userFiles5']['name'][$i];
            $_FILES['userFiles5']['type']= $files['userFiles5']['type'][$i];
            $_FILES['userFiles5']['tmp_name']= $files['userFiles5']['tmp_name'][$i];
            $_FILES['userFiles5']['error']= $files['userFiles5']['error'][$i];
            $_FILES['userFiles5']['size']= $files['userFiles5']['size'][$i];

            $config = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('userFiles5');
            $fileName5 = $_FILES['userFiles5']['name'];
            //$images[] = $fileName;
          }

          //$fileName = implode(',', $images);

          $pic = array(
            'product_code' => $code,
            'image1' => $fileName1,
            'image2' => $fileName2,
            'image3' => $fileName3,
            'image4' => $fileName4,
            'image5' => $fileName5
          );

          $prod = array(
            'title' => $title,
            'price' => $price,
            'type' => $str_type,
            'category' => $str_category,
            'image' => $fileName1,
            'sold' => 0,
            'created_time' => $time,
            'created_date' => $date
          );

          $det = array(
            'color' => $color,
            'description' => $description,
            'created_time' => $time,
            'created_date' => $date
          );

          $update_product = $this->Admin_model->update_product($id, $prod);
          $update_details = $this->Admin_model->update_details($id, $det);
          $update_image = $this->Admin_model->update_image($id, $pic);

          if($update_product && $update_details && $update_image){
            redirect('admin_dashboard/view_product');
          }else{
            $msgError = '<div class="alert alert-danger>Upload Failed</div>';
            $this->session->set_flashdata('msgError', $msgError);
            $this->load->view('admin/menu/nav', $data);
            $this->load->view('admin/product/edit_product', $data);
            $this->load->view('admin/menu/footer');
          }
        }
      }else{
        redirect('home');
      }
    }
  }

?>
