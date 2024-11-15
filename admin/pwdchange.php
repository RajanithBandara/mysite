<?php
    include '../conn/conn.php';
    $currentpwd = $_POST['currentpwd'];
    $newpwd = $_POST['newpwd'];
    $confirmpwd = $_POST['confirmpwd'];
    if(isset($_POST['currentpwd']) && isset($_POST['newpwd']) && isset($_POST['confirmpwd'])){
        $sql = "SELECT * FROM admindata WHERE pasword = '$currentpwd'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            if($newpwd == $confirmpwd){
                $sql = "UPDATE admindata SET pasword = '$newpwd' WHERE pasword = '$currentpwd'";
                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success' role='alert> Password changed successfully</div>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                echo "<div class='alert alert-success' role='alert>New password and confirm password do not match</div>";
            }
        }else{
            echo "<div class='alert alert-success' role='alert>Current password is incorrect</div>";
        }
    }
?>