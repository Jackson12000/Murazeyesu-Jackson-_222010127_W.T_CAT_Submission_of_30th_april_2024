<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>touristview</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
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

    /* Additional CSS styles */
    body {
      font-family: Arial, sans-serif;
    }
    h2 {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    .log {
      margin-left: 5px;
      margin-top: 10px;
      background-color: blue;
      color: white;
      width: 100px;
      border-radius: 25px;
      height: 45px;
      display: inline-block;
      text-decoration: none;
      text-align: center;
      line-height: 30px;
      margin-left: 1000px;
      text-decoration:none; 
      
    }
    .add {
      margin-left: 5px;
      margin-top: 10px;
      background-color: blue;
      color: white;
      width: 100px;
      border-radius: 25px;
      height: 45px;
      display: inline-block;
      text-decoration: none;
      text-align: center;
      line-height: 30px;
    }
    .list{
      width:1000px;
      height: 50px;
      background-Color:blue;
      color:white;
      border-radius: 30px;
      font-weight:bold;
      text-align:center;
      
      

    }
   
  </style>
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
          <a href="paymentview.php">Payment Table</a>
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
  <div class="container">
    <a href='/tourismcat/location.php' class="add btn btn-primary">New Add</a>
   
    <div class="text-center">

      <center><h2 class="list">LIST OF LOCATION TABLES IN DATABASE</h2></center>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Tour name</th>
            <th>Time Visit</th>
            
            <th>CreatedAt</th>
            <th colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
         include "dbconnection.php";
          
          $sql = "SELECT * FROM location";
          $result = $connection->query($sql);
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>{$row['location_id']}</td>
                <td>{$row['tourname']}</td> 
                <td>{$row['timeVisit']}</td>
               
                <td>{$row['createAt']}</td>
                <td>
                  <a href='/tourismcat/loedit.php?id={$row['location_id']}' class='btn btn-primary'>Edit</a>
                </td>
                <td>
                  <a href='/tourismcat/locationdelete.php?id={$row['location_id']}' class='btn btn-danger'>Delete</a>
                </td>
              </tr>
            ";
          }
          ?>
        </tbody>
      </table>
      
    </div>
  </div>
</body>
</html>
