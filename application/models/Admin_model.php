<?php

  class Admin_model extends CI_Model{

    // Dashboard

    public function display_user_count(){
      $query = $this->db->query("SELECT COUNT(*) AS user_count FROM users")->result();
      return $query;
    }

    public function display_order_count(){
      $query = $this->db->query("SELECT COUNT(*) AS order_count FROM order_items")->result();
      return $query;
    }

    public function display_product_count(){
      $query = $this->db->query("SELECT COUNT(*) AS product_count FROM product")->result();
      return $query;
    }

    public function display_all_users(){
      $query = $this->db->query("SELECT * FROM users ORDER BY created_date DESC")->result();
      return $query;
    }

    public function display_all_products(){
      $query = $this->db->query("SELECT product.product_code, product.title, product.price, product.created_time, product.created_date,
      image.product_code, image.image1, image.image2 FROM product INNER JOIN image ON product.product_code = image.product_code
      ORDER BY product.created_date DESC ")->result();
      return $query;
    }

    public function display_all_orders(){
      $query = $this->db->query("SELECT order_items.id, order_items.email, order_items.order_id, order_items.title, order_items.price,
      order_items.quantity, order_items.status, order_items.created_time, order_items.created_date, user_details.email,
      user_details.firstname, user_details.lastname, user_details.telephone, user_details.address, user_details.town,
      user_details.county FROM order_items INNER JOIN user_details ON order_items.email = user_details.email ORDER BY
      order_items.created_date DESC")->result();
      return $query;
    }

    // End of Dashboard

    // Product

    public function record_product_count() {
        $query = $this->db->count_all("product");
        return $query;
    }

    public function fetch_product_data($limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get("product");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function display_product_by_id($id){
     $query = $this->db->query("SELECT product.product_code, product.id, product.title, product.price, product_details.product_code,
     product_details.color, product_details.brand, product_details.size, product_details.description, image.product_code,
     image.image1 FROM product INNER JOIN product_details ON product.product_code = product_details.product_code INNER JOIN
     image.product_code ON product.product_code = image.product_code WHERE product.id = '$id' ")->result();
     return $query;
   }

   public function insert_product($data){
     $query = $this->db->insert('product', $data);
     return $query;
   }

   public function insert_details($data){
     $query = $this->db->insert('product_details', $data);
     return $query;
   }

   public function insert_image($data){
     $query = $this->db->insert('image', $data);
     return $query;
   }

   public function update_product($id, $data){
     $this->db->where('id', $id);
     $query = $this->db->update('product', $data);
     return $query;
   }

   public function update_details($id, $data){
     $this->db->where('id', $id);
     $query = $this->db->update('product_details', $data);
     return $query;
   }

   public function update_image($id, $data){
     $this->db->where('id', $id);
     $query = $this->db->update('image', $data);
     return $query;
   }

   public function delete_product($id){
      $query = $this->db->query("DELETE FROM product WHERE id = '$id' ");
      $querypd = $this->db->query("DELETE FROM product_details WHERE id = '$id' ");
    }

    // End of Product

    // Orders

    public function cancel_order($id, $status){
      $query = $this->db->query("UPDATE order_items SET status = '$status' WHERE id = '$id' ");
    }

    public function deliver_order($id, $status){
      $query = $this->db->query("UPDATE order_items SET status = '$status' WHERE id = '$id' ");
    }

    public function delete_order($id){
      $query = $this->db->query("DELETE FROM order_items WHERE id = '$id' ");
    }

    public function display_invoice_item($order_id){
      $this->db->where('order_id', $order_id);
      $query = $this->db->get('order_items')->result();
      return $query;
    }

    public function display_all_invoice($email){
      $this->db->where('email', $email);
      $query = $this->db->get('users_details')->result();
      return $query;
    }

    // End of Orders

     // Edit Banners

    public function get_menu_banner_category(){
      //$this->db->where('type', $type);
      $query = $this->db->get('menu')->result();
      return $query;
    }

    public function display_banners(){
      $query = $this->db->get('banner')->result();
      return $query;
    }

    public function display_banners_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('banner')->result();
      return $query;
    }

    public function update_banner_image($id, $image){
      $query = $this->db->query("UPDATE banner SET image = '$image' WHERE id = '$id' ");
      return $query;
    }

    public function update_banner_type($id, $type){
      $query = $this->db->query("UPDATE banner SET type = '$type' WHERE id = '$id' ");
      return $query;
    }

    public function insert_banner($data){
      $query = $this->db->insert('banner', $data);
      return $query;
    }

    public function delete_banner($id){
      $query = $this->db->query("DELETE FROM banner WHERE id = '$id' ");
      return $query;
    }

     // End of Edit Banners

     // Edit Menu

     public function display_menu(){
      $query = $this->db->get('menu')->result();
      return $query;
    }

    public function display_menu_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('menu')->result();
      return $query;
    }

    public function insert_menu($data){
      $query = $this->db->insert('menu', $data);
      return $query;
    }

    public function update_type_info($id, $type){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE menu SET type = '$type' ");
      return $query;
    }

    public function update_category_info($id, $category){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE menu SET category = '$category' ");
      return $query;
    }

    public function delete_menu($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("menu");
      return $query;
    }

     // End of Edit Menu

     // Edit Sorting

     public function display_sorting(){
      $query = $this->db->get('sorting')->result();
      return $query;
    }

    public function display_sorting_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('sorting')->result();
      return $query;
    }

    public function update_sorting_type_info($id, $type){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE sorting SET type = '$type' ");
      return $query;
    }

    public function update_sorting_info($id, $sorting){
      $query = $this->db->query("UPDATE sorting SET sort = '$sorting' WHERE id = '$id' ");
      return $query;
    }

    public function update_options_info($id, $options){
      $query = $this->db->query("UPDATE sorting SET options = '$options' WHERE id = '$id' ");
      return $query;
    }

    public function insert_sorting($data){
      $query = $this->db->insert('sorting', $data);
      return $query;
    }

     public function delete_sorting($id){
       $this->db->where('id', $id);
       $query = $this->db->delete("sorting");
       return $query;
     }

     // End of Sorting

     // Edit About Us

     public function display_about_content(){
      $query = $this->db->get('about_content')->result();
      return $query;
    }

    public function display_about_content_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('about_content')->result();
      return $query;
    }

    public function delete_about_content($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("about_content");
      return $query;
    }

    public function insert_about_content($data){
      $query = $this->db->insert('about_content', $data);
      return $query;
    }

    public function update_about_content_info($id, $body){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE about_content SET body = '$body' ");
      return $query;
    }

    public function update_about_title_info($id, $title){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE about_content SET title = '$title' ");
      return $query;
    }

     // End Edit About Us

     // Edit Faq

     public function display_faq_content(){
      $query = $this->db->get('faq_content')->result();
      return $query;
    }

    public function display_faq_content_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('faq_content')->result();
      return $query;
    }

    public function delete_faq_content($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("faq_content");
      return $query;
    }

    public function insert_faq_content($data){
      $query = $this->db->insert('faq_content', $data);
      return $query;
    }

    public function update_faq_content_info($id, $body){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE faq_content SET body = '$body' ");
      return $query;
    }

    public function update_faq_title_info($id, $title){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE faq_content SET title = '$title' ");
      return $query;
    }

     // End Edit Faq

     // Edit Policy

     public function display_policy_content(){
      $query = $this->db->get('return_policy')->result();
      return $query;
    }

    public function display_policy_content_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('return_policy')->result();
      return $query;
    }

    public function delete_policy_content($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("return_policy");
      return $query;
    }

    public function insert_policy_content($data){
      $query = $this->db->insert('return_policy', $data);
      return $query;
    }

    public function update_policy_content_info($id, $body){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE return_policy SET body = '$body' ");
      return $query;
    }

    public function update_policy_title_info($id, $title){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE return_policy SET title = '$title' ");
      return $query;
    }

     // End Edit Policy

     // Edit Footer

     public function display_footer(){
      $query = $this->db->get('footer')->result();
      return $query;
    }

    public function display_footer_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('footer')->result();
      return $query;
    }

    public function insert_footer($data){
      $query = $this->db->insert('footer', $data);
      return $query;
    }

    public function update_address_info($id, $address){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE footer SET address = '$address' ");
      return $query;
    }

    public function update_telephone_info($id, $telephone){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE footer SET telephone = '$telephone' ");
      return $query;
    }

    public function update_email_info($id, $email){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE footer SET email = '$email' ");
      return $query;
    }

    public function delete_footer($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("footer");
      return $query;
    }

     // End of Footer

     // Social

     public function display_social(){
      $query = $this->db->get('social_link')->result();
      return $query;
    }

    public function display_social_by_id($id){
      $this->db->where('id', $id);
      $query = $this->db->get('social_link')->result();
      return $query;
    }

    public function insert_social($data){
      $query = $this->db->insert('social_link', $data);
      return $query;
    }

    public function update_social_info($id, $social){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE social_link SET social = '$social' ");
      return $query;
    }

    public function update_url_info($id, $url){
      $this->db->where('id', $id);
      $query = $this->db->query("UPDATE social_link SET url = '$url' ");
      return $query;
    }

    public function delete_social($id){
      $this->db->where('id', $id);
      $query = $this->db->delete("social_link");
      return $query;
    }

     // End of Social

    // User Grid

    public function display_user_grid(){
      $query = $this->db->query("SELECT users.email, users.created_time, users.created_date, user_details.email,
      user_details.firstname, user_details.lastname, user_details.telephone, user_details.address, user_details.town,
      user_details.postcode, user_details.county FROM users INNER JOIN user_details ON users.email = user_details.email
      ORDER BY users.created_date DESC ")->result();
      return $query;
    }

    // End of User Grid
  }

?>
