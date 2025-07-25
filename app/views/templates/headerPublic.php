<?php
if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}


// Login validations
$failed = "";
$success = "";

  if (isset($_SESSION['failedAuth']) && $_SESSION['failedAuth'] >= 1) {
      $failed = "Username or password is incorrect.
      Unsuccessful attempts " . $_SESSION['failedAuth'] . ".";
    }
  else if (isset($_SESSION['signup_complete']) && $_SESSION['signup_complete'] == 1) {
      $success = "User registered successfully.";
      $_SESSION['signup_complete'] = 0;
    }
    else if (isset($_SESSION['userlocked']) && $_SESSION['userlocked'] == 1){
      $failed = "User is locked. Please try again after 1 minute.";
      $_SESSION['userlocked'] = 0;
    }
      
// Sign up validations
    else if (isset($_SESSION['error_signup']) && $_SESSION['error_signup'] == 1) {
        $failed = "Username or password cannot be empty.";
        $_SESSION['error_signup'] = 0;
    }
    else if (isset($_SESSION['error_signup']) && $_SESSION['error_signup'] == 2) {
        $failed = "Password should be atleast 10 characters long.";
        $_SESSION['error_signup'] = 0;
    }
    else if (isset($_SESSION['error_signup']) && $_SESSION['error_signup'] == 3) {
        $failed = "Passwords does not match. Try again.";
        $_SESSION['error_signup'] = 0;
      }
    else if (isset($_SESSION['error_signup']) && $_SESSION['error_signup'] == 4) {
        $failed = "Username exists. Try another one";
        $_SESSION['error_signup'] = 0;
      }
    else {
      $failed = "";
      $success = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
   
  <!--
  <link href="app/views/templates/styles.css" rel="stylesheet">
  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
    <link rel="icon" href="/favicon.png">
    <title>COSC 4806</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>



  <nav class="navbar navbar-expand-sm navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">COSC 4806</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <form class="d-flex" action="/movie/search" method="post" >
        <input class="form-control me-2" type="search" id="title" name="title" placeholder="Search Movie" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      


      </div>
    </div>
  </nav>