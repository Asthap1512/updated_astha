<?php
	if(isset($_SESSION['userid']))
	{
		echo "<script>
			window.location='index';
		</script>";
	}
	include_once('header.php');
?>


    <!-- Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Signup</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Signup</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Signup</h5>
                <h1>Signup For Course Details</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                       
                        <form method="post" enctype="multipart/form-data">
                            
							<div class="control-group">
                                <input type="text" name="name" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required"  />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" name="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" name="password" class="form-control border-0 p-4" id="password" placeholder="Your password" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
							<br>
							<div class="control-group">
								<b>Gender :</b> 
                                Male : <input type="radio" name="gender"  value="Male"/>
                                Female : <input type="radio" name="gender"  value="Female"/>
                            </div>
							<br>
							<div class="control-group">
								<b>Hobby :</b> 
                                Dance : <input type="checkbox" name="lag[]"  value="Dance"/>
                                Sports : <input type="checkbox" name="lag[]"  value="Sports"/>
								Music : <input type="checkbox" name="lag[]"  value="Music"/>
                            </div>
							<br>
							 <div class="control-group">
                                Country : 
								<select name="cid" class="form-control" >
									<option style="color:black">------ Select Country ------</option>
                                    <!-- <option style="color:black">india</option>
                                    <option style="color:black">japan</option> -->
							        
									
									<?php
									foreach($arr_country as $w)
									{
									?>
										 <option value="<?php echo $w->id;?>"><?php echo $w->country_name;?></option>
									<?php
									}
									?> 
								</select>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="control-group">
                                <input type="file" name="img" class="form-control border-0 p-4" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <input name="submit" class="btn btn-primary py-3 px-5" type="submit" value="Signup">
                            </div>
							<br>
							<a href="login">If you already registered then Click Here</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php
	include_once('footer.php');
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>