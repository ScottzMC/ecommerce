<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login to your Account || UG Store</title>
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
                    <h2>Login to Account</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Login Register Area -->
        <div class="kenne-login-register_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="<?php echo base_url('account/login'); ?>" method="post">
                            <div class="login-form">
                                <h4 class="login-title">Login</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Email Address*</label>
                                        <input type="email" name="email" placeholder="Email Address">
                                        <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password*</label>
                                        <input type="password" name="password" placeholder="Password">
                                        <span class="text-danger" style="color: red;"><?php echo form_error('password'); ?></span>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="kenne-register_btn" name="login">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                          echo $this->session->flashdata('msgError');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Login Register Area  End Here -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

</body>

</html>
