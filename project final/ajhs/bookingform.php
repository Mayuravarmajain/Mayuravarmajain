
<?php include 'config.php'; 
$admin= new Admin();

if(!isset($_SESSION['U_id'])){
  header('location:login/index.php');
}

$uid = $_SESSION['U_id'];

$stmtu = $admin->ret("SELECT * FROM `user` WHERE `u_id`='$uid'");
$rowu = $stmtu->fetch(PDO::FETCH_ASSOC);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <title>Bookingform</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<section class="vh-100" style="background-color: #2779e2;">
<form  action="controller/bookingform.php " method="post" >
  <input type="hidden" name="sid" value="<?php echo $_GET['sid'] ; ?>">
  <input type="hidden" name="pid" value="<?php echo $_GET['p_id']; ?>">
  
  


  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Booking form</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" pattern="[a-zA-Z\s]+"  value="<?php echo $rowu['u_name'] ; ?>"  name="name" placeholder="Enter your name" class="form-control form-control-lg" required />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" name="email"  value="<?php echo $rowu['u_email'] ; ?>" class="form-control form-control-lg" placeholder="example@email.com" required />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Phone No</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="phone" value="<?php echo $rowu['u_phone'] ; ?>" class="form-control form-control-lg" placeholder="enter contact number" required />

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0"> Address</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="text" name="address" class="form-control form-control-lg" placeholder="enter full address" required />

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Date</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="date" name="date" min="<?php echo date("Y-m-d") ;  ?>"  class="form-control form-control-lg" placeholder="enter date" required />

              </div>
            </div>

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Time</h6>

              </div>
              <div class="col-md-9 pe-5">

              <input type="time" name="time" class="form-control form-control-lg" placeholder="enter time" required />

              </div>
            </div>

            <!-- <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
            </div> -->

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" name="submit" class="btn btn-primary btn-lg">BOOK NOW</button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  </form>
</section>
    
</body>
</html>


