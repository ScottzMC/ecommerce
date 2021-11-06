<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Terms and Conditions || UG Store</title>
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
                    <h2>Terms and Conditions</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">Terms and Conditions</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Frequently Area -->
        <?php if(!empty($policy)){ ?>
        <div class="frequently-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="frequently-content">
                            <div class="frequently-desc">
                              <?php foreach($policy as $pol){} ?>
                                <h3><?php echo $pol->title; ?></h3>
                                <p><?php echo $pol->introduction; ?></p>
                            </div>
                            <br>
                            <div class="frequently-desc">
                                <p><?php echo $pol->body; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php }else{ echo ''; } ?>
        <!-- Kenne's Frequently Area End Here -->

    </div>

  </body>
</html>
