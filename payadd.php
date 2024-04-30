<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $payeesname = $_POST["payeesname"];
  $amount = $_POST["amount"];
  $payment_date = $_POST["payment_date"]; // corrected field name to match form
  $payment_method = $_POST["payment_method"];
 
  if (empty($firstname) || empty($lastname) || empty($payeesname) || empty($amount) || empty($payment_date) || empty($payment_method)) {
    $errorMessage = "All fields are required";
  } else {
    $sql = "INSERT INTO payment (firstname, lastname, payeesname, amount, payment_date, payment_method) " . "VALUES ('$firstname', '$lastname', '$payeesname', '$amount', '$payment_date', '$payment_method')";
    $result = $connection->query($sql);
    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
    } else {
      echo "Added correctly";
      header("location: /tourismcat/payment.php");
      exit;
    }
  }
}
?>
