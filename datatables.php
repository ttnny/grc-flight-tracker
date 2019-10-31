<?php

require '/home/codeblac/adminInput.php';

// Database connection info
$dbDetails = array(
    'host' => $hostname,
    'user' => $username,
    'pass' => $password,
    'db'   => $database
);

// DB table to use
$table = 'studentFlight';

// Table's primary key
$primaryKey = 'first';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database.
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'first',   'dt' => 0 ),
    array( 'db' => 'last',    'dt' => 1 ),
    array( 'db' => 'email',   'dt' => 2 ),
    array( 'db' => 'school',  'dt' => 3 ),
    array( 'db' => 'time', 'dt' => 4 ),
    array( 'db' => 'current_milestone', 'dt' => 5 ),
    array( 'db' => 'recent_milestone', 'dt' => 6 ),
    array( 'db' => 'next_milestone', 'dt' => 7 ),
);

// Include SQL query processing class
require( 'ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);