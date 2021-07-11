<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Spectrum Landingpage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
        <link rel="stylesheet"  href="style.css">
        <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!--Header section-->
    
<?php ?>
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








<!--Home section starts-->
        <section class="home" id="home">
            <h1>Spectrum Cet-B</h1>
           <p><blockquote></blockquote></p>
            <a href="#"><button class="btn">Get Started</button></a>
</section>   

<!--home section ends -->

<!--About section-->
     

<section class="about" id="about">
    <div class="content">
        <h3>About us</h3>
        <p>SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.</p>

            <p>This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
    </div><br>
    <br>
    <br>
    <div class="content">
        <h3>Our Wings</h3>
        <p>The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.</p>
        <p>The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly develop viable solutions for a better outcome.</p>
          <p>The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to enhance various creative projects.</p>   
 </div><br>
 <br>


    
    <div class="container">
       
        <div class="card">
            <div class="imgBx">
                <img src="hardware.png"  data-text="hardware">
            </div>
                <div class="content1">
                    <div>
                       <h3>Hardware</h3>
                      
                       <ul>
                           <li>VLSI</li>
                           <li>Embedded Systems</li>
                           <li>PCB Design</li>
                                                  
                        </ul>
                         
                      <a href="#">READ MORE</a>
                     </div>
             </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <img src="software.png"  data-text="Software">
            </div>
                <div class="content1">
                    <div>
                       <h3>Software</h3>
                       <ul>
                      <li>Web Development</li> 
                      <li>App Development</li>
                       <li> Machine Learning</li>
                    </ul> 
                      <a href="#">READ MORE</a>
                     </div>
             </div>
        </div>



        <div class="card">
            <div class="imgBx">
                <img src="design.png"  data-text="Design">
            </div>
                <div class="content1">
                    <div>
                       <h3>Design</h3>
                       <ul>
                           <li>UI/UX Designing</li>
                           <li>Poster Design</li>

                       </ul>
                     
                      <a href="#">READ MORE</a>
                     </div>
             </div>
        </div>
    </div>



</section>
    

<!-- about section ends-->
<!-- project section starts -->

<section id="project" class="project">
  <div class="title"><span><h2>Projects</h2></span></div>  

  <div class="wrapper ,container-fluid">
       <div class="card">
            <img src="image1.png" >
            <div class="info">
                  <h1>BHAAVANA</h1>
                  <p>device helps physically imapired people to understand the emotions of the person they are talking to</p>
                <a href="#" class="btn1">Read More</a>
            </div>
        </div>

        <div class="card">
            <img src="image2.png" >
            <div class="info">
                  <h1>SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h1>
                  <p>A semi automated toilet that is designed for the elderly people and the patients. The use of embedded microcontroller Arduino Mega 2560 makes the system smart.</p>
                <a href="#" class="btn1">Read More</a>
            </div>
        </div>


        <div class="card">
            <img src="image3.png" >
            <div class="info">
                  <h1>SUPPLY BOT</h1>
                  <p>Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20</p>
                <a href="#" class="btn1">Read More</a>
            </div>
        </div>
    </div>

</section>
    


<!-- contact section -->
<section id="contact" class="contact">
   <div class="hi"> <h3>Contact us </h3>
     </div>
    <div class="social">
        <ul>
            <li><a href=""><i id="fa" class="fab fa-facebook"></i></a></li>
            <li><a href=""><i id="fa" class="fab fa-instagram"></i></i></a></li>
            <li><a href=""><i id="fa" class="fab fa-linkedin-in"></i></a></li> 
            <li><a href=""><i id="fa"  class="fab fa-github"></i></a></li>
        </ul>
    </div>



</section>



<!--footer -->
<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Our Wings</h3>
            <a href="#">Hardware</a>
            <a href="#">Software</a>
            <a href="#">Design</a>
            
        </div>

        <div class="box">
            <h3>Quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">project</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> CET-Bhubaneswar campus, Odisha. </p>
            <p> <i class="fas fa-envelope"></i> spectrumclub.cetb@gmail.com</p>
            <p> <i class="fas fa-phone"></i>+91-8249063374  </p>
        </div>

    </div>

    <h1 class="credit">&copy;  <a href="#">Adyasha</a>
        <span>   call rights reserved</span></h1>

</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="spectrumjs.js"></script>

<?php  ?>
 


</body>

</html>