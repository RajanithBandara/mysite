<?php
include '../conn/conn.php'; // Include your database connection

$qualificationtype = $_POST['qualificationtype'];
$qualificationid = $_POST['qualificationid'];
$qualification = $_POST['qualificationdata'];

if ($qualificationtype == "professional") {
    $insertproq = "INSERT INTO proqualifications (ProQID, Proq) VALUES (?, ?)";
    $stmt = $conn->prepare($insertproq);
    $stmt->bind_param("is", $qualificationid, $qualification);

    if ($stmt->execute()) {
        echo "New professional qualification added successfully!";
        include 'admin-panel.php'; // Redirect or include the admin panel page
    } else {
        echo "Error: " . $insertproq . "<br>" . $conn->error;
    }

    $stmt->close();
} elseif ($qualificationtype == "educational") {
    $inserteduq = "INSERT INTO qualifications (QID, qualification) VALUES (?, ?)";
    $stmt = $conn->prepare($inserteduq);
    $stmt->bind_param("is", $qualificationid, $qualification);

    if ($stmt->execute()) {
        echo "New educational qualification added successfully!";
        include 'admin-panel.php'; // Redirect or include the admin panel page
    } else {
        echo "Error: " . $inserteduq . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid qualification type.";
}

$conn->close(); // Close the database connection
?>
