<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>location</title>
  <script>
        function confirmInsert() {
          return confirm('do you want to record?'); 
        }
    </script>
	<style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-image: url(./lodge1.jpg);
        }
.navigation a:link{
    color: white;
    background-color:none;
    padding: 5px;
    margin: 5px;
      border-radius: 15px;

}
.navigation a:visited{
    color: white;
    background-color:none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
.navigation a:hover{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
     border-radius: 15px;
}
 .navigation a:active{
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
            padding: 50px 50px;
            background-color: rgb(88, 9, 190);
            border-bottom: 5px solid black;
        }
        .logo {
            width: 60px; /* Adjust logo size */
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align:none;
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
        .p1{
            font-size: 20px;
            color: black;
            text-align: center;

        }
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
      }
      .dropdown-contents{
  display: none;
  position: absolute;
  background-color:deeppink;
 text-decoration: none;
}
.dropdown-contents a{
  color: black;
  text-decoration: none;
  display: block;
}
.dropdown-contents a :hover{
 background-color: red;
}
.dropdown:hover .dropdown-contents{
  display:block;
}
.tu{
  color: rgb(237, 237, 18);
}
.bu{
            background-color:blue;
            color:white;
        }
        .lo{
          color: white;
        
        }
        .ff{
          background-color: black;
        }


    </style>
 <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<div class="header">
    <img class="logo" src="tttt.png" alt="Logo">
    <h3 class="tu"><i>logo tour <br>TOURISM SYSTEM</i></h3>
    <ul class="navigation">
      <li><a href="menu1.php">Home</a></li>
        <li><a href="about us.php">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li class="dropdown">
          <a href="#">Form</a>
          <div class="dropdown-contents">
            <a href="tourist.php">Tourist Form</a>
            <a href="transport.php">Trasport Form</a>
            <a href="accommodation.php">Accommodation Form</a>
            <a href="payment.php">Payment Form</a>
            <a href="employees.php">Employee Form</a>
            <a href="location.php">Location Form</a>
          </div>
        </li>
        <li class="dropdown">
        <a href="#">Table</a>
        <div class="dropdown-contents">
          <a href="touristview.php">Tourist table</a>
          <a href="traview.php">Trasport Table</a>
          <a href="accoview.php">Accommodation Table</a>
          <a href="paview.php">Payment Table</a>
          <a href="empoview.php">Employee Table</a>
          <a href="locationview.php">Location Table</a>
        </div>
      </li>
        <li class="dropdown">
      <a href="#">Settings</a>
      <div class="dropdown-contents">
        <a href="signup.php">signup</a>
        <a href="logout.php">Logout</a>
      </div>
    </li>
    </ul>
</div>
    <br>
 <form action="search.php" method="GET">
      <input type="search" name="query" placeholder="search here!!!!!!!">&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color: blue;width: 100px;">search</button>
    </form></div></li></ul></div></header>
    <h2><marquee class="bu">WELCOME TO TOURISM  SYSTEM</marquee></h2>
    <div class="container">
    <form class="ff" id="locationForm" action="locationadd.php" method="POST" onsubmit=" return confirmInsert();">
        <table>
            <tr>
                <td colspan="2">
                    <h2 class="lo">Location Form</h2>
                </td>
            </tr>
            <tr>
                <td class="lo">Tour Name</td>
                <td>
                    <select class="input" name="tourname" required>
                        <option value="chose">Select one</option>
                        <option value="Nyungwe">NYUNGWE</option>
                        <option value="Akagera">Akagera</option>
                        <option value="lake kivu">KIVU LAKE</option>
                        <option value="IBIRUNGA">IBIRUNGA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="lo">Visit Time</td>
                <td><input class="input" type="date" name="timeVisit"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="button" type="submit" name="send" value="Booking">
                    <input class="button" type="reset" name="send" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
    <script src="script.js"></script>
</div>
<footer>
    <p>&copy; Designed by Murazeyesu Jackson 222010127</p>
</footer>
</body>
</html>