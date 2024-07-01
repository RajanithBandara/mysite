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
            include 'admin-panel.php';
        } else {
            echo "<div class='alert alert-danger' role='alert'>Failed to delete project.</div>";
            include 'admin-panel.php';
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
            include 'admin-panel.php';
        } else {
            echo "<div class='alert alert-danger' role='alert'>Failed to add project.</div>";
            include 'admin-panel.php';
        }
        $stmt->close();
    }
}
?>