<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Edit My Website Product Sorting || Admin Tiger Phenix Online Store</title>
	</head>

	<?php foreach($total_order_count as $tot_ord_count){} ?>

  <body>
      <!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid">
<!-- Title -->
<div class="row heading-bg  bg-pink">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<h5 class="txt-light">Edit My Website Product Sorting</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
  <li><a href="#"><span>Edit Website</span></a></li>
  <li class="active"><span>Edit Sorting</span></li>
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
      <h6 class="panel-title txt-dark">Sorting in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <script>

	function delete_sorting(id){
    var sorting_id = id;
    if(confirm("Are you sure you want to delete this Content")){
    $.post('<?php echo base_url('admin/edit/sorting/delete_sorting'); ?>', {"sorting_id": sorting_id}, function(data){
      location.reload();
      $('#cta').html(data)
      });
    }
  }
  </script>
	<p id="cta"></p>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Displays <code>Sorting on the website from here.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($sorting)){ foreach($sorting as $sort){ ?>
					<br>
					<h4><?php echo str_replace('-', ' ', $sort->type); ?></h4><br>
					<h5><?php echo str_replace('-', ' ', $sort->sort); ?></h5><br>
					<h5><?php echo str_replace('-', ' ', $sort->options); ?></h5><br>
          <br>
          <button type="button" onclick="delete_sorting(<?php echo $sort->id; ?>)" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-trash"></i>
          </button>
        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Sorting</div>'; } ?>
      </div>
    </div>
  </div>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Add Sorting in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

	<div class="panel-wrapper collapse in">
    <div class="panel-body">
      <form action="<?php echo base_url('admin/edit/sorting/add_sorting'); ?>" method="post" role="form">
      <p class="text-muted">Add <code>Sorting of the website.</code></p>
          <br>
					<label class="control-label mb-10">Sorting Types</label>
					<select class="form-control" data-placeholder="Choose a Type" name="type">
						<option>Select</option>
            <?php
            $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
            foreach($menu as $men){ ?>
						<option value="<?php echo $men->type; ?>"><?php echo str_replace('-', ' ', $men->type); ?></option>
            <?php } ?>
					</select>
					<br>

					<label class="control-label mb-10">Sorting Category</label>
					<select class="form-control" data-placeholder="Choose a Category" name="category">
						<option>Select</option>
            <?php
            $menu_cat = $this->db->query("SELECT DISTINCT category FROM menu")->result();
            foreach($menu_cat as $men_cat){ ?>
						<option value="<?php echo $men_cat->category; ?>"><?php echo str_replace('-', ' ', $men_cat->category); ?></option>
            <?php } ?>
					</select>
					<br>

          <label class="control-label mb-10">Add Sorting List</label><br>
          <input type="text" name="sorting" style="color: black;" placeholder="Add Sorting List"/><br>
          <span><?php echo form_error('sorting'); ?></span>
					<br>
					<select class="form-control" data-placeholder="Choose a Sorting List" name="sorting">
						<option>Select</option>
            <?php
            $sorting = $this->db->query("SELECT DISTINCT sort FROM sorting")->result();
            foreach($sorting as $sort){ ?>
						<option value="<?php echo $sort->sort; ?>"><?php echo $sort->sort; ?></option>
            <?php } ?>
					</select>
          <br><p class="text-muted">Add <code> Sorting List of the Website Store.</code>e.g - Brand</p>
          <br><br>

					<label class="control-label mb-10">Add Sorting Options</label><br>
          <input type="text" name="options" style="color: black;" placeholder="Add Sorting Option"/><br>
          <span><?php echo form_error('options'); ?></span>
					<br>
					<select class="form-control" data-placeholder="Choose a Sorting Options" name="options">
						<option>Select</option>
            <?php
            $sorting = $this->db->query("SELECT DISTINCT options FROM sorting")->result();
            foreach($sorting as $sort){ ?>
						<option value="<?php echo $sort->options; ?>"><?php echo $sort->options; ?></option>
            <?php } ?>
					</select>
          <br><p class="text-muted">Add <code> Sorting Option of the Website Store.</code>e.g - Brand</p>
          <br><br>

          <br>
         <button type="submit" class="btn btn-danger btn-icon left-icon mr-10">
          <i class="fa fa-check"></i>
        </button>
      </form>
    </div>
  </div>

  <?php
      echo $this->session->flashdata('msgSortingError');
  ?>

</div>
</div>

<div class="col-md-4">
<div class="panel panel-default card-view">
  <div class="panel-heading">
    <div class="pull-left">
      <h6 class="panel-title txt-dark">Edit Sorting in Website</h6>
    </div>
    <div class="clearfix"></div>
  </div>

  <div class="panel-wrapper collapse in">
    <div class="panel-body">
      <p class="text-muted">Edit <code>Sorting on the website in the text area.</code></p>
      <div class="tags-default mt-40">
				<?php if(!empty($sorting)){ foreach($sorting as $sored){ ?>
					<h6><?php echo str_replace('-', ' ', $sored->type); ?></h6><br>
          <br>

          <p><?php echo str_replace('-', ' ', $sored->sort); ?></p>
           <br>

				 <p><?php echo str_replace('-', ' ', $sored->options); ?></p>
          <br>

          <a href="<?php echo site_url('admin/edit/sorting/edit_sorting/'.$sored->id); ?>" class="btn btn-danger btn-icon left-icon mr-10">
            <i class="fa fa-check"></i>
          </a>
          <br>

        <?php } }else{ echo '<div class="alert alert-danger" role="alert">No Sorting</div>'; } ?>
      </div>
    </div>
  </div>

<?php
  if($this->form_validation->run() == TRUE){
    echo $this->session->flashdata('msgMenuInfo');
    echo $this->session->flashdata('msgMenuInfoError');
  }
?>

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
