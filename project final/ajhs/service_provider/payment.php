<?php include '../config.php';
$admin = new Admin();
// $id=$_GET['cid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
   
    <!-- Vendor CSS-->
    
    <!-- Main CSS-->
    <!-- <link href="css/theme.css" rel="stylesheet" media="all"> -->

    <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>
<body>

<!-- MENU SIDEBAR-->

 
<?php include 'sidebar.php'; ?> 

 <!-- END MENU SIDEBAR-->
       
        <!-- PAGE CONTAINER-->
        <div class="page-container">
        

<!-- HEADER DESKTOP-->
            <?php include 'header.php' ?>
<!-- HEADER DESKTOP-->



<div class="main-content" style="margin-top:100px; margin-left:500px" >
                <div class="section__content section__content--p30">
<div class="card">
    <?php 
    $bid=$_GET['id']; ?>
                                    <div class="card-header">
                                        <strong>Send</strong> payment
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="controller/paymentupdatefile.php" method="post" class="form-inline">
                                        <div class="form-group">
                                            

<input type="hidden" id="exampleInputName2" placeholder="category" min="" required="" class="form-control" name="id" value="<?php echo $bid; ?>" >
</div>

            <!-- <label for="exampleInputName2" class="pr-1  form-control-label"></label> -->
            <input type="text" id="exampleInputName2" width="400px"  placeholder="amount" required="" class="form-control" name="amount"  >

            &nbsp; &nbsp; &nbsp;<button  class="btn btn-success" name="submit">Send</button>

        </div>
                                            




                                            <!-- <div class="form-group">
                                                <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                                                <input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control">
                                            </div> -->

                                           

                                        </form>
                                    </div>
</div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>


</body>
</html>


