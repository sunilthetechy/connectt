<?php
session_start();

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
                <a class="nav-link active" style="color: #072448;" aria-current="page" href="credits.php">Credits</a>
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

</body>
</html>