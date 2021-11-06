<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Edit My Website FAQ || Admin UG Store</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Edit My Website FAQ</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit FAQ</span></li>
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
      <h6 class="panel-title txt-dark">Frequently Ased Questions in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <script>

	function delete_faq_content(id){
    var faq_id = id;
    if(confirm("Are you sure you want to delete this Content")){
    $.post('<?php echo base_url('admin/edit/faq/delete_faq_content'); ?>', {"faq_id": faq_id}, function(data){
      location.reload();
      $('#cta').html(data)
      });
    }
  }
  </script>
	<p id="cta"></p>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Displays <code>FAQ Contents on the website from here.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($faq_content)){ foreach($faq_content as $faq_cont){ ?>
					<br>
					<h5><?php echo str_replace('-', ' ', $faq_cont->title); ?></h5><br>
					<p><?php echo $faq_cont->body; ?></p><br>
          <br>
          <button type="button" onclick="delete_faq_content(<?php echo $faq_cont->id; ?>)" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-trash"></i>
          </button>
        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No FAQ Content</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Add FAQ Contents in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/faq/add_faq'); ?>" method="post" role="form">
      <p class="text-muted">Add <code>FAQ Contents of the website from here on the Footer.</code></p>
          <br>
          <label class="control-label mb-10">Add FAQ Title</label><br>
          <input type="text" name="title" style="color: black; width: 350px;" placeholder="Add Title"/><br>
          <span><?php echo form_error('title'); ?></span>
          <br><p class="text-muted">Add <code> FAQ Title of the Website Store Location.</code>e.g - Welcome to Beauty Shop</p>
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
      <h6 class="panel-title txt-dark">Edit FAQ Contents in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Edit <code>Footer About Contents on the website in the text area.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($faq_content)){ foreach($faq_content as $faq_cont){ ?>
					<h6><?php echo str_replace('-', ' ', $faq_cont->title); ?></h6><br>
          <label class="control-label mb-10">Add Title</label><br>
          <br>

          <p><?php echo $abt_cont->body; ?></p>
           <br>

          <a href="<?php echo site_url('admin/edit/faq/edit_faq/'.$faq_cont->id); ?>" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </a>
          <br>

        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No FAQ</div>'; } ?>
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
