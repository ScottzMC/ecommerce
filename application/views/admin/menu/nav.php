<?php foreach($total_order_count as $tot_ord_count){} ?>

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon">

<!-- vector map CSS -->
<link href="<?php echo base_url('vendors/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet" type="text/css"/>

<!-- Custom Fonts -->
<link href="<?php echo base_url('dist/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Data table CSS -->
<link href="<?php echo base_url('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css'); ?>" rel="stylesheet" type="text/css">

<!-- Bootstrap Dropzone CSS -->
<link href="<?php echo base_url('vendors/bower_components/dropzone/dist/dropzone.css'); ?>" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="<?php echo base_url('vendors/bower_components/summernote/dist/summernote.css'); ?>" />

<!-- Custom CSS -->
<link href="<?php echo base_url('dist/css/style.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'); ?>" rel="stylesheet" type="text/css"/>

<!--Preloader-->
<div class="preloader-it">
  <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
  <div class="wrapper">
    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <a id="toggle_nav_btn" style="margin-top: 20px;" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
      <a href="<?php echo site_url('home'); ?>"><img class="brand-img pull-left" height="50" src="<?php echo base_url('assets/images/menu/logo/1.png'); ?>" alt="brand"/></a>
    </nav>
    <!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
      <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li>
          <a href="<?php echo site_url('shop/home'); ?>">
            <i class="icon-grid mr-10"></i>Back To Shop
          </a>
        </li>
        <li>
          <a class="active" href="<?php echo site_url('admin/dashboard'); ?>">
            <i class="icon-picture mr-10"></i>Dashboard
          </a>
        </li>

        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
            <i class="icon-basket-loaded mr-10"></i>Product Details
            <span class="pull-right">
              <i class="fa fa-fw fa-angle-down"></i>
            </span>
          </a>
          <ul id="ecom_dr" class="collapse collapse-level-1">
            <li>
              <a href="<?php echo site_url('admin_dashboard/view_product'); ?>">View Products</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/product/add_product'); ?>">Add Products</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/product/view_order'); ?>">Orders
                <span class="pull-right">
                  <span class="label label-danger mr-10"><?php echo $tot_ord_count->order_count; ?></span>
                </span>
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#edit_dr">
            <i class="icon-grid mr-10"></i>Edit Website
            <span class="pull-right">
              <i class="fa fa-fw fa-angle-down"></i>
            </span>
          </a>
          <ul id="edit_dr" class="collapse collapse-level-1">
            <li>
              <a href="<?php echo site_url('admin/edit/menu'); ?>">Edit Menu</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/banner'); ?>">Edit Banners</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/about'); ?>">Edit About Us</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/faq'); ?>">Edit FAQ</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/policy'); ?>">Edit Returns Policy</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/sorting'); ?>">Edit Sorting</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/social'); ?>">Edit Social Links</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/edit/footer'); ?>">Edit Footer</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="<?php echo site_url('admin/user_grid'); ?>">
            <i class="icon-grid mr-10"></i>User Grid
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('account/logout'); ?>">
            <i class="icon-layers mr-10"></i>Logout
          </a>
        </li>
      </ul>
    </div>
  <!-- /Left Sidebar Menu -->
