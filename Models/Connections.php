<?php
define('SERVER','localhost');
define('USERNAME','Porapipat');
define('PASSOWRD','Porapipat159753654');
define('DATABASE','colorbird_db');
//defind URL or location DB MySQL

function connect()
{
    //Connect DB and Save error to log
    $mysqli = new mysqli(SERVER, USERNAME, PASSOWRD, DATABASE);
    if ($mysqli->connect_errno != 0) {
        $error = $mysqli->connect_error;
        $error_date = date("F j, Y, g:i a");
        $message = "{$error} | {$error_date} \r\n";
        file_put_contents("db-log.txt", $message, FILE_APPEND);
        return false;
    } else {
        return $mysqli;
    }

}


?>

