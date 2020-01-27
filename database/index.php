<?php
include "db-connection.php";
include "utils.php";

$conn = OpenCon();
$sql = "SELECT * FROM litebans_bans";
echo "Connected.";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Player:</th>";
    echo "<th>Banned by:</th>";
    echo "<th>Active:</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . uuid_to_username($row["uuid"]) . "</td>";
        echo "<td>" . uuid_to_username($row["banned_by_uuid"]) . "</td>";
        if ($row["active"] == 1) {
            echo "<td>TRUE</td>";
        } else {
            echo "<td>FALSE</td>";
        }
        echo "</tr>";
    }

}
CloseCon($conn);
?>

