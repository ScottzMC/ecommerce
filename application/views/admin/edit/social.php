<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Edit My Website Social || Admin Beauty Shop</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Dasboard Edit My Website Social Links</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit My Website Social Links</span></li>
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
      <h6 class="panel-title txt-dark">Social Links in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <script>

	function delete_social_link(id){
    var social_id = id;
    if(confirm("Are you sure you want to delete this Social Link")){
    $.post('<?php echo base_url('admin/edit/social/delete_social'); ?>', {"social_id": social_id}, function(data){
      location.reload();
      $('#ctl').html(data)
      });
    }
  }
  </script>
	<p id="ctl"></p>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Displays <code>Social Links on the website from here.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($social)){ foreach($social as $soc_lin){ ?>
					<br>
					<h5><?php echo str_replace('-', ' ', $soc_lin->social); ?></h5>
					<p><?php echo strtolower($soc_lin->url); ?></p><br>
          <br>
          <button type="button" onclick="delete_social_link(<?php echo $soc_lin->id; ?>)" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-trash"></i>
          </button>
        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Social Links</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Add Social Links in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/social/add_social'); ?>" method="post" role="form">
      <p class="text-muted">Add <code>Social Links of the website from here on the Footer.</code></p>
          <br>
          <label class="control-label mb-10">Add Social Media</label><br>
          <input type="text" name="social" placeholder="Add Social Media"/><br>
          <span><?php echo form_error('social'); ?></span>
          <br><p class="text-muted">Add <code> Social Links of the Website Store Location.</code>e.g - Facebook</p>
          <br><br>

					<label class="control-label mb-10">Add Social Media URL</label><br>
					<input style="width: 300px;" type="text" name="url" placeholder="Add Social Media URL"/><br>
          <span><?php echo form_error('url'); ?></span>
					<br><p class="text-muted">Add <code> Social Media URL of the Website Store Location.</code>e.g - https://www.facebook.com</p>
        	<br>

          <br>
         <button type="submit" class="btn btn-danger btn-icon left-icon mr-10">
          <i class="fa fa-check"></i>
        </button>
      </form>
    </div>
  </div>

  <?php
      echo $this->session->flashdata('msgSocial');
      echo $this->session->flashdata('msgSocialError');
  ?>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Edit Social Links in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Edit <code>About Experience on the website in the text area.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($social)){ foreach($social as $soc_lin){ ?>
					<h6><?php echo str_replace('-', ' ', $soc_lin->social); ?></h6><br>
          <p class="text-muted">Edit <code> About Social Media of the Website Store Location.</code> eg - Facebook</p>
          <br>

					<h6><?php echo $soc_lin->url; ?></h6><br>
          <p class="text-muted">Edit <code> About Social Media URL of the Website Store Location.</code> eg - https://www.facebook.com</p>
          <br>
           <br>

          <a href="<?php echo site_url('admin/edit/social/edit_social/'.$soc_lin->id); ?>" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </a>
          <br>

        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Social</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

</div>
<!-- /Row -->

</div>

	</body>
</html>
