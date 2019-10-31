<?php
/**
 * Created by PhpStorm.
 * User: shelby
 * Date: 11/8/2018
 * Time: 3:06 AM
 */
ini_set('display_errors',1);
error_reporting(E_ALL);

$isValid = true;
$time = 0;
$first = $last = $email =  $password = $passwordConfirm= $flight =  "";
$school = $milestone = $recentMilestone = $nextMilestone = "none";
$fNameError = $lNameError = $emailError = $passwordError = $passwordConfirmError= $flightError = $timeError = $schoolError = $milestoneError = $nextMilestoneError = $recentMilestoneError = "";

$first = $_POST['firstName'];
if (empty($first)) {
    $fNameError = "Please enter in your first name";
    $isValid = false;
}
//validates last name
$last = $_POST['lastName'];
if (empty($last)) {
    $lNameError = "Please enter in your last name";
    $isValid = false;
}
//Validates email
$email = $_POST['email'];
if (empty($email)) {
    $emailError = "Email not valid please enter in GRC email";
    $isValid = false;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Email not valid please enter in GRC email";
    $isValid = false;
}
$emailUserName =  substr($email, 0, strrpos($email, '@'));
//validates password
$password = $_POST['password'];
if(empty($password)){
    $passwordError = "Please enter in a password";
    $isValid = false;
}
//validates confirm password and confirms passwords match
$passwordConfirm = $_POST['passwordConfirm'];
if(empty($passwordConfirm)){
    $passwordConfirmError = "Please confirm password.";
    $isValid = false;
}
elseif($password===$passwordConfirm){
    $passwordConfirmError = "Passwords don't match.";
    $isValid = false;
}
//validates flying buttons then information if Yes is selected
$flight = $_POST['flight'];
$flightArray = array("yes", "no");
if (!isset($flight)){
    $flightError = "Please confirm if you are flying";
    $isValid = false;
}
elseif(!in_array($flight,$flightArray)){
    $flightError = "Please confirm if you are flying";
    $isValid = false;
}
elseif($flight == "yes") {
    //validates time
    $time = $_POST['time'];
    if (empty($time)) {
        $timeError = "Please enter your flying time";
        $isValid = false;
    }
    //validates school and makes sure that the option selected is in the array.
    $school = $_POST['school'];
    $schoolArray = array("crest", "galvin", "rainier", "safetyMotion", "other");
    if (!isset($school)) {
        $schoolError = "Please confirm your school";
        $isValid = false;
    } elseif (!in_array($school, $schoolArray)) {
        $schoolError = "Please confirm your school";
        $isValid = false;
    }
    //validates program the student uses
    $program = $_POST['program'];
    $programArray = array("AAS", "BAS", "none");
    if (!isset($program)) {
        $programError = "Please select a program you're in";
        $isValid = false;
    } elseif (!in_array($program, $programArray)) {
        $programError = "Please select a program you're in";
        $isValid = false;
    }
    //validates current milestone
    $milestone = $_POST['milestone'];
    $milestoneArray = array("private", "instrument", "commercial-sel", "commercial-multi", "cfi", "mei", "cfii", "none");
    if (!isset($milestone) && !in_array($milestone, $milestoneArray)) {
        $milestoneError = "Please select what you're currently working on";
        $isValid = false;
    }
    //validates recent and next
    $nextMilestone = $_POST['nextMilestone'];
    $recentMilestone = $_POST['recentMilestone'];
    switch($milestone) {
        case  "private":
            {
                $milestoneArray = array("solo", "night", "crossCountry", "checkRide");
                if (empty($recentMilestone && !in_array($recentMilestone, $milestoneArray))) {
                    $recentMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case "instrument":
            {
                $milestoneArray = array("instrumentTT", "crossCountry", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case "commercialSel":
            {
                $milestoneArray = array("250hours", "picTT", "crossCountry", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case "commercialMulti":
            {
                $milestoneArray = array("multitime", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case  "cfi":
            {
                $milestoneArray = array("tbd1", "tbd2", "tbd3", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case "mei":
            {
                $milestoneArray = array("tbd1", "tbd2", "tbd3", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
        case "cfii":
            {
                $milestoneArray = array("tbd1", "tbd2", "tbd3", "checkRide");
                if (empty($recentMilestone) && !in_array($recentMilestone, $milestoneArray)) {
                    $recentMilestoneError = "Please select your most recent milestone";
                    $isValid = false;
                }
                if (empty($nextMilestone) && !in_array($nextMilestone, $milestoneArray)) {
                    $nextMilestoneError = "Please select your next milestone";
                    $isValid = false;
                }
            }
    }
}