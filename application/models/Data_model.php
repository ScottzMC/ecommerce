<?php

  class Data_model extends CI_Model{

    // Login

    public function validate($email, $password){
    	$escape_email = $this->db->escape_str($email);
      $escape_password = $this->db->escape_str($password);

	  	$this->db->where('email', $escape_email);
    	$query = $this->db->get('users');
      $query_dets = $this->db->get('user_details');

    	if($query->num_rows() > 0){
      	$result = $query->row_array();
      	if($this->bcrypt->check_password($escape_password, $result['password'])){
		    	return $query->result();
      	}else{
        		return array();
      	}
    	}else{
      	return NULL;
    	}
  	}

    // End of Login

    // Register

    public function create_user($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('users', $escape_data);
      return $query;
    }

    public function create_user_details($data){
      $escape_data = $this->db->escape_str($data);
      $query = $this->db->insert('user_details', $escape_data);
      return $query;
    }

    // End of Register

    // Home

    public function display_home_new(){
      $query = $this->db->query("SELECT product.id, product.product_code, product.title, product.type, product.category, product.price, product.type,
      product.category, image.product_code, image.image1, image.image2 FROM product INNER JOIN image ON product.product_code = image.product_code
      ORDER BY product.created_date DESC LIMIT 8")->result();
      return $query;
    }

    public function display_home_best(){
      $query = $this->db->query("SELECT product.id, product.product_code, product.title, product.type, product.category, product.price, product.type,
      product.category, image.product_code, image.image1, image.image2 FROM product INNER JOIN image ON product.product_code = image.product_code
      ORDER BY product.sold DESC LIMIT 8")->result();
      return $query;
    }

    // End of Home

    // About

    public function display_about(){
      $query = $this->db->get('about_content')->result();
      return $query;
    }

    // End of About

    // FAQ

    public function display_faq(){
      $query = $this->db->get('faq_content')->result();
      return $query;
    }

    // End of FAQ

    // Policy

    public function display_policy(){
      $query = $this->db->get('return_policy')->result();
      return $query;
    }

    // End of Policy

    // Contact

    public function insert_contact_details($data){
      $query = $this->db->insert('contact', $data);
      return $query;
    }

    // End of Contact

    // Product

    public function display_product_detail($product_code){
      $query = $this->db->query("SELECT product.product_code, product.id, product.title, product.price, product.type, product.category,
      image.product_code, image.image1, image.image2, image.image3, image.image4, image.image5, product_details.product_code, product_details.brand,
      product_details.color, product_details.size, product_details.description FROM product INNER JOIN product_details ON
      product.product_code = product_details.product_code INNER JOIN image ON product.product_code = image.product_code WHERE
      product.product_code = '$product_code'")->result();
      return $query;
    }

    public function insert_product_detail_review($data){
      $query = $this->db->insert('product_review', $data);
      return $query;
    }

    public function display_product_review($code){
      $this->db->where('product_code', $code);
      $query = $this->db->get('product_review')->result();
      return $query;
    }

    // End of Product

    // Type

    public function record_shop_type_count($type){
      $this->db->from('product');
      $this->db->where('type', $type);
      $query = $this->db->count_all_results();
      return $query;
    }

    public function fetch_shop_type_data($limit, $start, $type){
     $this->db->limit($limit, $start);
     $this->db->order_by('created_date', 'DESC');
     $this->db->where('type', $type);
     $query = $this->db->get("product");

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
   }

    // End of Type

    // Category

    public function record_shop_category_count($type, $category){
      $this->db->from('product');
      $this->db->where('type', $type);
      $this->db->where('category', $category);
      $query = $this->db->count_all_results();
      return $query;
    }

    public function fetch_shop_category_data($limit, $start, $type, $category){
      $this->db->limit($limit, $start);
      $this->db->order_by('created_date', 'DESC');
      $this->db->where('type', $type);
      $this->db->where('category', $category);
      $query = $this->db->get("product");

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
   }

    // End of Category

    // Search

      public function record_search_count() {
        $query = $this->db->count_all("product");
        return $query;
      }

     public function fetch_search_data($limit, $start, $title){
       $this->db->limit($limit, $start);
       $query = $this->db->query("SELECT product.id, product.product_code, product.title, product.price, product.type, product.category,
       product_details.product_code, product_details.color, product_details.description, image.product_code, image.image1, image.image2
       FROM product INNER JOIN product_details ON product.product_code = product_details.product_code INNER JOIN image ON
       product.product_code = image.product_code WHERE product.title LIKE '%$title%' ")->result();
       return $query;
     }

    // End of Search

    // Sort

    // Newest Items

    public function fetch_shop_type_newest_item_data($limit, $start, $type){
     $this->db->limit($limit, $start);
     $this->db->order_by('created_date', 'DESC');;
     $this->db->order_by('price', 'ASC');
     $this->db->where('type', $type);
     $query = $this->db->get('product');

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

     public function fetch_shop_category_newest_item_data($limit, $start, $type, $category){
      $this->db->limit($limit, $start);
      $this->db->order_by('created_date', 'DESC');;
      $this->db->where('type', $type);
      $this->db->where('category', $category);
      $query = $this->db->get("product");

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
    }

    // Best Seller

    public function fetch_shop_type_best_seller_data($limit, $start, $type){
     $this->db->limit($limit, $start);
     $this->db->order_by('sold', 'DESC');;
     $this->db->where('type', $type);
     $query = $this->db->get("product");

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

     public function fetch_shop_category_best_seller_data($limit, $start, $type, $category){
      $this->db->limit($limit, $start);
      $this->db->order_by('sold', 'DESC');
      $this->db->where('type', $type);
      $this->db->where('category', $category);
      $query = $this->db->get("product");

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
    }

    // End of Best Seller

    // Price High

      public function fetch_shop_type_price_asc_data($limit, $start, $type){
       $this->db->limit($limit, $start);
       $this->db->order_by('price', 'ASC');
       $this->db->where('type', $type);
       $query = $this->db->get("product");

       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false;
     }

       public function fetch_shop_category_price_asc_data($limit, $start, $type, $category){
        $this->db->limit($limit, $start);
        $this->db->order_by('price', 'ASC');
        $this->db->where('type', $type);
        $this->db->where('category', $category);
        $query = $this->db->get("product");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
      }

    // End of Price High

    // Price Low

      public function fetch_shop_type_price_desc_data($limit, $start, $type){
       $this->db->limit($limit, $start);
       $this->db->order_by('price', 'DESC');
       $this->db->where('type', $type);
       $query = $this->db->get("product");

       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false;
     }

     public function fetch_shop_category_price_desc_data($limit, $start, $type, $category){
      $this->db->limit($limit, $start);
      $this->db->order_by('price', 'DESC');
      $this->db->where('type', $type);
      $this->db->where('category', $category);
      $query = $this->db->get("product");

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
    }

    // End of Price Low

    // End of Sort

    // Other

    // Brand

    public function fetch_brand_type_data($limit, $start, $type, $brand){
      $this->db->select('*');
      $this->db->from('product');
      $this->db->join('product_details', 'product_details.product_code = product.product_code');
      $this->db->where('product.type', $type);
      $this->db->where('product_details.brand', $brand);
      $this->db->limit($limit, $start);
      $query = $this->db->get();

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
    }

    public function fetch_brand_category_data($limit, $start, $type, $category, $brand){
      $this->db->select('*');
      $this->db->from('product');
      $this->db->join('product_details', 'product_details.product_code = product.product_code');
      $this->db->where('product.type', $type);
      $this->db->where('product.category', $category);
      $this->db->where('product_details.brand', $brand);
      $this->db->limit($limit, $start);
      $query = $this->db->get();

      if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
              $data[] = $row;
          }
          return $data;
      }
      return false;
    }

    // End of Brand

    // Color

    public function fetch_color_type_data($limit, $start, $type, $color){
     $this->db->select('*');
     $this->db->from('product');
     $this->db->join('product_details', 'product_details.product_code = product.product_code');
     $this->db->where('product.type', $type);
     $this->db->where('product_details.color', $color);
     $this->db->limit($limit, $start);
     $query = $this->db->get();

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

    public function fetch_color_category_data($limit, $start, $type, $category, $color){
     $this->db->select('*');
     $this->db->from('product');
     $this->db->join('product_details', 'product_details.product_code = product.product_code');
     $this->db->where('product.type', $type);
     $this->db->where('product.category', $category);
     $this->db->where('product_details.color', $color);
     $this->db->limit($limit, $start);
     $query = $this->db->get();

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

    // End of Color

    // Size

    public function fetch_size_type_data($limit, $start, $type, $size){
     $this->db->select('*');
     $this->db->from('product');
     $this->db->join('product_details', 'product_details.product_code = product.product_code');
     $this->db->where('product.type', $type);
     $this->db->where('product_details.size', $size);
     $this->db->limit($limit, $start);
     $query = $this->db->get();

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

    public function fetch_size_category_data($limit, $start, $type, $category, $size){
     $this->db->select('*');
     $this->db->from('product');
     $this->db->join('product_details', 'product_details.product_code = product.product_code');
     $this->db->where('product.type', $type);
     $this->db->where('product.category', $category);
     $this->db->where('product_details.size', $size);
     $this->db->limit($limit, $start);
     $query = $this->db->get();

     if ($query->num_rows() > 0) {
         foreach ($query->result() as $row) {
             $data[] = $row;
         }
         return $data;
     }
     return false;
    }

    // End of Size

    // End of Other

    // Shopping Cart

    public function update_cart($rowid, $qty, $price, $amount) {
 		   $data = array(
			   'rowid'   => $rowid,
			   'qty'     => $qty,
			   'price'   => $price,
			   'amount'  => $amount
		 );

		  $this->cart->update($data);
	  }

    // End of Shopping Cart

    // Checkout

    public function display_shipping_details($email){
      $this->db->where('email', $email);
      return $this->db->get('user_details')->result();
    }

    public function update_customer_shipping_firstname($prev_email, $firstname){
      return $this->db->query("UPDATE user_details SET firstname = '$firstname' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_lastname($prev_email, $lastname){
      return $this->db->query("UPDATE user_details SET lastname = '$lastname' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_email($prev_email, $customer_email){
      return $this->db->query("UPDATE user_details SET email = '$customer_email' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_telephone($prev_email, $telephone){
      return $this->db->query("UPDATE user_details SET telephone = '$telephone' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_address($prev_email, $address1){
      return $this->db->query("UPDATE user_details SET address = '$address1' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_town($prev_email, $region){
      return $this->db->query("UPDATE user_details SET town = '$region' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_postcode($prev_email, $postcode){
      return $this->db->query("UPDATE user_details SET postcode = '$postcode' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_county($prev_email, $county){
      return $this->db->query("UPDATE user_details SET county = '$county' WHERE email = '$prev_email' ");
    }

    public function update_customer_shipping_country($prev_email, $country){
      return $this->db->query("UPDATE user_details SET country = '$country' WHERE email = '$prev_email' ");
    }

    public function insert_order_detail($data){
  		$this->db->insert('order_items', $data);
  	}
  	
  	public function update_user_fund($amount, $email){
      $query = $this->db->query("UPDATE users SET fund = fund - '$amount' WHERE email = '$email' ");
      return $query;
    }

    // End of Checkout

    // Wishlist

    public function add_wishlist($data){
      $query = $this->db->insert('wishlist', $data);
    }

    public function display_wishlist($customer_email){
      $this->db->where('email', $customer_email);
      $query = $this->db->get("wishlist")->result();
      return $query;
    }

    public function delete_wishlist($id){
      $this->db->where('id', $id);
      $query = $this->db->delete('wishlist');
    }

    // End of Wishlist

    // Order Items

    public function display_order_items($email){
      $this->db->where('email', $email);
      $query = $this->db->get('order_items')->result();
      return $query;
    }

    // End of Order Items

    // Ewallet

    public function display_user_ewallet_by_email($email){
      $this->db->where('email', $email);
      $query = $this->db->get('users')->result();
      return $query;
    }

    public function display_membership(){
      $query = $this->db->get("membership")->result();
      return $query;
    }
    
    public function display_temp_fund($email){
        $this->db->where('email', $email);
        $query = $this->db->get('users')->result();
        return $query;
    }

    public function deposit_fund($amount, $email){
      $query = $this->db->query("UPDATE users SET fund = fund + '$amount' WHERE email = '$email' ");
      return $query;
    }
    
    public function deposit_temp_fund($amount, $email){
      $query = $this->db->query("UPDATE users SET temp_fund = temp_fund + '$amount' WHERE email = '$email' ");
      return $query;
    }
    
    public function reduce_temp_fund($email){
      $query = $this->db->query("UPDATE users SET temp_fund = 0 WHERE email = '$email' ");
      return $query;
    }

    public function update_customer_ewallet($email, $total){
      $query = $this->db->query("UPDATE users SET fund = fund - '$total' WHERE email = '$email' ");
      return $query;
    }

    // End of Ewallet

    // Membership

    public function add_membership_order($data){
      $query = $this->db->insert('membership_order', $data);
      return $query;
    }

    public function update_user_payment($price, $email){
      $query = $this->db->query("UPDATE users SET fund = fund - '$price' WHERE email = '$email' ");
      return $query;
    }

    public function update_user_membership($data, $email){
      $this->db->where('email', $email);
      $query = $this->db->update('users', $data);
      return $query;
    }

    // End of Membership

  }

?>
