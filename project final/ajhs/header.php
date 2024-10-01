 <!-- ======= Header ======= -->

 <header id="header" class="fixed-top " style="margin-bottom:100px;" >
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">AJHS<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="userprofile.php"> Profile </a></li> 
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Report</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php 
 $stmt = $admin->ret("SELECT * FROM `category`");
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {?>
 
 
              <li><a href="servicecategory.php?cid=<?php echo $row['c_id']; ?>"><?php echo $row['c_name'] ?></a></li>
  <?php }
 ?>        
    
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="bookingstatus.php">Status</a></li>
          <li><a class="nav-link scrollto" href="transaction.php">Transaction</a></li>
          <!-- <li><a class="nav-link scrollto " href="feedback.php"> Feedback </a></li> -->
          <li><a class="nav-link scrollto" href="#services">Reviews</a></li>
        
          

          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
            
              <li><a href="login/index.php">Login as a User</a></li>
              <!-- <li><a href="userprofile.php">User Profile</a></li> -->
              <li><a href="admin/signin.php">Login as a Admin</a></li>
              <li><a href="servicer/signin.php">Login as a Servicer</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="#" class="get-started-btn scrollto">Get Started</a> -->

    </div>
  </header><!-- End Header -->