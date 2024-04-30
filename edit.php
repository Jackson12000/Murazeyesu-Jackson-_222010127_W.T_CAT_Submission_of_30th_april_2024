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
    // GET method: show the data of the transport
    if (!isset($_GET["id"])) {
        header("location: /tourismcat/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Read the row of the selected transport from the database
    $sql = "SELECT * FROM transport WHERE id=$id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $telephone = $row["telephone"];
        $companiesName = $row["companiesName"];
        $time_arrival = $row["time_arrival"];
        $tourist_residental = $row["tourist_residental"];
    } else {
        header("location: /tourismcat/transport.php"); // Corrected typo
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the client
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $companiesName = $_POST["companiesName"];
    $time_arrival = $_POST["time_arrival"];
    $tourist_residental= $_POST["tourist_residental"];
   
    // Removed unused $CreateAt variable
    
    if (empty($id) || empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($companiesName) || empty($time_arrival) || empty($tourist_residental)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE transport SET firstname='$firstname', lastname='$lastname', email='$email', telephone='$telephone', companiesName='$companiesName', time_arrival='$time_arrival', tourist_residental='$tourist_residental' WHERE id='$id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /tourismcat/traview.php");
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
    <title>Transport Update</title>
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
            <h1>Transport FORM</h1>
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div>
                <label for="firstname">Firstname</label>
                <div>
                    <input class="fn" type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="Enter first Name">
                </div>
            </div>
            <div>
                <label for="lastname">Lastname</label>
                <div>
                    <input class="ln" type="text" name="lastname" value="<?php echo $lastname ?>" placeholder="Enter last name" >
                </div>
            </div>
            <div>
                <label for="email">Email</label>
                <div>
                    <input class="em" type="text" name="email" value="<?php echo $email ?>" placeholder="Enter email">
                </div>
            </div>
            <div>
                <label for="telephone">Telephone</label>
                <div>
                    <input class="tel" type="text" name="telephone" value="<?php echo $telephone ?>" placeholder="Enter telephone ">
                </div>
            </div>
            <div>
                <label for="companiesName">Companies Name</label>
                <div>
                    <input class="company" type="text" name="companiesName" value="<?php echo $companiesName ?>">
                </div>
            </div>
            <div>
                <label for="time_arrival">Time Arrival</label>
                <div>
                    <input class="arrive" type="text" name="time_arrival" value="<?php echo $time_arrival ?>" placeholder="Enter time arrival" >
                </div>
            </div>   <div>
                <label for="time_arrival">tourist_residental</label>
                <div>
                    <input class="residental" type="text" name="tourist_residental" value="<?php echo $tourist_residental ?>" placeholder="Enter time arrival" >
                </div>
            </div>
            <!-- Moved the submit and reset buttons inside the form -->
            <div>
                <input  class="submit" type="submit" value="Update">
              
            </div>
        </form>
    </center>
</body>

</html>
