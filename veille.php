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
            <iframe src="contact.php"></iframe>ppp
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
            <li><a href="experience.php">Expériences professionnelles</a></li>
            <li><a href="situation.php">Situations professionnelles</a></li>
            <li><a class="current-page" href="veille.php">Veille technologique</a></li>
            <li><a href="certification.php">Certification</a></li>
        </ul>

        <button onclick="openContactDialog()">Contact</button>
        <button id="menuButton" onclick="openMenu()">
            <i class='bx bx-menu'></i>
        </button>

    </nav>

    <div class="main" id="main">
        <div class="left">
            <h3>Veille technologique</h3>
            <p>
                Restez informé sur les dernières avancées en matière de <b>robotique</b> dabs le monde de l'industrie.
                Découvrez les tendances technologiques émergentes. </p>
            <a href="#veille">
                <button>En savoir plus</button>
            </a>
        </div>
        <div class="right">
            <img src="assets/img/veille.png">
        </div>
    </div>

    <div class="veille" id="veille">
        <h5>Veilles technologique</h5>
        <h3>Articles</h3>
        <div class="customers">

            <h1>
                Les progrès de la robotique ont t-il changé le fonctionnement de l'industrie ?
            </h1>

            <div class="item">
                <img class="imgveille" src="assets/img/veille_septembre.png">
                <div class="catveillebox">
                    <div class="catveille">Industrie</div>
                </div>
                <p class="imgtexte">
                    "Des chercheurs du MIT ont développé une méthode d'apprentissage automatique, appelée
                    Diffusion-CCSP, pour améliorer l'emballage robotique en utilisant l'intelligence artificielle
                    générative. Cette approche combine des modèles d'apprentissage automatique représentant différents
                    types de contraintes pour résoudre efficacement des problèmes d'emballage complexes. <br><br>
                    Les modèles
                    génératifs travaillent ensemble pour trouver des solutions en tenant compte de toutes les
                    contraintes simultanément, surpassant les méthodes traditionnelles. <br><br> Cette méthode a été
                    testée
                    avec
                    succès sur des problèmes d'emballage difficiles, dépassant d'autres techniques dans la génération de
                    solutions efficaces, stables et sans collision. Les chercheurs envisagent d'étendre l'application de
                    leur méthode à des situations plus complexes et différents domaines. La recherche a été financée par
                    plusieurs organisations, dont la National Science Foundation et le MIT-IBM Watson AI Lab."
                </p>
                <div class="user">
                    <img src="assets/img/veille_septembre_l.png"
                        style="filter: invert(1);background: white;padding: 5px;">
                    <div class="info">
                        <a
                            href="https://issues.fr/perfection-de-lemballage-le-mit-utilise-lia-generative-pour-remodeler-la-precision-robotique/">
                            <h4>Issues.fr <i class='bx bx-globe' style='color:#5E3BEE'></i></h4>
                            <p>Ecrit par Issues</p>
                            <h5>Septembre</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item" style="height: 537px;">
                <img class="imgveille" src="assets/img/veille_octobre.png">
                <div class="catveillebox">
                    <div class="catveille">Robot IA</div>
                </div>
                <p class="imgtexte">
                    "Dictador, une marque colombienne de rhum, a créé l'histoire en nommant Mika, un robot piloté par
                    l'IA, en tant que PDG pour aider l'entreprise dans ses ambitions mondiales. Développé par Hanson
                    Robotics, le même créateur de Sophia, Mika assure être disponible 24h/24, 7j/7, pour des décisions
                    stratégiques. Malgré ses responsabilités, les décisions majeures chez Dictador restent aux mains des
                    dirigeants humains. Certains voient cette nomination comme une opération marketing plutôt qu'une
                    réelle révolution dans la gouvernance d'entreprise."
                </p>
                <div class="user">
                    <img src="assets/img/veille_octobre_l.png">
                    <div class="info">
                        <a href="https://infos.rtl.lu/photos-et-videos/deja-demain/a/2136720.html">
                            <h4>RTL Infos <i class='bx bx-globe' style='color:#5E3BEE'></i></h4>
                            <p>Reuteurs</p>
                            <h5>Octobre</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item" style="height: 580px;">
                <img class="imgveille" src="assets/img/veille_novembre.png">
                <div class="catveillebox">
                    <div class="catveille">Robot IA</div>
                </div>
                <p class="imgtexte">
                    "Yannick Picard a développé le robot Glados, qui intègre une intelligence artificielle, et sera une
                    vedette à la deuxième édition du Futura Network. Initialement conçu comme un programme domotique
                    pendant le confinement en 2020, Glados a évolué pour devenir un robot interactif pouvant répondre à
                    des questions grâce à l'IA. Picard envisage son intégration dans les foyers, les musées et divers
                    établissements. Il travaille également sur un drone autonome pour la sécurité des maisons, utilisant
                    la reconnaissance faciale par l'IA de Glados. Picard souligne l'importance de surveiller le
                    développement de l'IA, affirmant que celle-ci ne remplacera jamais l'humanité."
                </p>
                <div class="user">
                    <img src="assets/img/veille_novembre_l.png" style="background: white;padding: 5px;">
                    <div class="info">
                        <a href="https://www.zinfos974.com/un-robot-dote-dintelligence-artificielle-cree-a-la-reunion/">
                            <h4>zinfos974.com / imazpress.com <i class='bx bx-globe' style='color:#5E3BEE'></i></h4>
                            <p>Ecrit par zinfos974</p>
                            <h5>Novembre</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="imgveille" src="assets/img/veille_janvier.png">
                <div class="catveillebox">
                    <div class="catveille">Industrie</div>
                </div>
                <p class="imgtexte">
                    "EX9, une startup de deeptech, présente ses robots-tracteurs autonomes électriques au CES 2024. Ces
                    robots, proposés sous forme de Transport as a Service (TaaS), sont conçus pour le transport de
                    charges lourdes dans les terminaux logistiques. L'innovation est basée sur l'IA et la vision par
                    ordinateur, permettant une liberté de mouvement totale. EX9 vise à aider les opérateurs logistiques
                    à réduire leurs coûts, fluidifier leurs opérations, augmenter leur productivité, réduire leurs
                    émissions de CO2 et améliorer les conditions de travail des manutentionnaires. Un projet pilote
                    réussi a été mené chez DHL Supply Chain, où l'utilisation de ces robots a permis d'augmenter le
                    préchargement de 20% et de réduire les temps d'attente des conducteurs de camions."
                </p>
                <div class="user">
                    <img src="assets/img/veille_janvier_l.png" style="padding: 5px;">
                    <div class="info">
                        <a
                            href="https://www.voxlog.fr/actualite/8220/ces-2024-ex9-presente-ses-robots-tracteurs-autonomes-facilitant-la-manutention-sur-les-terminaux-logistiques">
                            <h4>voxlog.fr <i class='bx bx-globe' style='color:#5E3BEE'></i></h4>
                            <p>Olivier ROUSSARD</p>
                            <h5>Janvier</h5>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="imgveille" src="assets/img/veille_mars.png">
                <div class="catveillebox">
                    <div class="catveille">Divers</div>
                </div>
                <p class="imgtexte">
                    "En 2024, la croissance du secteur de la robotique est favorisée par plusieurs facteurs. La demande
                    d'automatisation est renforcée par une législation favorable aux États-Unis et dans le reste du
                    monde. L'adoption de l'IA devrait contribuer à doper encore davantage la croissance du secteur.
                    L'innovation alimentera la croissance en 2024 et au-delà. Aux États-Unis, des investissements
                    importants sont attendus grâce à des lois telles que l'Infrastructure Investment and Jobs Act, le
                    CHIPS and Science Act et l'Inflation Reduction Act. Ces lois visent à relocaliser et consolider les
                    capacités et partenariats technologiques du pays. Les dépenses d'investissement bénéficiant du
                    soutien de l'État sont moins sensibles que d'ordinaire à la conjoncture, ce qui permet d'annoncer
                    des projets de grande envergure. Les activités liées à ces dépenses devraient culminer en 2026, mais
                    se prolonger pendant le reste de la décennie."
                </p>
                <div class="user">
                    <img src="assets/img/veille_mars_l.png" style="padding: 5px;">
                    <div class="info">
                        <a
                            href="https://www.axa-im.fr/recherche-et-analyses/en-direct-de-la-gestion/actions/la-croissance-du-secteur-de-la-robotique-devrait-se-poursuivre-en-2024">
                            <h4>axa-im.fr <i class='bx bx-globe' style='color:#5E3BEE'></i></h4>
                            <p>Tom Riley</p>
                            <h5>Février</h5>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="veille" id="veille">
        <h5>Outils utilisés :</h5>
        Google Actualités, Google Alerts, Feedly, Twitter, LinkedIn
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