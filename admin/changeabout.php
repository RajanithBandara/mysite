<?php
$about = $_POST['newabout'];
$filename = "../about.txt";

if (file_put_contents($filename, $about) !== false) {
    echo "<div class='alert alert-success' role='alert>About me section updated successfully!</div";
    include 'admin-panel.php';	
} else {
    echo "<div class='alert alert-success' role='alert>Failed to update about me section.</div>";
}
?>
