
<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
        <link rel="stylesheet"  href="profilestyle.css">
        <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Spectrum</title>
</head>
<body>
<header>
    <div id="menu" class="fas fa-bars"></div>
    <a href="homepage.php" class="logo"><img src="logo.png" id="logoimage">Spectrum</a>

    
    <nav class="navbar">
        <ul>
            <li><a  class="active" href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#project">Project</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="profile.php">profile</a>
        </ul>
    </nav>


    <button class="logout" style="background: green; "><a  style="color:white; font-size: 15px; text-decoration:none;" class="log" href="logout.php">Log Out</a></button>
</header>


<?php
include 'config.php';
session_start();
$user=$_SESSION['username']; 
$selectquery = "SELECT * FROM users WHERE username='$user';";
$query = mysqli_query($conn,$selectquery);
$res = mysqli_fetch_array($query)

?>

<section id="profile">
    <div class="container-prof">

    <h1 class="heading"> My Profile</h1>
        
        <div class="profile_card">

 

           <div class="image-container"><img src="profileimg.jpg " style="width:100%;"></div>
           <div class="title" style="font: size 15px;"><h1><?php echo $res['username']; ?></h1>
        </div>
        </div>
        <div class="profile_item">
            <ul>
                
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/motarboard.png"/></div>
                    <div class="info"><h2>Branch:</h2><?php echo $res['branch']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/hand-with-pen.png"/></div>
                    <div class="info"><h2>Year:</h2><?php echo $res['year']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/email-open.png"/></div>
                    <div class="info"><h2>Email:</h2><?php echo $res['email']; ?></div>
                </li>
                <li>
                    <div class="icon"><img src="https://img.icons8.com/ios-filled/100/000000/phone.png"/></div>
                   <div class="info"> <h2>Phone:</h2><?php echo $res['number']; ?></div>
               </li>
            </ul>
        </div>
       <!-- </div> -->
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="spectrumjs.js"></script>


</body>
</html>










