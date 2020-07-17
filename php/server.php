<?php
session_start();

// initializing variables
$userName = "";

$errors = array(); 

// connect to database
$database = mysqli_connect('127.0.0.1:3307', 'root', '', 'user');




// LOGIN USER
if (isset($_POST['login_user'])) {
  $userName = mysqli_real_escape_string($database, $_POST['userName']);
  $password = mysqli_real_escape_string($database, $_POST['password']);

  if (empty($userName)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password =($password);
  	$query = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
  	$results = mysqli_query($database, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userName'] = $userName;
  	  $_SESSION['success'] = "";
  	  header('location:home.php');
  	}else {
  		array_push($errors, "Wrong username or password");
  	}
  }
}