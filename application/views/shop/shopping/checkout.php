<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Checkout || UG Store</title>
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
                    <h2>Checkout</h2>
                    <ul>
                        <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                        <li class="active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Checkout Area -->
        <div class="checkout-area">
            <div class="container">
              <form action="<?php echo base_url('shopping/checkout/place_order'); ?>" method="post">
                <div class="row">
                    <div class="col-lg-6 col-12">
                      <?php foreach($shipping as $ship){} ?>
                            <div class="checkbox-form">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label>Country <span class="required">*</span></label>
                                            <select name="country" class="myniceselect nice-select wide">
                                                <option data-display="United Kingdom">United Kingdom</option>
                                            </select>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('country'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <?php if(!empty($ship->firstname)){ ?>
                                            <input placeholder="Firstname" type="text" name="firstname" value="<?php echo $ship->firstname; ?>" required>
                                            <?php }else{ ?>
                                            <input placeholder="Firstname" type="text" name="firstname" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('firstname'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <?php if(!empty($ship->lastname)){ ?>
                                            <input placeholder="Surname" type="text" name="surname" value="<?php echo $ship->lastname; ?>" required>
                                            <?php }else{ ?>
                                            <input placeholder="Surname" type="text" name="surname" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('surname'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <?php if(!empty($ship->address)){ ?>
                                            <input placeholder="Street address" type="text" name="address" value="<?php echo $ship->address; ?>" required> 
                                            <?php }else{ ?>
                                            <input placeholder="Street address" type="text" name="address" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('address'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label>Town / City <span class="required">*</span></label>
                                            <?php if(!empty($ship->town)){ ?>
                                            <select name="town" required class="myniceselect nice-select wide">
                                                <option data-display="<?php echo $ship->town; ?>"><?php echo $ship->town; ?></option>
                                                <option value="Rainham">Rainham</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select name="town" required class="myniceselect nice-select wide">
                                                <option>Select Town</option>
                                                <option value="Barking">Barking</option>
                                                <option value="Rainham">Rainham</option>
                                            </select>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('town'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="country-select clearfix">
                                            <label>County <span class="required">*</span></label>
                                            <?php if(!empty($ship->county)){ ?>
                                            <select name="county" required class="myniceselect nice-select wide">
                                                <option data-display="<?php echo $ship->county; ?>"><?php echo $ship->county; ?></option>
                                                <option value="Essex">Essex</option>
                                            </select>
                                            <?php }else{ ?>
                                            <select name="county" required class="myniceselect nice-select wide">
                                                <option>Select County</option>
                                                <option value="Essex">Essex</option>
                                                <option value="London">London</option>
                                            </select>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('county'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <?php if(!empty($ship->postcode)){ ?>
                                            <input placeholder="Postcode" type="text" name="postcode" value="<?php echo $ship->postcode; ?>" required>
                                            <?php }else{ ?>
                                            <input placeholder="Postcode" type="text" name="postcode" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('postcode'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <?php if(!empty($ship->email)){ ?>
                                            <input placeholder="Email Address" type="email" name="email" value="<?php echo $ship->email; ?>" required>
                                            <?php }else{ ?>
                                            <input placeholder="Email Address" type="email" name="email" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <?php if(!empty($ship->telephone)){ ?>
                                            <input placeholder="Telephone Number" type="text" name="telephone" value="<?php echo $ship->telephone; ?>" required>
                                            <?php }else{ ?>
                                            <input placeholder="Telephone Number" type="text" name="telephone" value="" required>
                                            <?php } ?>
                                            <span class="text-danger" style="color: red;"><?php echo form_error('telephone'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="your-order">
                          <div id="accordion">
                              <div class="card">
                                  <div class="card-header" id="#payment-1">
                                      <h5 class="panel-title">
                                          <a href="javascript:void(0)">
                                            <input type="radio" name="payment" value="debit"> Debit Card.
                                          </a>
                                      </h5>
                                  </div>
                                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                      <div class="card-body">
                                          <p>Make your payment directly into our bank account. Please use your Order
                                              ID as the payment
                                              reference. Your order won’t be shipped until the funds have cleared in
                                              our account.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <br>
                          
                          <?php if(!empty($this->session->userdata('login'))){ ?>
                          <div id="accordion2">
                              <div class="card">
                                  <div class="card-header" id="#payment-1">
                                      <h5 class="panel-title">
                                          <a href="javascript:void(0)">
                                            <input type="radio" name="payment" value="ewallet"> E-wallet.
                                          </a>
                                      </h5>
                                  </div>
                                  <div id="collapseTwo" class="collapse show" data-parent="#accordion2">
                                      <div class="card-body">
                                          <p>Make your payment directly by using your E-wallet funds. Please use your Order
                                              ID as the payment
                                              reference. Your order won’t be shipped until the funds have cleared in
                                              our account.</p>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <?php } ?>

                            <br>

                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-product-name">Product</th>
                                            <th class="cart-product-total">Total</th>
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
                                        <tr class="cart_item">
                                            <td class="cart-product-name"><?php echo $item['name']; ?><strong class="product-quantity">
                                            × <?php echo $item['qty']; ?></strong></td>
                                            <td class="cart-product-total"><span class="amount">£<?php echo $item['price']; ?></span></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                    <tfoot>
                                      <?php if($this->cart->contents()){ ?>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£<?php echo $item['subtotal']; ?></span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">£<?php echo $this->cart->total(); ?></span></strong></td>
                                        </tr>
                                        <?php if(!empty($this->session->userdata('login'))){ ?>
                                        <tr>
                                          <?php
                                          $email = $this->session->userdata('uemail');
                                          $query = $this->db->query("SELECT fund FROM users WHERE email = '$email' ")->result();
                                          foreach($query as $qry){}

                                          ?>
                                          <th>E-wallet Balance</th>
                                          <td><strong><span class="amount">£<?php echo $qry->fund; ?></span></strong></td>
                                        </tr>
                                        <?php }else{ ?>
                                          <div class="alert alert-danger">
                                            Please Login to View E-wallet Balance
                                          </div>
                                        <?php } ?>
                                      <?php } ?>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="order-button-payment">
                                        <input value="Place order" type="submit">
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
