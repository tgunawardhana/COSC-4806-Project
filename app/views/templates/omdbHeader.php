<!DOCTYPE html>
<html lang="en">
    <head>

      <link href="app/views/templates/styles.css" rel="stylesheet">
      <script src="app/views/templates/customjs.js"></script>
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="icon" href="/favicon.png">
        <title>OMDB</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/movie">Home</a>
        </li>
        <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] == '1') {?>  
            <li class="nav-item">
              <a class="nav-link" href="/reminders">Reminders</a>
            </li>
        <?php } ?>
        <?php if (isset($_SESSION['username']) && $_SESSION['username'] == 'Admin') {?>
            <li class="nav-item">
              <a class="nav-link" href="/reports">Reports</a>
            </li>
        <?php } ?>

          

        <!--

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>

      -->

      </ul>


          <li class="d-flex">
            <button class="btn btn-outline-light" onclick="window.location.href='/login'">Log in</button>
          </li>
          
    </div>
  </div>
</nav>