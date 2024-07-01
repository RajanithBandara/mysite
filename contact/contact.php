<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" id="light-mode">
    <link rel="stylesheet" href="../style-dark.css" id="dark-mode">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="main-style.css">
    <style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="main-division">
        <?php include '../header/header.php'; ?>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <h5 class="card-title text-center mb-4">Contact Me</h5>
                        <form method="POST">
                            <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control" required />
                                <label class="form-label" for="name">Name</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control" required />
                                <label class="form-label" for="email">Email</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" name="topic" id="topic" class="form-control" required />
                                <label class="form-label" for="topic">Topic</label>
                            </div>
                            <div class="form-outline mb-4">
                                <textarea name="message" id="message" class="form-control" rows="4" required></textarea>
                                <label class="form-label" for="message">Message</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-rounded d-block mx-auto" data-mdb-ripple-init>Send</button>
                        </form>
                        <?php
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $topic = $_POST['topic'];
                            $message = $_POST['message'];

                        ?>
                        <script>
                            const name = "<?php echo $name; ?>";
                            const email = "<?php echo $email; ?>";
                            const topic = "<?php echo $topic; ?>";
                            const message = "<?php echo $message; ?>";

                            emailjs.send("service_ozafhnt","template_c5hzo9h",{
                            topic: topic,
                            from_name: name,
                            message: message,
                            reply_to: email,
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <?php include '../footer/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="../index.js"></script>
</body>
</html>
