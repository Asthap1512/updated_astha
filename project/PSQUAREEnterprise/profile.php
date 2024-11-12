<?php
include_once('header.php');
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">MyAccount</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">MyAccount</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


    <!-- MyAccount Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="rounded mb-4 mb-lg-0" src="img/customer/<?php echo $fetch->img?>" height="400px" width="350px" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">My Profile</h5>
                        <h1>Id : <?php echo $fetch->id?></h1>
						<h1>Name : <?php echo $fetch->name?></h1>
                    </div>
                    <p>Email : <?php echo $fetch->email?></p>
					<p>Gender : <?php echo $fetch->gender?></p>
					<p>Launguges : <?php echo $fetch->lag?></p>
					<p>Country : <?php echo $fetch->cid?></p>
					<p>Status : <?php echo $fetch->status?></p>
                    <a href="edituser?editbtn=<?php echo $fetch->id?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- MyAccount End -->

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

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</php>