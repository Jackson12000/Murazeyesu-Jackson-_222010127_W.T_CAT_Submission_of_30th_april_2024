<!DOCTYPE html>
<html lang="en">
<head>
    <!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation</title>
    <script>
        function confirmInsert() {
          return confirm('do you want to record?'); 
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        /* Inline CSS for demonstration purposes */
        /* Add any additional styles here */
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(./lodge1.jpg);
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
        .ff{
            background-color: blue;  
        }
        .lo{
          color: white;
        
        }
        .i{
            background-color:white;
            color: blue;
            border-radius:16px;
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
<center>
<div class="container">
    <form class="ff" action="accoinsert.php" method="POST" onsubmit=" return confirmInsert();">
        <table>
            <tr>
                <td colspan="2">
                    <h2 class="lo">Accommodation Form</h2>
                </td>
            </tr>
            <tr>
                <td class="lo">Firstname</td>
                <td><input class="in" type="text" class="fi" name="firstname" id="fname" placeholder="Please enter your first name"></td>
            </tr>
            <tr>
                <td class="lo">Lastname</td>
                <td><input class="in" type="text" name="lastname" id="lname" placeholder="Please enter your last name"></td>
            </tr>
            <tr>
                <td class="lo">Birth of day</td>
                <td><input class="in" type="date" name="dob" ></td>
            </tr>
            <tr>
                <td class="lo">Gender</td>
                <td>
                    <select class="in" name="gender" required>
                        <option value="chose">Select one</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="lo">Email</td>
                <td><input class="in" type="text" class="fi" name="email" id="email" placeholder="Please enter your email"></td>
            </tr>
            <tr>
                <td class="lo">Telephone</td>
                <td><input class="in" type="text" name="telephone" id="telephone" placeholder="Please enter your telephone"></td>
            </tr>
            <tr>
                <td class="lo">Residental</td>
                <td>
                    <select class="in" name="residental" required>
                        <option value="chose">Select</option>
                        <option value="Usa">USA</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="German">German</option>
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="lo">Nationality</td>
                <td>
                    <select class="in" name="nationality" required>
                        <option value="chose">Select</option>
                        <option value="Usa">USA</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="German">German</option>
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr>
            <tr>
                <td class="lo">Arrive In</td>
                <td><input class="in" type="date" name="arriveIn" required ></td>
            </tr>
            <tr>
                <td class="lo">Arrive Out</td>
                <td><input class="in" type="date" name="arriveOut" required ></td>
            </tr>
            <tr>
                <td class="lo">Room</td>
                <td>
                    <select class="in" name="room" required>
                        <option value="chose">Select</option>
                        <option value="flowone">Flow One</option>
                        <option value="flowtwo">Flow Two</option>
                        <!-- Add more options as needed -->
                    </select>
                </td>
            </tr><br><br> 
            
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
    <p>&copy; Designed by Murazeyesu Jackson 222010127</p>
</footer>
</center>
</body>
</html>
