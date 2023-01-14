<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}
$email=$_SESSION['email'];
echo $email;
$select = " SELECT * FROM users WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
         $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['phone'] = $row['phone'];
    $_SESSION['pwd']=$row['password'];
    $_SESSION['about'] = $row['about'];
    $_SESSION['campus'] = $row['campus'];
    $_SESSION['branch']=$row['branch'];
    $_SESSION['year']=$row['year']; 
    $_SESSION['talent'] = $row['talent'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['igurl'] = $row['instagram'];
    $_SESSION['fburl']=$row['facebook'];
    $_SESSION['lnurl'] = $row['linkedin'];
    echo " Updated";
   }else{
      echo "Not Updated";
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="talents.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400;1,500&display=swap" rel="stylesheet">

    <style>
        h6{
            margin-left:10px;
            margin-top:25px;
        }
        span{
            text-align:center;
            margin-left:10px;
        }
    </style>
    <title>Discover the Talent</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light shadow p-3 mb-5 bg-white rounded sticky-top">
        <div class="container">
          <a class="navbar-brand" href="home-loggedin.php">
            <img src="connectt.png" width="250px" height="90px" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">
              <li class="nav-item">
                <a class="nav-link "   href="home-loggedin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="talents.php">Talents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="feed.php">Feed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="credits.php">Credits</a>
              </li>
            </ul>
            <div class="float-right">
                <!-- <button type="button" class="btn" id="btn-signup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
                <button  type="button" class="btn" id="btn-login" data-bs-toggle="modal" data-bs-target="#loginPopup">Log In</button> -->
                <div class="dropdown">
                <button class="dropdown-toggle btn" id="hibtn" type="button" width="500px" height="500px" data-bs-toggle="dropdown" aria-expanded="false">
                <h6>Hii <?php echo $_SESSION['name'];?></h6>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item active" style="color: #072448;" aria-current="page" href="profile.php">My Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                </ul>
                </div>
                
            </div>
            </div>
          </div>
        </div>
      </nav>  
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-img rounded-circle">
                           <center><img src="profile1.jpg" alt="" class="rounded-circle" width="200px" height="200px" id="img"></center>
                            </div>
                            <div class="card-body">
                            <center><h5><?php echo $_SESSION['name'];?></h5>
                            <h5><?php echo $_SESSION['email'];?></h5>
                            <h5><?php echo $_SESSION['phone'];?></h5>
                            <hr>
                            <h5><?php echo $_SESSION['talent'];?></h5>
                        </center> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                        <h6>About Me:<span><?php echo $_SESSION['about']; ?></span></h6>
                        <h6>Campus: <span><?php echo $_SESSION['campus']; ?></span></h6>
                        <h6>Branch: <span><?php echo $_SESSION['branch']; ?></span></h6>
                        <h6>Current Studying Year: <span><?php echo $_SESSION['year'];?></span></h6>
                        <h6>Address: <span><?php echo $_SESSION['address']; ?></span></h6>
                        <h6>Instagram URL: <span><?php echo $_SESSION['igurl']; ?></span></h6>
                        <h6>LinkedIn URL: <span><?php echo $_SESSION['lnurl']; ?></span></h6>
                        <h6>Facebook URL: <span><?php echo $_SESSION['fburl']; ?></span></h6>
                        <div>
                           <center><a href="update-details.php"> <button class="btn mb-3 mt-5 btn-primary">UPDATE MY DETAILS</button></a></center>
                        </div>
                        </div>

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
              <input type="email" name="email" ess" class="form-control">
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

      <script src="js/bootstrap.bundle.js"></script>

</body>
</html>
