<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us || UG Store</title>
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
</head>

<body class="template-color-1">

    <div class="main-wrapper">

<!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.287518615658!2d0.17387941560792414!3d51.526286117143414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a545596b2ab1%3A0x6b5062ac03e1902d!2s42%20Manser%20Rd%2C%20Rainham%20RM13%208NL!5e0!3m2!1sen!2suk!4v1581701391140!5m2!1sen!2suk" width="1200" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Contact Us</h3>
                            <p class="contact-page-message"></p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Address</h4>
                                <p>42 Manser Road, Rainham, Essex, RM13 8NL – UK</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Phone</h4>
                                <p>Mobile: 074 4845 7194</p>
                                <p>Hotline: 073 6866 0611</p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                <p>info@ugstore.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Tell Us Your Message</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="<?php echo base_url('shop/contact'); ?>" method="post">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" name="fullname" id="con_name">
                                        <span class="text-danger" style="color: red;"><?php echo form_error('fullname'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="con_email">
                                        <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="subject" id="con_subject">
                                        <span class="text-danger" style="color: red;"><?php echo form_error('subject'); ?></span
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>Your Message</label>
                                        <textarea name="message" id="con_message"></textarea>
                                        <span class="text-danger" style="color: red;"><?php echo form_error('message'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="kenne-contact-form_btn" name="submit">send</button>
                                    </div>
                                </form>
                            </div>
                            <?php
                            echo $this->session->flashdata('msg');
                            echo $this->session->flashdata('msgError');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->

      </div>
    </body>

  </html>
