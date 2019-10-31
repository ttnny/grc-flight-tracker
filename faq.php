<?php
$email = $_COOKIE['$email'];
$password = $_COOKIE['$password'];
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

    <title>FAQs - Flight Tracker</title>

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

    <section class = "container-fluid bg-primary cb-background-faq">
        <h1 class="cb-heading offset-1 col-md-10">Frequently Asked Questions</h1>
        <small  class="cb-heading offset-3 col-md-9">click on a question to see an answer</small>
        <hr id="hrule">
        <div class="container-fluid offset-2 col-md-8">
            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer0" class="cb-question mb-2">Q: Why should I use the GRC Flight Tracker?</div>
                <div id="answer0" class="collapse cb-answer">
                    <p>The Flight Tracker helps your faculty advisor follow your progress.  Keep your hours and progress updated so that faculty can support you with timely guidance
                        and resources.  The Tracker is not meant to replace or supplement your FTR but provides GRC Aviation faculty & staff with the status of flight students at a quick glance.  </p>
                    <p>For example, we may run a report to share a scholarship opportunity with everyone who is currently working on their PPL.  We might share a paid internship
                        opportunity with everyone working on their commercial rating.  We can compare milestones to hours to help you build a good working relationship with your CFI.</p>
                    <p>The Tracker will only work if you <b style="font-weight: bolder; text-decoration: underline;">use</b> it so please take a minute to log in when you reach a milestone or
                        accumulate hours.  Thank you!</p>
                </div>
            </div>

            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer1" class="cb-question mb-2">Q: Which flight ratings are included in the AAS Commercial Pilot?</div>
                <div id="answer1" class="collapse cb-answer">
                    <p>The AAS degree includes 14 credits of flight and covers private, instrument, and commercial ratings.</p>
                </div>
            </div>
            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer2"  class="cb-question mb-2">Q: Which flight ratings are included in the BAS in Aeronautical Science?</div>
                <div id="answer2" class="collapse cb-answer">
                <p >Flight students may choose to pursue the Flight Operations or Operations Management track.
                    You can maintain eligibility for the R-ATP by earning the AAS in Commercial Pilot, then pursuing the
                    BAS without additional flight, as long as you complete the minimum number of mapped courses.
                    See your faculty advisor for more information.
                </p>
                <p>
                    If you choose the Flight Operations track, you’ll need to earn your CFI, CFII, ME, and MEI.  If you choose
                    Operations Management, you do not need additional flight ratings beyond those earned in the AAS.
                </p>
                </div>
            </div>
            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer3"  class="cb-question mb-2">Q: What is the R-ATP?</div>
                <div id = "answer3" class="collapse cb-answer">
                <p> R-ATP stands for Restricted Airline Transport Pilot.  The FAA authorizes institutions of higher education
                    to certify students for the R-ATP and Green River offers this benefit. This designation allows airlines to hire
                    you with fewer flight hours than if you possess a standard Air Transport Pilot license.  If you earn the AAS in
                    Commercial Pilot, you may fly as a co-pilot with 1250 flight hours.  If you earn the BAS in Aeronautical Science,
                    you can fly as a co-pilot with 1,000.  If you do not qualify for the R-ATP but have an ATP, you may fly once
                    you’ve accumulated 1500 hours.
                </p>
                </div>
            </div>
            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer4"  class="cb-question mb-2">Q: How do I qualify for the R-ATP?</div>
                <div id="answer4" class="collapse cb-answer">
                <p>To be eligible for the R-ATP, you must take instrument and commercial ground schools at Green River
                    College.  You must complete your flight training for instrument and commercial with one of our four partner
                    flight schools.  In addition, students must complete a certain number of GRC aviation credits, which have
                    been designated by the FAA.
                </p>
                <p>You may complete your private pilot’s license training (FAA) at any flight school, as well as any ratings
                    beyond commercial, such as CFI or multi-engine.  For more information, please contact your faculty advisor.
                </p>
                </div>
            </div>
            <div class="cb-question-container  container">
                <div   data-toggle="collapse" data-target="#answer5"  class="cb-question mb-2">Q: How many flight hours will I have when I graduate?</div>
                <div id="answer5" class="collapse cb-answer">
                <p>Most flight students average 250 flight hours when they complete their AAS.  Flight hours may vary
                    widely by student based on your pace of learning.
                </p>
                </div>
            </div>
            <div class="cb-question-container  container">
                <div  data-toggle="collapse" data-target="#answer6"  class="cb-question mb-2">Q: How do I build flight hours to get hired by the airlines?  </div>
                <div id="answer6" class="collapse cb-answer">
                <p >The most common route is to earn your CFI – Certified Flight Instructor rating – and work for a flight
                    school.  Follow the sun!  The fastest way to build flight hours is to move to a sunny climate, such as Arizona,
                    California, Florida, or Texas.  There is no reason to move if you don’t want to, though, as most flight schools
                    in our area are hiring CFIs.  Beginning pay starts around $25 per hour.
                </p>
                </div>
            </div>
            <div class="cb-question-container container">
                <div   data-toggle="collapse" data-target="#answer7"  class="cb-question mb-2">Q: How do I get from 250 hours to 1,000+?</div>
                <div id="answer7" class="collapse cb-answer">
                    <p>If you are interested in building hours flying cargo, this is usually an option at around 500 flight hours and
                        there are operations running out of Boeing Field.  Are you adventurous?  Small carriers such as Raven Air in
                        Alaska will hire you as a bush pilot as soon as you earn your instrument and commercial ratings – no minimum
                        hours.
                    </p>
                </div>
            </div>
            <div class="cb-question-container  container cb-lastQuestion">
                <div data-toggle="collapse" data-target="#answer8" class="cb-question mb-2">Q: Where can I get more information?</div>
                <div id="answer8"  class="collapse cb-answer">
                <p >It is always a good idea to check in with your faculty advisor.  Other sources of information are the FAA and the AOPA.</p>
                <ul>
                    <li><a  class="cb-href" href="https://www.faa.gov/pilots/training/atp/" target="_blank">Federal Aviation Administration (FAA)</a></li>
                    <li><a  class="cb-href" href="http://aopa.org/" target="_blank">Aircraft Owners and Pilots Association (AOPA)</a></li>
                </ul>
                </div>
            </div>
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

  </body>

</html>