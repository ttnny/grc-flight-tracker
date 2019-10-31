<?php
/**
 * Created by PhpStorm.
 * User: shelb
 * Date: 11/14/2018
 * Time: 12:45 AM
 */

$username = 'codeblac_studentUser';
$password = 'CodeBlackStudentFlight';
$hostname = 'localhost';
$database = 'codeblac_studentFlight';

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("Error connecting to database: " . mysqli_connect_error());