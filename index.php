<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/img/logo.png">
    <title>Portfolio - cnassim.com</title>
</head>

<body>

    <div class="overlay" id="overlay">
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
            <li><a class="current-page" href="index.php">Accueil</a></li>
            <li><a href="parcours.php">Parcours scolaire</a></li>
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
            <h5>Nassim Chantout</h5>
            <h3>Je suis <span id="typed" data-strings='["designer", "developer", "étudiant"]'></span></h3>
            <p>
                Bienvenue sur mon portfolio de développement. Découvrez mes travaux et compétences dans le domaine.
            </p>
            <a href="#about">
                <button>En savoir plus</button>
            </a>

        </div>
        <div class="right">
            <img src="assets/img/header-img.png">
        </div>
    </div>

    <div class="about" id="about">
        <div class="left">
            <img src="assets/img/about-img2.png">
        </div>
        <div class="right">
            <h5> À propos</h5>
            <h3> À propos de moi </h3>
            <p>

                Nassim Chantout, 20 ans, étudiant en BTS SIO option SLAM à Lyon, passionné de développement logiciel et
                technologies de l'information. Titulaire d'un bac pro en Systèmes Numériques.
            </p>
            <p>
                Curieux et motivé, cherche à contribuer au monde de la technologie tout en continuant à apprendre et
                évoluer.
            </p>
            <a href="/cv.pdf">
                <button class="tabcomp">Voir le CV</button>
            </a>    
            <a href="/tab_competences.pdf">
                <button class="tabcomp">Voir le tableau des compétences</button>
            </a>



        </div>
    </div>

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
            backSpeed: 60,
            cursorChar: '_',
            shuffle: true,
            smartBackspace: false,
            loop: true
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