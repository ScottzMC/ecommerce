<?php

  class Admin_dashboard extends CI_Controller{

    public function view_product(){
      $email = $this->session->userdata('uemail');
      $status = $this->session->userdata('ustatus');

      if($status == "Admin"){
        $data['total_order_count'] = $this->Admin_model->display_order_count();

        $config['base_url'] = base_url()."admin_dashboard/view_product";
        $total_row = $this->Admin_model->record_product_count();
        $config['total_rows'] = $total_row;
        $config['per_page'] = 8;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows']/$config['per_page'];
        $config['num_links'] = round($choice);

        $config['full_tag_open'] = '<ul style="margin-left: 100px;" class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';

        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><span><b>';
        $config['cur_tag_close'] = '</b></span></li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $data["product"] = $this->Admin_model->fetch_product_data($config["per_page"], $page);

        $this->load->view('admin/menu/nav', $data);
        $this->load->view('admin/product/view_product', $data);
        $this->load->view('admin/menu/footer');
      }else{
        redirect('home');
      }
    }

    public function delete_product(){
      $pid = $this->input->post('del_id');

      $this->Admin_model->delete_product($pid);
    }
  }

?>
