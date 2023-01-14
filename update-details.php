<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

if(isset($_POST['update'])){
   $name =  $_POST['name'];
   $phone = $_POST['phone'];
   $about = $_POST['about'];
   $year=$_POST['year'];
   $campus = $_POST['campus'];
   $branch = $_POST['branch'];
   $talent = $_POST['talent'];
   $address = $_POST['address'];
   $igurl = $_POST['igurl'];
   $fburl = $_POST['fburl'];
   $lnurl = $_POST['lnurl'];
   $phone = $_POST['phone'];
   $email1=$_SESSION['email'];
   echo $email1;
   echo $phone.$name.$about.$dob.$year.$campus.$branch.$talent.$address.$igurl.$fburl.$lnurl;
   $select1 = "UPDATE users SET about='$about',talent='$talent',campus='$campus',branch='$branch',year='$year',address='$address',instagram='$igurl',facebook='$fburl',linkedin='$lnurl' WHERE email='$email1'";
   $result = mysqli_query($conn, $select1);
   if($result){
    echo "Updated";
    header('location:profile.php');
   }
   else{
    echo "<br>not updated";
   }
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
            margin-top:10px;
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
                <a class="nav-link " href="feed.php">Feed</a>
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
                    <li><a class="dropdown-item active" href="profile.php">My Profile</a></li>
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
                            <center><h6><?php echo $_SESSION['name'];?></h6>
                            <h6><?php echo $_SESSION['email'];?></h6>
                            <h6><?php echo $_SESSION['phone'];?></h6>
                            <hr>
                            <h6><?php echo $_SESSION['talent'];?></h6>
                        </center> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
    <h2 style="text-align:left">UPDATE MY DETAILS</h2>
    <br>
<form action="" method="post" id="">
          <div class="form-floating">
              <input type="text" class="form-control" id="fname"  name="name" value="<?php echo $_SESSION['name']; ?>">
              <label for="fname">Full Name</label>
            </div><br>
            
            <div class="form-floating">
            <select class="form-select form-select-lg mb-3" name="talent" aria-label=".form-select-lg example">
        <option selected>SELECT YOUR TALENT</option>
        <option value="Actor">Actor</option>
        <option value="Artist">Artist</option>
        <option value="Content Writter">Content Writter</option>
        <option value="Dancer">Dancer</option>
        <option value="Director">Director</option>
        <option value="Instagram Star">Instagram Star</option>
        <option value="Editor">Editor</option>
        <option value="Enterpreneur">Enterpreneur</option>
        <option value="Farmer">Farmer</option>
        <option value="Memer">Memer</option>
        <option value="Musician">Musician</option>
        <option value="Reviewer">Reviewer</option>
        <option value="Singer">Singer</option>
        <option value="Writter">Writter</option>
        <option value="Web Developer">Web Developer</option>
        <option value="Youtuber">Youtuber</option>
      </select>

            <label for="floatingTalent">Talent</label>
          </div><br>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>
            <label for="floatingInput">Email address</label>
          </div><br>
          <div class="form-floating">
            <input type="tel" class="form-control" id="number" name="phone" value="<?php echo $_SESSION['phone']; ?>" disabled>
            <label for="number">Mobile Number</label>
          </div><br>
          <!-- <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" value=>
            <label for="floatingPassword">New Password</label>
          </div><br>
          <div class="form-floating">
              <input type="password" class="form-control" id="floatingCPassword" name="cpassword">
              <label for="floatingCPassword">Confirm Password</label>
            </div><br> -->
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingAbout" name="about" value="<?php echo $_SESSION['about']; ?>" required>
            <label for="floatingAbout">About</label>
          </div><br>
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingCampus" name="campus" value="<?php echo $_SESSION['campus']; ?>"required>
            <label for="floatingCampus">Campus</label>
          </div><br>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingBranch" name="branch" value="<?php echo $_SESSION['branch']; ?>" required>
            <label for="floatingBranch">Branch</label>
          </div><br>
          
          <div class="form-floating">
          <select class="form-select" name="year" id="floatingYear" aria-label="Default select example" required>
                <option selected disabled>Select Year of Studying</option>
                <option value="PUC 1">PUC 1</option>
                <option value="PUC 2">PUC 2</option>
                <option value="ENGG 1">ENGG 1</option>
                <option value="ENGG 2">ENGG 2</option>
                <option value="ENGG 3">ENGG 3</option>
                <option value="ENGG 4">ENGG 4</option>
            </select>
            <label for="floatingYear">Current Studying Year</label>
          </div><br>

 
          <div class="form-floating">
            <textarea class="form-control" style="padding-top:-40px;" name="address"  id="floatingTextarea2" style="height: 100px" value="<?php echo $_SESSION['address']; ?>" required></textarea>
            <label for="floatingTextarea2">Address</label>
        </div>

        <div class="form-floating">
            <input type="url" class="form-control" id="floatingIg" name="igurl" value="<?php echo $_SESSION['igurl']; ?>" required>
            <label for="floatingIg">Instagram URL</label>
          </div><br>

          <div class="form-floating">
            <input type="url" class="form-control" id="floatingFb" name="fburl" value="<?php echo $_SESSION['fburl']; ?>" required>
            <label for="floatingFb">Facebook URL </label>
          </div><br>

          <div class="form-floating">
            <input type="url" class="form-control" id="floatingLn" name="lnurl" value="<?php echo $_SESSION['lnurl']; ?>" required>
            <label for="floatingLn">LinkedIn URL</label>
          </div><br>

          <div>
            <center> <button class="btn mb-3 mt-3 btn-primary" type="submit" name="update">COMPLETE MY PROFIE</button></center>
        </div>
  
          
      </form>
   

      </center>

                        
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
