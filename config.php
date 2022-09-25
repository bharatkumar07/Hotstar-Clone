<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

//for Localhost Database Connection
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login');

//For Remote Database Connection
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', '4dgbuu9YJ0');
define('DB_PASSWORD', 'N39zTJTqq9');
define('DB_NAME', '4dgbuu9YJ0');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
