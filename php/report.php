<?php
session_start();
if(!isset($_SESSION['userName'])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>


<html lang="en-US">


<head>
  

   <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="GreenTech">
  <title>#Movie</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/internalStyle.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/internalStyle.css" rel="stylesheet">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</head>



<body>

  <ul>
  <li><a class= "active" href="home.php">Home - P2</a></li>
  
   <li><a href="report.php">Report - P3</a></li>
  <li><a href="logout.php" >Logout</a></li>
  <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
</ul>
 

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <h2> <a class="navbar-brand" href="">Introduction</a></h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#goals">Goals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#technology">Technology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#browsers">Browsers </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Future features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reflection">Reflection</a>
            </li>
            
        </ul>

        </div>
      </nav>


     

      


      <!-- Introduction -->

      <div class="row">

        <div class="col-lg-6">
          <h2 class="heading">Larissa Sousa Roseno
larihroseno@hotmail.com
2017191
</h2>
                  
   
        </div>
 </div>


  </section>


  <!-- Goals -->

  <section class="white-section" id="goals">

    <div class="container-fluid">

      <div class="row">
        <div class="content-box (default)">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Goals</h3>
          <p>The purpose of the website is to show a little bit about my favorite movie: 12 years a slave.
This movie brings a little bit of human cruelty for years. It makes us reflect on the world we live in today. With this website I was able to demonstrate my knowledge in website development, which has been improved in the last years of the IT course.</p>

        </div>

        </div>
  </section>





  <!-- Technology -->
<section class="colored-section" id="technology">

    <div class="container-fluid">

      <div class="row">
        <div class="content-box (default)">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Technology</h3>
          <p>
To develop the website I used the “Sublime Text” application to edit the pages using HTML, PHP and JavaScript. For the creation of Login I used PHP connection with Mysql. To show the user table I used JavaScript and Php. The connection was made using Xampp. To make the website more intuitive I used CSS and BootStrap.</p>

        </div>

        </div>
  </section>
        
        <!-- Browsers -->
          
        <section class="white-section" id="browsers">

    <div class="container-fluid">

      <div class="row">
        <div class="content-box (default)">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Browsers </h3>
          <p>
The website was tested In Google Chrome, Firefox and IE10 ... in all of them it was possible to view the website and its components.
</p>

        </div>

        </div>
  </section>

   <!-- Future Features-->

  <section class="colored-section" id="features">

    <div class="container-fluid">

      <div class="row">
        <div class="content-box (default)">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Future features</h3>
          <p>If I had 6 more months to work on this website I would create more pages with other content related to the movie. I would improve the look and interaction of the website with better techniques so that the website would become more professional.</p>

        </div>

        </div>
  </section>


 <!-- Reflection-->
  <section class="white-section" id="reflection">

    <div class="container-fluid">

      <div class="row">
        <div class="content-box (default)">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Reflection</h3>
          <p>By developing this website I had to learn how to create a website from scratch, not only using Html but also using php and css. At the beginning Bootstrap was a little challenging for me but at the end it became simpler than I imagined.
If I had to do it all over again I would study a little more css, since I still need to improve my knowlegde about web interactions.

        </div>

        </div>
  </section>

 



  

  <!-- Footer -->

  <footer class="colored-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p>© Copyright 2020 - Larissa Roseno</p>
    </div>
  </footer>



</body>
</html>


</body>
</html>
