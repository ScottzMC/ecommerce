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

<!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

<script src="<?php echo base_url('assets/js/vendor/vendor.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/plugins.min.js'); ?>"></script>

<!-- Main Style CSS (Please use minify version for better website load performance)
<link rel="stylesheet" href="assets/css/style.css">-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css'); ?>">

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
