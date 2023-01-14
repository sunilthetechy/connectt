<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
    header('location:login.php');
 }

if(isset($_POST['post-btn'])){
        $email=$_SESSION['email'];
        $text=$_POST['post'];
        $talent=$_SESSION['talent'];
        $name=$_SESSION['name'];
        $campus=$_SESSION['campus'];
        
    if(isset($_FILES['imgfile']))
    {
        $upload_directory =image;
        $filename = $_FILES['imgfile']['name'];
        $filetype = pathinfo($filename,PATHINFO_EXTENSION);
        if($filetype == "png")
        {
            move_uploaded_file($_FILES['imgfile']['tmp_name'],$upload_directory.'/'.$filename);
            echo "File Uploaded Succesfully";
        }
        else
        {
            echo "Not an Image";
        }
    }


    
        echo "$text";
        echo $filename;
        echo $filetype;
        $select="INSERT INTO post(content,email,name,talent,image) VALUES('$text','$email','$name','$talent','$filename');";
        $result=mysqli_query($conn,$select);
            }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #img{
            width: 150px;
            height: 150px;
            border-radius: 100%;

        }
        #btn:hover{
                color: rgb(237, 237, 238);
                background-color: rgb(104, 104, 104);
        }

        #btn{
            color: aliceblue;
            background-color: rgb(17, 12, 12);
            border-radius: 10%;
            border: solid;
            width: 100%;
            margin-top: 5%;
        }

        #web{
            width: 350px;
            height: 203px;
        }

    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feed.css">
  
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,400;1,500&display=swap" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<!--Popper JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<!--Jquery Library-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                <a class="nav-link "   href="home-loggedin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="talents.php">Talents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" style="color: #072448;" aria-current="page" href="feed.php">Feed</a>
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
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <center>
                                <img src="profile1.jpg" alt="" width="100px" height="100px" id="img">
                                <h3 class="card-title text-center"><?php echo $_SESSION['name'];?></h3>
                                <h6 class="card-subtitle text-center"><?php echo $_SESSION['talent'];?></h6>
                                <hr>
                                <h5 class=" card-subtitle text-center"><?php echo $_SESSION['campus'];?></h5>
                                <a href="profile.php"><button class="btn btn-primary mt-2" id="btn1">My Profile</button></a>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <h5 class="text-center pt-1">Create a Post</h5>
                            <div class="container">
                                <div class="row">
                                    
                                    <div class="col-sm-1">
                                        <img  src="profile1.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid  ;" alt="">
                                    </div>
                                    <div class="col-sm-6">
                                       <h5><?php echo $_SESSION['name'];?></h5>
                                        <p style="text-align: left;margin-top: -5px;"><?php echo $_SESSION['talent'];?></p>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="post">
                                <textarea  style="margin:10px;padding: 10px;border-radius: 20px;border-color: #D2D2D2;" name="post" id="post" cols="60" rows="5" placeholder="Showcase your Talent Here.."></textarea>
                                <input class="form-control" type="file" name="imgfile" value=""/>
                                <button class="btn btn-info" type="submit" name="post-btn" id="btn1">POST</button>
                             </form>
                        </div>
                    </div>
                  </div>
                </div>
                <?php
                $select="SELECT * FROM post ORDER BY sno DESC LIMIT 1;";
                $query=mysqli_query($conn,$select);
                if(mysqli_num_rows($query) > 0){
                    $row = mysqli_fetch_array($query);
                    $sno=$row['sno'];
                    echo $sno;
                    while($sno>0)
                    {
                        $select1="SELECT * FROM post WHERE sno='$sno'";
                        $query=mysqli_query($conn,$select1);
                        if(mysqli_num_rows($query)>0){
                            $row=mysqli_fetch_array($query);
                            $name_row=$row['name'];
                            $datentime=$row['date'];
                            $talent_row=$row['talent'];
                            $post_text=$row['content'];
                            $img=$row['image'];
                            echo '<div class="container-fluid">
                            <div class="row" style="margin-bottom:20px;">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <div class="card" id="card">
                                        <div class="container">
                                            <div class="row" style="margin-top: 20px;">
                                                
                                                <div class="col-sm-1" >
                                                    <img src="profile1.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                                </div>
                                                <div class="col-sm-6">
                                                   <h5>'.$name_row.'</h5>
                                                    <p style="text-align: left;margin-top: -5px;">'.$talent_row.'</p>
                                                </div>
                                                <div class="col-sm-5"></div>
                                                <hr style="width:100% ;">
                                                <div class="card-img" style="background-color:aliceblue">
                                                    <p style="text-align:left;">'.$post_text.'</p>
                                                    // <img src="img1.jpg" width="100%" height="500px" alt="">
                                                </div>
                                                <div>
                                                    <p style="text-align:left";>Posted On : '.$datentime.'</p>
                                                    <button onclick="heart()" ><i class="fa-regular fa-heart"></i></button>
                                                    <button onclick="liked()"><i class="fa-regular fa-thumbs-up" ></i></button>
        
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                
                            </div>
                        </div>   ';
        

                        }
                        $sno=$sno-1;

                    }
                }
                
       


                ?>

                <div class="container-fluid">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic7.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                           <h5>Mokshith</h5>
                                            <p style="text-align: left;margin-top: -5px;">Dancer</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <div class="card-img" style="background-color:aliceblue">
                                        <p style="text-align:left">My Inspiration #PrabuDeva</p>
                                            <img src="dancing.jpg" width="100%" height="500px" alt="">
                                        </div>
                                        <div>
                                            <button onclick="heart()" ><i class="fa-regular fa-heart"></i></button>
                                            <button onclick="liked()"><i class="fa-regular fa-thumbs-up" ></i></button>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="card" id="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic6.jpg" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                           <h5>Himanshu</h5>
                                            <p style="text-align: left;margin-top: -5px;">Singer</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <p style="text-align:left">No Matter what People think of you ,always Keep singing your song always</p>
                                        <div class="card-img" style="background-color:aliceblue">
                                         
                                            <img src="arjit.jpg" width="100%" height="500px" alt="">
                                        </div>
                                        <div>
                                            <button onclick="heart()" ><i class="fa-regular fa-heart"></i></button>
                                            <button onclick="liked()"><i class="fa-regular fa-thumbs-up" ></i></button>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                        
                    </div>
                </div>   
                <div class="container-fluid">
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="container">
                                    <div class="row" style="margin-top: 20px;">
                                        
                                        <div class="col-sm-1" >
                                            <img src="pic1.webp" class="rounded-circle" width="50px" height="50px" style="border:black 1px solid;" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                           <h5>Manohar</h5>
                                            <p style="text-align: left;margin-top: -5px;">Artist</p>
                                        </div>
                                        <div class="col-sm-5"></div>
                                        <hr style="width:100% ;">
                                        <div class="card-img" style="background-color:aliceblue">
                                            <p style="text-align:left">Epic</p>
                                            <img src="artist.jpg" width="100%" height="500px" alt="">
                                        </div>
                                        <div>
                                            <button onclick="heart()" ><i class="fa-regular fa-heart"></i></button>
                                            <button onclick="liked()"><i class="fa-regular fa-thumbs-up" ></i></button>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                        
                    </div>
                </div>   

    <footer style="margin-top:90px">
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

        </body>
</html>
  <script src="js/bootstrap.bundle.min.js.map"></script>
</body>
</html>
