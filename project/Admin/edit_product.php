<?php
include_once('header.php');
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Edit Product
      <small>Edit Product</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Product</a></li>
      <li class="active">Edit Product</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header">

          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label>Select Categories</label>
                <select name="cate_id" class="form-control">
                  <option value="">Select Categories</option>
                  <?php
									foreach($arr_categories as $w)
									{
										if($fetch->cate_id==$w->id)
										{
									?>
											<option value="<?php echo $w->cate_id;?>" selected ><?php echo $w->tital;?></option>
									<?php
										}
										else
										{
									?>
											<option value="<?php echo $w->cate_id;?>" ><?php echo $w->tital;?></option>
									<?php
										}
									}
									?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">productname</label>
                <input type="text" name="productname" value="<?php echo $fetch->productname?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Categries Name">
              </div>


              <div class="form-group">
                <label for="exampleInputFile">Upload Course File</label>
                <input type="file" name="image" id="exampleInputFile">
                <img src="upload/categories/<?php echo $fetch->image?>" width="50px"/>

              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <textarea name="description" value="<?php echo $fetch->description?>" class="form-control"></textarea>
              </div>



              <div class="box-footer">
                <button type="submit" name="save" class="btn btn-primary">Save</button>
              </div>
          </form>
        </div><!-- /.box -->
      </div><!--/.col (left) -->

    </div> <!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>