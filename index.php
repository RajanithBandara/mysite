<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" id="light-mode">
    <link rel="stylesheet" href="style-dark.css" id="dark-mode">
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="main-style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rajanith Bandara</title>
    <link rel="icon" href="assets/my.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <script src="index.js"></script>
    <style>

    </style>
    <script type="text/javascript"> //<![CDATA[
    var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
    document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
    //]]></script>
    <script language="JavaScript" type="text/javascript">
    TrustLogo("https://www.positivessl.com/images/seals/positivessl_trust_seal_lg_222x54.png", "POSDV", "none");
    </script>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<div class="main-division">
    <?php include 'header/header.php'; ?>
      
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const mainDivision = document.querySelector('.main-division');
    mainDivision.classList.add('loaded');
    // Your animation or visibility logic here
});
    </script>
    <section class="content-section animate-zoom-in" data-mdb-offset>
        <div>
            <img src="assets/my.jpg" alt="Rajanith">
        </div>
        <div class="info">
            <h2 class="h2-responsive font-weight-bold text-center">Rajanith Bandara</h2>
            <p>Highly motivated IT professional specializing in crafting cutting-edge software solutions. Proven expertise in Flutter, C#, and .NET application development. Demonstrated ability to lead teams and drive projects to successful completion</p>
            <button type="button"
                    style="background-color: rgb(31, 137, 31); box-shadow: 0px 1px 1px 1px rgba(44, 181, 44, 0.137);border-radius: 35px;"
                    class="btn btn-primary" data-mdb-toggle="collapse" data-mdb-target="#qualificationsAccordion">
                Click here to view my qualifications
            </button>
        </div>
    </section>

    <div class="accordian-division">
        <div class="collapse mt-3" id="qualificationsAccordion">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Undergraduate
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>BSc(hons) Computer Science</li>
                                <li>BSc Applied Sciences</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Professional Qualifications
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                         data-mdb-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul>
                                <li>Qualified web developer</li>
                                <li>Leadership skills on the best</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="cards-section" id="cards-section" data-mdb-offset>
        <div class="card card-custom out-view animate-zoom-in">
            <div class="card-body">
                <h5 class="card-title">Graduation Year</h5>
                <p class="card-text" id="countdown">Counting...</p>
            </div>
        </div>
        <div class="card card-custom out-view animate-zoom-in">
            <div class="card-body">
                <h5 class="card-title">Current Projects</h5>
                <p class="card-text" id="project-count">3 Projects</p>
            </div>
        </div>
        <div class="card card-custom out-view animate-zoom-in">
            <div class="card-body">
                <h5 class="card-title">LinkedIn</h5>
                <a href="https://www.linkedin.com" class="card-link"><i class="fab fa-linkedin"></i> LinkedIn Profile</a>
            </div>
        </div>
    </section>
    <section class="cv-section animate-zoom-in" data-mdb-offset>
        <div class="cv-content">
            <h2 class="h2-responsive font-weight-bold text-center">Download My CV Here</h2>
            <button type="button" 
                    class="btn btn-success btn-rounded" data-mdb-ripple-init 
                    style="background-color: rgb(31, 137, 31); box-shadow: 0px 1px 1px 1px rgba(44, 181, 44, 0.137);border-radius: 35px;"
                    onclick="window.location.href='files/Profile.pdf'">
                <i class="fas fa-download"></i> Download CV
            </button>
        </div>
    </section>
    

    
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mainDivision = document.querySelector('.main-division');
        mainDivision.classList.add('loaded');

        function countdown() {
            const targetDate = new Date('2026-01-01').getTime();
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('countdown').innerText = `${days}d ${hours}h ${minutes}m ${seconds}s`;

            if (distance < 0) {
                document.getElementById('countdown').innerText = 'Graduated!';
            }
        }

        setInterval(countdown, 1000);

        function projectcountdown() {
            let count = 0;
            const projectCount = 3;
            const projectInterval = setInterval(() => {
                if (count < projectCount) {
                    count++;
                    document.getElementById('project-count').innerText = `${count} Projects`;
                } else {
                    clearInterval(projectInterval);
                }
            }, 1000);
        }

        projectcountdown();

        function handleScroll() {
            const cards = document.querySelectorAll('.card-custom');
            const triggerBottom = window.innerHeight / 5 * 4;

            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;

                if (cardTop < triggerBottom) {
                    card.classList.add('in-view');
                    card.classList.remove('out-view');
                } else {
                    card.classList.remove('in-view');
                    card.classList.add('out-view');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('load', handleScroll);
        handleScroll();
    });
</script>
<?php include 'footer/footer.php'; ?>
</body>
</html>
