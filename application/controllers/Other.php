<?php

  class Other extends CI_Controller{

    // Type

    // Brand

    public function brand_type($type, $brand){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('product/brand_type/'.$type.'/'.$brand);
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

      $data['other'] = $this->Data_model->fetch_brand_type_data($config["per_page"], $page, $type, $brand);

      if(!empty($data['other'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/other/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Brand

    // Color

    public function color_type($type, $color){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('product/color_type/'.$type.'/'.$color);
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

      $data['other'] = $this->Data_model->fetch_color_type_data($config["per_page"], $page, $type, $color);

      if(!empty($data['other'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/other/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Color

    // Size

    public function size_type($type, $size){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

      $config['base_url'] = base_url('product/size_type/'.$type.'/'.$size);
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

      $data['other'] = $this->Data_model->fetch_size_type_data($config["per_page"], $page, $type, $size);

      if(!empty($data['other'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/other/type', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Size

    // End of Type

    // Category

    // Brand

    public function brand_category($type, $category, $brand){
      if (!$this->cart->contents()){
          $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
      }else{
          $data['message'] = $this->session->flashdata('message');
      }

      $config['base_url'] = base_url('product/brand_category/'.$type.'/'.$category.'/'.$brand);
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

      $data['other'] = $this->Data_model->fetch_brand_category_data($config["per_page"], $page, $type, $category, $brand);

      if(!empty($data['other'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/other/category', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Brand

    // Color

    public function color_category($type, $category, $color){
      if (!$this->cart->contents()){
			    $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
		  }else{
			    $data['message'] = $this->session->flashdata('message');
		  }

        $config['base_url'] = base_url('sort/color_category/'.$type.'/'.$category.'/'.$color);
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

        $data["other"] = $this->Data_model->fetch_color_category_data($config["per_page"], $page, $type, $category, $color);

        if(!empty($data['other'])){
          $this->load->view('shop/other/category', $data);
          //$this->load->view('shop/menu/footer');
        }else{
          show_404();
        }
    }

    // End of Color

    // Size

    public function size_category($type, $category, $size){
      if (!$this->cart->contents()){
          $data['message'] = '<p><div class="alert alert-danger" role="alert">Your cart is empty!</div></p>';
      }else{
          $data['message'] = $this->session->flashdata('message');
      }

      $config['base_url'] = base_url('product/size_category/'.$type.'/'.$category.'/'.$size);
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

      $data['other'] = $this->Data_model->fetch_size_category_data($config["per_page"], $page, $type, $category, $size);

      if(!empty($data['other'])){
        //$this->load->view('shop/menu/nav');
        $this->load->view('shop/other/category', $data);
        //$this->load->view('shop/menu/footer');
      }else{
        show_404();
      }
    }

    // End of Size

    // End of Category
  }

?>
