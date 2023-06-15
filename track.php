<html>
<head>
   </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="php_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet">   
</head>
<div class="top-container">
      <a class="header-link" href="https://mumbaidabbawala.in/about-us/">About Us</a>
      <a class="header-link" href="index.html">Home</a> 
      <a class="header-link" href="Homecook.html">Register as Home Cook</a>
      <a class="header-link" href="customer.html">Register as Customer</a>
   </div>
 </html>
<div class = ser>   

<style>
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 20px;
}

.item {
  background-color: #f0f0f0;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 300px;
}
.item h4 {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 10px;
  color: #077f94;
  line-height: 4;
  letter-spacing: 6px
}
.item p {
  font-size: 16px;
  line-height: 1.3;
  margin-bottom: 10px;
}
</style>

<div class="container">
<?php
include "config.php";

$stmt = $conn->prepare("SELECT DId, DWId,Cname, CEmail, HPhNo, HName,CArea,HArea
from Delivery natural join HomeCook natural join Customer where DId = ?;");
$stmt->bind_param('i', $dabbaID);
if (isset($_POST['Send'])) {
    $dabbaID = $_POST['DId'];
};

if ($stmt->execute() === FALSE) {
    echo "Error: " . $stmt . "<br>" . $conn->error;
}

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<h4>Dabba ID: " . $row["DId"] . "</h4>";
        echo "<p><strong>DabbaWala ID:</strong> " . $row["DWId"] . "</p>";
        echo "<p><strong>Customer Name:</strong> " . $row["Cname"] . "</p>";
        echo "<p><strong>Customer Email:</strong> " . $row["CEmail"] . "</p>";
        echo "<p><strong>Homecook Phone No.:</strong> " . $row["HPhNo"] . "</p>";
        echo "<p><strong>Homecook Name:</strong> " . $row["HName"] . "</p>";
        echo "<p><strong>To:</strong> " . $row["CArea"] . "</p>";
        echo "<p><strong>From:</strong> " . $row["HArea"] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Dabba Id Not Found</p>";
}

$stmt->close();
$conn->close();
?>
</div>


</div>
<img src="Images\DabbaMan.png" class="man" style="left: 800px; top:240px;">
