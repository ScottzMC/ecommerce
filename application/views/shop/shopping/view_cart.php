<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View Shopping Cart || UG Store</title>
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
                   <h2>Shopping Cart</h2>
                   <ul>
                       <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                       <li class="active">Shopping Cart</li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Kenne's Breadcrumb Area End Here -->
       <!-- Begin Uren's Cart Area -->
       <div class="kenne-cart-area">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                           <div class="table-content table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th class="kenne-product-remove">remove</th>
                                           <th class="kenne-product-thumbnail">images</th>
                                           <th class="cart-product-name">Product</th>
                                           <th class="kenne-product-price">Unit Price</th>
                                           <th class="kenne-product-quantity">Quantity</th>
                                           <th class="kenne-product-subtotal">Total</th>
                                       </tr>
                                   </thead>
                                   <tbody>
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
                                       <tr>
                                           <td class="kenne-product-remove"><a href="<?php echo site_url('shopping/view_cart/remove/'.$item['rowid']); ?>">
                                             <i class="fa fa-trash" title="Remove"></i></a>
                                           </td>
                                           <td class="kenne-product-thumbnail"><a href="<?php echo site_url('product/detail/'.strtolower($item['product_code'])); ?>">
                                             <img height="100" src="<?php echo base_url('uploads/products/'.$image); ?>" alt="<?php echo $item['name']; ?>"></a>
                                           </td>
                                           <td class="kenne-product-name"><a href="<?php echo site_url('product/detail/'.strtolower($item['product_code'])); ?>"><?php echo $item['name']; ?></a></td>
                                           <td class="kenne-product-price"><span class="amount">&pound;<?php echo $item['price']; ?></span></td>
                                           <td class="quantity">
                                               <?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="width: 20%" '); ?>
                                           </td>
                                           <td class="product-subtotal"><span class="amount">&pound;<?php echo $item['subtotal']; ?></span></td>
                                       </tr>
                                       <?php echo form_close(); ?>
                                       <?php endforeach; ?>
                                       <?php endif; ?>
                                   </tbody>
                               </table>
                           </div>
                           <div class="row">
                               <div class="col-md-5 ml-auto">
                                 <?php if($this->cart->contents()){ ?>
                                   <div class="cart-page-total">
                                       <h2>Cart totals</h2>
                                       <ul>
                                           <li>Subtotal <span>&pound;<?php echo $item['subtotal']; ?></span></li>
                                           <li>Total <span>&pound;<?php echo $this->cart->total(); ?></span></li>
                                       </ul>
                                       <a href="<?php echo site_url('shopping/view_cart/clear'); ?>">Clear Cart</a>
                                       <?php //if(!empty($this->session->userdata('login'))){ ?>
                                       <a href="<?php echo site_url('shopping/checkout'); ?>">Proceed to checkout</a>
                                     <?php //}else{ echo ''; } ?>
                                   </div>
                                 <?php } ?>
                               </div>
                           </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Uren's Cart Area End Here -->

       <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
        <!-- Scroll To Top End -->

    </div>

  </body>

</html>
