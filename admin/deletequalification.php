<?php
include '../conn/conn.php';
$qid = $_POST['qualificationid_delete'];
$qualificationtype = $_POST['qualificationtype'];
if ($qualificationtype == "professional"){
    $delsql1 = "DELETE FROM proqualifications WHERE ProQID = $qid";
    if ($conn->query($delsql1) === TRUE) {
        echo "<div class='alert alert-success' role='alert>Professional qualification deleted successfully!</div>";
        include 'admin-panel.php';
    } else {
        echo "Error: " . $delsql1 . "<br>" . $conn->error;
    }
} elseif ($qualificationtype == "educational"){
    $delsql2 = "DELETE FROM qualifications WHERE QID = $qid";
    if ($conn->query($delsql2) === TRUE) {
        echo "<div class='alert alert-success' role='alert>Educational qualification deleted successfully!</div>";
        include 'admin-panel.php';
    } else {
        echo "Error: " . $delsql2 . "<br>" . $conn->error;
    }
} else {
    echo "<div class='alert alert-success' role='alert>Invalid qualification type.</div>";
}
?>