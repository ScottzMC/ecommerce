<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Edit My Website Footer || Admin MCStitches</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Dasboard Edit My Website Footer</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit My Website Footers</span></li>
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
      <h6 class="panel-title txt-dark">Footer Contact Information in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <script>
  function delete_footer(id){
    var footer_id = id;
    if(confirm("Are you sure you want to delete this Content")){
    $.post('<?php echo base_url('admin/edit/footer/delete_footer'); ?>', {"footer_id": footer_id}, function(data){
      location.reload();
      $('#cti').html(data)
      });
    }
  }
  </script>
  <p id="cti"></p>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Displays <code>Footer Contact Information from the footer part on the website from here.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($footer)){ foreach($footer as $foot){ ?>
          <h6><?php echo $foot->address; ?></h6><br>
          <h6><?php echo $foot->telephone; ?></h6><br>
          <h6><?php echo $foot->email; ?></h6>
          <br>
          <button type="button" onclick="delete_footer(<?php echo $foot->id; ?>)" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-trash"></i>
          </button>
        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Contact Information</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Add Footer Contact Information in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/footer/add_footer'); ?>" method="post" role="form">
      <p class="text-muted">Add <code>Contact Information of the website from here on the Footer.</code></p>
          <br>
          <label class="control-label mb-10">Add Address</label><br>
          <input type="text" name="address" placeholder="Add Address"/>
          <span><?php echo form_error('address'); ?></span>
          <p class="text-muted">Add <code> Address of the Website Store Location.</code> eg - 1 Victoria, Ojota, Lagos.</p>
          <br><br>

          <label class="control-label mb-10">Add Telephone Number</label><br>
          <input type="text" name="telephone" placeholder="Add Telephone Number"/>
          <span><?php echo form_error('telephone'); ?></span>
          <p class="text-muted">Add <code> Telephone of the Website Store.</code> eg - 080 123 456 78.</p>
          <br>

          <label class="control-label mb-10">Add Email Address</label><br>
          <input type="email" name="email" placeholder="Add Email Address"/>
          <span><?php echo form_error('email'); ?></span>
          <p class="text-muted">Add <code> Email Address of the Website Store.</code> eg - info@mcstitches.com</p>
          <br>

          <br>
         <button type="submit" class="btn btn-danger btn-icon left-icon mr-10">
          <i class="fa fa-check"></i>
        </button>
      </form>
    </div>
  </div>

  <?php
    if($this->form_validation->run() == TRUE){
      echo $this->session->flashdata('msgAddedFooterInfo');
      echo $this->session->flashdata('msgAddedFooterInfoError');
    }
  ?>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Edit Contact Information of the Footer in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Edit <code>Footer Contact Information from the footer part on the website in the text area.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($footer)){ foreach($footer as $foot){ ?>
					<br>
          <h6><?php echo $foot->address; ?></h6><br>
          <h6><?php echo $foot->telephone; ?></h6><br>
          <h6><?php echo $foot->email; ?></h6><br>

          <a href="<?php echo site_url('admin/edit/footer/edit_footer/'.$foot->id); ?>" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </a>
          <br>

        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Contact Information</div>'; } ?>
      </div>
    </div>
  </div>

<?php
  if($this->form_validation->run() == TRUE){
    echo $this->session->flashdata('msgUpdatedInfo');
    echo $this->session->flashdata('msgUpdatedInfoError');
  }
?>

</div>
</div>

</div>
<!-- /Row -->

</div>

	</body>
</html>
