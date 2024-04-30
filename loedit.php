<?php
include "dbconnection.php";

$id = "";
$firstname = "";
$lastname = "";
$email = "";
$telephone = "";
$companiesName = "";
$time_arrival = "";
$tourist_residental = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the location
    if (!isset($_GET["location_id"])) {
        header("location: /tourismcat/index.php");
        exit;
    }
    $id = $_GET["location_id"];

    // Read the row of the selected location from the database
    $sql = "SELECT * FROM location WHERE location_id=$location_id";
    $result = $connection->query($sql);
    if ($result->num_rows >0) {
        $row = $result->fetch_assoc();
        $tourname = $row["tourname"];
        $timeVisit = $row["timeVisit"];
        
        
    } else {
        header("location: /tourismcat/location.php"); // Corrected typo
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the location
    $location_id = $_POST["location_id"];
    $tourname = $_POST["tourname"];
    $timeVisit = $_POST["timeVisit"];
   
   
    
   
    // Removed unused $CreateAt variable
    
    if (empty($id) || empty($tourname) || empty($timeVisit)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE location SET tourname='$tourname', timeVisit='$timeVisit' WHERE location_id='$location_id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /tourismcat/locationview.php");
            exit;
        } else {
            $errorMessage = "Error updating record: " . $connection->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location Update</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add your CSS styles here */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        h1 {
            color: #333;
        }
        
        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <center>
        <div>
            <h1>Update information</h1>
        </div>
        <form method="POST">
            <input type="hidden" name="location_id" value="<?php echo $id ?>">
            <div>
                <label for="tourname">Tourname</label>
                <div>
                    <input class="fn" type="text" name="tourname" value="<?php echo $tourname ?>" placeholder="Enter tour Name">
                </div>
            </div>
            <div>
                <label for="timeVisit">Time Visit</label>
                <div>
                    <input class="ln" type="text" name="timeVisit" value="<?php echo $timeVisit ?>" placeholder="Enter time visit" >
                </div>
            </div>
            
              
            <!-- Moved the submit buttons inside the form -->
            <div>
                <input  class="submit" type="submit" value="Update">
              
            </div>
        </form>
    </center>
</body>

</html>