<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css" id="light-mode">
    <link rel="stylesheet" href="../style-dark.css" id="dark-mode">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main-style.css">
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
    <link rel="stylesheet" href="css/mdb.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="../index.js"></script>
    <style>
        /* Custom CSS for image */
        .rounded-circle {
            max-width: 100%;
            height: auto;
            max-height: 300px; /* Limit the maximum height of the image */
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .zoom-in {
            animation: zoomIn 0.75s ease-out;
            opacity: 1;
        }
        @keyframes zoomIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <!-- Include your header component here -->
</header>

<!-- Main Content -->
<main>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 zoom-in">
                    <img src="../assets/my.jpg" class="img-fluid rounded-circle" alt="My Photo" >
                </div>
                <div class="col-lg-6 zoom-in">
                    <h2 class="fw-bold mb-4">About Me</h2>
                    <p class="lead">
                        Highly motivated IT professional specializing in crafting cutting-edge software solutions.
                        Proven expertise in Flutter, C#, and .NET application development. Demonstrated ability to
                        lead teams and drive projects to successful completion.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Sections with MDBootstrap components -->
    <!-- Example: -->
    <!-- <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-4 text-center">Experience</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card zoom-in">
                        <div class="card-body">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Description of job responsibilities and achievements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card zoom-in">
                        <div class="card-body">
                            <h5 class="card-title">Job Title</h5>
                            <p class="card-text">Description of job responsibilities and achievements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</main>

<!-- Footer -->
<footer class="bg-dark text-light py-4">
    <!-- Include your footer component here -->
</footer>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- MDBootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const zoomInElements = document.querySelectorAll('.zoom-in');
        zoomInElements.forEach(element => {
            element.classList.add('animate__animated', 'animate__zoomIn');
        });
    });
</script>
</body>
</html>
