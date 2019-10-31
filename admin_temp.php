<?php
/**
 * Created by PhpStorm.
 * User: Code Black
 * Date: 11/5/2018
 * Time: 11:25 AM
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Students - Flight Tracker Database</title>

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
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <a class="nav-link js-scroll-trigger" href="faq.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section  class=" cb-background-admin container">
        <div class="container cb-admin">
        <h1 class="cb-heading">Student Table</h1>
        <table class="table table-hover table-sm table-light container">
            <thead class="thead-light">
            <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>School</th><th>Total Time</th>
                <th>Currently Working on</th><th>Recent Milestone</th><th>Next Milestone</th></tr></thead>
            <tbody class="text-justify">
            <?php

            require('/home/codeblac/adminInput.php');
            //define the query
            $sql='SELECT * FROM studentFlight' ;

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
                echo "<tr><td>$first</td><td>$last</td><td>$email</td><td>$school</td><td>$time</td>
                            <td>$currentMilestone</td><td>$recentMilestone</td><td>$nextMilestone</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    </section>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts -->
    <script src="js/custom1.js"></script>
    </body>
</html>