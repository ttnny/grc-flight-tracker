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

    <title>Update Info - Flight Tracker</title>

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

<!---->
<section class="bg-primary cb-background-sum container" id="about">
    <div class="container-fluid form-group text-light p-4" id="flightUpdate">
        <legend class="text-warning" >Flight Summary Update</legend>
        <form class="container" method="post"  id ='form' action="confirmation.php">
            <div class="container-fluid form-group text-light p-4 cb-flightSum text-dark">
                <fieldset class="form-group bg-faded">
                    <legend>Flight Information</legend>
                    <label>New Hours: <em>(in hours)</em>
                        <input type="number" id="time" name="time" min="0">
                    </label>
                    <span class="err" id="err-time">Error</span><br>
                    <label>Flight school <em>(select one)</em>
                        <select id="school" name="school">
                            <option value="select">Select One</option>
                            <option value="crest">Crest</option>
                            <option value="galvin">Galvin</option>
                            <option value="rainier">Rainier</option>
                            <option value="sim">Safety In Motion</option>
                            <option value="other" id="otherschool">Other</option>
                            <option value="none">None</option>
                        </select>
                        <label id="schoolLabel">Other School: <input type="text" name="otherinput" size=20 max=20 id="otherinput"></label>
                        <br /><span class="err" id ="err-input">You didn't enter a school</span>
                    </label>
                    <span class="err" id="err-school">Error</span><br>
                    <span class="err" id="err-rating">Error</span><br>
                    <label>What is your most recent milestone? <em>(select one)</em>
                        <select id="milestone" name="milestone">
                            <option value="select">Select One</option>
                            <option value="private">Private</option>
                            <option value="instrument">Instrument</option>
                            <option value="commercial">Commercial</option>
                            <option value="solorun">Solo run completed</option>
                            <option value="none">None</option>
                        </select>
                    </label>
                    <span class="err" id="err-milestone">Error</span><br>
                    <label>What is your next milestone? <em>(select one)</em>
                        <select id="nextmilestone" name="nextMilestone">
                            <option value="select">Select One</option>
                            <option value="private">Private</option>
                            <option value="instrument">Instrument</option>
                            <option value="commercial">Commercial</option>
                            <option value="none">None</option>
                        </select>
                    </label>
                    <span class="err" id="err-nextmilestone">Error</span><br>
                </fieldset>
                <button type="submit" id="submit2" name="send" class="btn center-block">Submit</button>
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