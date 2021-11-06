<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($detail as $det){} ?>
    <title><?php echo $det->title; ?> || UG Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/bootstrap.min.css'); ?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/font-awesome.min.css'); ?>">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/fontawesome-stars.min.css'); ?>">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/ion-fonts.css'); ?>">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/slick.css'); ?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/animate.css'); ?>">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/jquery-ui.min.css'); ?>">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/nice-select.css'); ?>">
    <!-- Timecircles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/timecircles.css'); ?>">

    <!-- Main Style CSS (Please use minify version for better website load performance)-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

</head>

<body class="template-color-1">

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

    <div class="main-wrapper">

        <!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2><?php echo $det->title; ?></h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active"><?php echo $det->title; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Single Product Area -->
        <div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                                  <?php if(!empty($det->image1)){ ?>
                                    <div class="single-slide red zoom">
                                        <img src="<?php echo base_url('uploads/products/'.$det->image1); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                  <?php if(!empty($det->image2)){ ?>
                                    <div class="single-slide orange zoom">
                                        <img src="<?php echo base_url('uploads/products/'.$det->image2); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image3)){ ?>
                                    <div class="single-slide brown zoom">
                                        <img src="<?php echo base_url('uploads/products/'.$det->image3); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image4)){ ?>
                                    <div class="single-slide umber zoom">
                                        <img src="<?php echo base_url('uploads/products/'.$det->image4); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image5)){ ?>
                                    <div class="single-slide black zoom">
                                        <img src="<?php echo base_url('uploads/products/'.$det->image5); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3" data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    <?php if(!empty($det->image1)){ ?>
                                    <div class="single-slide red">
                                      <img src="<?php echo base_url('uploads/products/'.$det->image1); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image2)){ ?>
                                    <div class="single-slide orange">
                                      <img src="<?php echo base_url('uploads/products/'.$det->image2); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image3)){ ?>
                                    <div class="single-slide brown">
                                      <img src="<?php echo base_url('uploads/products/'.$det->image3); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image4)){ ?>
                                    <div class="single-slide umber">
                                      <img src="<?php echo base_url('uploads/products/'.$det->image4); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                    <?php if(!empty($det->image5)){ ?>
                                    <div class="single-slide red">
                                      <img src="<?php echo base_url('uploads/products/'.$det->image5); ?>" alt="<?php echo $det->title; ?>">
                                    </div>
                                  <?php }else{ echo ''; } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#"><?php echo $det->title; ?></a></h5>
                                </div>
                                <!--<div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                    </ul>
                                </div>-->
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Brands <a href="#"><?php echo $det->brand; ?></a></li>
                                        <li>Color <a href="#"><?php echo $det->color; ?></a></li>
                                        <li>Product Code: <a href="#"><?php echo $det->product_code; ?></a></li>
                                        <?php
                                        $email = $this->session->userdata('uemail');
                                        if(!empty($email)){
                                          $query = $this->db->query("SELECT membership FROM users WHERE email = '$email' ")->result();
                                          foreach($query as $qry){
                                            $membership = $qry->membership;
                                          }
                                          if($membership == 'Premium Member'){
                                            $price = $det->price - ($det->price * 20/100); ?>
                                            <li>Price: &pound;<?php echo $price; ?></li>
                                    <?php }else if($membership == 'Elite Member'){
                                            $price = $det->price - ($det->price * 30/100); ?>
                                            <li>Price: &pound;<?php echo $price; ?></li>
                                    <?php }else if($membership == 'Normal'){
                                            $price = $det->price; ?>
                                            <li>Price: &pound;<?php echo $price; ?></li>
                                    <?php } }else{ echo ''; } ?>
                                        <li>Price: &pound;<?php echo $det->price; ?></li>
                                        <li>Availability: <a href="#">In Stock</a></li>
                                        <li>Shipping: <a href="#">Free</a></li>
                                        <!--<li>EX Tax: <a href="javascript:void(0)"><span>$453.35</span></a></li>
                                        <li>Price in reward points: <a href="javascript:void(0)">400</a></li>-->
                                    </ul>
                                </div>
                                <?php if(!empty($det->size)){ ?>
                                <div class="product-size_box">
                                    <span>Size</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1"><?php echo $det->size; ?></option>
                                        <!--<option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>-->
                                    </select>
                                </div>
                              <?php }else{ echo ''; } ?>
                                <!--<div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>-->
                                <div class="qty-btn_area">
                                    <ul>
                                      <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                        <input type="hidden" name="product_code" value="<?php echo $det->product_code; ?>">
                                        <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                        <input type="hidden" name="type" value="<?php echo $det->type; ?>">
                                        <input type="hidden" name="category" value="<?php echo $det->category; ?>">
                                        <?php if(!empty($email) && !empty($membership) == 'Normal' || !empty($membership) == 'Premium Member' || !empty($membership) == 'Elite Member'){ ?>
                                          <input type="hidden" name="price" value="<?php echo $price; ?>">
                                        <?php }else{ ?>
                                          <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                        <?php } ?>
                                        <input type="hidden" name="image" value="<?php echo $det->image1; ?>">
                                        <li><button type="submit" class="qty-cart_btn">Add To Cart</button></li>
                                      </form>

                                      <br>

                                      <?php if(!empty($this->session->userdata('uemail'))){ ?>
                                      <form action="<?php echo base_url('shopping/wishlist/add'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                        <input type="hidden" name="email" value="<?php echo $this->session->userdata('uemail'); ?>">
                                        <input type="hidden" name="product_code" value="<?php echo $det->product_code; ?>">
                                        <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                        <input type="hidden" name="type" value="<?php echo $det->type; ?>">
                                        <input type="hidden" name="category" value="<?php echo $det->category; ?>">
                                        <?php if(!empty($email) && !empty($membership) == 'Normal' || !empty($membership) == 'Premium Member' || !empty($membership) == 'Elite Member'){ ?>
                                          <input type="hidden" name="price" value="<?php echo $price; ?>">
                                        <?php }else{ ?>
                                          <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                        <?php } ?>
                                        <input type="hidden" name="image" value="<?php echo $det->image1; ?>">
                                        <li><button type="submit" class="qty-cart_btn" title="Add To Wishlist">Add to Wishlist</button></li>
                                      </form>
                                    <?php }else{ echo ''; } ?>

                                      <br>

                                      <li><button type="button" class="qty-cart_btn" onclick="sendComparison()">Compare</button></li>

                                    </ul>

                                    <script type="text/javascript">
                                      function sendComparison(){
                                        location.href="<?php echo base_url('membership/compare/'.strtolower($det->product_code)); ?>";
                                      }
                                    </script>
                                </div>
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
                </div>
            </div>
        </div>
        <!-- Kenne's Single Product Area End Here -->

        <!-- Begin Product Tab Area Two -->
        <div class="product-tab_area-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                    </li>
                                    <!--<li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>-->
                                    <?php
                                      $review_sql = $this->db->query("SELECT COUNT(product_code) AS total_review FROM product_review
                                      WHERE product_code = '$det->product_code' ")->result();
                                      foreach($review_sql as $rev_sql){
                                        $total_count = $rev_sql->total_review;
                                      }
                                     ?>
                                     <?php if(!empty($review_sql)){ ?>
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews (<?php echo $total_count; ?>)</span></a></li>
                                  <?php }else{ ?>
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews (0)</span></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div class="tab-content uren-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>
                                                <span><?php echo $det->description; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--<div id="specification" class="tab-pane" role="tabpanel">
                                    <table class="table table-bordered specification-inner_stuff">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Memory</strong></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>test 1</td>
                                                <td>8gb</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><strong>Processor</strong></td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td>No. of Cores</td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>-->
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review" action="<?php echo base_url('product/detail/'.$det->product_code); ?>" method="post">
                                            <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                      <?php if(!empty($review)){ foreach($review as $rev){ ?>
                                                        <tr>
                                                            <td style="width: 50%;"><strong><?php echo $rev->fullname; ?></strong></td>
                                                            <td class="text-right"><?php echo date('j M Y', strtotime($rev->created_date)); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p><?php echo $rev->message; ?></p>
                                                                <?php if($rev->rating == 1){ ?>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                              <?php }else if($rev->rating == 2){ ?>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                              <?php }else if($rev->rating == 3){ ?>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                              <?php }else if($rev->rating == 4){ ?>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                              <?php }else if($rev->rating == 5){ ?>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                      <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                              <?php } ?>
                                                            </td>
                                                        </tr>
                                                      <?php } }else{ echo ''; } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12 p-0">
                                                    <label>Your FullName <span class="required">*</span></label>
                                                    <input class="review-input" type="text" name="fullname" value="<?php echo $this->session->userdata('ufirstname'); ?>" id="con_email">
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('fullname'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group required">
                                                <div class="col-sm-12 p-0">
                                                    <label>Your Email <span class="required">*</span></label>
                                                    <input class="review-input" type="email" name="email" value="<?php echo $this->session->userdata('uemail'); ?>" id="con_email">
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group required second-child">
                                                <div class="col-sm-12 p-0">
                                                    <label class="control-label">Share your opinion</label>
                                                    <textarea class="review-textarea" name="message" id="con_message"></textarea>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('message'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group last-child required">
                                                <div class="col-sm-12 p-0">
                                                    <div class="your-opinion">
                                                        <label>Your Rating</label>
                                                        <span>
                                                        <select name="rating" class="star-rating">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </span>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('rating'); ?></span>
                                                    </div>
                                                </div>
                                                <div class="kenne-btn-ps_right">
                                                    <button class="kenne-btn" type="submit" name="submit">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tab Area Two End Here -->

        <!-- Begin Product Area -->
        <div class="product-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3>Best Seller</h3>
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

                          <?php
                            $query = $this->db->query("SELECT product.id, product.product_code, product.title, product.type, product.category,
                            product.price, product.type, product.category, image.product_code, image.image1, image.image2 FROM product INNER JOIN
                            image ON product.product_code = image.product_code WHERE product.type = '$det->type' ORDER BY product.sold DESC LIMIT 8
                            ")->result();
                            if(!empty($query)){ foreach($query as $qry){ ?>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="<?php echo site_url('product/detail/'.strtolower($qry->product_code)); ?>">
                                            <img height="200" class="primary-img" src="<?php echo base_url('uploads/products/'.$qry->image2); ?>" alt="<?php echo $qry->title; ?>">
                                            <img height="200" class="secondary-img" src="<?php echo base_url('uploads/products/'.$qry->image1); ?>" alt="<?php echo $qry->title; ?>">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="<?php echo site_url('product/detail/'.strtolower($qry->product_code)); ?>"><?php echo $qry->title; ?></a></h3>
                                            <div class="price-box">
                                                <span class="new-price">&pound;<?php echo $qry->price; ?></span>
                                            </div>
                                            <!--<div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>-->
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
        <!-- Product Area End Here -->

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
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main JS -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>
