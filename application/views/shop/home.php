<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to UG Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

    <!-- CSS
	============================================ -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/bootstrap.min.css'); ?>">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/vendor_font.css'); ?>">
  <!-- Fontawesome Star -->
  <!-- Ion Icon -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/ion-fonts.css'); ?>">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/plugin_new.css'); ?>">
    <!-- jQuery Ui -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/jquery-ui.min.css'); ?>">
  <!-- Nice Select -->

  <!-- Main Style CSS (Please use minify version for better website load performance)-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css'); ?>">

</head>

<body class="template-color-2">

    <div class="main-wrapper">

        <!-- Begin Loading Area
        <div class="loading">
            <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Main Header Area Two -->
        <header class="main-header_area-2">
          <div class="header-top_area d-none d-lg-block">
              <div class="container">
                  <div class="header-top_nav">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="ht-menu">
                                  <ul>
                                      <li><a href="javascript:void(0)">Currency<i class="ion-chevron-down"></i></a>
                                          <ul class="ht-dropdown ht-currency">
                                              <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="javascript:void(0)">Language <i class="ion-chevron-down"></i></a>
                                          <ul class="ht-dropdown">
                                              <li class="active"><a href="javascript:void(0)"><img src="<?php echo base_url('assets/images/menu/icon/1.jpg'); ?>" alt="Kenne Language Icon">English</a></li>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="header-top_right">
                                  <ul>
                                    <?php if($this->session->userdata('ustatus') == 'Admin'){ ?>
                                      <li>
                                          <a href="#">Hi, <?php echo $this->session->userdata('ufirstname'); ?></a>
                                      </li>
                                      <li>
                                          <a href="<?php echo site_url('admin/dashboard'); ?>">Admin</a>
                                      </li>
                                    <?php }else{ ?>
                                      <li>
                                          <a href="#">Hi, <?php echo $this->session->userdata('ufirstname'); ?></a>
                                      </li>
                                    <?php } ?>
                                    <?php if($this->session->userdata('login')){ ?>
                                    <li>
                                      <a href="<?php echo site_url('ewallet'); ?>">E-wallet</a>
                                    </li>
                                    <li>
                                      <?php
                                        $email = $this->session->userdata('uemail');
                                        $query = $this->db->query("SELECT membership FROM users WHERE email = '$email' ")->result();
                                        foreach($query as $qry){
                                          $membership = $qry->membership;
                                        }
                                        if(!empty($query)){
                                      ?>
                                      <?php if($membership == 'Premium Member' || $membership == 'Elite Member'){ ?>
                                        <a href="#"><?php echo $membership; ?></a>
                                      <?php }else{ echo ''; } ?>
                                      <?php }else{ echo ''; } ?>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('shopping/wishlist'); ?>">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('shopping/view_order'); ?>">My Orders</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('account/logout'); ?>">Logout</a>
                                    </li>
                                  <?php }else{ ?>
                                    <li>
                                        <a href="<?php echo site_url('account/login'); ?>">Login</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('account/register'); ?>">Register</a>
                                    </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-middle_nav">
                                <div class="header-logo_area">
                                    <a href="<?php echo site_url('home'); ?>">
                                        <img src="<?php echo base_url('assets/images/menu/logo/1.png'); ?>" alt="Header Logo">
                                    </a>
                                </div>
                                <div class="header-contact d-none d-md-flex">
                                    <i class="fa fa-headphones-alt"></i>
                                    <div class="contact-content">
                                        <p>
                                            Call us
                                            <br>
                                        Free Support: (012) 800 456 789
                                    </p>
                                    </div>
                                </div>
                                <div class="header-search_area d-none d-lg-block">
                                    <form class="search-form" action="<?php echo base_url('product/search'); ?>" method="post">
                                        <input type="text" placeholder="Search" name="search_query">
                                        <button type="submit" class="search-button"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-right_area d-none d-lg-inline-block">
                                    <ul>
                                        <li class="mobile-menu_wrap d-flex d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count"><?php echo $this->cart->total_items(); ?></span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                                <div class="minicart-front_text">
                                                    <span>Cart:</span>
                                                    <span class="total-price">&pound;<?php echo $this->cart->total(); ?></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-right_area header-right_area-2 d-inline-block d-lg-none">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count"><?php echo $this->cart->total_items(); ?></span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li class=""><a href="<?php echo site_url('home'); ?>">Home</a></li>
                                        <?php
                                          $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                          if(!empty($menu)){ foreach($menu as $men){} ?>
                                          <?php
                                              $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                              foreach($query as $qry){ ?>
                                          <li class=""><a href="<?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                            <?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                        <?php } }else{ echo ''; } ?>
                                        <!--<li class="megamenu-holder position-static"><a href="#">Shop <i
                                                class="ion-chevron-down"></i></a>
                                            <ul class="kenne-megamenu">
                                              <!-- Loop Menu
                                              < ?php
                                                    $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                                    if(!empty($menu)){ foreach($menu as $men){ ?>
                                                <li>
                                                  <span class="megamenu-title">
                                                    <a href="< ?php echo site_url('product/type/'.strtolower($men->type)); ?>">
                                                      < ?php echo str_replace('-', ' ', $men->type); ?>
                                                    </a>
                                                  </span>
                                                    <ul>
                                                        < ?php
                                                            $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                                            foreach($query as $qry){
                                                          ?>
                                                        <li><a href="< ?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                                          < ?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                                        < ?php } ?>
                                                    </ul>
                                                </li>
                                                < ?php } }else{ echo ''; } ?>
                                                <!-- End of Loop
                                            </ul>-->
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sticky-header_nav position-relative">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-2 col-sm-6">
                                        <div class="header-logo_area">
                                            <a href="<?php echo site_url('home'); ?>">
                                                <img src="<?php echo base_url('assets/images/menu/logo/1.png'); ?>" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 d-none d-lg-block position-static">
                                        <div class="main-menu_area">
                                            <nav class="main-nav d-flex justify-content-center">
                                                <ul>
                                                    <li class=""><a href="<?php echo site_url('shop/home'); ?>">Home</a></li>
                                                    <?php
                                                      $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                                      if(!empty($menu)){ foreach($menu as $men){} ?>
                                                      <?php
                                                          $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                                          foreach($query as $qry){ ?>
                                                      <li class=""><a href="<?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                                        <?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                                    <?php } }else{ echo ''; } ?>
                                                    <!--<li class="megamenu-holder position-static"><a href="#">Shop <i
                                                            class="ion-chevron-down"></i></a>
                                                        <ul class="kenne-megamenu">
                                                          <!-- Loop Menu
                                                          < ?php
                                                                $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                                                if(!empty($menu)){ foreach($menu as $men){ ?>
                                                            <li>
                                                              <span class="megamenu-title">
                                                                <a href="< ?php echo site_url('product/type/'.strtolower($men->type)); ?>">
                                                                  < ?php echo str_replace('-', ' ', $men->type); ?>
                                                                </a>
                                                              </span>
                                                                <ul>
                                                                    < ?php
                                                                        $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                                                        foreach($query as $qry){
                                                                      ?>
                                                                    <li><a href="< ?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                                                      < ?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                                                    < ?php } ?>
                                                                </ul>
                                                            </li>
                                                            < ?php } }else{ echo ''; } ?>
                                                            <!-- End of Loop
                                                        </ul>
                                                    </li>-->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="header-right_area header-right_area-2">
                                            <ul>
                                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                                <li class="minicart-wrap">
                                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                        <div class="minicart-count_area">
                                                            <span class="item-count"><?php echo $this->cart->total_items(); ?></span>
                                                            <i class="ion-bag"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                                        <i class="ion-android-search"></i>
                                                    </a>
                                                </li>
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                          <div><?php echo $message; ?></div>
                          <?php if ($cart = $this->cart->contents()): ?>
                          <?php $grand_total = 0; $i = 1; ?>
                          <?php foreach($cart as $item):
                              $check = array_slice(explode(',', $item['image']), 0, 1);

                              foreach($check as $image) {
                                 $image;
                              }
                           ?>
                          <?php echo form_open('shopping/view_cart/update_cart'); ?>
                          <?php
                            echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
                            echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
                            echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
                            echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
                          ?>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="<?php echo base_url('uploads/products/'.$image); ?>" alt="<?php echo $item['name']; ?>">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="#"><?php echo $item['name']; ?></a>
                                    <span class="product-item_quantity"><?php echo $item['qty']; ?> x &pound;<?php echo $item['price']; ?></span>
                                </div>
                            </li>
                          <?php endforeach; ?>
                          <?php endif; ?>
                        </ul>
                    </div>
                    <?php if($this->cart->contents()){ ?>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">&pound;<?php echo $item['subtotal']; ?></span>
                    </div>
                  <?php } ?>
                    <div class="minicart-btn_area">
                        <a href="<?php echo site_url('shopping/view_cart'); ?>" class="kenne-btn kenne-btn_fullwidth">View Cart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="<?php echo site_url('shopping/checkout'); ?>" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_logo">
                            <a href="<?php echo site_url('home'); ?>">
                                <img src="<?php echo base_url('assets/images/menu/logo/1.png'); ?>" alt="Header Logo">
                            </a>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="<?php echo site_url('home'); ?>"><span
                                        class="mm-text">Home</span></a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                      <?php
                                        $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                        if(!empty($menu)){ foreach($menu as $men){} ?>
                                        <?php
                                            $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                            foreach($query as $qry){ ?>
                                        <li class=""><a href="<?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                          <?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                      <?php } }else{ echo ''; } ?>

                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">
                                        <span class="mm-text">User
                                        Setting
                                    </span>
                                    </a>
                                    <ul class="sub-menu">
                                      <?php if($this->session->userdata('ustatus') == 'Admin'){ ?>
                                        <li>
                                            <a href="<?php echo site_url('admin/dashboard'); ?>">
                                                <span class="mm-text">Admin</span>
                                            </a>
                                        </li>
                                      <?php }else{ ?>
                                        <li>
                                            <a href="#">
                                                <span class="mm-text">Hi, <?php echo $this->session->userdata('ufirstname'); ?></span>
                                            </a>
                                        </li>
                                      <?php } ?>
                                        <?php if($this->session->userdata('login')){ ?>
                                          <li>
                                            <a href="<?php echo site_url('ewallet'); ?>">
                                                <span class="mm-text">E-wallet</span>
                                            </a>
                                          </li>
                                          <li>
                                            <?php
                                              $email = $this->session->userdata('uemail');
                                              $query = $this->db->query("SELECT membership FROM users WHERE email = '$email' ")->result();
                                              foreach($query as $qry){
                                                $membership = $qry->membership;
                                              }
                                            ?>
                                            <?php if($membership == 'Premium Member' || $membership == 'Elite Member'){ ?>
                                              <a href="#"><?php echo $membership; ?></a>
                                            <?php }else{ echo ''; } ?>
                                          </li>
                                          <li>
                                              <a href="<?php echo site_url('shopping/wishlist'); ?>">
                                                  <span class="mm-text">Wishlist</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="<?php echo site_url('shopping/view_order'); ?>">
                                                <span class="mm-text">My Orders</span></a>
                                          </li>
                                          <li>
                                              <a href="<?php echo site_url('account/logout'); ?>">
                                                  <span class="mm-text">Logout</span>
                                              </a>
                                          </li>
                                        <?php }else{ ?>
                                          <li>
                                              <a href="<?php echo site_url('account/login'); ?>">
                                                  <span class="mm-text">Login</span>
                                              </a>
                                          </li>
                                          <li>
                                              <a href="<?php echo site_url('account/register'); ?>">
                                                  <span class="mm-text">Register</span>
                                              </a>
                                          </li>
                                        <?php } ?>

                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#"><span class="mm-text">Currency</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">GBP &pound;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#"><span class="mm-text">Language</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">English</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="offcanvas-inner_logo">
                        <a href="<?php echo base_url('home') ?>">
                            <img src="<?php echo base_url('assets/images/menu/logo/1.png'); ?>" alt="Logo">
                        </a>
                    </div>
                    <div class="offcanvas-component">
                        <span class="offcanvas-component_title">My Account</span>
                        <ul class="offcanvas-component_menu">
                          <?php if($this->session->userdata('login')){ ?>
                            <li><a href="<?php echo site_url('ewallet'); ?>">E-wallet</a></li>
                            <li>
                              <?php
                                $email = $this->session->userdata('uemail');
                                $query = $this->db->query("SELECT membership FROM users WHERE email = '$email' ")->result();
                                foreach($query as $qry){
                                  $membership = $qry->membership;
                                }
                              ?>
                              <?php if($membership == 'Premium Member' || $membership == 'Elite Member'){ ?>
                                <a href="#"><?php echo $membership; ?></a>
                              <?php }else{ echo ''; } ?>
                            </li>
                            <li><a href="<?php echo site_url('shopping/wishlist') ?>">Wishlist</a></li>
                            <li><a href="<?php echo site_url('shopping/view_order'); ?>">My Orders</a></li>
                            <li><a href="<?php echo site_url('account/logout') ?>">Logout</a></li>
                          </ul>
                        <?php }else{ ?>
                          <li><a href="<?php echo site_url('account/login') ?>">Login</a></li>
                          <li><a href="<?php echo site_url('account/register') ?>">Register</a></li>
                          <?php } ?>
                        </ul>
                    </div>
                    <div class="offcanvas-inner-social_link">
                        <div class="kenne-social_link">
                            <ul>
                                <li class="facebook">
                                    <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="google-plus">
                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fab fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <!-- Begin Offcanvas Search Area -->
                        <div class="offcanvas-search">
                          <form action="<?php echo base_url('product/search'); ?>" class="hm-searchbox" method="post">
                              <input type="text" placeholder="Search for item..." name="search_query">
                              <button class="search_btn" type="submit"><i
                                  class="ion-ios-search-strong"></i></button>
                          </form>
                        </div>
                        <!-- Offcanvas Search Area End Here -->
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here Two -->

        <!-- Begin Slider Area Two -->
        <div class="slider-area slider-area-2">

            <div class="kenne-element-carousel home-slider home-slider-2 transparent-arrow" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": false,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 7000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1
                }}
            ]'>
                <div class="slide-item bg-3 animation-style-01 white-color">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="slide-content">
                            <span>Exclusive Offer -20% Off This Week</span>
                            <h2>Accessories <br> Explore Trending</h2>
                                <div class="slide-btn">
                                    <a class="kenne-btn transparent-btn" href="#">shop now</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item bg-4 animation-style-01">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="slide-content">
                            <span>Exclusive Offer -10% Off This Week</span>
                            <h2>Stylist <br> Female Clothes</h2>
                                <p class="short-desc-2">Made from Soft, Durable, US-grown Supima cotton.</p>
                                <div class="slide-btn">
                                    <a class="kenne-btn" href="#">shop now</a>
                                </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Slider Area Two End Here -->

        <!-- Begin Banner Area Three -->
        <div class="banner-area-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="javascrip:void(0)">
                                    <img class="img-full" src="<?php echo base_url('assets/images/banner/2-1.jpg'); ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="javascrip:void(0)">
                                    <img class="img-full" src="<?php echo base_url('assets/images/banner/2-2.jpg'); ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 custom-xxs-col">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img">
                                <a href="javascrip:void(0)">
                                    <img class="img-full" src="<?php echo base_url('assets/images/banner/2-3.jpg'); ?>" alt="Banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Three End Here -->

        <!-- Begin Product Area -->
        <div class="product-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>New Product</h3>
                            <div class="product-arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                          <!-- New Product -->
                          <?php if(!empty($new)){ foreach($new as $nw){ ?>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?php echo site_url('product/detail/'.strtolower($nw->product_code)); ?>">
                                            <img height="250" class="primary-img" src="<?php echo base_url('uploads/products/'.$nw->image1); ?>" alt="<?php echo $nw->title; ?>">
                                            <img height="250" class="secondary-img" src="<?php echo base_url('uploads/products/'.$nw->image2); ?>" alt="<?php echo $nw->title; ?>">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <?php if(!empty($this->session->userdata('uemail'))){ ?>
                                                <form action="<?php echo base_url('shopping/wishlist/add'); ?>" method="post">
                                                  <input type="hidden" name="id" value="<?php echo $nw->id; ?>">
                                                  <input type="hidden" name="email" value="<?php echo $this->session->userdata('uemail'); ?>">
                                                  <input type="hidden" name="product_code" value="<?php echo $nw->product_code; ?>">
                                                  <input type="hidden" name="title" value="<?php echo $nw->title; ?>">
                                                  <input type="hidden" name="type" value="<?php echo $nw->type; ?>">
                                                  <input type="hidden" name="category" value="<?php echo $nw->category; ?>">
                                                  <input type="hidden" name="price" value="<?php echo $nw->price; ?>">
                                                  <input type="hidden" name="image" value="<?php echo $nw->image1; ?>">
                                                  <li>
                                                    <button type="submit" data-toggle="tooltip" data-placement="right" title="Add To Wishlist">
                                                      <i class="ion-ios-heart-outline"></i>
                                                    </button>
                                                  </li>
                                                </form>
                                                <?php }else{ echo ''; } ?>

                                                <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                                  <input type="hidden" name="id" value="<?php echo $nw->id; ?>">
                                                  <input type="hidden" name="product_code" value="<?php echo $nw->product_code; ?>">
                                                  <input type="hidden" name="title" value="<?php echo $nw->title; ?>">
                                                  <input type="hidden" name="type" value="<?php echo $nw->type; ?>">
                                                  <input type="hidden" name="category" value="<?php echo $nw->category; ?>">
                                                  <input type="hidden" name="price" value="<?php echo $nw->price; ?>">
                                                  <input type="hidden" name="image" value="<?php echo $nw->image1; ?>">
                                                  <li>
                                                    <button type="submit" data-toggle="tooltip" data-placement="right" title="Add To cart">
                                                      <i class="ion-bag"></i>
                                                    </button>
                                                  </li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="<?php echo site_url('product/detail/'.strtolower($nw->product_code)); ?>"><?php echo $nw->title; ?></a></h3>
                                            <div class="price-box">
                                                <span class="new-price">&pound;<?php echo $nw->price; ?></span>
                                                <!--<span class="old-price">&pound;50.99</span>-->
                                            </div>
                                            <div class="rating-box">
                                                <!--<ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php } }else{ echo ''; } ?>
                            <!-- End of Loop -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area Five -->
        <div class="banner-area-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-item img-hover_effect">
                            <div class="banner-img"></div>
                            <div class="banner-content">
                                <span>In-Store & Online</span>
                                <h3>
                                    Men's Backpack
                                    <br>
                                Wallets & More!
                            </h3>
                                    <div class="kenne-btn-ps_center">
                                        <a class="kenne-btn transparent-btn black-color square-btn" href="shop-left-sidebar.html">Discover Now</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Five End Here -->

        <!-- Begin List Product Area -->
        <div class="list-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>Best <span>Selling Products</span></h3>
                            <div class="list-product_arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="kenne-element-carousel list-product_slider slider-nav" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".list-product_arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                          <?php if(!empty($best)){ foreach($best as $bst){ ?>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?php echo site_url('product/detail/'.strtolower($bst->product_code)); ?>">
                                            <img height="150" class="primary-img" src="<?php echo base_url('uploads/products/'.$bst->image1); ?>" alt="<?php echo $bst->title; ?>">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <span class="manufacture-product"><?php echo $bst->type; ?>, <?php echo $bst->category; ?></span>
                                            <h3 class="product-name"><a href="<?php echo site_url('product/detail/'.strtolower($bst->product_code)); ?>"><?php echo $bst->title; ?></a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">&pound;<?php echo $bst->price; ?></span>
                                                <!--<span class="old-price">&pound;50.99</span>-->
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                              <?php if(!empty($this->session->userdata('uemail'))){ ?>
                                              <form action="<?php echo base_url('shopping/wishlist/add'); ?>" method="post">
                                                <input type="hidden" name="id" value="<?php echo $bst->id; ?>">
                                                <input type="hidden" name="email" value="<?php echo $this->session->userdata('uemail'); ?>">
                                                <input type="hidden" name="product_code" value="<?php echo $bst->product_code; ?>">
                                                <input type="hidden" name="title" value="<?php echo $bst->title; ?>">
                                                <input type="hidden" name="type" value="<?php echo $bst->type; ?>">
                                                <input type="hidden" name="category" value="<?php echo $bst->category; ?>">
                                                <input type="hidden" name="price" value="<?php echo $bst->price; ?>">
                                                <input type="hidden" name="image" value="<?php echo $bst->image1; ?>">
                                                <li>
                                                  <button type="submit" data-toggle="tooltip" data-placement="right" title="Add To Wishlist">
                                                    <i class="ion-ios-heart-outline"></i>
                                                  </button>
                                                </li>
                                              </form>
                                              <?php }else{ echo ''; } ?>

                                                <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                                  <input type="hidden" name="id" value="<?php echo $bst->id; ?>">
                                                  <input type="hidden" name="product_code" value="<?php echo $bst->product_code; ?>">
                                                  <input type="hidden" name="title" value="<?php echo $bst->title; ?>">
                                                  <input type="hidden" name="type" value="<?php echo $bst->type; ?>">
                                                  <input type="hidden" name="category" value="<?php echo $bst->category; ?>">
                                                  <input type="hidden" name="price" value="<?php echo $bst->price; ?>">
                                                  <input type="hidden" name="image" value="<?php echo $bst->image1; ?>">
                                                  <li>
                                                    <button type="submit" data-toggle="tooltip" data-placement="right" title="Add To cart">
                                                      <i class="ion-bag"></i>
                                                    </button>
                                                  </li>
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php } }else{ echo ''; } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Product Area End Here -->

        <!-- Begin Brand Area -->
        <div class="brand-area ">
            <div class="container">
                <div class="brand-nav border-top ">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="kenne-element-carousel brand-slider slider-nav" data-slick-options='{
                                "slidesToShow": 6,
                                "slidesToScroll": 1,
                                "infinite": false,
                                "arrows": false,
                                "dots": false,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                {"breakpoint":992, "settings": {
                                "slidesToShow": 4
                                }},
                                {"breakpoint":768, "settings": {
                                "slidesToShow": 3
                                }},
                                {"breakpoint":576, "settings": {
                                "slidesToShow": 2
                                }}
                            ]'>

                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/1.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/2.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/3.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/4.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/5.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/6.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/1.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/brand/2.png'); ?>" alt="Brand Images">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->

        <!-- Begin Kenne's Footer Area -->
        <div class="kenne-footer_area bg-smoke_color">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-area">
                                <div class="newsletter-logo">
                                    <a href="javascript:void(0)">
                                        <img src="<?php echo base_url('assets/images/footer/logo/1.png'); ?>" alt="Logo">
                                    </a>
                                </div>
                                <!--<p class="short-desc">Subscribe to our newsleter, Enter your emil address</p>
                                <div class="newsletter-form_wrap">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div id="mc-form" class="mc-form subscribe-form">
                                                <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter email address" />
                                                <button class="newsletter-btn" id="mc-submit"><i
                                                class="ion-android-mail"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Shopping</h4>
                                    </div>
                                    <div class="footer-widgets">
                                      <?php if($this->session->userdata('login')){ ?>
                                        <ul>
                                            <li><a href="<?php echo site_url('ewallet'); ?>">E-wallet</li>
                                            <li><a href="<?php echo site_url('shopping/view_cart'); ?>">Shopping Cart</a></li>
                                            <li><a href="<?php echo site_url('shopping/wishlist'); ?>">Wishlist</a></li>
                                            <li><a href="<?php echo site_url('membership'); ?>">Membership</a></li>
                                        </ul>
                                      <?php }else{ echo ''; } ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Account</h4>
                                    </div>
                                    <div class="footer-widgets">
                                      <ul>
                                      <?php if($this->session->userdata('login')){ ?>
                                          <li><a href="<?php echo site_url('account/logout'); ?>">Logout</a></li>
                                        <?php }else{ ?>
                                          <li><a href="<?php echo site_url('account/login'); ?>">Login</a></li>
                                          <li><a href="<?php echo site_url('account/register'); ?>)">Register</a></li>
                                        <?php } ?>
                                          <li><a href="<?php echo site_url('shop/faq'); ?>">FAQ</a></li>
                                          <li><a href="<?php echo site_url('shop/policy'); ?>">Return Policy</a></li>
                                          <!--<li><a href="< ?php echo site_url('shop/about'); ?>">About Us</a></li>-->
                                          <li><a href="<?php echo site_url('shop/contact'); ?>">Contact Us</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Categories</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                          <?php
                                            $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                            if(!empty($menu)){ foreach($menu as $men){} ?>
                                            <?php
                                                $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                                foreach($query as $qry){ ?>
                                            <li class=""><a href="<?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                              <?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                          <?php } }else{ echo ''; } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2020 <a href="javascript:void(0)">UG Store.</a> All rights reserved.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment">
                                <img src="<?php echo base_url('assets/images/footer/payment/1.png'); ?>" alt="Payment Method">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Footer Area End Here -->
        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
    <!-- Modernizer JS -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
    <!-- Popper JS -->
    <script src="<?php echo base_url('assets/js/vendor/popper.min.js'); ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>

    <!-- Slick Slider JS -->
    <script src="<?php echo base_url('assets/js/plugins/slick.min.js'); ?>"></script>
    <!-- Barrating JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery.barrating.min.js'); ?>"></script>
    <!-- Counterup JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery.counterup.js'); ?>"></script>
    <!-- Nice Select JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery.nice-select.js'); ?>"></script>
    <!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery.sticky-sidebar.js'); ?>"></script>
    <!-- Jquery-ui JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery.ui.touch-punch.min.js'); ?>"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="<?php echo base_url('assets/js/plugins/theia-sticky-sidebar.min.js'); ?>"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo base_url('assets/js/plugins/waypoints.min.js'); ?>"></script>
    <!-- jQuery Zoom JS -->
    <script src="<?php echo base_url('assets/js/plugins/jquery.zoom.min.js'); ?>"></script>
    <!-- Timecircles JS -->
    <script src="<?php echo base_url('assets/js/plugins/timecircles.js'); ?>"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="<?php echo base_url('assets/js/vendor/vendor.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/plugins.min.js'); ?>"></script> -->

    <!-- Main JS -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>
