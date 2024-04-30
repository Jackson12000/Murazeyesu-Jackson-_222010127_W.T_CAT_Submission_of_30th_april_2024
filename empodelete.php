<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    include "dbconnection.php";

    // Prepare and execute SQL statement to delete data
    $sql = "DELETE FROM employees WHERE id = $id";

    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    $connection->close();
}

header("location: /tourismcat/empoview.php");
exit;
?>