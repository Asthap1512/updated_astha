<?php
include_once('header.php');
?>


<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Get qutoe</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Get qutoe</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- inquiry Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Get qutoe</h1>
        </div>
        <form method="post">
            <div class="row g-3">

                <div class="control-group">
                    <label for="name">name:</label>
                    <br>
                    <input type="name" name="name" class="form-control" id="name" placeholder="enter name">

            </div>

            <div class="control-group">
                <label for="name">email:</label>
                <br>
                <input type="email" name="email" class="form-control" placeholder="enter email">
            </div>

            <div class="control-group">
                <label for="name">phonenumber:</label>
                <br>
                <input type="number" name="phonenumber" class="form-control" placeholder="enter phonenumber">

            </div>

            <div class="control-group">
                <label for="message">message:</label>
                <textarea class="form-control" name="message" placeholder="enter message" id="message" style="height: 100px"></textarea>

            </div>

            <div class="text-center">
                <input type="submit" name="submit" class="btn btn-primary py-3 px-5" value="Send Message">
            </div>
    </div>
    </form>
</div>
</div>

<!-- inquiry End -->


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

</php>