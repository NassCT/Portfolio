<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js">
    <link rel="stylesheet" href="assets\js\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/img/logo.png">
    <title>Portfolio - cnassim.com</title>
    <style>
        * {
            overflow-x: hidden;
        }
    </style>
</head>

<body>

    <div class="overlay" id="overlay" style="display:none;">
        <div class="dialog-box">
            <button id="close-button"
                style="color: #fff;cursor: pointer;background-color: #5e3bee;padding: 14px 24px;border: 1px solid transparent;border-radius: 5px;position: absolute;margin: 30px;font-size: 17px;">Fermer</button>
            <iframe src="contact.php"></iframe>
        </div>
    </div>

    <nav>
        <div class="logo">
            <img src="assets/img/logo.png">
            <a href="/" target="_blank">
                Portfolio
            </a>
        </div>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a class="current-page" href="parcours.php">Parcours scolaire</a></li>
            <li><a href="experience.php">Expériences professionnelles</a></li>
            <li><a href="situation.php">Situations professionnelles</a></li>
            <li><a href="veille.php">Veille technologique</a></li>
            <li><a href="certification.php">Certification</a></li>
        </ul>

        <button onclick="openContactDialog()">Contact</button>
        <button id="menuButton" onclick="openMenu()">
            <i class='bx bx-menu'></i>
        </button>

    </nav>

    <div class="main" id="main">
        <div class="left">
            <h3>Parcours scolaire</h3>

            <p>
                Découvrez mon parcours professionnel, marqué par un développement continu en informatique à travers
                divers projets, m'aidant à réussir grâce à mon adaptabilité et ma résolution efficace des défis. </p>
            <a href="#exp">
                <button>En savoir plus</button>
            </a>

        </div>
        <div class="right">
            <img src="assets/img/parcours.png">
        </div>
    </div>

    <div class="exp" id="exp">

        <h5>Parcours scolaire</h5>
        <h3>Ecoles</h3>

        <section class="timeline" id="timeline">
            <div class="container">
                <div class="timeline-item">
                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="cards-img">
                            <img class="cards-img" src="assets/img/ljf.png" width="402px">
                            <a href="https://jacques-de-flesselles.ent.auvergnerhonealpes.fr">
                                <h2>Lycée Jacques de Flesselles <i class='bx bx-globe' style='color:#5E3BEE'></i></h2>
                            </a>
                        </div>
                        <div class="date">2019 - 2022</div>
                        <p class="desc-time">
                            Bac pro SN (Systèmes Numériques)</br>Option RISC (Réseaux Informatiques et Systèmes
                            Communicants)
                        </p>

                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInRight">
                        <div class="cards-img">
                            <img class="cards-img" src="assets/img/ljb.png" width="402px">
                            <a href="https://lyc-jacques-brel.ent.auvergnerhonealpes.fr">
                                <h2>Lycée Jacques brel<i class='bx bx-globe' style='color:#5E3BEE'></i></h2>
                            </a>
                        </div>
                        <div class="date">2022 - 2024</div>
                        <p class="desc-time">
                            BTS SIO (Services Informatiques aux Organisations)</br>Option SLAM (Solutions Logicielles et
                            Applications
                            Métiers)
                        </p>

                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>

                    <div class="timeline-content timeline-card js--fadeInLeft">
                        <div class="cards-img">
                            <img class="cards-img" src="assets/img/alternance.png" width="402px">
                            <a href="">
                                <h2>Alternance à venir</h2>
                            </a>
                        </div>
                        <div class="date">2022 - 2024</div>
                        <p class="desc-time">
                            Poursuite vers le Développement : Projet pour l'Alternance en Bac +3
                        </p>

                    </div>
                </div>
            </div>
    </div>
    </section>

    <style>
        .cards-img {
            min-width: 513px;
            min-height: 321px;
        }

        .ljf {
            max-height: 321px;
        }

        .timeline {
            position: relative;
        }


        .desc-time {
            padding: 0px 0px 20px 20px;
        }

        .timeline::before {
            content: "";
            background: #c5cae9;
            width: 5px;
            height: 95%;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            width: 100%;
            margin-bottom: 70px;
            margin-top: 20px;


        }

        .timeline-item:nth-child(even) .timeline-content {
            float: right;
            padding: 40px 30px 10px 30px;
        }

        .timeline-item:nth-child(even) .timeline-content .date {
            right: auto;
            left: 0;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            content: "";
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            left: -15px;
            border-width: 10px 15px 10px 0;
            border-color: transparent #f5f5f5 transparent transparent;
        }

        .timeline-item::after {
            content: "";
            display: block;
            clear: both;
        }

        .timeline-content {
            position: relative;
            width: 45%;
            padding: 10px 30px;
            border-radius: 4px;
            background: #f5f5f5;
            box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
        }

        .timeline-content::after {
            content: "";
            position: absolute;
            border-style: solid;
            width: 0;
            height: 0;
            top: 30px;
            right: -15px;
            border-width: 10px 0 10px 15px;
            border-color: transparent transparent transparent #f5f5f5;
        }

        .timeline-img {
            width: 30px;
            height: 30px;
            background: #7051f0;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            margin-top: 25px;
            margin-left: -15px;
        }


        .timeline-card {
            padding: 0 !important;
            min-width: 513px;
            min-height: 321px;
        }

        .timeline-card a {
            margin-left: 20px;
        }



        .timeline-img-header {
            height: 200px;
            position: relative;
            margin-bottom: 20px;
        }

        .timeline-img-header h2 {
            color: #ffffff;
            position: absolute;
            bottom: 5px;
            left: 20px;
        }

        blockquote {
            margin-top: 30px;
            color: #757575;
            border-left-color: #7051f0;
            padding: 0 20px;
        }

        .date {
            background: #202020;
            display: inline-block;
            color: #ffffff;
            padding: 10px;
            position: absolute;
            top: 0;
            right: 0;
        }

        @media screen and (max-width: 768px) {
            .timeline::before {
                left: 50px;
            }

            .timeline .timeline-img {
                left: 50px;
            }

            .timeline .timeline-content {
                max-width: 100%;
                width: auto;
                margin-left: 70px;
            }

            .timeline .timeline-item:nth-child(even) .timeline-content {
                float: none;
            }

            .timeline .timeline-item:nth-child(odd) .timeline-content::after {
                content: "";
                position: absolute;
                border-style: solid;
                width: 0;
                height: 0;
                top: 30px;
                left: -15px;
                border-width: 10px 15px 10px 0;
                border-color: transparent #f5f5f5 transparent transparent;
            }
        }
    </style>

    <footer>
        <div class="top">
            <div class="logo">
                <img src="assets/img/logo.png">
                <a href="">Portfolio</a>
            </div>
            <ul>
                <li><a href="index.php">Accueil</a></li>
            </ul>
            <div class="social-links">
                <a href="https://www.github.com/NassCT"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/nassim-chantout-990aa7260/"><i
                        class='bx bxl-linkedin-square'></i></a>
            </div>
        </div>
        <div class="separator"></div>
        <div class="bottom">
            <p>
                Made With ❤️ By NassCT
            </p>
            <div class="links">
                <a href="#"> Politique de confidentialité </a>
                <a href="#"> Conditions d'utilisation </a>
                <a href="#"> Polique cookies </a>

            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typedElement = document.querySelector('#typed');
        var strings = JSON.parse(typedElement.dataset.strings);

        var typed = new Typed('#typed', {
            strings: strings,
            typeSpeed: 80,
        });
    </script>
</body>

</html>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
</script>