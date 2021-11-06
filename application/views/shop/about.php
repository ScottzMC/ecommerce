<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us || UG Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="template-color-1">

    <div class="main-wrapper">
      <!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="<?php echo site_url('about'); ?>">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's About Us Area -->
        <div class="about-us-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="overview-img text-center img-hover_effect">
                            <a href="#">
                                <img class="img-full" src="<?php echo base_url('assets/images/about-us/1.jpg'); ?>" alt="About Us">
                            </a>
                        </div>
                    </div>
                    <?php if(!empty($about)){ ?>
                    <div class="col-lg-6 col-md-7 d-flex align-items-center">
                      <?php foreach($about as $abt){} ?>
                        <div class="overview-content">
                            <h2><?php echo $abt->title; ?>!</h2>
                            <p class="short_desc"><?php echo $abt->body; ?></p>
                            <div class="kenne-about-us_btn-area">
                                <a class="about-us_btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                  <?php }else{ echo ''; } ?>
                </div>
            </div>
        </div>
        <!-- Kenne's About Us Area End Here -->
        <br>

    </div>

    <body>

  <html>
