
<?php include 'config.php';
$admin = new Admin();
if(!isset($_SESSION['U_id'])){
    header('location:login/index.php');
  }

  $total = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>user</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   


<?php include 'header.php'; ?>







<div  >
  <section id="hero" class="" ><br> 
    <div class="" data-aos=""  ><br>

     

      

    </div>
  </section>

  
<div class=" " style="margin-left:200px; margin-top:50px; margin-bottom: -50px; margin-right:250px; background_color:pink;"    >


<div class=" rounded h-100 p-4" style="border:  solid 3px; margin-left:150px;margin-right:200px;">
    <h6 class="mb-4" style="color:"> Monthly Report </h6></br>
    <form action="transaction.php " method="POST" >
        <div  style="display:flex;">
        <label style="margin-left:10px;">From date : </label> <input type="date" name="date" placeholder="from date" > <div ><p></p></div>
        <label  style="margin-left:120px;" >To date : </label> <input type="date" name="tdate" placeholder="to date">
        </div><br><br><br>
        <button type="submit" class="btn btn-primary" style="text-align: center; margin-left: 230px; " name="submit">submit</button></br><br><br><br><br>
    </form>
</div>
</div>

<div style="align-items:center; margin-top:200px; margin-left:580px">
<h4 ><b>Transaction Details</b></h4>
</div><br><br>
<div style="width:1000px; margin-left:250px" >

<table class="table align-middle mb-0 bg-white">
<thead class="bg-light">
<tr>
    <th>Si/No</th>
    <th>Servicr Name</th>
    <th>Services Name</th>
    
    <th>Paid Amount</th>
    
   <th>Paid Date </th>

</tr>
</thead>
<?php 
      
      
    
      if(isset($_POST['submit'])){ 
                              
          $fdate= $_POST['date'];
          $tdate = $_POST['tdate'];

$uid = $_SESSION['U_id'];

$i=1;

$stmt = $admin->ret("SELECT * FROM `booking` INNER JOIN `payment` ON payment.bo_id = booking.bo_id INNER JOIN `services` ON services.se_id = booking.se_id INNER JOIN `category` ON category.c_id = services.c_id INNER JOIN `sp` ON sp.s_id = booking.s_id  WHERE Payment.p_status= 'Paid' AND booking.u_id = $uid AND payment.p_date BETWEEN '$fdate' AND '$tdate' ");

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

    $subtotal = $row['p_amt'];
    $total= $total+$subtotal;
 
      

                                            ?>
     
<tr>



<td><?php echo $i++; ?></td>

<td>
<div class="d-flex align-items-center">  
<img
              src="service_provider/controller/<?php echo $row['s_image'] ; ?>"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              /> 
              <div class="ms-3"> 
              <p class="fw-bold mb-1"><?php echo $row['s_name'] ;?></p>
              <p class="text-muted mb-0"><?php echo $row['s_email'] ; ?></p>
</div>
</div></td>

<td> <b> <?php echo $row['c_name'] ;?></b></td>


<td> <b> <?php echo $row['p_amt'] ;?></b></td>

<td> <b> <?php echo $row['p_date'] ;?></b></td>

</tr>

<?php } }?>

<p> Total Amount: <?php echo $total ; ?><p>
    </table>
    </div><br><br><br><br><br>
    <!-- footer --> <?php  include 'footer.php' ?>

    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

