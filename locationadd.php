<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $tourname = $_POST["tourname"];
  $timeVisit = $_POST["timeVisit"];
 
  
  if ( empty($tourname) || empty($timeVisit)) {
    $errorMessage = "All fields are required";
  } else {
    $sql = "INSERT INTO location ( tourname, timeVisit) " . "VALUES ('$tourname', '$timeVisit')";
    $result = $connection->query($sql);
    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
    } else {
      echo "Added correctly";
      header("location: /tourismcat/locationview.php");
      exit;
    }
  }
}
?>
