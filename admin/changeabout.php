<?php

$about = $_POST['newabout'];
$filename = "about.text";
if (file_exists($filename)){
    file_put_contents($filename, $about);
    if (file_get_contents($filename) === $about){
        echo "About me section updated successfully!";
        include 'admin-panel.php';	
    }
    else{
        echo "Failed to update about me section.";
    }
}

?>