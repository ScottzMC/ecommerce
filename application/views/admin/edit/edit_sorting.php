<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php foreach($edit_sorting as $edt_sort){} ?>
		<title>Edit <?php echo str_replace('-', ' ', $edt_sort->type); ?> Menu || Admin Tiger Phenix Online Store</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Dasboard Edit <?php echo $edt_sort->type; ?> Sorting Options</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit <?php echo str_replace('-', ' ', $edt_sort->type); ?> Sorting Options</span></li>
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
      <h6 class="panel-title txt-dark">Edit Sorting Options in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/sorting/edit_sorting/'.$edt_sort->id); ?>" method="post" role="form">
      <p class="text-muted">Add <code>Sorting of the website.</code></p>
          <br>
          <label class="control-label mb-10">Add Sorting List</label><br>
          <input type="text" name="sorting" style="color: black;" value="<?php echo str_replace('-', ' ', $edt_sort->sort); ?>"/><br>
          <span><?php echo form_error('sorting'); ?></span>
          <br><p class="text-muted">Add <code> Sorting Options of the Website.</code>e.g - Brand</p>
          <br><br>

					<label class="control-label mb-10">Add Sorting Options</label><br>
          <input type="text" name="options" style="color: black;" value="<?php echo str_replace('-', ' ', $edt_sort->options); ?>"/><br>
          <span><?php echo form_error('options'); ?></span>
          <br><p class="text-muted">Add <code> Sorting Options of the Website.</code>e.g - Brand</p>
          <br><br>

          <br>
         <button type="submit" name="edit" class="btn btn-danger btn-icon left-icon mr-10">
          <i class="fa fa-check"></i>
        </button>
      </form>
    </div>
  </div>

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

	</body>
</html>
