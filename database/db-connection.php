<?php
function OpenCon() {

    #cridentials
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "1234";
    $db = "example";
    #connection

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Unable to connect to the database try again in 5 minutes and if it keeps happening let the devs know.");

    return $conn;

}
function CloseCon($conn) {
    $conn -> close();
}
?>