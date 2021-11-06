<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Deposit Funds || UG Store</title>
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
                    <h2>Deposit Funds</h2>
                    <ul>
                      <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                      <li><a href="<?php echo site_url('ewallet'); ?>">E-wallet</a></li>
                      <li class="active">Deposit Funds</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Checkout Area -->
        <div class="checkout-area">
            <div class="container">
              <form action="<?php echo base_url('ewallet/deposit'); ?>" method="post">
                <div class="row">
                    <div class="col-lg-6 col-12">
                            <div class="checkbox-form">
                                <h3>Deposit Details</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Initial Amount <span class="required">*</span></label>
                                            <input placeholder="Initial Amount" type="text" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php
                      echo $this->session->flashdata('msgError');
                    ?>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                            <h3>Action</h3>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="order-button-payment">
                                        <input value="Deposit" type="submit" name="deposit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
        <!-- Kenne's Checkout Area End Here -->

      </body>

    </html>
