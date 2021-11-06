<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php foreach($edit_banner as $edt_ban){}?>
		<title>Edit <?php echo $edt_ban->image; ?> Banners || Admin Beauty Shop</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>

      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Edit <?php echo $edt_ban->image; ?> Banners</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website Details</span></a></li>
  <li><a href="<?php echo site_url('admin/edit/banner'); ?>">Edit Banners</a></li>
  <li class="active"><span>Edit <?php echo $edt_ban->image; ?> Banners</span></li>
</ol>
</div>
<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Edit Banners in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <form action="<?php echo base_url('admin/edit/banner/edit_banner/'.$edt_ban->id); ?>" method="post" enctype="multipart/form-data" role="form">
    <div class="panel-body">
      <p class="text-muted">Edit <code>Banner from the different parts on the website from here.</code> eg - Banner 1.</p>
      <div class="tags-default mt-40">
        <?php if(!empty($edit_banner)){ foreach($edit_banner as $edt_ban){ ?>
          <br>
          <img style="width: 170px; height: 120px;" src="<?php echo base_url('uploads/banners/'.$edt_ban->image); ?>">
          <button type="submit" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </button>
          <br>
          <input type="file" name="fileBanner[]">
          <br>
          <h5><?php echo $edt_ban->image; ?></h5>
          <div class="form-group">
            <label class="control-label mb-10">Banner Type</label>
            <select class="form-control" name="banner_type">
              <option>Select</option>
							<option value="Home">Home</option>
							<option value="About">About</option>
              <?php foreach($category_menu as $catmenu){ ?>
                <option value="<?php echo $catmenu->type; ?>"><?php echo $catmenu->type; ?></option>
              <?php } ?>
            </select>
            <span><?php echo form_error('banner_type'); ?></span>
          </div>
          <h6><?php echo $edt_ban->type; ?></h6>
          <p class="text-muted">Edit <code>Where the Slider would show on the Website by Type.</code> eg - Fashion.</p>
          <br>
        <?php } }else{ echo ''; } ?>
      </div>
    </form>
		<?php
	      echo $this->session->flashdata('msgEditError');
	  ?>
    </div>
  </div>

</div>
</div>

</div>
<!-- /Row -->

</div>

    <script type="text/javascript">
			$(document).ready(function(){
				$('#banner_type').on('change', function(){
					var type = $(this).val();
					if(type == ''){
						$('#banner_category').prop('disabled', true);
					}else{
						$('#banner_category').prop('disabled', false);
						$.ajax({
							url: "<?php echo base_url('admin/edit/banner/get_banner_menu'); ?>",
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
