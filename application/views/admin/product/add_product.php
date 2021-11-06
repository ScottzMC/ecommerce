<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Add New Products || Admin UG Store</title>
	</head>

	<?php if(!empty($total_order_count)){ foreach($total_order_count as $tot_ord_count){} }else{ echo ''; } ?>

  <body>
          <!-- Main Content -->
  		<div class="page-wrapper">
              <div class="container-fluid">
  				<!-- Title -->
  				<div class="row heading-bg  bg-pink">
  					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
  					  <h5 class="txt-light">Upload Products</h5>
  					</div>
  					<!-- Breadcrumb -->
  					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
  					  <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  							<li><a href="#"><span>Product</span></a></li>
  							<li class="active"><span>Upload a Product</span></li>
  					  </ol>
  					</div>
  					<!-- /Breadcrumb -->
  				</div>
  				<!-- /Title -->

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="<?php echo base_url('admin/product/add_product'); ?>" method="POST" enctype="multipart/form-data" role="form">
												<h6 class="txt-dark capitalize-font"><i class="icon-list mr-10"></i>about product</h6>
												<hr>
                        <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Title</label>
															<input type="text" id="title" name="title" class="form-control" placeholder="Rounded Chair">
                              <span class="text-danger"><?php echo form_error('title'); ?></span>
                            </div>
													</div>
													<!--/span-->
                          <div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Type</label>
															<!--<select class="form-control" data-placeholder="Choose a Type" tabindex="1" id="type" name="type" onchange="changeProduct('type', 'category', 'subcategory', 'model', 'year', 'location')">-->
                              <select class="form-control" data-placeholder="Choose a Type" name="type" required>
                                <option>Select</option>
																<?php
																$query = $this->db->query("SELECT DISTINCT type FROM menu")->result();
																foreach($query as $qry){ ?>
									                <option value="<?php echo $qry->type; ?>"><?php echo str_replace('-', ' ', $qry->type); ?></option>
									              <?php }?>
															</select>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Category</label>
															<!--<select class="form-control" data-placeholder="Choose a Type" tabindex="1" id="type" name="type" onchange="changeProduct('type', 'category', 'subcategory', 'model', 'year', 'location')">-->
                              <select class="form-control" data-placeholder="Choose a Type" name="category" required>
                                <option>Select</option>
																<?php
																$query = $this->db->query("SELECT DISTINCT category FROM menu")->result();
																foreach($query as $qry){ ?>
																<option value="<?php echo $qry->category; ?>"><?php echo str_replace('-', ' ', $qry->category); ?></option>
									              <?php }?>
															</select>
														</div>
													</div>

												<!-- Row -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="control-label mb-10">Product Color</label>
                            <select class="form-control" data-placeholder="Choose a Color" name="color" required>
                              <option>Select</option>
															<option value="Black">Black</option>
                              <option value="Blue">Blue</option>
															<option value="Brown">Brown</option>
                              <option value="Grey">Grey</option>
															<option value="Green">Green</option>
															<option value="Orange">Orange</option>
                              <option value="Peach">Peach</option>
                              <option value="Purple">Purple</option>
															<option value="Red">Red</option>
                              <option value="White">White</option>
															<option value="Multi-Colored">Multi-Colored</option>
                            </select>
                          </div>
                        </div>

													<div class="col-md-6">
                          	<div class="form-group">
                            	<label class="control-label mb-10">Product Brands</label>
															<select class="form-control" data-placeholder="Choose a Type" name="brand" required>
                                <option>Select</option>
																<?php
																$query_brand = $this->db->query("SELECT DISTINCT options FROM sorting WHERE sort = 'brand' ")->result();
																foreach($query_brand as $qry_brnd){ ?>
																<option value="<?php echo $qry_brnd->options; ?>"><?php echo str_replace('-', ' ', $qry_brnd->options); ?></option>
									              <?php } ?>
																<option value="None">None</option>
															</select>
                          	</div>
                        	</div>

													<div class="col-md-6">
                          	<div class="form-group">
                            	<label class="control-label mb-10">Product Size</label>
															<select class="form-control" data-placeholder="Choose a Type" name="size" required>
                                <option>Select</option>
																<option value="S">S</option>
																<option value="M">M</option>
	                              <option value="L">L</option>
																<option value="XL">XL</option>
																<option value="None">None</option>
															</select>
                          	</div>
                        	</div>

											</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i>&pound;</i></div>
																<input type="text" name="price" class="form-control" id="exampleInputuname" placeholder="1000" required>
                                <span class="text-danger"><?php echo form_error('price'); ?></span>
															</div>
														</div>
													</div>
													<!--/span-->
                          <br><br>

													<!--/span-->
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="icon-speech mr-10"></i>Product Description</h6>
												<hr>
												<div class="row">
													<div class="col-md-12">
														<div class="panel-wrapper collapse in">
															<div class="panel-body">
						                    <!-- id="editordata"-->
																<textarea id="editordata" class="summernote" rows="7" cols="15" name="description" required></textarea>
															</div>
														</div>
													</div>
												</div>
												<!--/row-->
												<!--/span-->
											<div class="seprator-block"></div>

													<!--/span-->
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="icon-picture mr-10"></i>upload image</h6>
												<hr>
												<div class="row">
													<div class="col-lg-12">
														<label>Image 1</label>
														<input type="file" name="userFiles1[]" class="filestyle" data-buttonname="btn-primary">
														<br>
														<label>Image 2</label>
														<input type="file" name="userFiles2[]" class="filestyle" data-buttonname="btn-primary">
														<br>
														<label>Image 3</label>
														<input type="file" name="userFiles3[]" class="filestyle" data-buttonname="btn-primary">
														<br>
														<label>Image 4</label>
														<input type="file" name="userFiles4[]" class="filestyle" data-buttonname="btn-primary">
														<br>
														<label>Image 5</label>
														<input type="file" name="userFiles5[]" class="filestyle" data-buttonname="btn-primary">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<hr>

												<div class="form-actions">
													<button type="submit" name="upload" class="btn btn-success btn-icon left-icon mr-10">
                            <i class="fa fa-check"></i>
                            <span>Upload</span>
                          </button>
												</div>
											</form>
                      <?php echo $this->session->flashdata('msgError'); ?>
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

			<script type="text/javascript">
				$(document).ready(function(){
					$('#banner_type').on('change', function(){
						var type = $(this).val();
						if(type == ''){
							$('#banner_category').prop('disabled', true);
						}else{
							$('#banner_category').prop('disabled', false);
							$.ajax({
								url: "<?php echo base_url('admin/product/add_product/get_banner_menu'); ?>",
								type: "post",
								data: {'type' : type},
								dataType: 'json',
								success: function(data){
									$('#banner_category').html(data);
								},
								error: function(data){
									alert('Error Occurred');
								}
							});
						}
					});
				});
			</script>

	</body>
</html>
