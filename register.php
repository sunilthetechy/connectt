<?php

@include 'config.php';


if(isset($_POST['signup'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $phone = $_POST['phone'];

   $select = " SELECT * FROM users WHERE email = '$email' || phone = '$phone' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[]= 'password not matched!';
      }else{
         $insert = "INSERT INTO users(name,email,phone,password) VALUES('$name','$email','$phone','$pass')";
         $query=mysqli_query($conn, $insert);
         if($query){
            header('location:login.php');
         }
         else{
            echo "Account Not Created";
         }
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400;1,500&display=swap" rel="stylesheet">

    <title>Connectt</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light shadow p-3 mb-5 bg-white rounded sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="connectt.png" width="250px" height="80px" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">
              <li class="nav-item">
                <a class="nav-link active" style="color: #072448;" aria-current="page" href="home-loggedin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="talents.php">Talents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feed.php">Feed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.phpp">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="credits.php">Credits</a>
              </li>
            </ul>
            <div class="float-right">
            <a href="register.php"><button type="button" class="btn" id="btn-signup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button></a>
                <a href="login.php"><button  type="button" class="btn" id="btn-login" data-bs-toggle="modal" data-bs-target="#loginPopup">Log In</button></a>
            </div>
            </div>
          </div>
        </div>
      </nav>
     <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="signup.webp" width="500px" height="600px" alt="">
        </div>
        <div class="col-sm-6">
        <div id="register">
    <h2 style="text-align:center">Join Our Community</h2>
    <p class="text-center">#RGUKT_FAMILY</p>
    <br>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
<form action="" class="w-100" method="post" id="signup">
          <div class="form-floating">
              <input type="text" class="form-control w-100" id="fname"  name="name" required>
              <label for="fname">Full Name</label>
            </div><br>
          <div class="form-floating">
            <input type="email" class="form-control w-100" id="floatingInput" name="email" required>
            <label for="floatingInput">Email address</label>
          </div><br>
          <div class="form-floating">
            <input type="tel" class="form-control w-100" id="number" name="phone" required>
            <label for="number">Mobile Number</label>
          </div><br>
          <div class="form-floating">
            <input type="password" class="form-control w-100" id="floatingPassword" name="password" required>
            <label for="floatingPassword">Password</label>
          </div><br>
          <div class="form-floating">
              <input type="password" class="form-control w-100" id="floatingCPassword" name="cpassword" required>
              <label for="floatingCPassword">Confirm Password</label>
            </div><br>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Agree to our Terms and Conditions
            </label>
          </div>
          <input class="w-100 btn btn-lg btn-primary"  name="signup" type="submit" value="SIGN UP">
      </form>
   
      </div>

        </div>
      </div>
     </div>
    
     <footer style="margin-top:10%;">
      <div id="footer-up" >
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h2 class="text-center">About Us</h2>
           
            <p>On a Mission to Connect All Liked Mindsets People of Whole RGUKT with this Platform on the other hand Discovering the Hidden Talents of Whole RGUKT</p>
          </div>
          
          <div class="col-sm-4">
            <h2 class="text-center" id="links">Useful Links</h2>
              <ul class="text-center">
                <li><a href="#" style="text-decoration: none;color: white;">Home</a></li>
                <li><a href="#" style="text-decoration: none;color: white;">Talents</a></li>
                <li><a href="#" style="text-decoration: none;color: white;">Feed</a></li>
                <li><a href="#" style="text-decoration: none;color: white;">Team</a></li>
                <li><a href="#" style="text-decoration: none;color: white;">Feedback</a></li>
                <li><a href="#" style="text-decoration: none;color: white;">Credits</a></li>
              </ul>
          </div>
          <div class="col-sm-4">
            <h2 class="text-center" id="sform">Subscribe Now</h2>
            <form action="" method="post" >
              <div class="input-group">
              <input type="email" name="email" ess" class="form-control w-100">
              <span class="input-group-text"><button style="background-color:#072448 ;color: white;" class="btn">Subscribe</button></span>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="container-fluid">
            <hr>
            <p style="font-weight:800px; font-size: large;"> Copyrights &copy; Connectt 2022 . All Rights Reserved</p>
          </div>
        </div>
      </div>
      <!-- <div id="copyrights">
       <p> Copyrights &copy; Discover the Talent 2022 . All Rights Reserved</p>
      </div> -->
    </footer>
</body>
</html>