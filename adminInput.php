<?php
/**
 * Created by PhpStorm.
 * User: shelb
 * Date: 11/10/2018
 * Time: 4:45 AM
 */
$username = 'codeblac_facultyUser';
$password = 'CodeBlackFacultyFlight';
$hostname = 'localhost';
$database = 'codeblac_studentFlight';

$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die("Error connecting to database: " . mysqli_connect_error());