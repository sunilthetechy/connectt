<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
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

    <title>Connectt</title>
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
      <div class="container" id="section1">
        <div class="row">
            <div class="col-md-5">
                <h1 id="homesection1" class="text-center">Welcome <?php echo $_SESSION['name'];?></h1>
                <p>Get to Know the Talents of Your Buddies and Show Case Your Talents with RGUKT</p>
                <p><a class="btn btn-lg" id="btn-joinnow" href="talents.php" id="btn-signup" >Explore</a></p>
            </div>
            <div class="col-md-7">
                <img id="homesection2" src="connect-people2.jpg" width="110%" height="100%" style="margin-left: 30px;" alt="">
            </div>
        </div>
    </div>
<hr>

      <div class="container" id="section2">
        <h1 class="text-center" style="color: #ff6150 ;">How Does our Platform Works?</h1>
        <br><br>
        <div class="row row-1">
          <div class="col-sm-4">
            <center><i class="fa-solid fa-people-group"></i></center>
            <h2 class="text-center fw-normal">1.Join the Community</h2>
            <p>Create Individual Account by Providing RGUKT Details </p>
          </div>
          <div class="col-sm-4">
           <center> <i class="fa-solid fa-circle-nodes"></i></center>
            <h2 class="fw-normal text-center">2.Connect to People</h2>
            <p>Explore Profiles,Know their Talents and Connect with the Liked Mindsets</p>
          </div>
          <div class="col-sm-4">
            <center><i class="fas fa-layer-group"></i></center>
            <h2 class="fw-normal text-center">3.Showcase Your Talent</h2>
            <p>Create Your Own Unique Content and Post them into your Feed</p>
          </div>
        </div>
        <div class="row row-2">
          <div class="col-sm-6">
            <i class="fa-solid fa-star"></i>
            <h2 class="fw-normal text-center">4.Become Famous</h2>
            <p>Your Talents,Posts will Be Seen by Whole RGUKT and You will become Popular</p>
          </div>
          <div class="col-sm-6">
           <i class="fa-solid fa-graduation-cap"></i>
            <h2 class="fw-normal text-center">5.Get Opportunities</h2>
            <p>After Exposure to Whole RGUKT You will Get Opportunities Organically as well as we will Guide You and Offer Opportunities</p>
          </div>
        </div>
      </div>
      <hr>
      <!-- Popular Profiles -->
      <div class="container">
      <h1 class="text-center" style="color: #ff6150 ;">POPULAR PROFILES</h1>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card" i>
                          <div class="card-body">
                            <center><img src="profile1.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Sunil Yadav</h3>
                            <h6 class="card-subtitle text-center">Student Enterpreneur</h6>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connect</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Hari Krishna</h3>
                            <h6 class="card-subtitle text-center">Director</h6>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connect</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Prabu Deva</h3>
                            <h6 class="card-subtitle text-center">Dancer</h6>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connect</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p><a class="btn btn-lg" id="btn-joinnow" href="talents.php" id="btn-signup" >View More</a></p>
                      <hr>
</div>

<!-- RECENT POSTS -->
<div class="container">
<h1 class="text-center" style="color: #ff6150 ;">POPULAR POSTS</h1>
  <div class="row">
    <div class="col-sm-4">

    <div class="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic5.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prabu Deva</h5>
                                            <p style="text-align: ;margin-top: -5px;">Dancer</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <div class="card-img" style="background-color:aliceblue">
                                         
                                        <p style="text-align:left">My Inspiration #PrabuDeva</p>
                                            <img src="dancing.jpg" width="100%" height="500px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>




    </div>
    <div class="col-sm-4">
    <div class="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic10.webp" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                           <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manohar</h5>
                                            <p style="text-align: ;margin-top: -5px;">Artist</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <div class="card-img" style="background-color:aliceblue">
                                            <p style="text-align:left">Epic</p>
                                            <img src="artist.jpg" width="100%" height="500px" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>



    </div>
  <div class="col-sm-4">
  <div class="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic9.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Himanshu</h5>
                                            <p style="text-align: ;margin-top: -5px;">Singer</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <p style="text-align:left">No Matter what People think of you ,always Keep singing your song always</p>
                                        <div class="card-img" style="background-color:aliceblue">
                                         
                                            <img src="arjit.jpg" width="100%" height="500px" alt="">
                                        </div>
                
                                        
                                    </div>
                                </div>
                            </div>

  </div>

  </div>
  <br>
  <p><a class="btn btn-lg" id="btn-joinnow" href="feed.php" id="btn-signup" >View All Posts</a></p>
  <hr>
</div>          

<!-- RGUKT DETAILS -->

    <div class="container-fluid" id="section4">
      <h1 class="text-center" style="color: #ff6150 ;">OUR RGUKT</h1>
      <p class="text-center">Come on Lets Connect All RGUKTIANS with Our Platform</p>
      <div class="container">
        <div class="row">
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-building-columns" id="icon-count"></i>
            <h2>5</h2>
            <h6>CAMPUSES</h6>
          </div>
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-building" id="icon-count"></i>
            <h2>7</h2>
            <h6>BRANCHES</h6>
          </div>
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-user-friends" id="icon-count"></i>
            <h2>30000+</h2>
            <h6>STUDENTS</h6>
          </div>
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-trophy" id="icon-count"></i>
            <h2>1000's</h2>
            <h6>OF SUCCESS STORIES</h6>
          </div>
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-user-tie" id="icon-count"></i>
            <h2>500+</h2>
            <h6>FACULTY</h6>
          </div>
          <div class="col-sm-2" id="count1">
            <i class="fa-solid fa-user-graduate" id="icon-count"></i>
            <h2>360000+</h2>
            <h6>ALUMNI</h6>
          </div>
          
        </div>
      </div>
    </div>
    <footer>
      <div id="footer-up">
      </div>
      <div class="container-fluid">
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
      <script>
        var myModal = document.getElementById('signup')
var myInput = document.getElementById('btn-signup')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
      </script>
      <script>
        const myModal = document.getElementById('login')
const myInput = document.getElementById('btn-login')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
      </script>

</body>
</html>
