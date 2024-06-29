<?php
session_start();
include '../conn/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT pasword FROM admindata WHERE username = ?");
    $stmt->bind_param("s", $username);

    // Execute and fetch
    $stmt->execute();
    $stmt->bind_result($db_password);
    $stmt->fetch();
    $stmt->close();

    // Verify password
    if ($db_password && $password === $db_password) {
        $_SESSION['loggedin'] = true;
        header("Location: admin-panel.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- MDBootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css">
    <style>
        body, html {
            height: 100%;
        }
        .login-container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="login-form">
            <h2 class="text-center mb-4">Admin Login</h2>
            <form method="post" action="">
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="text" id="username" name="username" class="form-control" required />
                    <label class="form-label" for="username">Username</label>
                </div>
                <div class="form-outline mb-4" data-mdb-input-init>
                    <input type="password" id="password" name="password" class="form-control" required />
                    <label class="form-label" for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
            </form>
            <?php if (isset($error)) echo '<div class="alert alert-danger mt-3">' . $error . '</div>'; ?>
        </div>
    </div>
    <!-- MDBootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</body>
</html>
