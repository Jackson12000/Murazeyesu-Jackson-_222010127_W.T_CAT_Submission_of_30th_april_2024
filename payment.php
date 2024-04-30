<!DOCTYPE html>
<html lang="en">
<head>
    <!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script>
        function confirmInsert() {
          return confirm('do you want to record?'); 
        }
    </script>
    <style>
        /* Inline CSS for demonstration purposes */
        /* Add any additional styles here */
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: rgb(88, 9, 190);
            border-bottom: 5px solid black;
        }
        .logo {
            width: 60px;
            height: auto;
        }
        .tu {
            font-size: 20px;
            color: rgb(237, 237, 18);
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            flex-grow: 2;
            text-align: none;
        }
        .navigation li {
            display: inline-block;
            margin-right: 10px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #fff;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-contents {
            display: none;
            position: absolute;
            background-color: deeppink;
        }
        .dropdown:hover .dropdown-contents {
            display: block;
        }
        .dropdown-contents a {
            display: block;
            padding: 5px;
            color: black;
            text-decoration: none;
        }
        .dropdown-contents a:hover {
            background-color: red;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .fi {
            width: 200px;
        }
        .p1 {
            font-size: 20px;
            color: black;
            text-align: center;
        }
        .st, .s, .sp {
            font-size: 20px;
            color: blue;
            font-weight: bold;
        }
        .in{
            width: 400px;
            height: 50px;
        }
        .i{
            width: 125px;
            height: 50px;
            margin-left: 100px;
            border-radius: 16px;
            color: white;
            background-color: blue;

        }
        .bu{
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <img class="logo" src="tttt.png" alt="Logo">
        <h3 class="tu"><i>Logo Tour<br>Tourism System</i></h3>
        <ul class="navigation">
            <li><a href="menu1.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li class="dropdown">
                <a href="#">Form</a>
                <div class="dropdown-contents">
                    <a href="tourist.php">Tourist Form</a>
                    <a href="transport.php">Transport Form</a>
                    <a href="accommodation.php">Accommodation Form</a>
                    <a href="payment.php">Payment Form</a>
                    <a href="employees.php">Employee Form</a>
                    <a href="location.php">Location Form</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Table</a>
                <div class="dropdown-contents">
                    <a href="touristview.php">Tourist Table</a>
                    <a href="traview.php">Transport Table</a>
                    <a href="accoview.php">Accommodation Table</a>
                    <a href="paymentview.php">Payment Table</a>
                    <a href="empoview.php">Employee Table</a>
                    <a href="locationview.php">Location Table</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Settings</a>
                <div class="dropdown-contents">
                    <a href="signup.php">Signup</a>
                    <a href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
<h2><marquee class="bu">WELCOME TO TOURISM  SYSTEM</marquee></h2>
<div class="container">
    <form action="payadd.php" method="POST" onsubmit=" return confirmInsert();">
        <table>
            <tr>
                <td colspan="2">
                    <h3>Payment Form</h3>
                </td>
            </tr>
            <tr>
                <td>Firstname</td>
                <td><input class="in" type="text" class="fi" name="firstname" id="fname" placeholder="Please enter your first name"></td>
            </tr>
            <tr>
                <td>Lastname</td>
                <td><input class="in" type="text" name="lastname" id="lname" placeholder="Please enter your last name"></td>
            </tr>
            <tr>
                <td>Payees Name</td>
                <td>
                    <select class="in" name="payeesname" required>
                        <option value="chose">Select</option>
                        <option value="Employees">Employee</option>
                        <option value="Tourist">Tourist</option>
                       
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input class="in" type="number" name="amount" id="amount" ></td>
            </tr>
           
           
                <tr>
                <td>Payment Date</td>
                <td><input class="in" type="date" name="payment_date" id="payment_date" ></td>
            </tr>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td>
                    <select class="in" name="payment_method" required>
                        <option value="chose">Select</option>
                        <option value="mobile money">MTN RWANDA</option>
                        <option value="AITEL Rwanda">Aitel Rwanda</option>
                        <option value="Bank">Bank</option>
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr>
            <br><br> 
            
            <tr>
                <td colspan="2">
                    <input class="i" type="submit" name="send" value="Booking">
                    <input class="i" type="reset" name="send" value="Cancel">
                </td>
            </tr>
            
        </table>
    </form>
</div>
<footer>
    <p  class ="bu">&copy; Designed by Murazeyesu Jackson 222010127</p>
</footer>
</body>
</html>
