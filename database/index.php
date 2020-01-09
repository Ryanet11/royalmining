<?php
include "db-connection.php";

$conn = OpenCon();

echo "Connected.";
CloseCon($conn);
?>

