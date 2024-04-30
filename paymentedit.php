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
    // GET method: show the data of the payment
    if (!isset($_GET["id"])) {
        header("location: /tourismcat/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Read the row of the selected payment from the database
    $sql = "SELECT * FROM payment WHERE id=$id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $payeesname = $row["payeesname"];
        $amount = $row["amount"];
        $payment_date = $row["payment_date"];
        $payment_method = $row["payment_method"];
        
    } else {
        header("location: /tourismcat/payment.php"); // Corrected typo
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the payment
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $payeesname = $_POST["payeesname"];
    $amount = $_POST["amount"];
    $payment_date = $_POST["payment_date"];
    $payment_method = $_POST["payment_method"];
   
    
   
    // Removed unused $CreateAt variable
    
    if (empty($id) || empty($firstname) || empty($lastname) || empty($payeesname) || empty($amount) || empty($payment_date) || empty($payment_method)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE payment SET firstname='$firstname', lastname='$lastname', payeesname='$payeesname', amount='$amount', payment_date='$payment_date',payment_method='$payment_method' WHERE id='$id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /tourismcat/paymentview.php");
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
    <title>payment Update</title>
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
                <label for="payeesname">Payees Name</label>
                <div>
                    <input class="em" type="text" name="payeesname" value="<?php echo $payeesname ?>" placeholder="Enter payees name">
                </div>
            </div>
            <div>
                <label for="telephone">Amount</label>
                <div>
                    <input class="tel" type="text" name="amount" value="<?php echo $amount ?>" placeholder="Enter amount ">
                </div>
            </div>
            <div>
                <label for="payment_date">payment_date</label>
                <div>
                    <input class="company" type="date" name="payment_date" value="<?php echo $payment_date ?>">
                </div>
            </div>
            <div>
                <label for="payment_method">payment_method</label>
                <div>
                    <input class="company" type="date" name="payment_method" value="<?php echo $payment_method ?>">
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
