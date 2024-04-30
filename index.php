<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(./back.jpg);
        }
        .container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: skyblue;
            margin-top: 200px;
        }
        h3 {
            color: deeppink;
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
        }
        table tr td {
            padding: 5px 0;
        }
        table tr td input[type="text"],
        table tr td input[type="password"] {
            width: calc(100% - 10px);
            padding: 5px;
            font-size: 16px;
        }
        table tr td input[type="submit"] {
            width: calc(50% - 5px);
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .signup-link {
            text-align: center;
        }
        .signup-link a {
            color: deeppink;
            text-decoration: none;
        }
        .footer {
            background-color: black;
            text-align: center;
            color: white;
            font-size: 14px;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="log.php" method="POST">
        <table>
            <tr>
                <td colspan="2">
                    <h3>LOGIN FORM</h3>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" required=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required=""></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="send" value="Send">
                    <input type="submit" name="send" value="Cancel">
                </td>
            </tr>
            <tr>
                <td colspan="2" class="signup-link">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </td>
            </tr>
        </table>
    </form>
</div>

<footer class="footer">
    <p>&copy Designed by Murazeyesu Jackson 222010127 &reg; 2024</p>
</footer>

</body>
</html>
