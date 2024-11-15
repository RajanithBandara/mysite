<?php
include '../conn/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $projectid = $_POST['projectid'];
    $action = $_POST['action'];

    if ($action == 'remove') {
        $sql2 = "DELETE FROM projects WHERE projectid = ?";
        $stmt = $conn->prepare($sql2);
        $stmt->bind_param("i", $projectid);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<div class='alert alert-success' role='alert'>Project deleted successfully!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Failed to delete project.</div>";
        }
        $stmt->close();
    } elseif ($action == 'add') {
        $projectname = $_POST['projectname'];
        $projectdesc = $_POST['projectdescription'];
        $stmt = $conn->prepare("INSERT INTO projects (projectid, projectname, projectdescription) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $projectid, $projectname, $projectdesc);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<div class='alert alert-success' role='alert'>Project added successfully!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Failed to add project.</div>";
        }
        $stmt->close();

        // Handle photo upload
        if (isset($_FILES['projectphoto']) && $_FILES['projectphoto']['error'] == UPLOAD_ERR_OK) {
            $photofile = $_FILES['projectphoto'];
            $photoextension = pathinfo($photofile['name'], PATHINFO_EXTENSION);
            $photodir = '../assets/projectphoto/';
            $photopath = "{$photodir}{$projectid}.{$photoextension}";

            if (!file_exists($photodir)) {
                mkdir($photodir, 0777, true);
            }

            if (move_uploaded_file($photofile['tmp_name'], $photopath)) {
                echo "<div class='alert alert-success' role='alert'>Project photo uploaded successfully!</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Failed to upload project photo.</div>";
            }
        }
    }

    include 'admin-panel.php';
}

$conn->close(); // Close MySQL connection
?>
