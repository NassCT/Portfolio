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
            <li><a href="parcours.php">Parcours scolaire</a></li>
            <li><a class="current-page" href="experience.php">Expériences professionnelles</a></li>
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
            <h3>Expériences professionnelles</h3>
            <p>
                Découvrez mon parcours professionnel et comment j'ai développé mes compétences en informatique pour
                réussir dans mes différents projets et fonctions.</p>
            <a href="#exp">
                <button>En savoir plus</button>
            </a>
        </div>
        <div class="right">
            <img src="assets/img/exp.png">
        </div>
    </div>

    </div>

    <div class="exp" id="exp">
        <h5>
            Expériences professionnelles</h5>
        <h3>Entreprises</h3>

        <main class="page-content">
            <div class="card">
                <div class="content">
                    <h2 class="title">Eurodeal</h2>
                    <p class="copy">Stage effectué durant ma première année de BAC PRO SN en tant que technicien
                        support. </p>
                    <a href="https://eurodeal.fr/content/6-qui-sommes-nous">
                        <button class="btn">En savoir plus</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">Mobile Phone</h2>
                    <p class="copy">Stage effectué durant ma deuxième année de BAC PRO SN en tant que technicien
                        support.</p>
                    <a href="https://www.pagesjaunes.fr/pros/61325862">
                        <button class="btn">En savoir plus</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">Filordi</h2>
                    <p class="copy">Stage effectué durant ma première année de BTS SIO en tant que développeur web &
                        technicien
                        support.</p>
                    <a href="https://www.pagesjaunes.fr/pros/50267446">
                        <button class="btn">En savoir plus</button>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">Inkkube</h2>
                    <p class="copy">Stage effectué durant ma deuxième année de BTS SIO en tant que développeur web.</p>
                    <a href="https://github.com/Inkkube">
                        <button class="btn">En savoir plus</button>
                    </a>
                </div>
            </div>


        </main>

        <style>
            @import url("https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap");


            * {
                box-sizing: border-box;
                font-family: "Roboto", sans-serif;
            }
        </style>

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