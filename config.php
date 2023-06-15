<html>
<head>
   </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">   
</head>
<div class="top-container">
      <a class="header-link" href="aboutus.html">About Us</a>
      <a class="header-link" href="index.html">Home</a> 
      <a class="header-link" href="Homecook.html">Register as Home Cook</a>
      <a class="header-link" href="customer.html">Register as Customer</a>
   </div>
 </html>
<div class = aish>   
<?php
//object-oriented
$servername = "localhost";
$username = "root";
$password = "Mysql@123";
$dbname = "miniproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
}

?>