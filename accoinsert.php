<?php 
$server="localhost";
$username="root";
$password="";
$database="tourism_system";
$connection = new mysqli($server, $username, $password, $database);
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $email = $_POST["email"]; // corrected field name to match form
  $telephone = $_POST["telephone"];
  $residental = $_POST["residental"];
  $nationality = $_POST["nationality"];
  $arriveIn = $_POST["arriveIn"];
  $arriveOut = $_POST["arriveOut"];
  $room = $_POST["room"];
  if (empty($firstname) || empty($lastname) || empty($dob) || empty($gender) || empty($email) || empty($telephone) || empty($residental) || empty($nationality) || empty($arriveIn) || empty($arriveOut) || empty($room)) {
    $errorMessage = "All fields are required";
  } else {
    $sql = "INSERT INTO accommodation (firstname, lastname, dob, gender, email, telephone, residental, nationality, arriveIn, arriveOut, room ) " . "VALUES ('$firstname', '$lastname', '$dob', '$gender', '$email', '$telephone', '$residental', '$nationality', '$arriveIn', '$arriveOut', '$room')";
    $result = $connection->query($sql);
    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
    } else {
      echo "Added correctly";
      header("location: /tourismcat/accoview.php");
      exit;
    }
  }
}
?>
