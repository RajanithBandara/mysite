<?php
session_start();
include '../conn/conn.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: admin-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rajanith Bandara - Admin Panel</title>
    <link rel="icon" href="../assets/my.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="../index.js"></script>
    <style>
        .card-custom {
            margin: 1rem;
            padding: 2rem;
            text-align: center;
            height: 350px; /* Set a fixed height for all cards */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            margin-bottom: 1rem;
        }
        .card-icon {
            margin-bottom: 1rem;
            font-size: 3rem;
        }
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .table-custom {
            max-width: 800px; /* Adjust width as needed */
        }
        .projects-section {
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php include '../conn/conn.php'; ?>   

<div class="main-division" style="min-height:100vh;">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Admin Panel</h2>
        
        <!-- Currently Available Projects Section -->
        <div class="projects-section">
            <h4 class="text-center">Currently Available Projects</h4>
            <table class="table table-striped table-custom">
                <thead>
                    <tr>
                        <th scope="col">Project ID</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM projects";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>{$row['ProjectID']}</th>";
                            echo "<td>{$row['ProjectName']}</td>";
                            echo "<td>{$row['ProjectDescription']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No projects found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Currently Available Qualifications Section -->
        <div class="table-container">
            <h4 class="text-center mt-5">Currently Available Qualifications</h4>
            <table class="table table-striped table-custom">
                <thead>
                    <tr>
                        <th scope="col">Qualification ID</th>
                        <th scope="col">Qualification Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM qualifications";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>{$row['QID']}</th>";
                            echo "<td>{$row['qualification']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No qualifications found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Currently Available Professional Qualifications Section -->
            <h4 class="text-center">Currently Available Professional Qualifications</h4>
            <table class="table table-striped table-custom">
                <thead>
                    <tr>
                        <th scope="col">Qualification ID</th>
                        <th scope="col">Qualification Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM proqualifications";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>{$row['ProQID']}</th>";
                            echo "<td>{$row['Proq']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No professional qualifications found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-key card-icon"></i>
                        <h5 class="card-title">Edit Password</h5>
                        <p class="card-text">Change your admin password to secure your account.</p>
                        <button class="btn btn-primary mt-auto" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#editPasswordOffcanvas">Edit Password</button>
                    </div>
                </div>
            </div>

            <!-- Add Projects Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-clipboard-check card-icon"></i>
                        <h5 class="card-title">Add/Remove Projects</h5>
                        <p class="card-text">Add or Remove projects on your portfolio.</p>
                        <button class="btn btn-primary mt-auto" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#addProjectsOffcanvas">Add Projects</button>
                    </div>
                </div>
            </div>

            <!-- Change About Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-user card-icon"></i>
                        <h5 class="card-title">Change About</h5>
                        <p class="card-text">Update the About section with new information.</p>
                        <button class="btn btn-primary mt-auto" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#changeAboutOffcanvas">Change About</button>
                    </div>
                </div>
            </div>

            <!-- Change Qualifications Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-graduation-cap card-icon"></i>
                        <h5 class="card-title">Change Qualifications</h5>
                        <p class="card-text">Edit your qualifications and achievements.</p>
                        <button class="btn btn-primary mt-auto" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#changeQualificationsOffcanvas">Change Qualifications</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Offcanvas for Edit Password -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="editPasswordOffcanvas" aria-labelledby="editPasswordLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="editPasswordLabel">Edit Password</h5>
                <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="pwdchange.php">
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="password" name="currentpwd" class="form-control" id="currentPassword" required>
                        <label for="currentPassword" class="form-label">Current Password</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>                       
                        <input type="password" name="newpwd" class="form-control" id="newPassword" required>
                        <label for="newPassword" class="form-label">New Password</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>                      
                        <input type="password" name="confirmpwd" class="form-control" id="confirmPassword" required>
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
            </div>
        </div>

        <!-- Offcanvas for Add Projects -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="addProjectsOffcanvas" aria-labelledby="addProjectsLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="addProjectsLabel">Add Projects</h5>
                <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="addprojects.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="actionToggle" class="form-label">Action</label>
                    <select name="action" id="actionToggle" class="form-select" onchange="toggleAction()">
                        <option value="add" id="addact">Add Project</option>
                        <option value="remove" id="removeact">Remove Project</option>
                    </select>
                    <script>
                        function toggleAction() {
                            var action = document.getElementById("actionToggle").value;
                            if (action === "add") {
                                document.getElementById("projectID").disabled = false;
                                document.getElementById("projectName").disabled = false;
                                document.getElementById("projectDescription").disabled = false;
                                document.getElementById("projectPhoto").disabled = false;
                            } else {
                                document.getElementById("projectID").disabled = false;
                                document.getElementById("projectName").disabled = true;
                                document.getElementById("projectDescription").disabled = true;
                                document.getElementById("projectPhoto").disabled = true;
                                document.getElementById("sbmt").innerHTML = "Remove Project";
                            }
                        }
                    </script>
                </div>  
                    <div class="form-outline mb-4" data-mdb-input-init>                       
                        <input type="text" name="projectid" class="form-control" id="projectID" required>
                        <label for="projectID" class="form-label">Project ID</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="text" name="projectname" class="form-control" id="projectName" required>
                        <label for="projectName" class="form-label">Project Name</label>
                    </div>
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <textarea name="projectdescription" class="form-control" id="projectDescription" rows="3" required></textarea>
                        <label for="projectDescription" class="form-label">Project Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="projectPhoto" class="form-label">Project Photo (Optional)</label>
                        <input type="file" name="projectphoto" class="form-control" id="projectPhoto">
                    </div>
                        <button type="submit" class="btn btn-primary" id="sbmt">Add Project</button>
                </form>
            </div>
        </div>

        <!-- Offcanvas for Change About -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="changeAboutOffcanvas" aria-labelledby="changeAboutLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="changeAboutLabel">Change About</h5>
                <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form method="POST" action="changeabout.php">
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <textarea name="newabout" class="form-control" id="newabout" rows="3" required></textarea>
                        <label for="newabout" class="form-label">New Qualification</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Change About</button>
                </form>
            </div>
        </div>

        <!-- Offcanvas for Change Qualifications -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="changeQualificationsOffcanvas" aria-labelledby="changeQualificationsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="changeQualificationsLabel">Change Qualifications</h5>
        <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form method="POST" action="changequalifications.php">
            <div class="form-outline mb-4" data-mdb-input-init>
                <input type="text" name="qualificationid" class="form-control" id="qualificationID" required>
                <label for="qualificationID" class="form-label">Qualification ID</label>
            </div>
            <div class="form-outline mb-4" data-mdb-input-init>
                <textarea name="qualificationdata" class="form-control" id="qualificationData" rows="3" required></textarea>
                <label for="qualificationData" class="form-label">Qualification Data</label>
            </div>
            <div class="mb-3">
                <label for="qualificationType" class="form-label">Qualification Type</label>
                <select name="qualificationtype" class="form-select" id="qualificationType" required>
                    <option value="professional">Professional</option>
                    <option value="educational">Educational</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Change Qualification</button>
        </form>

        <!-- Delete Qualification Section -->
        <hr>
        <h6>Delete Qualification</h6>
        <form method="POST" action="deletequalification.php">
            <div class="form-outline mb-4" data-mdb-input-init>
                <input type="text" name="qualificationid_delete" class="form-control" id="qualificationID_delete" required>
                <label for="qualificationID_delete" class="form-label">Qualification ID to Delete</label>
            </div>
            <div class="mb-3">
                <label for="qualificationType" class="form-label">Qualification Type</label>
                <select name="qualificationtype" class="form-select" id="qualificationType" required>
                    <option value="professional">Professional</option>
                    <option value="educational">Educational</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Delete Qualification</button>
        </form>
    </div>
</div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    
</div>
</body>
</html>
