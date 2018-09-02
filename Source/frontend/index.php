<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/bg.css">

  <title>Sesion Practice</title>
</head>

<body>
  <div class="img-bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class="navbar-brand text-white" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#">Another <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-muted" href="#">Disabled</a>
          </li>
        </ul>
        <button class="btn btn-outline-primary my-2 my-sm-0 mr-md-3" type="submit"><a href="login.php">Login</a></button>
        <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit"><a href="signup.php">Sign Up</a></button>
        <form class="form-inline my-2 my-lg-0">

        </form>
      </div>
    </nav>



  </div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>