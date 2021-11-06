<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-wallet || UG Store</title>
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
                    <h2>Electronic Wallet</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">Ewallet</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Checkout Area -->
        <div class="kenne-wishlist_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="javascript:void(0)">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="kenne-product_remove">fullname</th>
                                            <th class="kenne-product-thumbnail">membership</th>
                                            <th class="cart-product-name">Total Funds</th>
                                            <th class="kenne-product-price">Deposit Fund</th>
                                            <!--<th class="kenne-product-stock-status">Withdraw Fund</th>-->
                                        </tr>
                                    </thead>
                                    <?php foreach($users as $use){} ?>
                                    <tbody>
                                        <tr>
                                            <td class="kenne-product-name"><a href="#"><?php echo $use->firstname; ?> <?php echo $use->lastname; ?></a></td>
                                            <td class="kenne-product-price"><span class="amount"><?php echo $use->membership; ?></span></td>
                                            <td class="kenne-product-price"><span class="amount">£<?php echo $use->fund; ?></span></td>
                                            <td class="kenne-product_remove"><button type="button" onclick="depositFund()"><i class="fa fa-plus"
                                                title="Deposit Funds"></i></button></td>
                                            <!--<td class="kenne-product_remove"><button type="button" onclick=""><i class="fa fa-credit-card"
                                                title="Withdraw Funds"></i></button></td>-->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <script type="text/javascript">
                            function depositFund(){
                              location.href="<?php echo base_url('ewallet/deposit'); ?>";
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Checkout Area End Here -->

      </body>

    </html>
