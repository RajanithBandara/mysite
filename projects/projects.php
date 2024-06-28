<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css" id="light-mode">
    <link rel="stylesheet" href="../style-dark.css" id="dark-mode">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="main-style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rajanith Bandara</title>
    <link rel="icon" href="../assets/my.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="../index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <style>
        .project-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            opacity: 0;
            transform: scale(0.8);
            transition: transform 0.5s, opacity 0.5s;
        }

        .project-item.in-view {
            opacity: 1;
            transform: scale(1);
        }

        .project-img {
            max-width: 150px;
            margin-bottom: 10px;
        }

        .project-description {
            text-align: center;
        }

        @media (min-width: 768px) {
            .project-item {
                flex-direction: row;
                align-items: flex-start;
            }

            .project-img {
                margin-right: 20px;
                margin-bottom: 0;
            }

            .project-description {
                text-align: left;
            }
        }
    </style>
</head>
<body>
<div class="main-division">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <?php include '../header/header.php';?>
    <?php include '../conn/conn.php';?>

    <div class="container mt-5">
        <section class="row justify-content-center">
        <?php
        // SQL query to fetch all projects
        $sql = "SELECT * FROM projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                $projectId = $row["ProjectID"];
                $projectName = $row["ProjectName"];
                $projectDescription = $row["ProjectDescription"];
        ?>
                <!-- Display project item -->
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="project-item">
                        <!-- Replace with actual image path -->
                        <img src="assets/project<?php echo $projectId; ?>.jpg" class="project-img img-fluid" alt="<?php echo $projectName; ?>">
                        <div class="project-description">
                            <h5 class="project-title"><?php echo $projectName; ?></h5>
                            <p class="project-text"><?php echo $projectDescription; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "No projects found.";
        }
        $conn->close(); // Close MySQL connection
        ?>
        </section>
    </div>
</div>

    <?php include '../footer/footer.php';?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const projectItems = document.querySelectorAll('.project-item');
            projectItems.forEach((item, index) => {
                setTimeout(() => {
                    item.classList.add('in-view');
                }, index * 300); // Adjust the delay as needed
            });
        });
    </script>
</body>
</html>
