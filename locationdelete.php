<?php
if (isset($_GET["location_id"])) {
    $id = $_GET["location_id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM location WHERE location_id = $location_id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /tourismcat/locationview.php");
exit;
?>