<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php foreach($detail as $det){} ?>
    <title>Compare <?php echo $det->title; ?> || UG Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Kenne's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Comparison</h2>
                    <ul>
                      <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                      <li><a href="<?php echo site_url('membership'); ?>">Membership</a></li>
                      <li class="active">Compare</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Compare Area -->
        <div class="compare-area">
            <div class="container">
                <div class="compare-table table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="compare-column-titles">Image</th>
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <a href="<?php echo site_url('product/detail/'.strtolower($det->product_code)); ?>">
                                            <img src="<?php echo base_url('uploads/products/'.$det->image1); ?>" alt="<?php echo $det->title; ?>">
                                        </a>
                                        <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                          <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                          <input type="hidden" name="product_code" value="<?php echo $det->product_code; ?>">
                                          <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                          <input type="hidden" name="type" value="<?php echo $det->type; ?>">
                                          <input type="hidden" name="category" value="<?php echo $det->category; ?>">
                                          <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                          <input type="hidden" name="image" value="<?php echo $det->image1; ?>">
                                          <a><button type="submit" class="kenne-btn">Add To Cart</button></a>
                                        </form>
                                    </div>
                                </td>

                                <!-- Compared product -->
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                      <a href="<?php echo site_url('product/detail/'.$det->title); ?>">
                                          <img src="<?php echo base_url('uploads/products/'.$det->image1); ?>" alt="<?php echo $det->title; ?>">
                                        </a>
                                        <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                          <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                          <input type="hidden" name="product_code" value="<?php echo $det->product_code; ?>">
                                          <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                          <input type="hidden" name="type" value="<?php echo $det->type; ?>">
                                          <input type="hidden" name="category" value="<?php echo $det->category; ?>">
                                          <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                          <input type="hidden" name="image" value="<?php echo $det->image1; ?>">
                                          <a><button type="submit" class="kenne-btn">Add To Cart</button></a>
                                        </form>
                                    </div>
                                </td>
                                <!-- End of Compared Product -->

                                <!-- Compared product -->
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                      <a href="<?php echo site_url('product/detail/'.strtolower($det->product_code)); ?>">
                                          <img src="<?php echo base_url('uploads/products/'.$det->image1); ?>" alt="<?php echo $det->title; ?>">
                                        </a>
                                        <form action="<?php echo base_url('shopping/view_cart/add'); ?>" method="post">
                                          <input type="hidden" name="id" value="<?php echo $det->id; ?>">
                                          <input type="hidden" name="product_code" value="<?php echo $det->product_code; ?>">
                                          <input type="hidden" name="title" value="<?php echo $det->title; ?>">
                                          <input type="hidden" name="type" value="<?php echo $det->type; ?>">
                                          <input type="hidden" name="category" value="<?php echo $det->category; ?>">
                                          <input type="hidden" name="price" value="<?php echo $det->price; ?>">
                                          <input type="hidden" name="image" value="<?php echo $det->image1; ?>">
                                          <a><button type="submit" class="kenne-btn">Add To Cart</button></a>
                                        </form>
                                    </div>
                                </td>
                                <!-- End of Compared Product -->
                            </tr>
                            <tr>
                              <th>Membership Status</th>
                              <td>Normal Member</td>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->membership; ?></td>
                              <?php } ?>
                            </tr>
                            <tr>
                              <th>Product Discount</th>
                              <td>0 percent</td>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->discount; ?> Percent</td>
                              <?php } ?>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>
                                    <h5 class="compare-product-name">
                                      <a href="<?php echo site_url('product/detail/'.$det->title); ?>"><?php echo $det->title; ?></a>
                                    </h5>
                                </td>
                                <!-- Compared Product -->
                                <td>
                                    <h5 class="compare-product-name">
                                      <a href="<?php echo site_url('product/detail/'.$det->title); ?>"><?php echo $det->title; ?></a>
                                    </h5>
                                </td>
                                <!-- End of Compared Product -->
                                <td>
                                    <h5 class="compare-product-name">
                                      <a href="<?php echo site_url('product/detail/'.$det->title); ?>"><?php echo $det->title; ?></a>
                                    </h5>
                                </td>
                                <!-- End of Compared Product -->
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo character_limiter($det->description, 100); ?></td>
                                <!-- Compared Product -->
                                <td><?php echo character_limiter($det->description, 100); ?></td>
                                <!-- End of Compared Product -->
                                <!-- Compared Product -->
                                <td><?php echo character_limiter($det->description, 100); ?></td>
                                <!-- End of Compared Product -->
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>&pound; <?php echo $det->price; ?></td>
                                <!-- Compared Product -->
                                <td>&pound; <?php echo $det->price - ($det->price * 20/100); ?></td>
                                <!-- End of Compared Product -->
                                <td>&pound; <?php echo $det->price - ($det->price * 30/100); ?></td>
                                <!-- End of Compared Product -->
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td><?php echo $det->color; ?></td>
                                <!-- Compared Product -->
                                <td><?php echo $det->color; ?></td>
                                <!-- End of Compared Product -->
                                <td><?php echo $det->color; ?></td>
                                <!-- End of Compared Product -->
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td><?php echo $det->size; ?></td>
                                <!-- Compared Product -->
                                <td><?php echo $det->size; ?></td>
                                <!-- End of Compared Product -->
                                <td><?php echo $det->size; ?></td>
                                <!-- End of Compared Product -->
                            </tr>
                            <!--<tr>
                                <th>Rating</th>
                                <td>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                </td>

                                <!-- Compared Product
                                <td>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                </td>
                                <!-- End of Compared Product

                                <!-- Compared Product
                                <td>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                </td>
                                <!-- End of Compared Product
                            </tr>-->
                            <tr>
                                <th class="compare-column-titles">Action</th>
                                <td></td>
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <a href="<?php echo site_url('membership'); ?>" class="kenne-btn">
                                            <span>SUBSCRIBE</span>
                                        </a>
                                    </div>
                                </td>
                                <!-- Yearly -->
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <a href="<?php echo site_url('membership'); ?>" class="kenne-btn">
                                            <span>SUBSCRIBE</span>
                                        </a>
                                    </div>
                                </td>
                                <!-- End of Yearly -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Kenne's Compare Area End Here -->

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

</body>

</html>
