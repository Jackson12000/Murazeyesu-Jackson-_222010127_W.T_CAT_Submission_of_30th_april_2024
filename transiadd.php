<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $companiesName = $_POST["company"]; // corrected field name to match form
  $time_arrival = $_POST["arrival"];
  $tourist_residental = $_POST["residental"];
  if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($companiesName) || empty($time_arrival) || empty($tourist_residental)) {
    $errorMessage = "All fields are required";
  } else {
    $sql = "INSERT INTO transport (firstname, lastname, email, telephone, companiesName, time_arrival, tourist_residental) " . "VALUES ('$firstname', '$lastname', '$email', '$telephone', '$companiesName', '$time_arrival', '$tourist_residental')";
    $result = $connection->query($sql);
    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
    } else {
      echo "Added correctly";
      header("location: /tourismcat/traview.php");
      exit;
    }
  }
}
?>
