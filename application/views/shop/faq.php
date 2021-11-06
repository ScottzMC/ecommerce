<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frequently Asked Questions || UG Store</title>
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
                    <h2>Frequently Asked Question</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->

        <!-- Begin Kenne's Frequently Area -->
        <div class="frequently-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="frequently-content">
                            <div class="frequently-desc">
                                <h3>Below are frequently asked questions, you may find the answer for yourself</h3>
                            </div>
                        </div>
                        <!-- Begin Frequently Accordin -->
                        <div class="frequently-accordion">
                            <div id="accordion">
                              <?php if(!empty($faq)){ foreach($faq as $fq){ ?>
                                <div class="card actives">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <a href="#" class="" data-toggle="collapse" data-target="#<?php echo $fq->id; ?>" aria-expanded="true" aria-controls="<?php echo $fq->id; ?>">
                                                <?php echo $fq->title; ?>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="<?php echo $fq->id; ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <?php echo $fq->body; ?>
                                        </div>
                                    </div>
                                </div>
                              <?php } }else{ echo ''; } ?>
                            </div>
                        </div>
                        <!--Frequently Accordin End Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Kenne's Frequently Area End Here -->

    </div>

  </body>
</html>
