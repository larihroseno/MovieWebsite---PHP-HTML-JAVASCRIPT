
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
          <link rel="stylesheet" href="../css/settings.css">
            
          <!-- Font Awesome -->
          <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

          <!-- Bootstrap Scripts -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

          <!-- JavaScript -->

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="select.js" type="text/javascript"></script>

    </head>


<body>

<ul>
  
    <li><a href="home.php">Home - P2</a></li>
    <li><a href="report.php">Report - P3</a></li>
    <li><a href="../index.html?logout='1'" >Logout</a></li>
    <li style="float:right"> <a>Welcome <?php echo $_SESSION['userName']; ?>! </a><li>
  </ul>


<!--Table -->
    <section class="colored-section" id="table">

      <div class="row">

        <div class="col-lg-6">
          <h2 class="heading"> Test Table - Users </h2>
          </div>
        </div>

</section>

           


            <b><button id="button"> Click here to Show users from database </button>
    <br>
    <input type="text" id="id"/>
    <div id="content"></div></b>
     

            

          </div>  

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
