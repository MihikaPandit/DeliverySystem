<?php

include "config.php";

$stmt = $conn->prepare("INSERT INTO HomeCook (HName,HPhNo,HStreet,HArea,HCuisine,HPreference,HWorkingDays,HCapacity,HWorkingHrs)
VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param('sissssiii', $name, $phno,$streetAddr,$area,$cuisine,$pref,$wDays,$capacity,$wHrs);
if (isset($_POST['Send'])) {
    $name = $_POST['Name'];
    $phno = $_POST['PhoneNo'];
    $streetAddr = $_POST['Address'];
    $area = $_POST['Area'];
    $cuisine = $_POST['Cusine'];
    $pref = $_POST['Preference'];
    $wDays = $_POST['workingDays'];
    $capacity = $_POST['Capacity'];
    $wHrs = $_POST['workingHrs'];
};


if ($stmt->execute() === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $stmt . "<br>" . $conn->error;
}
$stmt->close();
$conn->close();
?>
<div class="cancel">
<br><br>
    <h2>Registration Successful </h2>
    <br><br>
   <h3>Further Details will be conveyed via registered Mobile Number</h3>
</div>

