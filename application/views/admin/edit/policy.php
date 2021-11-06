<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Edit My Website Return Policy || Admin UG Store</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Edit My Website Return Policy</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit Return Policy</span></li>
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
      <h6 class="panel-title txt-dark">Return Policy in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <script>

	function delete_policy_content(id){
    var policy_id = id;
    if(confirm("Are you sure you want to delete this Content")){
    $.post('<?php echo base_url('admin/edit/policy/delete_policy_content'); ?>', {"policy_id": policy_id}, function(data){
      location.reload();
      $('#cta').html(data)
      });
    }
  }
  </script>
	<p id="cta"></p>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Displays <code>Return Policy Contents on the website from here.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($policy_content)){ foreach($policy_content as $pol_cont){ ?>
					<br>
					<h5><?php echo str_replace('-', ' ', $pol_cont->title); ?></h5><br>
					<p><?php echo $pol_cont->body; ?></p><br>
          <br>
          <button type="button" onclick="delete_policy_content(<?php echo $pol_cont->id; ?>)" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-trash"></i>
          </button>
        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Return Policy Content</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Add Return Policy Contents in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/policy/add_policy'); ?>" method="post" role="form">
      <p class="text-muted">Add <code>Return Policy Contents of the website from here on the Footer.</code></p>
          <br>
          <label class="control-label mb-10">Add Policy Title</label><br>
          <input type="text" name="title" style="color: black; width: 350px;" placeholder="Add Title"/><br>
          <span><?php echo form_error('title'); ?></span>
          <br><p class="text-muted">Add <code> Policy Title of the Website Store Location.</code>e.g - Welcome to Beauty Shop</p>
          <br><br>

				  <div class="form-group">
						<textarea id="editorabout" class="summernote" rows="7" cols="15" name="body"></textarea>
						<span><?php echo form_error('body'); ?></span>
				  </div>
          <br>

          <br>
         <button type="submit" class="btn btn-danger btn-icon left-icon mr-10">
          <i class="fa fa-check"></i>
        </button>
      </form>
    </div>
  </div>

  <?php
      echo $this->session->flashdata('msgAboutContentError');
  ?>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Edit Return Policy Contents in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Edit <code>Footer About Contents on the website in the text area.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($policy_content)){ foreach($policy_content as $pol_cont){ ?>
					<h6><?php echo str_replace('-', ' ', $pol_cont->title); ?></h6><br>
          <label class="control-label mb-10">Add Title</label><br>
          <br>

          <p><?php echo $pol_cont->body; ?></p>
           <br>

          <a href="<?php echo site_url('admin/edit/policy/edit_policy/'.$pol_cont->id); ?>" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </a>
          <br>

        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Return Policy</div>'; } ?>
      </div>
    </div>
  </div>

<?php
  if($this->form_validation->run() == TRUE){
    echo $this->session->flashdata('msgAboutInfo');
    echo $this->session->flashdata('msgAboutInfoError');
  }
?>

</div>
</div>

</div>
<!-- /Row -->

</div>

	</body>
</html>
