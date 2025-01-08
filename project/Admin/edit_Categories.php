<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Categories
            <small>Edit Categories</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Categories</a></li>
            <li class="active">Edit Categories</li>
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
                      <label for="exampleInputPassword1">tital</label>
                      <input type="text" name="tital" value="<?php echo $fetch->tital?>" class="form-control" id="exampleInputPassword1" placeholder="Enter tital">
                    </div>
                    
                    <div class="form-group">
                <label for="exampleInputFile">Upload Course File</label>
                <input type="file" name="image" id="exampleInputFile">
                <img src="upload/categories/<?php echo $fetch->image?>" width="50px"/>

              </div>
                    <!-- radio -->
                   
                        
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                  </div>
                </form>
                
              </div><!-- /.box -->
            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
include_once('footer.php');
?>