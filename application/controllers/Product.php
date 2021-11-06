<?php

  class Product extends CI_Controller{

    public function detail($code){
      $data['detail'] = $this->Data_model->display_product_detail($code);

      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $data['review'] = $this->Data_model->display_product_review($code);

      $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
      $this->form_validation->set_rules('message', 'Message', 'trim|required');
      $this->form_validation->set_rules('rating', 'Rating', 'trim|required');

      $form_valid = $this->form_validation->run();
      $submit = $this->input->post('submit');

      if(!empty($data['detail'])){
        if($form_valid == FALSE){
          //$this->load->view('shop/menu/nav');
          $this->load->view('shop/product/detail', $data);
          //$this->load->view('shop/menu/footer');
        }

        if(isset($submit)){
          $fullname = $this->input->post('fullname');
          $email = $this->input->post('email');
          $message = $this->input->post('message');
          $rating = $this->input->post('rating');
          $time = time();
          $date = date('Y-m-d H:i:s');

          $query = $this->db->query("SELECT product_code, title FROM product WHERE product_code = '$code' ")->result();
          foreach($query as $qry){
            $product_code = $qry->product_code;
            $product_title = $qry->title;
          }

          $add_array = array(
            'product_code' => $product_code,
            'product_title' => $product_title,
            'rating' => $rating,
            'fullname' => $fullname,
            'email' => $email,
            'message' => $message,
            'created_time' => $time,
            'created_date' => $date
          );

          $add_data = $this->Data_model->insert_product_detail_review($add_array);

          if($add_data){ ?>
            <script>
              alert('Message Sent');
              window.location.href="<?php echo base_url('product/detail/'.$code); ?>";
            </script>
    <?php }else{
            $statusMsg = '<div class="alert alert-danger>Review Failed</div>';
            $this->session->set_flashdata('msgError', $statusMsg);
            //$this->load->view('site/menu/nav', $data);
            $this->load->view('site/product/detail', $data);
            //$this->load->view('site/menu/footer');
          }
        }
      }else{
        show_404();
      }
    }

    // Type

    public function type($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('product/type/'.$type);
      $total_row = $this->Data_model->record_shop_type_count($type);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 9;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows']/$config['per_page'];
      $config['num_links'] = round($choice);

      $config['full_tag_open'] = '<ul class="kenne-pagination-box primary-color">';
      $config['full_tag_close'] = '</ul>';

      $config['first_tag_open'] = '<li><a>';
      $config['last_tag_open'] = '<li><a>';

      $config['next_tag_open'] = '<li><a>';
      $config['prev_tag_open'] = '<li><a>';

      $config['num_tag_open'] = '<li><a>';
      $config['num_tag_close'] = '</a></li>';

      $config['first_tag_close'] = '</a></li>';
      $config['last_tag_close'] = '</a></li>';

      $config['next_tag_close'] = '</a></li>';
      $config['prev_tag_close'] = '</a></li>';

      $config['cur_tag_open'] = '<li><a>';
      $config['cur_tag_close'] = '</a></li>';

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

      $data['type'] = $this->Data_model->fetch_shop_type_data($config["per_page"], $page, $type);

      if(!empty($data['type'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/product/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Type

    // Category

    public function category($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('product/category/'.$type.'/'.$category);
      $total_row = $this->Data_model->record_shop_category_count($type, $category);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 9;
      $config['uri_segment'] = 5;
      $choice = $config['total_rows']/$config['per_page'];
      $config['num_links'] = round($choice);

      $config['full_tag_open'] = '<ul class="kenne-pagination-box primary-color">';
      $config['full_tag_close'] = '</ul>';

      $config['first_tag_open'] = '<li><a>';
      $config['last_tag_open'] = '<li><a>';

      $config['next_tag_open'] = '<li><a>';
      $config['prev_tag_open'] = '<li><a>';

      $config['num_tag_open'] = '<li><a>';
      $config['num_tag_close'] = '</a></li>';

      $config['first_tag_close'] = '</a></li>';
      $config['last_tag_close'] = '</a></li>';

      $config['next_tag_close'] = '</a></li>';
      $config['prev_tag_close'] = '</a></li>';

      $config['cur_tag_open'] = '<li><a>';
      $config['cur_tag_close'] = '</a></li>';

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

      $data['category'] = $this->Data_model->fetch_shop_category_data($config["per_page"], $page, $type, $category);

      if(!empty($data['category'])){
        $this->load->view('shop/product/category', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Category

    // Search

    public function search(){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $search_query = $this->input->post('search_query');

      $config['base_url'] = base_url()."product/search";
      $total_row = $this->Data_model->record_search_count();
      $config['total_rows'] = $total_row;
      $config['per_page'] = 24;
      $config['uri_segment'] = 4;
      $choice = $config['total_rows']/$config['per_page'];
      $config['num_links'] = round($choice);

      $config['full_tag_open'] = '<ul class="kenne-pagination-box primary-color">';
      $config['full_tag_close'] = '</ul>';

      $config['first_tag_open'] = '<li><a>';
      $config['last_tag_open'] = '<li><a>';

      $config['next_tag_open'] = '<li><a>';
      $config['prev_tag_open'] = '<li><a>';

      $config['num_tag_open'] = '<li><a>';
      $config['num_tag_close'] = '</a></li>';

      $config['first_tag_close'] = '</a></li>';
      $config['last_tag_close'] = '</a></li>';

      $config['next_tag_close'] = '</a></li>';
      $config['prev_tag_close'] = '</a></li>';

      $config['cur_tag_open'] = '<li><a>';
      $config['cur_tag_close'] = '</a></li>';

      $this->pagination->initialize($config);

      $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0;

      $data["search"] = $this->Data_model->fetch_search_data($config["per_page"], $page, $search_query);

      if(!empty($data['search'])){
        $this->load->view('shop/product/search', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Search
  }

?>
