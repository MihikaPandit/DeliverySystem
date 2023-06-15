
<?php

include "config.php";

$stmt = $conn->prepare("UPDATE Customer set CArea = ? , CStreet = ? where CEmail = ?;");
$stmt->bind_param('sss', $newArea,$newStreet,$email);
if (isset($_POST['Send'])) {
    $newArea = $_POST['Area'];
    $newStreet = $_POST['Address'];
    $email = $_POST['Email'];
};



if ($stmt->execute() === FALSE) {
    echo "Error: " . $stmt->error;
} else {
    if ($stmt->affected_rows > 0) {
        //echo "Record Deleted successfully";
        header("Location: YESUpdate.html");
    } else {
        // echo "No record found to delete";
        header("Location: NOUpdate.html");
    }
}

$stmt->close();
$conn->close();
?>