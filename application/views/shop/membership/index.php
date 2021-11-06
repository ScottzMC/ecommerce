<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Membership Fee || UG Store</title>
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
                    <h2>Membership</h2>
                    <ul>
                      <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                      <li class="active">Membership fee</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Kenne's Breadcrumb Area End Here -->
        <!-- Begin Kenne's Compare Area -->
        <div class="compare-area">
            <div class="container">
                <div class="compare-table table-responsive">
                  <form action="<?php echo base_url('membership/subscribe'); ?>" method="post">
                    <table class="table table-bordered table-hover mb-0">
                        <tbody>
                            <tr>
                              <th>Membership Status</th>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->membership; ?></td>
                              <?php } ?>
                              <!-- Yearly
                              <td>Elite Member</td>
                              <!-- End of Yearly -->
                            </tr>
                            <tr>
                              <th>Product Discount</th>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->discount; ?> Percent</td>
                              <?php } ?>
                              <!-- Yearly
                              <td>30 percent</td>
                              <!-- End of Yearly -->
                            </tr>
                            <tr>
                              <th>Description</th>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->description; ?></td>
                              <?php } ?>
                              <!-- Yearly
                              <td>This subscription gives you the customer greater discount and benefit regarding all product
                              purchases on this web platform. This subscription would last for only a year, after which you
                              would need to renew again.</td>
                              <!-- End of Yearly -->
                            </tr>
                            <tr>
                              <th>Price</th>
                              <?php foreach($membership as $member){ ?>
                              <td>&pound;<?php echo $member->price; ?></td>
                              <?php } ?>
                              <!-- Yearly
                              <td>&pound;200</td>
                              <!-- End of Yearly -->
                            </tr>
                            <tr>
                              <th>Subscription Period</th>
                              <?php foreach($membership as $member){ ?>
                              <td><?php echo $member->duration; ?></td>
                              <?php } ?>
                              <!-- Yearly
                              <td>Yearly</td>
                              <!-- End of Yearly -->
                            </tr>
                            <?php
                              $email = $this->session->userdata('uemail');
                              $query = $this->db->query("SELECT fund FROM users WHERE email = '$email' ")->result();
                              foreach($query as $qry){}
                            ?>
                            <tr>
                              <th class="compare-column-titles">Payment Type</th>
                              <td>
                                <input type="radio" name="payment_type" value"debit"> Debit Card
                                <?php
                                $monthly = $this->db->query("SELECT price FROM membership WHERE membership = 'Premium Member' ")->result();
                                foreach($monthly as $month){
                                  $price_month = $month->price;
                                }
                                if($qry->fund < $price_month){ ?>
                                  <div class="alert alert-danger">
                                    Low funds to subscribe to Elite membership if you want to use E-wallet.. Please top-up
                                  </div>
                                <?php }else{ ?>
                                <input type="radio" name="payment_type" value="ewallet"> E-wallet
                              <?php } ?>
                              </td>
                              <!-- Yearly -->
                              <td>
                                <input type="radio" name="payment_type" value"debit"> Debit Card
                                <?php
                                $yearly = $this->db->query("SELECT price FROM membership WHERE membership = 'Elite Member' ")->result();
                                foreach($yearly as $year){
                                  $price_year = $year->price;
                                }
                                if($qry->fund < $price_year){ ?>
                                  <div class="alert alert-danger">
                                    Low funds to subscribe to Elite membership if you want to use E-wallet.. Please top-up
                                  </div>
                                <?php }else{ ?>
                                <input type="radio" name="payment_type" value="ewallet"> E-wallet
                              <?php } ?>
                              </td>
                              <!-- End of Yearly -->
                            </tr>
                            <?php if(!empty($this->session->userdata('login'))){ ?>
                            <tr>
                              <th>E-wallet Fund</th>
                              <td>E-wallet Balance: &pound;<?php echo $qry->fund; ?></td>
                              <td>E-wallet Balance: &pound;<?php echo $qry->fund; ?></td>
                            </tr>
                          <?php }else{ ?>
                            <div class="alert alert-danger">
                              Please Login to View E-wallet Balance
                            </div>
                          <?php } ?>
                          <?php if(!empty($this->session->userdata('login'))){ ?>
                            <tr>
                                <th class="compare-column-titles">Action</th>
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                        <button type="submit" name="btn_monthly" class="kenne-btn">
                                            <span>SUBSCRIBE</span>
                                        </button>
                                    </div>
                                </td>
                                <!-- Yearly -->
                                <td class="compare-column-productinfo">
                                    <div class="compare-pdoduct-image">
                                      <button type="submit" name="btn_yearly" class="kenne-btn">
                                          <span>SUBSCRIBE</span>
                                      </button>
                                    </div>
                                </td>
                                <!-- End of Yearly -->
                            </tr>
                          <?php }else{ ?>
                            <div class="alert alert-danger">
                              Please Login to Subscribe as a Member
                            </div>
                          <?php } ?>
                        </tbody>
                    </table>
                  </form>
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
