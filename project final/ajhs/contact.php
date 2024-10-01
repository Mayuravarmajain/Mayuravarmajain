
<?php include 'config.php';
$admin = new Admin(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>.gradient-custom {
  background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
    linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
    linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
    radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
    radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
  background-blend-mode: screen, color-dodge, overlay, difference, normal;
}</style>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>

 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<body>


<p></p><br><br><br>






<section class="gradient-custom">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center ">
      <div class="col-md-12">
        <div class="card" style="border-radius: 20px;">
          <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-6 mb-md-0 mb-5">
        <form action="controller/contact.php" method="POST">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="md-form mb-0" style="margin-left:50px">
                        <select id="name" name="name" class="form-control" required>
                            <option value="">Choose</option>

                            <?php $stmts = $admin->ret("SELECT * FROM `sp`");
                            while($row = $stmts->fetch(PDO::FETCH_ASSOC)){
                            
                            ?>

                            <option value="<?php echo $row['s_id'] ; ?>"><?php echo $row['s_name'] ; ?></option>

                            <?php } ?>
</select>
                        <label for="name" class="">Service Provider name</label>
                    </div>
                </div><br><br>
                <!--Grid column-->

                <!--Grid column-->
                <!-- <div class="col-md-6"> -->
                    <!-- <div class="md-form mb-0" style="margin-left:50px"> -->
                        <!-- <input type="text" id="email" name="email" class="form-control"> -->
                        <!-- <label for="email" class="">Your email</label> -->
                    <!-- </div> -->
                <!-- </div><br> -->
                <!--Grid column-->

            </div><br><br>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0" style="margin-left:50px">
                        <input type="text" id="subject" name="subject" class="form-control" required>
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div><br>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form" style="margin-left:50px">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

       

        <div class="text-center text-md-left" style="margin-left:50px">
            <button type="submit" name="send" class="btn btn-primary" >Send</a>
        </div>
        <div class="status"></div>

        </form>
    </div><br><br><br>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0" style="margin-left:150px">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>Manglore, CA 94126, INDIA</p>
            </li><br>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 01 234 567 89</p>
            </li><br>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>ajhs@gmail.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
<!--Section: Contact v.2-->
        </div>
      </div>
    </div>
  </div>
</section>





</div>









<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>