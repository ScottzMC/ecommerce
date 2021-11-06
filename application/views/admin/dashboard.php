<?php

function convertToAgoFormat($timestamp){
    $diffBtwCurrentTimeAndTimeStamp = (time() - $timestamp);
    $periodsString = ["sec", "min","hr","day","week","month","year","decade"];
    $periodNumbers = ["60" , "60" , "24" , "7" , "4.35" , "12" , "10"];
    for(@@$iterator = 0; $diffBtwCurrentTimeAndTimeStamp >= $periodNumbers[$iterator]; $iterator++)
        @@$diffBtwCurrentTimeAndTimeStamp /= $periodNumbers[$iterator];
        $diffBtwCurrentTimeAndTimeStamp = round($diffBtwCurrentTimeAndTimeStamp);

    if($diffBtwCurrentTimeAndTimeStamp != 1)  $periodsString[$iterator].="s";
        $output = "$diffBtwCurrentTimeAndTimeStamp $periodsString[$iterator]";
        echo "Posted " .$output. " ago";
}

function convertToRegisterFormat($timestamp){
    $diffBtwCurrentTimeAndTimeStamp = (time() - $timestamp);
    $periodsString = ["sec", "min","hr","day","week","month","year","decade"];
    $periodNumbers = ["60" , "60" , "24" , "7" , "4.35" , "12" , "10"];
    for(@@$iterator = 0; $diffBtwCurrentTimeAndTimeStamp >= $periodNumbers[$iterator]; $iterator++)
        @@$diffBtwCurrentTimeAndTimeStamp /= $periodNumbers[$iterator];
        $diffBtwCurrentTimeAndTimeStamp = round($diffBtwCurrentTimeAndTimeStamp);

    if($diffBtwCurrentTimeAndTimeStamp != 1)  $periodsString[$iterator].="s";
        $output = "$diffBtwCurrentTimeAndTimeStamp $periodsString[$iterator]";
        echo "Registered " .$output. " ago";
}

function convertToOrderFormat($timestamp){
    $diffBtwCurrentTimeAndTimeStamp = (time() - $timestamp);
    $periodsString = ["sec", "min","hr","day","week","month","year","decade"];
    $periodNumbers = ["60" , "60" , "24" , "7" , "4.35" , "12" , "10"];
    for(@@$iterator = 0; $diffBtwCurrentTimeAndTimeStamp >= $periodNumbers[$iterator]; $iterator++)
        @@$diffBtwCurrentTimeAndTimeStamp /= $periodNumbers[$iterator];
        $diffBtwCurrentTimeAndTimeStamp = round($diffBtwCurrentTimeAndTimeStamp);

    if($diffBtwCurrentTimeAndTimeStamp != 1)  $periodsString[$iterator].="s";
        $output = "$diffBtwCurrentTimeAndTimeStamp $periodsString[$iterator]";
        echo "Ordered " .$output. " ago";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin Dashboard || UG Store</title>
</head>

<!--< ?php foreach($total as $totrow){} ?>-->
<?php if(!empty($total_user_count)){ foreach($total_user_count as $tot_use_count){} }else{ echo ''; } ?>
<?php if(!empty($total_product_count)){foreach($total_product_count as $tot_prod_count){} }else{ echo ''; } ?>
<?php if(!empty($total_order_count)){foreach($total_order_count as $tot_ord_count){} }else{ echo ''; } ?>

<body>

    <!-- Main Content -->
		<div class="page-wrapper">
      <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg  bg-blue">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">Admin Dashboard</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo site_url('admin/dashboard'); ?>">Admin Dashboard</a></li>
							<li class="active"><span>Dashboard</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>

				<!-- /Title -->
				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="icon-briefcase txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light">Total Products</h6>
												<span class="txt-light counter counter-anim"><?php echo $tot_prod_count->product_count; ?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="sm-progress-box">
											<i class="icon-emotsmile mb-15 block"></i>
											<span class="font-12 head-font txt-dark">Order Rate
                        <?php $order_rate = $tot_ord_count->order_count * 30/100; ?>
                        <span class="pull-right"><?php echo $order_rate; ?>%
                          <span class="pl-5"><i class="fa fa-arrow-up txt-success font-12"></i></span>
                        </span>
                      </span>
											<div class="progress mt-10">
												<div class="progress-bar progress-bar-success" aria-valuenow="<?php echo $order_rate; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $order_rate; ?>%" role="progressbar">
                          <span class="sr-only"><?php echo $order_rate; ?>% Complete (success)</span> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>

					<!-- /Bordered Table -->
          <div class="col-lg-4 col-md-6 col-sm-12">
						<div class="panel panel-success card-view">
							<div class="panel-heading mb-20">
								<div class="pull-left">
									<h6 class="panel-title txt-light pull-left">User Register Status</h6>
								</div>
								<div class="pull-right">
									<a class="txt-light" href="javascript:void(0);"><i class="ti-plus"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>

              <?php if(!empty($user_status)){ foreach($user_status as $usrow){ ?>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<ul class="chat-list-wrap">
										<li class="chat-list">
											<div class="chat-body">
												<a class="" href="#">
													<div class="chat-data">
														<img class="user-img img-circle" src="<?php echo base_url('uploads/original.jpg'); ?>"  alt="<?php echo $usrow->firstname; ?>"/>
														<div class="user-data">
															<span class="name block capitalize-font"><?php echo $usrow->firstname; ?></span>
															<span class="time block txt-grey"><?php echo convertToRegisterFormat($usrow->created_time); ?></span>
														</div>
														<div class="status online"></div>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
            <?php } }else{ echo ''; } ?>
						</div>
					</div>

          <div class="col-lg-4 col-md-6 col-sm-12">
						<div class="panel panel-success card-view">
							<div class="panel-heading mb-20">
								<div class="pull-left">
									<h6 class="panel-title txt-light pull-left">User Product Status</h6>
								</div>
								<div class="pull-right">
									<a class="txt-light" href="javascript:void(0);"><i class="ti-plus"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
              <?php if(!empty($user_product)){ foreach($user_product as $prow){ ?>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<ul class="chat-list-wrap">
                    <li class="chat-list">
											<div class="chat-body">
												<a class="" href="#">
													<div class="chat-data">

                            <img class="user-img img-circle" src="<?php echo base_url('uploads/products/'.$prow->image1); ?>"  alt="<?php echo $prow->title; ?>"/>
														<div class="user-data">
                              <span class="name block capitalize-font">&pound;<?php echo $prow->price; ?></span>
                              <span class="time block txt-grey"><?php echo str_replace('-', ' ', $prow->title); ?></span>
                              <span class="time block txt-grey"><?php echo convertToAgoFormat($prow->created_time); ?></span>
														</div>
														<div class="status online"></div>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
            <?php } }else{ echo ''; } ?>
						</div>
					</div>
				</div>

				<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Status - Per Month Info</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body pb-0">
										<div class="row">
											<div class="col-sm-3 col-xs-6 mb-15">
												<span id="pie_chart_1" class="easypiechart skill-circle" data-percent="<?php echo $tot_use_count->user_count * 30/100; ?>">
													<span class="percent head-font"><?php echo $tot_use_count->user_count * 30/100; ?></span>
												</span>
												<span class="skill-head mt-20">Users</span>
											</div>
											<div class="col-sm-3 col-xs-6 mb-15">
												<span id="pie_chart_2" class="easypiechart skill-circle" data-percent="<?php echo $tot_prod_count->product_count * 30/100; ?>">
													<span class="percent head-font"><?php echo $tot_prod_count->product_count * 30/100; ?></span>
												</span>
												<span class="skill-head mt-20">Products</span>
											</div>
											<div class="col-sm-3 col-xs-6 mb-15">
												<span id="pie_chart_3" class="easypiechart skill-circle" data-percent="<?php echo $tot_ord_count->order_count * 30/100; ?>">
													<span class="percent head-font"><?php echo $tot_ord_count->order_count * 30/100; ?></span>
												</span>
												<span class="skill-head mt-20">Order Rate</span>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- /Row -->

    <script>
      function deliverorder(id){
        var order_id = id;
        if(confirm("Are you sure you this order has been delivered")){
        $.post('<?php echo base_url('admin/product/view_order/deliver_order'); ?>', {"order_id": order_id}, function(data){
          location.reload();
          $('#cte').html(data)
          });
        }
      }

      function cancelorder(id){
        var order_id = id;
        if(confirm("Are you sure you want to cancel your order")){
        $.post('<?php echo base_url('admin/product/view_order/cancel_order'); ?>', {"order_id": order_id}, function(data){
          location.reload();
          $('#cti').html(data)
          });
        }
      }

    </script>

    <p id='cte'></p>
    <p id='cti'></p>

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Total Orders</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>OID</th>
														<th>FullName</th>
														<th>Product Name</th>
														<th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
														<th>Order Status</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Deliver</th>
                            <th>Cancel</th>
													</tr>
												</thead>
												<tbody>
                          <?php if(!empty($order)){ foreach($order as $odrow){ ?>
													<tr>
														<td>#<?php echo $odrow->order_id; ?></td>
														<td><?php echo $odrow->firstname; ?> <?php echo $odrow->lastname; ?></td>
														<td><?php echo str_replace('-', ' ', $odrow->title); ?></td>
                            <td>&pound;<?php echo $odrow->price; ?></td>
                            <td style="text-align: center;"><?php echo $odrow->quantity; ?></td>
                            <td>&pound;<?php echo $odrow->quantity * $odrow->price; ?></td>
														<td>
                              <?php if($odrow->status == "Delivering"){ ?>
                              <span class="label label-warning">
                                <?php echo $odrow->status; ?>
                              </span>
                            <?php }else if($odrow->status == "Delivered"){ ?>
                              <span class="label label-success">
                                <?php echo $odrow->status; ?>
                              </span>
                            <?php }else if($odrow->status == "Cancelled"){ ?>
                              <span class="label label-danger">
                                <?php echo $odrow->status; ?>
                              </span>
                            <?php } ?>
														</td>
                            <td><?php echo convertToOrderFormat($odrow->created_time); ?></td>
                            <td><?php echo date("j M Y", strtotime($odrow->created_date)); ?></td>
                            <td>
													   <button class="btn btn-success btn-icon-anim btn-square" onclick="deliverorder(<?php echo $odrow->id; ?>)" title="Delivered Order">
                               <i class="icon-check"></i>
                             </button>
                            </td>
                            <td>
													   <button class="btn btn-danger btn-icon-anim btn-square" onclick="cancelorder(<?php echo $odrow->id; ?>)" title="Cancel Order">
                               <i class="icon-trash"></i>
                             </button>
                            </td>
													</tr>
                        <?php } }else{ echo ''; } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->

			</div>

		</div>
        <!-- /Main Content -->

    <!-- /#wrapper -->

</body>
</html>
