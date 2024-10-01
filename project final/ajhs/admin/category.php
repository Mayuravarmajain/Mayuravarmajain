<?php include '../config.php';
$admin = new Admin();
if(!isset($_SESSION['A_id']) ){
  header('Location:login.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>admin</title>
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

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
  
  <?php include 'sidebar.php'; ?>





   <!--End sidebar-wrapper-->

<!--Start topbar header-->

<?php include 'header.php'; ?>


<!--End topbar header-->

<div class="clearfix">
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
<div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title"> Category Form</div>
           <hr>
            <form action="controller/category.php" method="POST">
           <div class="form-group">
            <label for="input-6">Category name</label>
            <input type="text" name="location"  class="form-control form-control-rounded" id="input-6" placeholder="Enter Your  Catogory Name" required>
           </div>
          
           </div>
           <div class="form-group">
            <button type="submit" name="add"  style="margin-left:225px;"class="btn btn-light btn-round px-5"> Add</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->
    </div>
         </div>
      </div>
    </div>
</div>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     

<div class="row" style="margin-top:-80px;">
        
        <div class="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">category_details</h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Si_No</th>
                      <th scope="col">Category_name</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    
                    </tr>
                  </thead>
                  <tbody>

<?php

$i =1;
$stmt = $admin->ret("SELECT * FROM `category`  ORDER BY c_name ASC ");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){


?>



<script>
  function sortTable(columnIndex) {
    let table, rows, switching, i, x, y, shouldSwitch;
    table = document.querySelector("table");
    switching = true;

    while (switching) {
      switching = false;
      rows = table.rows;

      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("td")[columnIndex];
        y = rows[i + 1].getElementsByTagName("td")[columnIndex];

        // Compare the location names in alphabetical order
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }

      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }
</script>

                    <tr>
                      <th scope="row"><?php echo $i++ ; ?></th>
                      <td><?php echo $row['c_name'] ; ?></td>
                      <td><a href="cat_update.php?id=<?php echo $row['c_id'] ;?>"><button type="submit" class="btn btn-success btn-rounded">update</button></a></td>
                      <td> <a href="controller/cat_delete.php?id=<?php echo $row['c_id'] ; ?>"><button type="submit" class="btn btn-danger btn-rounded">Delete</button> </a></td>
                      <td></td>
                      
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div><br><br><br><br>
        </div><br><br><br><br>
      </div><!--End Row--><br><br><br><br>
	  
  

<!--Start footer-->
	
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

