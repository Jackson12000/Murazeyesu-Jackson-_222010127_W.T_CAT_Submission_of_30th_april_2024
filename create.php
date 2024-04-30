<?php 
include "dbconnection.php";

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $emailInput = $_POST["email"];
    $usernameInput = $_POST["username"];
    $passwordInput = $_POST["password"];
    $hashed_password = password_hash($passwordInput, PASSWORD_DEFAULT);

    if (empty($firstname) || empty($lastname) || empty($emailInput) || empty($usernameInput) || empty($passwordInput)) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "INSERT INTO signup (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$emailInput', '$usernameInput', '$hashed_password')";
        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
        } else {
            echo "Added correctly";
            header("Location: /tourismcat/index.php");
            exit;
        }
    }
}
?>
