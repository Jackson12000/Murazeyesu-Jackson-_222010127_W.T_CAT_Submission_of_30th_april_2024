<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <script>
        function confirmInsert() {
          return confirm('do you want to record?'); 
        }
    </script>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(./nyungwe.jpeg);
        }
        .p1 {
            font-family:Arial, sans-serif ;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
        form {
            width: 500px;
            height: 100px;
            color: white;
            margin-top: 0;
        }
        tr {
            color: deeppink;
            font-size: 25px;
        }
        tr td {
            font-size: 20px;
            color: white;
            width: 300px;
            height: 40px;
        }
        tr td input {
            font-size: 20px;
            color: black;
            width: 300px;
            height: 40px;
        }
        .navigation a:link,
        .navigation a:visited,
        .navigation a:hover,
        .navigation a:active {
            color: white;
            background-color: none;
            padding: 5px;
            margin: 5px;
            border-radius: 15px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: rgb(88, 9, 190);
            border-bottom: 5px solid black;
        }
        .logo {
            width: 60px;
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: none;
            flex-grow: 2; 
        }
        .navigation li {
            display: inline-block;
            margin-right: 5px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .dropdown-contents {
            display: none;
            position: absolute;
            background-color: deeppink;
            text-decoration: none;
        }
        .dropdown-contents a {
            color: black;
            text-decoration: none;
            display: block;
        }
        .dropdown-contents a:hover {
            background-color: red;
        }
        .dropdown:hover .dropdown-contents {
            display: block;
        }
        .tu {
            color: rgb(237, 237, 18);
        }
        footer {
            background-color: black;
            text-align: center;
            color: white;
            font-size: 25px;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 10px 0;
        }
        .ff{
            background-color: blue;
            width: 1000px;
            height: 400px;  
        }
        .lo{
          color: white;
          margin: left 10px;
        
        }
        .i{
            background-color:white;
            color: blue;
            border-radius:16px;

        }
        .i{
            background-color:white;
            color: blue;
            border-radius:16px;
            text-align:center:
               
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style1.css" title="style1" media="screen,tv,print,handheld"/>
</head>
<body>
    
        <header>
            <div class="header">
                <img class="logo" src="tttt.png" alt="Logo">
                <h3 class="tu"><i>Logo tour<br>TOURISM SYSTEM</i></h3>
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

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Form</title>
</head>
<body>
<center>

<form class="ff" id="tourForm" action="tour.php" method="POST" onsubmit=" return confirmInsert();">
    <center>
    <table class="ff">
        <tr>
           <center><td colspan="2"><h1 class="lo"><i>Tourist Form</i></h1></td></center>
        </tr>
        <tr>
            <td class="lo">Firstname</td>
            <td><input type="text" name="firstnane" id="fname" placeholder="Enter first name"></td>
        </tr>
        <tr>
            <td class="lo">Lastname</td>
            <td><input type="text" name="lastname" id="lname"  placeholder="Enter last name"></td>
        </tr>
        <tr>
            <td class="lo">Email</td>
            <td><input type="text" name="email" id="email" required=""  placeholder="Enter email"></td>
        </tr>
        <tr>
            <td class="lo">Telephone</td>
            <td><input type="text" name="telephone" id="telephone" required=""  placeholder="Enter telephone"></td>
        </tr>
        <tr>
            <td class="lo">Nationality</td>
            <td><input type="text" name="nationality" id="nationality" required=""  placeholder="Enter your nationality"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="send" value="New Add" style="width: 150px;background-color: black;color: white;font-size: 30px;">
                <input type="submit" name="reset" value="Cancel" style="width: 150px;background-color: black;color: white;font-size: 30px;">
            </td>
        </tr>
    </table>
    </center>
   
</form>
</center>
<script>
    // Function to validate the form
    function validateForm(event) {
        // Get form inputs
        var firstname = document.getElementById('fname').value;
        var lastname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var telephone = document.getElementById('telephone').value;
        var nationality = document.getElementById('nationality').value;

        // Regular expression for email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Validation checks
        if (firstname.trim() === '') {
            alert('Please enter your first name');
            event.preventDefault();
            return;
        }

        if (lastname.trim() === '') {
            alert('Please enter your last name');
            event.preventDefault();
            return;
        }

        if (!emailRegex.test(email)) {
            alert('Please enter a valid  change email address');
            event.preventDefault();
            return;
        }

        if (telephone.trim() === '') {
            alert('Please enter your telephone number');
            event.preventDefault();
            return;
        }

        if (nationality.trim() === '') {
            alert('Please enter your nationality');
            event.preventDefault();
            return;
        }
    }

    // Add event listener to form submission event
    document.getElementById('tourForm').addEventListener('submit', validateForm);
</script>

</body>
</html>


        <footer>
            <p>&copy; Designed by Murazeyesu Jackson 222010127</p>
        </footer>
    </center>
</body>
</html>
