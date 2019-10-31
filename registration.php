<?php
/**
 * Created by PhpStorm.
 * Project: Flight Tracker
    Team: Code Black
    Team Members: Shelby, Collin, Tony
 * Date: 10/29/2018
 * Time: 10:10 AM
 */
$first = $last = $email =  $password = $passwordConfirm= "";
$flight = $school = $time = $milestone = $recentMilestone = $nextMilestone = $program ="";
if(!empty($_POST)){
    require('/home/codeblac/studentInput.php');
    require( 'validate.php');
    //define the query
    $sql = "SELECT *FROM studentFlight WHERE email=$email";
    $resultCount = mysqli_query($cnxn,$sql);
    if ($resultCount > 0) {
        $emailError = "This email has already been used. Please sign in instead.";
    }
    else{
        $first =  mysqli_real_escape_string($cnxn,$first);
        $last =  mysqli_real_escape_string($cnxn,$last);
        $email =  mysqli_real_escape_string($cnxn,$email);
        $passwordConfirm=  mysqli_real_escape_string($cnxn,$passwordConfirm);
        $school =  mysqli_real_escape_string($cnxn,$school);
        $program =  mysqli_real_escape_string($cnxn,$program);
        $milestone =  mysqli_real_escape_string($cnxn,$milestone);
        $recentMilestone=  mysqli_real_escape_string($cnxn,$recentMilestone);
        $nextMilestone=  mysqli_real_escape_string($cnxn,$nextMilestone);

        $sql = "INSERT INTO studentFlight (email, password, first, last, program, school, time, current_milestone, recent_milestone, next_milestone)
              VALUES ('$emailUserName', SHA1('$password'), '$first', '$last', '$program', '$school', '$time', '$milestone', '$recentMilestone', '$nextMilestone') ";
        @mysqli_query( $cnxn,$sql) or die("Error with database. Please contact your advisor");

    }
    setcookie('$email', $_POST['email']);
    setcookie('$password', $_POST['password']);
    header("location: summary.php");
}
?>


<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration - Flight Tracker</title>

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

    <!-- form -->
    <section  class="bg-primary cb-background-reg container" id="about">
        <form class="container offset-lg-2  col-lg-8" method="post" id ='form' action="">
            <div class="container-fluid form-group text-light p-4 cb-regInfo text-dark" >
                <fieldset class="form-group" id="register">
                    <legend>Registration Information</legend>
                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">First Name</label><span><?php echo $fNameError ?></span>
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                                <input id="firstName" name="firstName" placeholder="First Name" class="form-control" value = "<?php echo $first?>" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">Last Name</label><span><?php echo $lNameError ?></span>
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
                                <input id="lastName" name="lastName" placeholder="Last Name" class="form-control" value = "<?php echo $last?>" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">GRC Email</label><span><?php echo $emailError ?></span>
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="far fa-envelope"></i></span>
                                <input id="email" name="email" placeholder="GRC Email" class="form-control" type="email" value = "<?php echo $email?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">Password</label><span><?php echo $passwordError ?></span>
                        <div class="inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                <input id="password" name="password" placeholder="Enter Password" class="form-control" type="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">Confirm Password</label><span><?php echo $passwordConfirmError ?></span>
                        <div class=" inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-key"></i></span>
                                <input id="passwordConfirm" name="passwordConfirm" placeholder="Reenter Password" class="form-control" type="password">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <legend class="text-dark">Flight Information<span class="input-group-addon"><i class="fas fa-plane"></i></span></legend>
                    <div class="form-group">
                        <label class="col-md-5 col-lg-8 control-label">Are you currently flying?</label>
                        <div class=" text-dark" >
                            <div class="radio" >
                                <label class="mr-3">
                                    <input type="radio" name="flight" value="yes" id="flightYes"/> Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="flight" value="no" id="flightNo"/> No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="nextStep" class=form-group">
                        <div class="form-group">
                            <label class="col-md-5 col-lg-8 control-label">Program</label>
                            <div class="col-md-5 col-lg-8 selectContainer">
                                <div class="inputGroupContainer">
                                    <select name="program" class="form-control selectpicker" >
                                        <option value="" >Select Program</option>
                                        <option value="aas">AAS</option>
                                        <option value="bas">BAS</option>
                                        <option value="none">None</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-5 col-lg-8 control-label">Total Time</label>
                            <div class="col-md-5 col-lg-8 inputGroupContainer">
                                <div class="input-group text-dark">
                                    <input id="totalTime" name="time" placeholder="Total Time" class="form-control"  type="number" aria-valuemin="0" value="<?php echo$time?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-5 col-lg-8 control-label">Which school are you attending?</label>
                            <div class="col-md-5 col-lg-8">
                                <div>
                                    <label class="mr-1">
                                        <input type="radio" name="school" value="crest" /> Crest
                                    </label>
                                    <label  class="mr-1">
                                        <input type="radio" name="school" value="galvin"/> Galvin
                                    </label>
                                    <label class="mr-1">
                                        <input type="radio" name="school"  value="rainier" /> Rainier
                                    </label>
                                    <label class="mr-1">
                                        <input type="radio" name="school"  value="safetyMotion" />Safety in Motion
                                    </label>
                                    <label class="mr-1">
                                        <input type="radio" name="school"  value="other"  id="otherRadio"/> Other
                                    </label>
                                    <input type="text" id="otherSchool" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-5 col-lg-8 control-label">What are you working on?</label>
                            <div class="col-md-5 col-lg-8 selectContainer">
                                <div class="input-group text-dark">
                                    <select name="milestone" class="form-control selectpicker" id="milestone">
                                        <option value="" >Select an option</option>
                                        <option value="private"  id="private">Private</option>
                                        <option value="instrument" id="instrument">Instrument</option>
                                        <option value="commercialSEL" id="commercialSEL">Commercial-SEL</option>
                                        <option value="commercialMULTI" id="commercialMulti" >Commercial-MULTI</option>
                                        <option value="cfi" id="cfi">CFI</option>
                                        <option value="mei" id="mei">MEI</option>
                                        <option value="cfii" id="cfii" >CFII</option>
                                        <option value="none" id="milestoneNone" >None</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="milestoneNextStep" class=form-group">
                            <div class="form-group">
                                <label class="col-md-5 col-lg-8 control-label">What is the most recent milestone you've completed?</label>
                                <div class="col-md-5 col-lg-8 selectContainer">
                                    <div class="input-group text-dark">
                                        <select name="recentMilestone" class="form-control selectpicker"  id="recentMilestone">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 col-lg-8 control-label">What is the your next milestone?</label>
                                <div class="col-md-5 col-lg-8 selectContainer">
                                    <div class="input-group text-dark">
                                        <select name="nextMilestone" class="form-control selectpicker"  id="nextMilestone">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <div class="col-md-5 col-lg-8 control-label">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="addons/jquery/jquery.js"></script>
    <script src="addons/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="addons/jquery-easing/jquery.easing.min.js"></script>
    <script src="addons/scrollreveal/scrollreveal.min.js"></script>
    <script src="addons/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <!-- CB -->
    <script src="js/transition.js"></script>
    <script src="js/validtion.js"></script>

</body>
</html>
