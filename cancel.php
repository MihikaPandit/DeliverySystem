<?php

include "config.php";

$stmt = $conn->prepare("DELETE from Customer where CEmail = ?;");
$stmt->bind_param('s', $email);
if (isset($_POST['Send'])) {
    $email = $_POST['Email'];
};


if ($stmt->execute() === FALSE) {
    echo "Error: " . $stmt->error;
} else {
    if ($stmt->affected_rows > 0) {
        //echo "Record Deleted successfully";
        header("Location: YESCancel.html");
    } else {
        // echo "No record found to delete";
        header("Location: NOCancel.html");
    }
}

$stmt->close();
$conn->close();
?>
