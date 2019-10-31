<?php
require("/home/codeblac/studentInput.php");

if(!empty($_POST)) {
    require('/home/codeblac/studentInput.php');
//define the query
    $sql = "SELECT *FROM studentFlight WHERE email='$email' AND password='$password'";
    $resultCount = mysqli_query($cnxn, $sql);
    if ($result == 0) {
        echo "<script type='text/javascript'>alert('Account not found. Please register.')</script>";
    } else {
        setcookie('$email', $_POST['email']);
        setcookie('$password', $_POST['password']);
        header("location: summary.php");
    }
}
?>
<!--
  Project: Flight Tracker
  Team: Code Black
  Team Members: Shelby, Collin, Tony
-->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage - Flight Tracker</title>

    <!-- Bootstrap core CSS -->
    <link href="addons/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="addons/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="addons/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cb.css" rel="stylesheet">
    <link href="css/creative.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="summary.php">Flight Tracker</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registration.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="admin.html">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contact Modal -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">GRC Aviation Technology</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="font-weight-bold">Green River College's Auburn Center</p>
              1221 D Street NE, Auburn, WA 98002<br>
              253-833-9111, ext. 5800<br>
              Room: Auburn Center, 360</p>
          </div>
        </div>
      </div>
    </div>

    <header class="masthead text-white d-flex">
      <div class="container my-auto">
          <div class="row">
              <div class="col-lg-12 alert alert-warning alert-dismissible mt-5 bg-warning text-dark">
              <button type="button" class="close" data-dismiss="alert">
                  <span aria-hidden="true">&times</span>
              </button>
              If you are not a Green River College student and are interested in the aviation programs offered visit
              <a class="alert-link" href ="https://www.greenriver.edu/students/academics/degrees-programs/aviation-technology/" target="_blank">GRC Aviation page</a>
              </div>
          </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 cb-header-top align-items-center d-flex">
            <p class="text-faded font-weight-bold">Welcome to the <strong class="text-uppercase">GRC Aviation Tracker</strong> made for GRC aviation students. Help us help you!
              The GRC Flight Tracker helps your faculty advisor follow your progress. Keep your hours and progress updated
              so that faculty can support you with timely guidance and resources! </p>
          </div>
          <div class="col-lg-4 col-md-4 cb-login-top align-items-center d-flex">
            <form class="mx-auto my-auto">
              <div class="form-group mx-auto my-auto">
                <p class="my-3 font-weight-bold text-secondary text-center">Please sign in</p>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control my-2" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="text-center mx-auto my-3">
                  <button class="mx-auto my-auto btn btn-lg btn-primary" type="submit" id="signIn">Sign in</button>
                    <button id="register" class="mx-auto my-auto btn btn-lg btn-dark">Register</button>
                    <script type="text/javascript">
                        document.getElementById("register").onclick = function () {
                            location.href = "registration.php";
                        };

                        function setCookie(cname, cvalue, exdays) {
                            var d = new Date();
                            d.setTime(d.getTime() + (exdays*24*60*60*1000));
                            var expires = "expires="+d.toUTCString();
                            document.cookie = cname + "=" + cvalue + "; " + expires;
                        }

                    </script>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="addons/jquery/jquery.js"></script>
    <script src="addons/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="addons/jquery-easing/jquery.easing.min.js"></script>
    <script src="addons/scrollreveal/scrollreveal.min.js"></script>
    <script src="addons/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>