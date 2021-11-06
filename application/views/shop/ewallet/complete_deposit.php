<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Complete E-wallet deposit || UG Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

    <style type="text/css">
    .panel-title{
        display: inline;
        font-weight: bold;
    }
    
    .display-table{
        display: table;
    }
    
    .display-tr{
        display: table-row;
    }

    .display-td {
        display: table-cell;
        vertical-align: middle;
        width: 61%;
    }

    </style>

<body class="template-color-1">

    <div class="main-wrapper">
      <!-- Begin Kenne's Breadcrumb Area -->
       <div class="breadcrumb-area">
           <div class="container">
               <div class="breadcrumb-content">
                   <h2>Complete E-wallet deposit</h2>
                   <ul>
                       <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                       <li><a href="<?php echo site_url('ewallet/deposit'); ?>">E-wallet</a></li>
                       <li class="active">Complete E-wallet deposit</li>
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
                                           <th class="kenne-product-remove">Action</th>
                                           <th class="kenne-product-thumbnail">Full Name</th>
                                           <th class="kenne-product-price">Initial Deposit</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                     <?php 
                                     $session_firstname = $this->session->userdata('ufirstname');
                                     $session_lastname = $this->session->userdata('ulastname');
                                     ?> 
                                     <?php foreach($deposit as $dep){ ?>
                                       <tr>
                                           <td class="kenne-product-remove"><a href="<?php echo site_url('ewallet/deposit'); ?>">
                                             Go Back</a>
                                           </td>
                                           <td class="kenne-product-name"><a href="#"><?php echo $session_firstname; ?> <?php echo $session_lastname; ?></a></td>
                                           <td class="kenne-product-price"><span class="amount">&pound;<?php echo $dep->temp_fund; ?></span></td>
                                       </tr>
                                       <?php } ?>
                                   </tbody>
                               </table>
                           </div>
                           <br>
                           <div class="row">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="panel panel-default credit-card-box">
                                    <div class="panel-heading display-table">
                                        <div class="row display-tr">
                                            <h3 class="panel-title display-td" style="width: auto;">Payment Details</h3>
                                        </div>                    
                                    </div>
                    
                                    <div class="panel-body">
                                        <?php if($this->session->flashdata('success')){ ?>
                                        <div class="alert alert-success text-center">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <p><?php echo $this->session->flashdata('success'); ?></p>
                                        </div>
                                        <?php } ?>
                    
                                        <form role="form" action="<?php echo base_url('ewallet/stripe_post'); ?>" method="post" 
                                            class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
                                            <?php $session_email = $this->session->userdata('uemail'); ?>
                                            
                                            <input type="hidden" name="amount" value="<?php echo $dep->temp_fund; ?>">
        
                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group required'>
                                                    <label class='control-label'>Name on Card</label> 
                                                    <input class='form-control' size='4' type='text'>
                                                </div>
                                            </div>
                    
                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group card required'>
                                                    <label class='control-label'>Card Number</label> 
                                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                                </div>
                                            </div>
                    
                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                    <label class='control-label'>CVC</label> 
                                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                                </div>
                    
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Month</label> 
                                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                                </div>
                    
                                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                    <label class='control-label'>Expiration Year</label> 
                                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                                </div>
                                            </div>
                                            
                                            <div class='form-row row'>
                                                <div class='col-md-12 error form-group hide'>
                                                    <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                                </div>
                                            </div>
                    
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now (&pound;<?php echo $dep->temp_fund; ?>)</button>
                                                </div>
                                            </div>
                                        </form>
                                     </div>
                                   </div>        
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
    <script type="text/javascript">
    $(function(){
        var $form = $(".require-validation");
        
        $('form.require-validation').bind('submit', function(e){
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 
                            'input[type=password]',
                            'input[type=text]', 
                            'input[type=file]',
                             'textarea'].join(', '),
    
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
            $('.has-error').removeClass('has-error');
    
        $inputs.each(function(i, el){
          var $input = $(el);
          
          if($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
    
        if(!$form.data('cc-on-file')){
            e.preventDefault();
            
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
      });
    
      function stripeResponseHandler(status, response){
        if(response.error){
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        }else{
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    
       }
    
    });
    
    </script>

</html>
