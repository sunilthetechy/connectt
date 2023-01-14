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
   $dob = $_POST['dob'];
   $year=$_POST['year'];
   $campus = $_POST['campus'];
   $branch = $_POST['branch'];
   $talent = $_POST['talent'];
   $address = $_POST['address'];
   $igurl = $_POST['igurl'];
   $fburl = $_POST['fburl'];
   $lnurl = $_POST['lnurl'];
   $phone = $_POST['phone'];
   $email=$_SESSION['email'];
   echo $email;
   echo $phone.$name.$about.$dob.$year.$campus.$branch.$talent.$address.$igurl.$fburl.$lnurl;
   $select1 = "SELECT * FROM user_details WHERE email='$email'";
    $result = mysqli_query($conn, $select1); 
if(mysqli_num_rows($result) > 0){
       $updateDetails="UPDATE user_details SET phone=$phone,dob=$dob,about=$about,talent=$talent,campus=$campus,branch=$branch,year=$year,name=$name,address=$address,instagram=$igurl,facebook=$fburl,linkedin=$lnurl WHERE email='$email';";
        if($updateDetails)
        {
            echo "Details Updated";
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
                echo "1.Session Variables Updated";
             }else{
               echo "1.Session Variables Not Updated";
             }      
        }
    else{
      echo "1.Details Not Updated";
    }
}
else{
    echo "Inseting".$email;
    $insert_k = "INSERT INTO user_details(email,phone,dob,about,talent,campus,branch,year,name,address,instagram,facebook,linkedin) VALUES('$email','$phone','$dob','$about','$talent','$campus','$branch','$year','$name','$address','$igurl','$fburl','$lnurl')";
    $query1=mysqli_query($conn, $insert_k);
    echo $query1.'Hi<br>';
    if($query1){
    echo "Values Inserted";
    }
    else{
        echo "Values not Inserted";
    }
   
}
    
    $select = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $update_users="UPDATE users SET name=$name,phone=$phone;";
        $result1=mysqli_query($conn, $update_users);
        if($result1)
        {
            echo "Users Table Updated";
        }
        else{
            echo "Users Table Not Updated";
        }
       $row = mysqli_fetch_array($result);
          $_SESSION['name'] = $row['name'];
          $_SESSION['phone'] = $row['phone'];
            echo "Session Variables Updated";
    }else{
      echo "Session Variables Not Updated";
    }

 };
 ?>
<?php

@include 'config.php';


session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}


if(isset($_POST['update'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $phone = $_POST['phone'];
   $about = $_POST['about'];
   $dob = $_POST['dob'];
   $year=$_POST['year'];
   $campus = $_POST['campus'];
   $branch = $_POST['branch'];
   $talent = $_POST['talent'];
   $address = $_POST['address'];
   $igurl = $_POST['igurl'];
   $fburl = $_POST['fburl'];
   $lnurl = $_POST['lnurl'];
   $phone = $_POST['phone'];
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
    $_SESSION['igurl'] = $row['igurl'];
    $_SESSION['fburl']=$row['fburl'];
    $_SESSION['lnurl'] = $row['lnurl'];
    $insert = "INSERT INTO users(name,email,phone) VALUES('$name','$email','$phone')";
         $query=mysqli_query($conn, $insert);
    $insert = "INSERT INTO user_details(name,email,phone,dob,about,talent,campus,branch,year,instagram,facebook,linkedin) VALUES('$name','$email','$phone','$dob','$about','$talent','$campus','$branch','$year','$igurl','$fburl','$lnurl')";
         $query1=mysqli_query($conn, $insert);
         if($query1){
            header('location:login.php');
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
          <a class="navbar-brand" href="#">
            <img src="DISCOVER THE TALENT.png" width="150px" height="70px" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">
              <li class="nav-item">
                <a class="nav-link active" style="color: #072448;" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Talents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Feed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Credits</a>
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
                    <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
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
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
<form action="" method="post" id="">
          <div class="form-floating">
              <input type="text" class="form-control" id="fname"  name="name" value="<?php echo $_SESSION['name'] ?>">
              <label for="fname">Full Name</label>
            </div><br>
            
            <div class="form-floating">
            <select class="form-select" name="talent" aria-label="Default select example">
                <option selected disabled>Whats Your Talent??</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="floatingTalent">Talent</label>
          </div><br>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" value="<?php echo $_SESSION['email'] ?>">
            <label for="floatingInput">Email address</label>
          </div><br>
          <div class="form-floating">
            <input type="tel" class="form-control" id="number" name="phone" value="<?php echo $_SESSION['phone'] ?>">
            <label for="number">Mobile Number</label>
          </div><br>
          <!-- <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" value="<?php echo $_SESSION['pwd'] ?>">
            <label for="floatingPassword">New Password</label>
          </div><br>
          <div class="form-floating">
              <input type="password" class="form-control" id="floatingCPassword" name="cpassword">
              <label for="floatingCPassword">Confirm Password</label>
            </div><br> -->
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingAbout" name="about" value="<?php echo $_SESSION['about'] ?>">
            <label for="floatingAbout">About</label>
          </div><br>
            <div class="form-floating">
            <input type="text" class="form-control" id="floatingCampus" name="campus" value="<?php echo $_SESSION['campus'] ?>">
            <label for="floatingCampus">Campus</label>
          </div><br>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingBranch" name="branch" value="<?php echo $_SESSION['branch'] ?>">
            <label for="floatingBranch">Branch</label>
          </div><br>
          
          <div class="form-floating">
          <select class="form-select" name="year" aria-label="Default select example">
                <option selected disabled>Select Year of Studying</option>
                <option value="1">PUC 1</option>
                <option value="2">PUC 2</option>
                <option value="3">ENGG 1</option>
                <option value="4">ENGG 2</option>
                <option value="5">ENGG 3</option>
                <option value="6">ENGG 4</option>
            </select>
            <label for="floatingBranch">Current Studying Year</label>
          </div><br>
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingDOB" name="dob" value="<?php echo $_SESSION['dob'] ?>">
            <label for="floatingDOB">Date of Birth</label>
          </div><br>
 
          <div class="form-floating">
            <textarea class="form-control" style="padding-top:-40px;" name="address"  id="floatingTextarea2" style="height: 100px" value="<?php echo $_SESSION['address'] ?>"></textarea>
            <label for="floatingTextarea2">Address</label>
        </div>

        <div class="form-floating">
            <input type="url" class="form-control" id="floatingIg" name="igurl" value="<?php echo $_SESSION['igurl'] ?>">
            <label for="floatingIg">Instagram URL</label>
          </div><br>

          <div class="form-floating">
            <input type="url" class="form-control" id="floatingFb" name="fburl" value="<?php echo $_SESSION['fburl'] ?>">
            <label for="floatingFb">Facebook URL </label>
          </div><br>

          <div class="form-floating">
            <input type="url" class="form-control" id="floatingLn" name="lnurl" value="<?php echo $_SESSION['lnurl'] ?>">
            <label for="floatingLn">LinkedIn URL</label>
          </div><br>

          <div>
            <center> <button class="btn mb-3 mt-3 btn-primary" type="submit" name="update">UPDATE MY DETAILS</button></center>
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
            <p style="font-weight:800px; font-size: large;"> Copyrights &copy; Discover the Talent 2022 . All Rights Reserved</p>
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