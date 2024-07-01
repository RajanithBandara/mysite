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
        echo "<div class='alert alert-success' role='alert>New professional qualification added successfully!</div>";
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
        echo "<div class='alert alert-success' role='alert>New educational qualification added successfully!</div>";
        include 'admin-panel.php'; // Redirect or include the admin panel page
    } else {
        echo "Error: " . $inserteduq . "<br>" . $conn->error;
    }

    $stmt->close();
} else {
    echo "<div class='alert alert-success' role='alert>Invalid qualification type.</div>";
}

$conn->close(); // Close the database connection
?>
