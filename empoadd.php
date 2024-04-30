<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  // corrected field name to match form
  $telephone = $_POST["telephone"];
  $position = $_POST["position"];
  
  if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($position) ) {
    $errorMessage = "All fields are required";
  } else {
    $sql = "INSERT INTO employees (firstname, lastname, email, telephone, position) " . "VALUES ('$firstname', '$lastname','$email', '$telephone', '$position')";
    $result = $connection->query($sql);
    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
    } else {
      echo "Added correctly";
      header("location: /tourismcat/empoview.php");
      exit;
    }
  }
}
?>
