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
<link rel="preconnectt" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400;1,500&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<!--Popper JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<!--Jquery Library-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                <a class="nav-link active" style="color: #072448;" aria-current="page" href="talents.php">Talents</a>
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
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar">
                  <h3 class="text-center">Talents</h3>
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Artists</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Actors</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Book Readers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Content Writers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dancers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Directors</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Instagram Stars</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Editors</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Enterpreneurs</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Farmers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Memer</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Musician</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Multi Talenters</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Singers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Web Developers</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Youtuber</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-10">
              <div class="tab-content" id="v-pills-tabContent">
                <!--All Content-->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <?php
                $select="SELECT * FROM user ORDER BY sno DESC LIMIT 1;";
                $query=mysqli_query($conn,$select);
                if(mysqli_num_rows($query) > 0){
                    $row = mysqli_fetch_array($query);
                    $sno=$row['sno'];
                    while($sno>0)
                    {
                        $select1="SELECT * FROM user WHERE sno='$sno'";
                        $query=mysqli_query($conn,$select1);
                        if(mysqli_num_rows($query)>0){
                            $row=mysqli_fetch_array($query);
                            $name_row=$row['name'];
                            $datentime=$row['date'];
                            $talent_row=$row['talent'];
                            $about=$row['about'];
                            $idnum=$row['id'];
                            $phone=$row['phone'];
                            $branch=$row['branch'];
                            $email=$row['email'];
                            $campus=$row['campus'];
                            $year=$row['year'];
                            echo '<div class="container">';
                            echo '
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="card mt-5 mb-5" id="card">
                                  <div class="card-body">
                                    <center><img src="profile1.jpg" id="card-img" class=" card-img-top " alt=""></center>
                                    <h3 class="card-title text-center">'.$name_row.'</h3>
                                    <h6 class="card-subtitle text-center">'.$talent.'</h6>
                                    <br>
                                    <p>'.$about.' <span>Read More >></span></p>
                                    <button class="btn btn-primary" id="btn1">Connectt</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card mt-5 mb-5" id="card">
                                  <div class="card-body">
                                    <center><img src="profile1.jpg" id="card-img" class=" card-img-top " alt=""></center>
                                    <h3 class="card-title text-center">Sunil Yadav</h3>
                                    <h6 class="card-subtitle text-center">RK VALLEY</h6>
                                    <h6 class="card-subtitle text-center">Student Enterpreneur</h6>
                                    
      

                                    <br>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                                    <button class="btn btn-primary" id="btn1">Connectt</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="card mt-5 mb-5" id="card">
                                  <div class="card-body">
                                    <center><img src="profile1.jpg" id="card-img" class=" card-img-top " alt=""></center>
                                    <h3 class="card-title text-center">Sunil Yadav</h3>
                                    <h6 class="card-subtitle text-center">RK VALLEY</h6>
                                    <h6 class="card-subtitle text-center">Student Enterpreneur</h6>
                                    
      

                                    <br>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                                    <button class="btn btn-primary" id="btn1">Connectt</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          ';

                        }
                        $sno=$sno-1;

                    }
                }
                
       


                ?>
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="profile1.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Sunil Yadav</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Student Enterpreneur</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic10.webp" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Hari Krishna</h3>
                            <h6 class="card-subtitle text-center">NUZVID</h6>
                            <h6 class="card-subtitle text-center">Actor</h6>
                           
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic3.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Dharani</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Multi Talented</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card" i>
                          <div class="card-body">
                            <center><img src="pic2.webp" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Dinesh</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Reviewer</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic4.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Karishma</h3>
                            <h6 class="card-subtitle text-center">SRIKAKULAM</h6>
                            <h6 class="card-subtitle text-center">Book Reader</h6>
                           

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic5.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Madhavi</h3>
                            <h6 class="card-subtitle text-center">ONGOLE</h6>
                            <h6 class="card-subtitle text-center">Cyber Security Entusiast</h6>

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card" i>
                          <div class="card-body">
                            <center><img src="pic6.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Samhith</h3>
                            <h6 class="card-subtitle text-center">BASAR</h6>
                            <h6 class="card-subtitle text-center">Artist</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suhas</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">CRICKETER</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic9.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Nikhil</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Dancer</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                  <!-- start -->
                      <div class="container">
                        <div class="row">
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic4.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suchitra</h3>
                            <h6 class="card-subtitle text-center">SRIKAKULAM</h6>
                            <h6 class="card-subtitle text-center">Artist</h6>
                           

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suhas</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Artist</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card" i>
                          <div class="card-body">
                            <center><img src="pic6.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Samhith</h3>
                            <h6 class="card-subtitle text-center">BASAR</h6>
                            <h6 class="card-subtitle text-center">Artist</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                        <!-- row end -->
                        </div>
                        <!-- container end -->
                      </div>

                <!-- End -->
                </div>
                <div class="tab-pane fade show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                  <!-- start -->
                  <div class="container">
                        <div class="row">
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suhas</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Actors</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic5.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Madhavi</h3>
                            <h6 class="card-subtitle text-center">ONGOLE</h6>
                            <h6 class="card-subtitle text-center">Actors</h6>

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic4.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suchitra</h3>
                            <h6 class="card-subtitle text-center">SRIKAKULAM</h6>
                            <h6 class="card-subtitle text-center">Actors</h6>
                           

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      </div>
                        <!-- row end -->
                        </div>
                        <!-- container end -->
                      </div>

                <!-- End -->



                </div>
                <div class="tab-pane fade show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                 <!-- start -->
                 <div class="container">
                        <div class="row">
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic3.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Dharani</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Book Reader</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic4.jpeg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suchitra</h3>
                            <h6 class="card-subtitle text-center">SRIKAKULAM</h6>
                            <h6 class="card-subtitle text-center">Book Reader</h6>
                           

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                        <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic7.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Suhas</h3>
                            <h6 class="card-subtitle text-center">RK VALLEY</h6>
                            <h6 class="card-subtitle text-center">Book Reader</h6>
                            

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card mt-5 mb-5" id="card">
                          <div class="card-body">
                            <center><img src="pic5.jpg" id="card-img" class=" card-img-top " alt=""></center>
                            <h3 class="card-title text-center">Madhavi</h3>
                            <h6 class="card-subtitle text-center">ONGOLE</h6>
                            <h6 class="card-subtitle text-center">Actors</h6>

                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus expedita quasi ab ad cupiditate quam facilis ipsam sunt, magnam qui illum <span>Read More >></span></p>
                            <button class="btn btn-primary" id="btn1">Connectt</button>
                          </div>
                        </div>
                      </div>
                      </div>
                        <!-- row end -->
                        </div>
                         <!-- container end -->
  



                
                </div>
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

  <script>
    $('#v-pills-tab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  </script>
  <script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>
