<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
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
            padding: 10px 20px;
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
.pho{
  width: 900px;
  height: 500px;
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
    <h3 class="tu"><i>logo tour <br>TOURISM SYSTEM</i></h3>
    <ul class="navigation">
      <li><a href="home.php">Home</a></li>
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
          <a href="paymentview.php">Payment Table</a>
          <a href="empoview.php">Employee Table</a>
          <a href="locationview.php">Location Table</a>
        </div>
      </li>
        <li class="dropdown">
      <a href="#">Settings</a>
      <div class="dropdown-contents">
        <a href="signupedit.php">signup</a>
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
<center>
<div><p class="p1">WELCOME Accommodation</p></div>
<div> 
  <img class="pho" src="hotel.jpg" alt="">
  <p>Email:onlinebooking@yahoo.com</p>
  <p> Call Phone: +250783387931</p>
  <p>Address: 180st,kg, Rwanda Nyarugenge</p><br>
</div>
<div>
<h2>Transport Services<h2>
  <img class="pho" src="van1.jpg" alt="">
  
    <p>Email:murazeyesujackson1@gmail.com</p>
    <p>Phone:+250785465400</p>
   

</div>
<div>
<h2>Animals Services<h2>
  <img class="pho" src="akagera.jpg" alt="">
  
    <p>Email:murazeyesujackson1@gmail.com</p>
    <p>Phone:+250785465400</p>
   

</div>
<div style="color: black;font-size: 25px;"><p>Connect with us on social media or social networkings:

  <a href="https://www.twitter.com/pdas" style="color: black;font-size: 15px;background-color: violet;">TWITTER</a>
  <a href="https://www.facebook.com/pdas" style="color: black;font-size: 15px;background-color: violet;" >FACEBOOK</a>
  <a href="https://www.instagram.com/pdas" style="color: black;font-size: 15px;background-color: violet;">INSTAGRAM</a>
  <a href="https://www.linkedin.com/pdas" style="color: black;font-size: 15px;background-color: violet;">LINKEDIN</a>
</p></div>

<div><footer style="background-color:rgb(25, 36, 193);text-align: center;width:100%;height:50px; color: white;font-size: 15px;margin-top: 20px;"><p> Designed by Murazeyesu Jackson_222010127 &copy YEAR TWO BIT GROUP A &reg 2024</p></footer></div>
</body>
</html>