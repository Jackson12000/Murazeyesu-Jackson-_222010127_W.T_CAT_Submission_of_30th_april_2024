<?php 
include "dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $firstname = $_POST["firstnane"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $nationality = $_POST["nationality"];
  
    // Check if any field is empty
    if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($nationality)) {
        $errorMessage = "All fields are required";
    } else {
        // Prepared statement to prevent SQL injection
        $sql = "INSERT INTO tourist (firstnane, lastname, email, telephone, nationality) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        
        // Bind parameters
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $telephone, $nationality);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Record added correctly";
            header("Location: /tourismcat/touristview.php");
            exit;
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $connection->error;
        }
        
        // Close statement
        $stmt->close();
    }
}

// Close connection
$connection->close();
?>
