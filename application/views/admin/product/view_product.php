<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>View All Products || Admin UG Store</title>
</head>

<body>

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				<!-- Title -->
				<div class="row heading-bg  bg-pink">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-light">View all Products</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
						<li class="active"><span>All Products</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

        <script>
          function deleteproduct(id){
            var del_id = id;
            if(confirm("Are you sure you want to delete this product")){
            $.post('<?php echo base_url('Admin_dashboard/delete_product'); ?>', {"del_id": del_id}, function(data){
              location.reload();
              $('#cte').html(data)
              });
            }
          }
        </script>
        <p id='cte'></p>

				<!-- Product Row One -->
				<div class="row">
          <?php if(!empty($product)){ foreach($product as $prow){ ?>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">
                      <div class="options">
												<button class="btn btn-info btn-icon-anim btn-circle" type="button" onclick="deleteproduct(<?php echo $prow->id; ?>)" title="Delete"><i class="icon-trash"></i></button>
											</div>
											<a href="<?php echo site_url('admin/product/edit_product/edit/'.$prow->id); ?>">
                        <img style="height: 300px; width: 400px;" src="<?php echo base_url('uploads/products/'.$prow->image); ?>" class="img-responsive" alt="<?php echo $prow->title; ?>" />
                      </a>
										</div>
										<div class="info text-center">
											<h6><?php echo str_replace('-', ' ', $prow->title); ?></h6>
											<span class="product-spec capitalize-font block mt-5 mb-5"><?php echo str_replace('-', ' ', $prow->category); ?></span>
											<span class="head-font block text-warning">&pound;<?php echo $prow->price; ?></span>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
        <?php } }else{ echo ''; } ?>
				</div>
				<!-- /Product Row One -->
        <div class="row">
            <div class="col-sm-12">
                <ul class="pagination m-0">
                  <?php
                    echo $this->pagination->create_links();
                  ?>
                </ul>
            </div>
        </div>
			</div>

        </div>
        <!-- /Main Content -->

    <!-- /#wrapper -->

</body>

</html>
