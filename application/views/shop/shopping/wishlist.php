<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>View your Wishlist || UG Store</title>
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
                   <h2>Wishlist</h2>
                   <ul>
                       <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                       <li class="active">Wishlist</li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Kenne's Breadcrumb Area End Here -->
       <!--Begin Kenne's Wishlist Area -->
       <div class="kenne-wishlist_area">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <form action="javascript:void(0)">
                           <div class="table-content table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th class="kenne-product_remove">remove</th>
                                           <th class="kenne-product-thumbnail">images</th>
                                           <th class="cart-product-name">Product</th>
                                           <th class="kenne-product-price">Unit Price</th>
                                           <th class="kenne-product-stock-status">Stock Status</th>
                                       </tr>
                                   </thead>

                                   <script>
                                     function delete_wishlist(id){
                                       var wish_id = id;
                                       if(confirm("Are you sure you want to delete this product from your wishlist")){
                                       $.post('<?php echo base_url('shopping/wishlist/delete'); ?>', {"wish_id": wish_id}, function(data){
                                         location.reload();
                                         $('#cte').html(data)
                                         });
                                       }
                                     }
                                   </script>
                                   <p id='cte'></p>

                                   <tbody>
                                     <?php if(!empty($wishlist)){ foreach($wishlist as $wish){ ?>
                                       <tr>
                                           <td class="kenne-product_remove"><button type="button" onclick="delete_wishlist(<?php echo $wish->id; ?>)"><i class="fa fa-trash"
                                               title="Remove"></i></button></td>
                                           <td class="kenne-product-thumbnail"><a href="<?php echo site_url('product/detail/'.strtolower($wish->product_code)); ?>">
                                             <img height="100" src="<?php echo base_url('uploads/products/'.$wish->image); ?>" alt="<?php echo $wish->title; ?>"></a>
                                           </td>
                                           <td class="kenne-product-name"><a href="<?php echo site_url('product/detail/'.strtolower($wish->product_code)); ?>"><?php echo $wish->title; ?></a></td>
                                           <td class="kenne-product-price"><span class="amount">£<?php echo $wish->price; ?></span></td>
                                           <td class="kenne-product-stock-status"><span class="in-stock">in stock</span></td>
                                       </tr>
                                     <?php } }else{ ?>
                                       <div class="alert alert-info">
                                         No Product Added to Wishlist
                                       </div>
                                     <?php } ?>
                                   </tbody>
                               </table>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!-- Kenne's Wishlist Area End Here -->

       <!-- Scroll To Top Start -->
      <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
      <!-- Scroll To Top End -->

    </div>

  </body>

</html>
