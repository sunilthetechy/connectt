<?php

@include 'config.php';

session_start();


if(isset($_POST['login'])){
   $email =$_POST['email'];
   $pass = $_POST['pwd'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass'; ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
         $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['phone'] = $row['phone'];
    $_SESSION['pwd']=$row['password'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['about'] = $row['about'];
    $_SESSION['campus'] = $row['campus'];
    $_SESSION['branch']=$row['branch'];
    $_SESSION['talent'] = $row['talent'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['igurl'] = $row['instagram'];
    $_SESSION['fburl']=$row['facebook'];
    $_SESSION['lnurl'] = $row['linkedin'];
         header('location:home-loggedin.php');
   }else{
      $error[] = 'incorrect email or password!';
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400;1,500&display=swap" rel="stylesheet">

    <title>Discover the Talent</title>
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
                <a class="nav-link" href="team.php">Team</a>
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
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-6">
    <img src="login.jpg" width="800px" height="400px" alt="">
  </div>
    <div class="col-sm-6" id="login">
<div id="register">
<h2 style="text-align:center">Login</h2>
    <br>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <form action="" method="post" class="w-100" id="login">
        <div class="form-floating">
          <input type="email" class="form-control w-100" id="email" name="email" required style="widht:100%">
          <label for="number">Email</label>
        </div><br>
        <div class="form-floating">
          <input type="password" class="form-control w-100" id="floatingPassword" name="pwd" required>
          <label for="floatingPassword">Password</label>
        </div>
              <input type="checkbox" value="remember-me"> Remember Me
            </label>
          </div>
          
          <input class="w-50 btn btn-lg btn-primary" type="submit"  name="login" value="LOGIN">
      </form>
      </div>

    </div>


  </div>
</div>


  
</body>
</html>