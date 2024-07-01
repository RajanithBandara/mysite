<?php
$about = $_POST['newabout'];
$filename = "../about.txt";

if (file_put_contents($filename, $about) !== false) {
    echo "About me section updated successfully!";
    include 'admin-panel.php';	
} else {
    echo "Failed to update about me section.";
}
?>
