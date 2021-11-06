<?php

  class Add_product extends CI_Controller{

    public function index(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();

        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('price', 'Price', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');

        $form_valid = $this->form_validation->run();
        $submit_btn = $this->input->post('upload');

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/product/add_product');
        $this->load->view('admin/menu/footer');

        if(isset($submit_btn)){
          $shuffle = str_shuffle("ABCDUVXY");
          $unique = rand(000, 999);
          $code = $shuffle.$unique;

          $title = $this->input->post('title');
          $price = $this->input->post('price');
          $type = $this->input->post('type');
          $category = $this->input->post('category');
          $description = $this->input->post('description');
          $color = $this->input->post('color');
          $brand = $this->input->post('brand');
          $size = $this->input->post('size');

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

            $config1 = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            $this->upload->do_upload('userFiles1');
            $fileName1 = $_FILES['userFiles1']['name'];
            //$images[] = $fileName1;
          }

          //$fileName1 = implode(',', $images);

          for($i=0; $i<$cpt2; $i++){
            $_FILES['userFiles2']['name']= $files['userFiles2']['name'][$i];
            $_FILES['userFiles2']['type']= $files['userFiles2']['type'][$i];
            $_FILES['userFiles2']['tmp_name']= $files['userFiles2']['tmp_name'][$i];
            $_FILES['userFiles2']['error']= $files['userFiles2']['error'][$i];
            $_FILES['userFiles2']['size']= $files['userFiles2']['size'][$i];

            $config2 = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config2);
            $this->upload->initialize($config2);

            $this->upload->do_upload('userFiles2');
            $fileName2 = $_FILES['userFiles2']['name'];
            //$images[] = $fileName2;
          }

          //$fileName2 = implode(',', $images);

          for($i=0; $i<$cpt3; $i++){
            $_FILES['userFiles3']['name']= $files['userFiles3']['name'][$i];
            $_FILES['userFiles3']['type']= $files['userFiles3']['type'][$i];
            $_FILES['userFiles3']['tmp_name']= $files['userFiles3']['tmp_name'][$i];
            $_FILES['userFiles3']['error']= $files['userFiles3']['error'][$i];
            $_FILES['userFiles3']['size']= $files['userFiles3']['size'][$i];

            $config3 = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config3);
            $this->upload->initialize($config3);

            $this->upload->do_upload('userFiles3');
            $fileName3 = $_FILES['userFiles3']['name'];
            //$images[] = $fileName3;
          }

          //$fileName3 = implode(',', $images);

          for($i=0; $i<$cpt4; $i++){
            $_FILES['userFiles4']['name']= $files['userFiles4']['name'][$i];
            $_FILES['userFiles4']['type']= $files['userFiles4']['type'][$i];
            $_FILES['userFiles4']['tmp_name']= $files['userFiles4']['tmp_name'][$i];
            $_FILES['userFiles4']['error']= $files['userFiles4']['error'][$i];
            $_FILES['userFiles4']['size']= $files['userFiles4']['size'][$i];

            $config4 = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config4);
            $this->upload->initialize($config4);

            $this->upload->do_upload('userFiles4');
            $fileName4 = $_FILES['userFiles4']['name'];
            //$images[] = $fileName4;
          }

          //$fileName4 = implode(',', $images);

          for($i=0; $i<$cpt5; $i++){
            $_FILES['userFiles5']['name']= $files['userFiles5']['name'][$i];
            $_FILES['userFiles5']['type']= $files['userFiles5']['type'][$i];
            $_FILES['userFiles5']['tmp_name']= $files['userFiles5']['tmp_name'][$i];
            $_FILES['userFiles5']['error']= $files['userFiles5']['error'][$i];
            $_FILES['userFiles5']['size']= $files['userFiles5']['size'][$i];

            $config5 = array(
                'upload_path'   => "./uploads/products/",
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite'     => TRUE,
                'max_size'      => "3000",  // Can be set to particular file size
                //'max_height'    => "768",
                //'max_width'     => "1024"
            );

            $this->load->library('upload', $config5);
            $this->upload->initialize($config5);

            $this->upload->do_upload('userFiles5');
            $fileName5 = $_FILES['userFiles5']['name'];
            //$images[] = $fileName5;
          }

          //$fileName5 = implode(',', $images);

          $pic = array(
            'product_code' => $code,
            'image1' => $fileName1,
            'image2' => $fileName2,
            'image3' => $fileName3,
            'image4' => $fileName4,
            'image5' => $fileName5
          );

          $pdc = 1;

          $prod = array(
            'product_code' => $code,
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
            'product_code' => $code,
            'brand' => $brand,
            'color' => $color,
            'size' => $size,
            'description' => $description,
            'created_time' => $time,
            'created_date' => $date
          );

          $insert_product = $this->Admin_model->insert_product($prod);
          $insert_details = $this->Admin_model->insert_details($det);
          $insert_image = $this->Admin_model->insert_image($pic);

          if($insert_product && $insert_details && $insert_image){
            redirect('admin_dashboard/view_product');
          }else{
            $msgError = '<div class="alert alert-danger>Upload Failed</div>';
            $this->session->set_flashdata('msgError', $msgError);
            $this->load->view('admin/menu/nav', $data);
            $this->load->view('admin/product/add_products', $data);
            $this->load->view('admin/menu/footer');
          }
        }
      }else{
        redirect('home');
      }
    }

    // Summer note

    public function saveFile(){
      if ($_FILES['image']['name']) {
       if (!$_FILES['image']['error']) {
           $ext = explode('.', $_FILES['image']['name']);
           $filename = underscore($ext[0]) . '.' . $ext[1];
           $destination = './uploads/products/' . $filename; //change path of the folder...
           $location = $_FILES["image"]["tmp_name"];
           move_uploaded_file($location, $destination);
           echo base_url() . 'uploads/products/' . $filename;
       } else {
           echo $message = 'The following error occured:  ' . $_FILES['image']['error'];
       }
     }
   }

    // End of Summer note

    public function get_banner_menu(){
       $type = $this->input->post('banner_type');
       $category = $this->Admin_model->display_menu();
       if(count($category) > 0){
         $category_select = '';
         $category_select.= '<option value="">Select Category</option>';
         foreach($category as $cat){
           $category_select .='<option value="'.$cat->category.'">'.$cat->category.'</option>';
         }
         echo json_encode($category_select);
       }
    }
  }

?>
