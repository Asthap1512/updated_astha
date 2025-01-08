<?php
include_once('header.php');
?>
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Customer
            <small>Edit Customer</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer</a></li>
            <li class="active">Edit Customer</li>
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
                                <input type="text" name="name" value="<?php echo $fetch->name ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Categries Name">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <input type="text" name="email" value="<?php echo $fetch->email ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Categries Name">
                            </div>
                            

                            
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Course File</label>
                                <input type="file" name="Profile" id="exampleInputFile">
                                <img src="upload/customer/<?php echo $fetch->img ?>" width="50px" />

                            </div>

                            <div class="control-group">
                                <b>Gender :</b>
                                <?php
                                $gender = $fetch->gender;
                                ?>
                                Male : <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") {
                                                                                            echo "checked";
                                                                                        } ?> />
                                Female : <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") {
                                                                                                echo "checked";
                                                                                            } ?> />
                            </div>
                                 
                            <div class="control-group">
								<b>Hobby :</b> 
								<?php 
									$lag=$fetch->lag; // Dance,Sports,Music
									$lag_arr=explode(",",$lag);
								?>
                                Dance : <input type="checkbox" name="lag[]"  value="Dance" <?php if(in_array("Dance",$lag_arr)){ echo "checked";}?>/>
                                Sports : <input type="checkbox" name="lag[]"  value="Sports" <?php if(in_array("Sports",$lag_arr)){ echo "checked";}?>/>
								Music : <input type="checkbox" name="lag[]"  value="Music" <?php if(in_array("Music",$lag_arr)){ echo "checked";}?>>
                            </div>

                            <div class="control-group">
                                Country : 
								<select name="cid" class="form-control" >
									<option style="color:black">------ Select Country ------</option>
									
									<?php
									foreach($arr_country as $w)
									{
										if($fetch->cid==$w->id)
										{
									?>
											<option value="<?php echo $w->id;?>" selected ><?php echo $w->country_name;?></option>
									<?php
										}
										else
										{
									?>
											<option value="<?php echo $w->id;?>" ><?php echo $w->country_name;?></option>
									<?php
										}
									}
									?>
								</select>
                                <p class="help-block text-danger"></p>
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