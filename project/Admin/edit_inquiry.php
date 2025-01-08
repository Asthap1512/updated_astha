<?php
include_once('header.php');
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Edit inquiry
      <small>Edit inquiry</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">inquiry</a></li>
      <li class="active">Edit inquiry</li>
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
                <label for="exampleInputEmail1">name</label>
                <input type="text" name="name" value="<?php echo $fetch->name?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
              </div>

              
              <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="text" name="email" value="<?php echo $fetch->email?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">phonenumber</label>
                <input type="text" name="phonenumber" value="<?php echo $fetch->phonenumber?>" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">message</label>
                <textarea name="message" value="<?php echo $fetch->message?>" class="form-control"></textarea>
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