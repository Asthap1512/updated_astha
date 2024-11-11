<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Team Member
            <small>Manage Team Member</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Team Member</a></li>
            <li class="active">Manage Team Member</li>
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
                        <th>team_id</th>
                        <th>fullname</th>
                        <th>image</th>
                        <td>Designation</td>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       foreach($team_arr as $data)
                       {
                      ?>
                      <tr>
                        <td><?php echo $data->team_id?></td>
                        <td><?php echo $data->fullname?></td>
                        <td><?php echo $data->image?><img src="" /></td>
                        <td><?php echo $data->Designation?></td>
                        <td>
							<a href="" class="btn btn-danger">Delete</a>
							<a href="" class="btn btn-primary">Edit</a>
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