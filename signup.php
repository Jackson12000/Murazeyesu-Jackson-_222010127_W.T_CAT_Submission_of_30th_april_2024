<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         .p1{
            font-family:  Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 20px;
            align-items: center;
        }
        form{
          
            width: 500px;
            height:600px;
            color:white;
            margin-top:50px;
        }
        tr{
            color: deeppink;
            font-size: 25px;
        }
        tr td{
            font-size: 20px;
            color: white;
            width: 300px;
            height: 40px;
        }
        tr td input{
            font-size: 20px;
            color: black;
            width: 300px;
            height: 40px;
        }
        body{
            background-color: Gray;
        }
        .gorilla{
            width: 500px;
            height: 250px;
            margin-top:0px;
            margin-left:25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form id="signupForm" action="create.php" method="POST">
    <h3 class="p1"><i>CREATE ACCOUNT</i></h3>
    <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control" name="firstname" id="fname">
    </div>
    <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" name="lastname" id="lname">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
        <span id="emailError" class="error"></span>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
        <span id="usernameError" class="error"></span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
        <span id="passwordError" class="error"></span>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="width: 150px;">Sign Up</button>
        <button type="button" class="btn btn-secondary" style="width: 150px;">Cancel</button>
    </div>
</form>

<script>
    // Function to validate email format
    function validateEmail(email) {
        const re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    // Function to validate form
    function validateForm() {
        const email = document.getElementById('email').value;
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        let isValid = true;

        // Validate email
        if (!validateEmail(email)) {
            document.getElementById('emailError').innerText = 'Invalid email format';
            isValid = false;
        } else {
            document.getElementById('emailError').innerText = '';
        }

        // Validate username
        if (username.trim() === '') {
            document.getElementById('usernameError').innerText = 'Username is required';
            isValid = false;
        } else {
            document.getElementById('usernameError').innerText = '';
        }

        // Validate password
        if (password.trim() === '') {
            document.getElementById('passwordError').innerText = 'Password is required';
            isValid = false;
        } else {
            document.getElementById('passwordError').innerText = '';
        }

        return isValid;
    }

    // Event listener for form submission
    document.getElementById('signupForm').addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>

            </div>
        </div>
    </div>
    <center>
       
        <footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;"><p>&copy Designed by Murazeyesu Jackson 222010127</p></footer>
    </center>
    
</body>
</html>
