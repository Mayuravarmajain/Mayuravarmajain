
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



<?php 
$bid = $_GET['Bid'];
$sid = $_GET['sid'];

$stmt =  $admin->ret("SELECT * FROM `booking` WHERE `bo_id` = '$bid' ");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$stmts = $admin->ret("SELECT * FROM `sp` WHERE `s_id` = '$sid' ");
$rows = $stmts->fetch(PDO::FETCH_ASSOC);

?>

<section class="gradient-custom">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-7 col-lg-5 col-xl-4">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <form action="payment2.php?sid=<?php echo $sid;?>&Bid=<?php echo $bid;?>" method="POST">
              

            <h4 class="mb-3" style="color:black">Payment</h4>

              <div class="d-flex justify-content-between align-items-center pb-2">
                <div class="form-outline">
                
                <hr class="mb-4">
                   
                    <div class="payment-methods">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-outline">
                  <input type="text" id="amt" name="amount" value="<?php echo $row['bo_amt']*0.05 ; ?>" readonly class="form-control form-control-lg" siez="17"
                    placeholder="" />
                  <label class="form-label" for="typeName"></label>
                </div>
                <input type="hidden" value="<?php echo $bid ; ?>" name="bid" >
                <input type="hidden" value="<?php echo $rows['s_id'] ; ?>" name="sid" >
              </div>

                        <div class="Pement">


                        </div>
                        <div class="card-info pt-40 ">

                        <!-- <div>
                            <input type="radio" name="payment_method" value="cash" id="cash" onclick="cardform(this.value)" required>&nbsp;
                          <label style="font-family: 'Open Sans', sans-serif;">Cash On Delivery</label>
                          </div> -->
                            <br>


                            <input type="radio" name="payment_method" checked value="upi" id="upi" onclick="cardform(this.value)" required>&nbsp;
                            <label style="font-family: 'Open Sans', sans-serif;">UPI / Netbanking</label>
                            <div style="display:none;" id="upi_div">

                                <div class="Pement">
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>Scan and Pay</label>
                                        <img src="service_provider/controller/<?php echo $rows['s_scanner'] ; ?>" height="180px" width="180px">

                                    </div>
                                    <br>
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>Trans / Id</label>
                                        <input type="text" name="transaction" placeholder="0000 0000 0000 0000 " style="width: 200px;">


                                    </div>
                                </div>


                            </div><br>

                            <input type="radio" name="payment_method" value="card" id="card" onclick="cardform(this.value)" required title="Please Select">&nbsp;
                            <label style="font-family: 'Open Sans', sans-serif;padding-bottom: 15px;">Debit Card / Credit Card</label><br>
                            <div style="display:none;" id="card_div">


                            <div class="Pement">
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>Name On Card</label>
                                        <input type="text" name="card" value="Mayura varma jain" placeholder="name of the card " style="width: 200px;">

                                    </div>
                                    <br>
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>Branch Name</label>
                                        <input type="text" name="expr" value="Canera"  placeholder="Expiration date required" style="width: 200px;">


                                    </div><br>
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>Creadit Card Number</label>
                                        <input type="password" name="no" value="1244034523" placeholder="0000 0000 0000 0000 " style="width: 200px;">


                                    </div><br>
                                   
                                    <div class="form-box" style="display: flex;flex-direction:column">
                                        <label>IFSC Code</label>
                                        <input type="password" name="cvv" value="2147483647" placeholder="CVV Number" style="width: 200px;">


                                    </div>
                                </div>

           




                            </div>
                           
                        </div>
                        </div>
                                

                            </div>
                        </div>

                </div>
                
                <button type="submit" name="submit" class="btn btn-success btn-lg btn-rounded">Go To user Payment<i class="fas fa-arrow-right"></i>
                </button> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</div>




<script>

let textboxes = document.querySelectorAll('input[type=text]');
document.querySelectorAll('input[name=re]')
.forEach(function(radio) {
  radio.addEventListener('change', function(e) {
    let value = e.target.value;
    if (value === 'cash on delivery') {
      textboxes
        .forEach(function(textbox) {
          textbox.disabled = true;
        });
    } else if (value === 'online payment') {
      textboxes
        .forEach(function(textbox) {
          textbox.disabled = false;
        });
    }
  });
});

      
  </script>




<script>
      function cardform(myvalue) {

          if (myvalue == 'card') { //radio button id
              document.getElementById('card_div').style.display = 'block'; //div id
              document.getElementById('upi_div').style.display = 'none';
              document.getElementById('cash_div').style.display = 'none';

          } else if (myvalue == 'upi') {
              document.getElementById('card_div').style.display = 'none';
              document.getElementById('upi_div').style.display = 'block';
              document.getElementById('cash_div').style.display = 'none';
          } else {
              document.getElementById('card_div').style.display = 'none';
              document.getElementById('upi_div').style.display = 'none';
              document.getElementById('cash_div').style.display = 'block';
          }

      }
  </script>




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