<?php
function OpenCon() {

    #cridentials
    $dbhost = "na01-sql.pebblehost.com";
    $dbuser = "customer_91771";
    $dbpass = "04ddf9ab31";
    $db = "customer_91771";
    $dbport = 3306;
    #connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db, 3306) or die("Unable to connect to the database try again in 5 minutes and if it keeps happening let the devs know.");

    return $conn;

}
function CloseCon($conn) {
    $conn->close();
}
?>