<?php

  class Sort extends CI_Controller{

    // Type

    public function type($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $order = $this->input->post('order');

      switch($order){
        case 'newest-item':
          redirect('sort/newest_type_item/'.strtolower($type));
          break;
        case 'best-seller':
          redirect('sort/best_type_seller/'.strtolower($type));
          break;
        case 'price-asc':
          redirect('sort/price_type_asc/'.strtolower($type));
          break;
        case 'price-desc':
          redirect('sort/price_type_desc/'.strtolower($type));
          break;
      }

      $this->load->view('shop/sort/type');
      //$this->load->view('shop/menu/footer');
    }

    // Newest Items

    public function newest_type_item($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('sort/newest_type_item/'.$type);
      $total_row = $this->Data_model->record_shop_type_count($type);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 12;
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

      $data["sort"] = $this->Data_model->fetch_shop_type_newest_item_data($config["per_page"], $page, $type);

      if(!empty($data['sort'])){
        $this->load->view('shop/sort/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Newest Items

    // Best Seller

    public function best_type_seller($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('sort/best_type_seller/'.$type);
      $total_row = $this->Data_model->record_shop_type_count($type);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 12;
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

      $data["sort"] = $this->Data_model->fetch_shop_type_best_seller_data($config["per_page"], $page, $type);

      if(!empty($data['sort'])){
        $this->load->view('shop/sort/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Best Seller

    // Price High

    public function price_type_asc($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('sort/price_type_asc/'.$type);
      $total_row = $this->Data_model->record_shop_type_count($type);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 12;
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

      $data["sort"] = $this->Data_model->fetch_shop_type_price_asc_data($config["per_page"], $page, $type);

      if(!empty($data['sort'])){
        $this->load->view('shop/sort/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Price High

    // Price Low

    public function price_type_desc($type){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('sort/price_type_asc/'.$type);
      $total_row = $this->Data_model->record_shop_type_count($type);
      $config['total_rows'] = $total_row;
      $config['per_page'] = 12;
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

      $data["sort"] = $this->Data_model->fetch_shop_type_price_desc_data($config["per_page"], $page, $type);

      if(!empty($data['sort'])){
        $this->load->view('shop/sort/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Price Low

    // End of Type

    // Category

    public function category($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $order = $this->input->post('order_category');

      switch($order){
        case 'newest-item':
          redirect('sort/newest_category_item/'.strtolower($type).'/'.strtolower($category));
          break;
        case 'best-seller':
          redirect('sort/best_category_seller/'.strtolower($type).'/'.strtolower($category));
          break;
        case 'price-asc':
          redirect('sort/price_category_asc/'.strtolower($type).'/'.strtolower($category));
          break;
        case 'price-desc':
          redirect('sort/price_category_desc/'.strtolower($type).'/'.strtolower($category));
          break;
      }

      $this->load->view('shop/sort/category');
      //$this->load->view('shop/menu/footer');
    }

    // End of Category

    // Newest Item

    public function newest_category_item($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

        $config['base_url'] = base_url('sort/newest_category_item/'.$type.'/'.$category);
        $total_row = $this->Data_model->record_shop_category_count($type, $category);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 12;
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

        $data["sort"] = $this->Data_model->fetch_shop_category_newest_item_data($config["per_page"], $page, $type, $category);

        if(!empty($data['sort'])){
          $this->load->view('shop/sort/category', $data);
          //$this->load->view('shop/menu/footer');
        }else{
          show_404();
        }

    }

    // End of Newest Item

    // Best Seller

    public function best_category_seller($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

        $config['base_url'] = base_url('sort/best_category_seller/'.$type.'/'.$category);
        $total_row = $this->Data_model->record_shop_category_count($type, $category);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 12;
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

        $data["sort"] = $this->Data_model->fetch_shop_category_best_seller_data($config["per_page"], $page, $type, $category);

        if(!empty($data['sort'])){
          $this->load->view('shop/sort/category', $data);
          //$this->load->view('shop/menu/footer');
        }else{
          show_404();
        }
    }

    // End of Best Seller

    // Price High

    public function price_category_asc($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

        $config['base_url'] = base_url('sort/price_category_asc/'.$type.'/'.$category);
        $total_row = $this->Data_model->record_shop_category_count($type, $category);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 12;
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

        $data["sort"] = $this->Data_model->fetch_shop_category_price_asc_data($config["per_page"], $page, $type, $category);

        if(!empty($data['sort'])){
          $this->load->view('shop/sort/category', $data);
          //$this->load->view('shop/menu/footer');
        }else{
          show_404();
        }
    }

    // End of Price High

    // Price Low

    public function price_category_desc($type, $category){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

        $config['base_url'] = base_url('sort/price_category_desc/'.$type.'/'.$category);
        $total_row = $this->Data_model->record_shop_category_count($type, $category);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 12;
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

        $data["sort"] = $this->Data_model->fetch_shop_category_price_desc_data($config["per_page"], $page, $type, $category);

        if(!empty($data['sort'])){
          $this->load->view('shop/sort/category', $data);
          //$this->load->view('shop/menu/footer');
        }else{
          show_404();
        }
    }

    // End of Price Low

  }

?>
