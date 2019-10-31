<?php
    require("/home/codeblac/studentInput.php");
    $email = $_COOKIE['$email'];
    $password = $_COOKIE['$password'];

$sql="SELECT * FROM studentFlight WHERE email='$email' AND password=SHA1('$password')";
//send query to db
$result = @mysqli_query($cnxn, $sql);

//display results
while($row = mysqli_fetch_assoc($result)){
    $first = $row['first'];
    $last = $row['last'];
    $email= $row['email'];
    $school = $row['school'];
    $time= $row['time'];
    $currentMilestone = $row['current_milestone'];
    $recentMilestone = $row['recent_milestone'];
    $nextMilestone = $row['next_milestone'];
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

    <title>Flight Summary - Flight Tracker</title>

    <!-- Bootstrap core CSS -->
    <link href="addons/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="addons/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="addons/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/cb.css" rel="stylesheet">

</head>
<body id="page-top" onload="">

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
            <p class="font-weight-bold">Green River College's Auburn Center
              1221 D Street NE, Auburn, WA 98002<br>
              253-833-9111, ext. 5800<br>
              Room: Auburn Center, 360</p>
          </div>
        </div>
      </div>
    </div>

    <section  class="bg-primary cb-background-sum container" >
        <div class="container-fluid form-group text-light p-4">
                <h2 class="text-warning">Flight Summary</h2>
                <form class="container" method="post" id ='form'>
                    <div class="container-fluid form-group text-light p-4 cb-flightSum text-dark" >
                <fieldset class="form-group offer offer-warning" id="flightSummary">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="offer offer-warning">
                            <div class="shape" id="fullNameSum">
                                    <div class="shape-text">
                                        <?php echo $first . " " .$last ?>
                                    </div>
                            </div>
                            <div class="offer-content" id="totalTimeSum">
                                <h3 class="lead">
                                    <?php echo $time ?>Hrs
                                </h3>
                                <p>
                                    <span id="emailSum" type="email">
                                        Email: <?php echo $email ?><br>
                                    </span>
                                    <span>
                                        Program: <?php echo $program ?><br>
                                    </span>
                                    <span>
                                        School: <?php echo $school ?><br>
                                    </span>
                                    <span id="recentMilestoneSum">
                                        Last Milestone: <?php echo $recentMilestone ?><br>
                                    </span>
                                    <span id="milestoneSum">
                                        Current Milestone:  <?php echo $milestone ?><br>
                                    </span>
                                    <span id="nextMilestoneSum">
                                        Next Milestone:  <?php echo $nextMilestone ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                       <button id="updateInfo" type="button">Update Information</button>
                        <script type="text/javascript">
                            document.getElementById("updateInfo").onclick = function () {
                                location.href = "updateinfo.php";
                            };
                        </script>
                </fieldset>
            </div>
            </form>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="addons/jquery/jquery.min.js"></script>
    <script src="addons/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="addons/jquery-easing/jquery.easing.min.js"></script>
    <script src="addons/scrollreveal/scrollreveal.min.js"></script>
    <script src="addons/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <!-- CB -->
    <script src="js/transition.js"></script>

</body>
</html>