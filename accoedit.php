<?php
include "dbconnection.php";

$id = "";
$firstname = "";
$lastname = "";
$dob = "";
$gender = "";
$email = "";
$telephone = "";
$residental = "";
$nationality = "";
$arriveIn = "";
$arriveOut = "";
$room = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the accommodation
    if (!isset($_GET["id"])) {
        header("location: /tourismcat/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Read the row of the selected accommodation from the database
    $sql = "SELECT * FROM accommodation WHERE id=$id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $dob = $row["dob"];
        $gender = $row["gender"];
        $email = $row["email"];
        $telephone = $row["telephone"];
        $residental = $row["residental"];
        $nationality = $row["nationality"];
        $arriveIn = $row["arriveIn"];
        $arriveOut = $row["arriveOut"];
        $room = $row["room"];
    } else {
        header("location: /tourismcat/transport.php");
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the client
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $residental = $_POST["residental"];
    $nationality = $_POST["nationality"];
    $arriveIn = $_POST["arriveIn"];
    $arriveOut = $_POST["arriveOut"];
    $room = $_POST["room"];
    
    if (empty($id) || empty($firstname) || empty($lastname) || empty($dob) || empty($gender) || empty($email) || empty($telephone) || empty($residental) || empty($nationality) || empty($arriveIn) || empty($arriveOut) || empty($room)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE accommodation SET firstname='$firstname', lastname='$lastname', dob='$dob', gender='$gender', email='$email', telephone='$telephone', residental='$residental', nationality='$nationality', arriveIn='$arriveIn', arriveOut='$arriveOut', room='$room' WHERE id='$id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /tourismcat/accoview.php");
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
    <title> Update</title>
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
        
        input[type="text"],
        input[type="date"] {
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
                <label for="dob">Date Of Birth</label>
                <div>
                    <input class="fn" type="date" name="dob" value="<?php echo $dob ?>" placeholder="Enter date of birth">
                </div>
            </div>
            <div>
                <label for="gender">Gender</label>
                <div>
                    <input class="ln" type="text" name="gender" value="<?php echo $gender ?>" placeholder="Enter gender" >
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
                <label for="residental">Residental</label>
                <div>
                    <input class="company" type="text" name="residental" value="<?php echo $residental ?>">
                </div>
            </div>
            <div>
                <label for="nationality">Nationality</label>
                <div>
                    <input class="arrive" type="text" name="nationality" value="<?php echo $nationality ?>" placeholder="Enter nationality" >
                </div>
            </div>   
            <div>
                <label for="arriveIn">arriveIn</label>
                <div>
                    <input class="residental" type="text" name="arriveIn" value="<?php echo $arriveIn ?>" placeholder="Enter  arrival in" >
                </div>
            </div>
            <div>
                <label for="arriveOut">Arrive Out</label>
                <div>
                    <input class="company" type="text" name="arriveOut" value="<?php echo $arriveOut ?>">
                </div>
            </div>
            <div>
                <label for="room">Room</label>
                <div>
                    <select name="room" required>
                        <option value="flowone" <?php if ($room == 'flowone') echo 'selected="selected"'; ?>>Flow One</option>
                        <option value="flowtwo" <?php if ($room == 'flowtwo') echo 'selected="selected"'; ?>>Flow Two</option>
                        <option value="flowtree" <?php if ($room == 'flowtree') echo 'selected="selected"'; ?>>Flow three</option>
                        <option value="flowfour" <?php if ($room == 'flowfour') echo 'selected="selected"'; ?>>Flow four</option>
                        <option value="flowfive" <?php if ($room == 'flowfive') echo 'selected="selected"'; ?>>Flow five</option>
                        <option value="flowsix" <?php if ($room == 'flowsix') echo 'selected="selected"'; ?>>Flow six</option>
                    </select>
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
