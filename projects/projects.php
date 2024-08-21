<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projects - Rajanith Bandara</title>
    <link rel="icon" href="assets/my.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDBootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <style>
        .card-custom {
            opacity: 0;
            transform: scale(0.8);
            transition: transform 0.5s, opacity 0.5s;
        }

        .card-custom.in-view {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <?php include 'conn/conn.php';?>

    <header class="header" data-mdb-offset>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rajanith Bandara</a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <li class="nav-item align-items-center d-flex">
                        <i class="fas fa-sun"></i>
                        <!-- Default switch -->
                        <div class="ms-2 form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="themeSwitch" />
                        </div>
                        <i class="fas fa-moon"></i>
                    </li>
                </div>
            </div>
        </nav>
    </header>

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
                <!-- Display project card -->
                <div class="col-lg-6 col-md-8 mb-4">
                    <div class="card card-custom">
                        <div class="card-body d-flex flex-row align-items-center">
                            <!-- Replace with actual image path -->
                            <img src="assets/project<?php echo $projectId; ?>.jpg" class="img-fluid" alt="<?php echo $projectName; ?>" style="max-width: 150px; margin-right: 20px;">
                            <div>
                                <h5 class="card-title"><?php echo $projectName; ?></h5>
                                <p class="card-text"><?php echo $projectDescription; ?></p>
                            </div>
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

    <footer class="footer-section" data-mdb-offset>
        <div class="footer-content">
            <div class="footer-info">
                <h5>Connect with me</h5>
                <a href="https://www.linkedin.com" class="footer-link"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="https://github.com" class="footer-link"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://twitter.com" class="footer-link"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
            <div class="footer-info">
                <h5>Quick Links</h5>
                <a href="#projects" class="footer-link">Projects</a>
                <a href="#about" class="footer-link">About</a>
                <a href="#contact" class="footer-link">Contact</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Your Name. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card-custom');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('in-view');
                }, index * 300); // Adjust the delay as needed
            });
        });
    </script>
</body>
</html>
