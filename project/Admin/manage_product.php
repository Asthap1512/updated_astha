<?php
include_once('header.php');
?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Product
      <small>Manage Product</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Product</a></li>
      <li class="active">Manage Product</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>product_id</th>
                  <th>productname</th>
                  <th>tital</th>
                  <th>image</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>

              </thead>
              <tbody>
                <?php
                foreach ($prod_arr as $data) {
                ?>

                  <tr>
                    <td><?php echo $data->product_id ?></td>
                    <td><?php echo $data->productname ?></td>
                    <td><?php echo $data->tital ?></td>
                    <td><img src="upload/categories/<?php echo $data->image ?>" width="50px"></td>
                    <td><?php echo $data->Description ?></td>
                    <td>
                    <a href="delete?del_product=<?php echo $data->product_id ?>" class="btn btn-danger">Delete</a>
                    <a href="edit_product?editbtn=<?php echo $data->product_id ?>" class="btn btn-primary">Edit</a>
                    <a href="status?status_product=<?php echo $data->product_id?>" class="btn btn-success"><?php echo $data->status?></a>
                    </td>

                  </tr>
                <?php
                }
                ?>
                </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->


      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>