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
                    echo "Password changed successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }else{
                echo "New password and confirm password do not match";
            }
        }else{
            echo "Current password is incorrect";
        }
    }
?>