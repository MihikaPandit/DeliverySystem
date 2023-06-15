<?php

include "config.php";

$stmt = $conn->prepare("SELECT * FROM customer WHERE CEmail = ?");
$stmt->bind_param("s", $email);
if (isset($_POST['Send'])) {
    $email = $_POST['Email'];
};
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<div class='cancel'><h2>Email ID already registered</h2></div>";
} else {
    $stmt = $conn->prepare("INSERT INTO Customer VALUES (?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssissisis', $email,$name,$phno,$streetAddr,$area,$days,$sub,$aad,$pref);
    if (isset($_POST['Send'])) {
        $email = $_POST['Email'];
        $name = $_POST['Name'];
        $phno = $_POST['PhoneNo'];
        $streetAddr = $_POST['Address'];
        $area = $_POST['Area'];
        $days = $_POST['Days'];
        $sub = $_POST['Subscription'];
        $aad = $_POST['Aadhar'];
        $pref = $_POST['Preference']; 
    };

    if ($stmt->execute()=== FALSE) {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    } else {
        header("Location: inserted.html");
    }
}

$stmt->close();
$conn->close();
?>