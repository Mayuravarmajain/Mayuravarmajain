<?php include '../config.php';
$admin = new Admin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="controler/signup.php" method="POST"  class="signup-form" enctype="multipart/form-data" >
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" pattern="['a-zA-Z\s']+" title=" only charecter valid" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="name" pattern="[0-9]{10}" title="10 digit required" placeholder="Your phone number" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email"  id="email" placeholder="Your Email" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="location" id="name"  pattern="['a-zA-Z\s']+" title=" only valid character"  placeholder="Your Current Location" required/>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-input" name="image" id="name"     placeholder="Your image" required/>
                        </div>

                        <div class="form-group">
                            <!-- <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required /> -->
                            <!-- <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label> -->
                        </div>
                        <div class="form-group">
                            <!-- <input  class="btn btn-success"/> -->
                            <input type="submit" name="submit"  class="form-submit" ></input>
                        </div>
                        <!-- <div class="form-group">
                            <input type="submit" name="submit" id="agree-term" class="agree-term">
                          
                        </div> -->
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="../login/index.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>