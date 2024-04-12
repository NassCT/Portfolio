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
            <li><a href="experience.php">Expériences professionnelles</a></li>
            <li><a class="current-page" href="situation.php">Situations professionnelles</a></li>
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
                Découvrez mon parcours professionnel, marqué par un développement continu en informatique à travers
                divers projets, m'aidant à réussir grâce à mon adaptabilité et ma résolution efficace des défis.
            </p>
            <a href="#situation">
                <button>En savoir plus </button>
            </a>
        </div>
        <div class="right">
            <img src="assets/img/situation.png">
        </div>
    </div>

    <div class="projects" id="projects">

        <div class="project-wrapper" id="inkkubev0">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>
                        <h1>Contexte</h1>
                        <p>Site vitrine de l'entreprise Inkkube, spécialisée dans la conception et la réalisation de
                            projets. Réalisé en React, Vue.JS et PHP, le site présente les services et les réalisations
                            de
                            l'entreprise, et permet aux visiteurs de contacter l'entreprise pour des demandes de devis
                            ou de
                            renseignements.
                        </p>
                        <h1>Besoins</h1>
                        <p>Le site devait refléter l'image de l'entreprise et mettre en avant ses compétences et ses
                            réalisations. Il devait être à la fois informatif et attractif, offrant aux visiteurs une
                            expérience utilisateur optimale. Les fonctionnalités de contact et de demande de devis
                            devaient être claires et accessibles, permettant aux visiteurs de contacter l'entreprise.
                        </p>
                        <h1>Environnement</h1>
                        <p>
                            J'ai utilisé :

                            Visual Studio Code avec LiveShare
                            React avec TypeScript
                            Node.js avec le framework Next.js
                            MongoDB comme base de données
                            Tailwind CSS pour le design
                            Git pour le contrôle de version
                        </p>
                        <h1>Réalisation</h1>
                        <p>

                            Pour implémenter le mode sombre, nous avons commencé par rechercher les technologies
                            disponibles, en nous appuyant sur Next.js et Tailwind CSS. Après avoir examiné plusieurs
                            approches réalisables avec ces technologies, nous avons opté pour l'utilisation d'une
                            gestion de thèmes via le fichier global.css et tailwind.config. Initialement, nous avons
                            établi la logique de gestion des thèmes avec un bouton de bascule pour le mode sombre. Cela
                            impliquait de stocker la préférence de thème dans le localStorage, de récupérer la variable
                            de préférence par défaut, et de gérer les modifications grâce au hook useEffect. Ensuite,
                            nous avons défini les variables pour les modes clair et sombre dans le fichier global.css,
                            et avons configuré les premières variables qui changeront en fonction du mode dans le
                            fichier tailwind.config.
                        </p>
                        <h1>Bilan</h1>
                        <p>
                            Le stage m'a offert une immersion pratique dans le développement web, en particulier avec
                            Next.js et Tailwind CSS et React. J'ai acquis une expertise dans la gestion des thèmes,
                            renforçant
                            mes compétences en résolution de problèmes et en collaboration d'équipe.
                        </p>

                        <h1>Compétences mises en œuvre</h1>

                        <p>
                            Pendant ce stage, j'ai également eu l'opportunité de participer à la gestion de projet en
                            utilisant des méthodes agiles. Cela incluait la planification des tâches, les réunions de
                            suivi, et l'adaptation aux changements tout au long du processus de développement. Ce
                            contexte m'a permis de développer ma capacité à travailler de manière itérative, à prioriser
                            les tâches et à m'adapter aux besoins changeants du projet.
                        </p>

                        <h1>Production associée</h1>

                        <p>
                            Le site vitrine de l'entreprise Inkkube est actuellement en cours de développement. Une
                            version de démonstration est disponible en cliquant <a href="https://inkkubev0.vercel.app/"
                                style="color: #1f7dcf;">ici</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-wrapper" id="inkkubelib">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>



                    </div>
                </div>
            </div>
        </div>

        <div class="project-wrapper" id="maui">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>
                        <h1>Contexte</h1>
                        <p>
                            Dans le cadre du projet réalisé en deuxième année de mon BTS SIO SLAM, j'ai développé
                            l'application mobile GPV pour répondre aux besoins spécifiques de gestion des prêts de
                            véhicules au sein de l'entreprise fictive pharmaceutique GSB. Cette application permet une gestion
                            efficace des réservations de véhicules, des suivis des emprunts et offre la possibilité de
                            consulter les disponibilités de véhicules, facilitant ainsi la logistique de déplacement du
                            personnel de l'entreprise.
                        </p>
                        <h1>Besoins</h1>
                        <p>
                            Il était nécessaires de répondre aux besoins spécifiques de l'entreprise pharmaceutique GSB en
                            matière de gestion des prêts de véhicules, de facilitation des réservations et de suivi des
                            emprunts de manière efficace et sécurisée.
                        </p>
                        <h1>Environnement</h1>
                        <p>
                            Pour développer l'application GPV, j'ai utilisé un environnement technologique
                            moderne comprenant Visual Studio 2022 comme environnement de développement intégré (IDE),
                            .NET MAUI pour la création d'interfaces multiplateformes, une base de données gérée via
                            phpMyAdmin pour stocker les données essentielles concernant les réservations de véhicules.
                            De plus, j'ai utilisé PHP pour développer une API permettant de gérer les interactions entre
                            l'application et la base de données, assurant ainsi un suivi précis des emprunts de
                            véhicules.
                        </p>
                        <h1>Réalisation</h1>
                        <p>
                            Dans la réalisation de l'application GPV, j'ai débuté par l'installation de .NET
                            MAUI ainsi que des packages NuGet nécessaires pour le développement. Ensuite, j'ai créé la
                            base de données via phpMyAdmin et développé une API en utilisant PHP pour établir la liaison
                            avec la base de données. Cette API permet la manipulation sécurisée des réservations de
                            véhicules. Par la suite, j'ai implémenté les différentes fonctionnalités de l'application,
                            telles que la gestion des réservations, le suivi des emprunts de véhicules et la
                            consultation des disponibilités. Enfin, j'ai mis en place le routage entre les différentes
                            pages de l'application pour assurer une expérience utilisateur fluide et intuitive.
                        </p>
                        <h1>Bilan</h1>
                        <p>
                            Ce projet m'a permis d'approfondir mes connaissances dans l'utilisation de technologies
                            modernes telles que .NET MAUI pour le développement d'applications répondant aux besoins
                            spécifiques de gestion des prêts de véhicules. J'ai également renforcé mes compétences en
                            programmation, en conception d'interfaces utilisateur et en gestion de projet, tout en
                            contribuant à améliorer la logistique de déplacement au sein de l'entreprise pharmaceutique
                            GSB.
                        </p>

                        <h1>Compétences mises en œuvre</h1>

                        <p>
                            Ce projet m'a permis d'approfondir mes compétences en programmation, notamment en utilisant
                            .NET MAUI pour le développement d'interfaces multiplateformes et en mettant en œuvre PHP
                            pour la création d'une API de gestion des données. J'ai également renforcé ma compréhension
                            de la gestion de bases de données avec phpMyAdmin, ainsi que ma capacité à concevoir des
                            fonctionnalités efficaces répondant aux besoins spécifiques des utilisateurs. Enfin, j'ai
                            amélioré mes compétences en matière de gestion de projet, en assurant le suivi du
                            développement et en garantissant la qualité et la fluidité de l'expérience utilisateur à
                            travers l'application.
                        </p>

                        <h1>Production associée</h1>
                        <p>
                            Aucune Production associée n'est disponible pour le moment.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-wrapper" id="manif">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-wrapper" id="sgrc">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>
                        <h1>Contexte</h1>
                        <p>Au cours de mon semestre en deuxième année, j'ai collaboré avec une équipe de développement
                            composée de camarades de classe BTS sur le projet SGRC pour le lycée Hélène Boucher. Notre
                            mission : améliorer la prise de commandes, la gestion des tickets et le suivi des commandes.
                            Ce projet m'a permis de développer mes compétences en programmation et en travail d'équipe.
                        </p>
                        <h1>Besoins</h1>
                        <p>
                            En partenariat avec les lycées Jacques Brel et Hélène Boucher, notre équipe s'est lancée
                            dans un projet ambitieux. Notre objectif était double : d'une part, améliorer une
                            application de gestion de salle de restauration déjà existante, et d'autre part, permettre
                            aux étudiants en BAC PRO CSR de s'approprier cet outil métier pour optimiser leurs services.
                            Cette collaboration inter-établissements a ouvert de nouvelles perspectives d'apprentissage
                            et de développement pour tous les participants.
                        </p>
                        <h1>Environnement</h1>
                        <p>
                            Le développement s'est déroulé dans un environnement collaboratif, utilisant PHP pour la
                            logique côté serveur et MySQL pour la base de données. Git et Trello a été utilisé pour la
                            gestion des tâches et des responsabilités. Les interfaces utilisateur ont été conçues pour
                            refléter les différents rôles des utilisateurs.
                            <br></br>
                            De plus, j'ai également hébergé cette application sur un VPS (<a href="cnassim.com/SGRC"
                                style="color: #1f7dcf;"> personnel </a> et sur un poste du
                            lycée) sous Debian 11 pour effectuer des tests.
                        </p>
                        <h1>Réalisation</h1>
                        <p>
                            Dans le cadre du projet pour le restaurant Hélène Boucher, j'ai optimisé le code de
                            l'application pour corriger les bugs et améliorer sa lisibilité. J'ai également développé de
                            nouvelles fonctionnalités, y compris un système de suivi des plats et une carte interactive
                            pour la disposition des tables. De plus, j'ai mis à jour l'affichage de l'application avec
                            l'ajout de certaines fonctions, telles que la gestion de la position des tables, la
                            personnalisation de l'affichage des tables, et la mise à jour de l'interface graphique. J'ai
                            également effectué des modifications dans la base de données pour retirer les éléments
                            inutiles. Ces améliorations ont permis d'optimiser l'expérience utilisateur et de faciliter
                            la gestion des commandes.
                        </p>
                        <h1>Bilan</h1>
                        <p>
                            Le projet pour le restaurant Hélène Boucher m'a permis d'approfondir mes compétences en
                            développement web, notamment en optimisant le code et en ajoutant de nouvelles
                            fonctionnalités, tout en suivant la méthode agile. En travaillant en équipe, j'ai amélioré
                            ma collaboration et ma capacité à utiliser des outils de gestion de projet comme Trello. Sur
                            le plan personnel, cette expérience m'a offert une opportunité de croissance et
                            d'apprentissage, renforçant ma confiance en mes compétences. En résumé, ce projet a été une
                            expérience enrichissante, combinant développement professionnel et personnel dans un
                            environnement concret et stimulant.
                        </p>

                        <h1>Compétences mises en œuvre</h1>
                        <p>

                            Développement web : Utilisation de langages comme PHP, HTML, CSS et JavaScript. <br>
                            Gestion de projet : Utilisation de Trello pour répartir les tâches et suivre les
                            progrès.<br>
                            Méthodologie Agile : Application des principes agiles pour favoriser la flexibilité et la
                            collaboration.<br>
                            Base de données : Gestion et optimisation d'une base de données SQL (MySQL, MariaDB).<br>
                            Interface utilisateur : Conception et amélioration des interfaces pour une meilleure
                            expérience utilisateur.<br>
                            Résolution de problèmes : Identification et résolution efficace des bugs et des problèmes
                            techniques.<br>
                            Collaboration et communication : Travail en équipe avec des collègues et communication
                            efficace.<br>
                            Adaptabilité : Capacité à s'adapter aux besoins changeants du projet.<br>

                        </p>
                        <h1>Production associée</h1>
                        <p>
                            Un version (démo) non à jour de <a href="SGRC" style="color: #1f7dcf;">SGRC</a> est
                            disponible en cliquant <a href="SGRC" style="color: #1f7dcf;">ici</a>.
                        </p>

                        <img class="imgsit" src="assets/img/sgrc.png">

                    </div>
                </div>
            </div>
        </div>

        <div class="project-wrapper" id="glpi">
            <div class="projectscontent">
                <div style="margin-bottom: 1.25rem; justify-content: flex-end; ">
                    <a><i class='bx bxs-x-square' style='color:#1c1e53;font-size:xx-large;'></i>
                    </a>
                    <div>
                        <h1>Contexte</h1>
                        <p>Afin de renforcer mes compétences en administration système et réseau, j'ai entrepris, dans
                            le
                            cadre de mes études en première année de BTS SIO, l'installation de GLPI sur une
                            distribution
                            Linux Debian 11. Cette démarche m'a permis d'acquérir une expérience pratique dans la mise
                            en
                            place d'un logiciel de gestion de parc informatique au sein d'un environnement
                            professionnel, et
                            de développer mes connaissances en matière de configuration et d'administration de systèmes
                            Linux.</p>

                        <h1>Besoins</h1>
                        <p>Ce projet individuel a été initié dans le but d'acquérir des compétences pratiques en matière
                            d'installation et de configuration de solutions logicielles sur des systèmes d'exploitation
                            Linux. Le choix de GLPI s'est justifié par son importance dans le domaine de la gestion de
                            parc
                            informatique, offrant une opportunité idéale pour renforcer mes connaissances en
                            administration
                            système.</p>

                        <h1>Environnement</h1>
                        <p>L'ensemble du processus a été réalisé sur un système Linux Debian 11. J'ai utilisé les outils
                            propres à Debian pour la gestion des paquets et des dépendances. Cette démarche m'a permis
                            de
                            développer une compréhension approfondie de l'écosystème Debian, notamment en matière
                            d'installation et de configuration de logiciels.</p>

                        <h1>Réalisation</h1>
                        <p>Après avoir installé un serveur Apache2, PHP et MySQL, ainsi que le système de gestion des
                            tickets GLPI, j'ai procédé à la configuration initiale. L'installation de GLPI a débuté par
                            la
                            recherche et le téléchargement des paquets nécessaires. J'ai ensuite procédé à
                            l'installation
                            des dépendances, en m'assurant que le système était correctement configuré pour accueillir
                            GLPI.
                            La configuration du serveur web, l'ajustement des paramètres de base de données, et la
                            création
                            des permissions appropriées ont été des étapes cruciales du processus. Une fois que
                            l'infrastructure de base était en place, j'ai créé deux utilisateurs : un administrateur
                            avec
                            des privilèges étendus et un utilisateur de base. Enfin, j'ai effectué des tests de tickets
                            pour
                            vérifier le bon fonctionnement du système de gestion des tickets.</p>

                        <h1>Bilan</h1>
                        <p>Le projet d'installation et de configuration de GLPI sur Debian 11 a été une opportunité
                            essentielle pour acquérir des compétences techniques précieuses en administration système
                            Linux.
                            En maîtrisant l'écosystème Debian, j'ai appris à installer et configurer des solutions
                            logicielles tout en développant une connaissance pratique de GLPI, un outil essentiel dans
                            la
                            gestion de parc informatique. En parallèle, la configuration du système de gestion des
                            tickets
                            m'a permis de développer des compétences utiles en gestion des incidents et en support
                            informatique. Ce projet m'a également offert une expérience précieuse en travail autonome,
                            renforçant ma capacité à planifier et exécuter des tâches de manière efficace.</p>

                        <h1>Production associée</h1>
                        <p><a href="/Notice-GLPI.pdf">Notice GLPI<i
                                    class='bx bx-globe' style='color:#5400ff'></i></a></p>

                        <h1>Compétences mises en œuvre</h1>
                        <p>
                        <ul>
                            <li>Gérer le patrimoine informatique :</li>
                            <ul>
                                <li>Recenser et identifier les ressources numériques.</li>
                                <li>Vérifier les conditions de continuité d’un service informatique.</li>
                            </ul>
                            <li>Répondre aux incidents et aux demandes d’assistance et d’évolution :</li>
                            <ul>
                                <li>Collecter, suivre et orienter des demandes.</li>
                                <li>Traiter des demandes concernant les services réseau et système, applicatifs.</li>
                                <li>Traiter des demandes concernant les applications.</li>
                            </ul>
                            <li>Mettre à disposition des utilisateurs un service informatique :</li>
                            <ul>
                                <li>Déployer un service.</li>
                            </ul>
                        </ul>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="veille" id="situation">
        <h5>Expériences professionnelles</h5>
        <h3>Projets</h3>

        <h1 style="padding: 50px 0px 0px 0px;">En periode de stage</h1>
        <h5 style="padding: 50px 0px 0px 0px;">Développement</h5>


        <div class="customers">

            <div class="item">
                <img class="imgveille" src="assets/img/inkkubev0.png">
                <div class="catveillebox">
                    <div class="catveille sit">Inkkube Site</div>
                </div>
                <p class="imgtexte">
                    Site vitrine de l'entreprise Inkkube, spécialisée dans la conception et la réalisation de projets.
                    Réalisé en React, Vue.JS et PHP, le site présente les services et les réalisations de l'entreprise,
                    et permet aux visiteurs de contacter l'entreprise pour des demandes de devis ou de renseignements.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#inkkubev0">
                            <button data-project-id="inkkubev0">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="imgveille" src="assets/img/inkkubelib.png">
                <div class="catveillebox">
                    <div class="catveille sit">Inkkube Lib</div>
                </div>
                <p class="imgtexte">
                    La bibliothèque de composants React Inkkube Lib est une collection de composants réutilisables
                    conçus pour simplifier le développement des projets Inkkube. Les composants sont faciles à intégrer
                    et à personnaliser, optimisés pour les performances et la compatibilité avec les navigateurs, et ont
                    été réalisés avec Storybook, une librairie de développement permettant de créer des interfaces
                    utilisateur isolées et réutilisables pour améliorer la qualité du code et la productivité des
                    développeurs.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#inkkubelib">
                            <button data-project-id="inkkubelib">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="padding: 50px 0px 0px 0px;">En cours de formations</h1>

        <h5 style="padding: 50px 0px 0px 0px;">Développement</h5>


        <div class="customers">
            <div class="item">
                <img class="imgveille" src="assets/img/manif.png">
                <div class="catveillebox">
                    <div class="catveille sit">Manifestation</div>
                </div>
                <p class="imgtexte">
                    L'application web est un outil de gestion des inscriptions et des activités pour les associations,
                    offrant une interface intuitive et des fonctionnalités de gestion efficaces pour les
                    administrateurs, les responsables et les visiteurs. Elle permet une gestion centralisée et
                    simplifiée des activités associatives, encourage l'engagement et la participation des membres, et
                    facilite la gestion globale des activités associatives en offrant une expérience utilisateur
                    optimale et en améliorant l'efficacité opérationnelle de l'association.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#manif">
                            <button data-project-id="manif">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="imgveille" src="assets/img/sgrc.png">
                <div class="catveillebox">
                    <div class="catveille sit">SGRC</div>
                </div>
                <p class="imgtexte">
                    Pendant mon semestre en deuxième année, j'ai eu l'opportunité de travailler pour le lycée Hélène
                    Boucher en collaboration avec une équipe de développement composée d'élèves de ma classe de BTS.
                    Notre mission était de perfectionner un projet Saas nommé SGRC, en mettant l'accent sur
                    l'amélioration de la prise de commandes, la gestion des tickets et le suivi des commandes. Nous
                    avons également pris en charge la résolution de bugs, l'implémentation d'améliorations mineures et
                    l'optimisation globale de l'application. Cette expérience m'a permis de développer mes compétences
                    en travail d'équipe et en développement logiciel tout en contribuant à un projet concret pour le
                    lycée.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#sgrc">
                            <button data-project-id="sgrc">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img class="imgveille" src="assets/img/maui.png">
                <div class="catveillebox">
                    <div class="catveille sit">GPV</div>
                </div>
                <p class="imgtexte">
                    L'application mobile développée en C# .NET MAUI permet à une entreprise pharmaceutique d'attribuer
                    des véhicules à ses salariés. Elle offre des fonctionnalités telles que la gestion des véhicules,
                    l'attribution des véhicules aux salariés, le suivi des entretiens et des réparations, la
                    planification des itinéraires et l'analyse des données de conduite. L'application est conçue pour
                    être utilisée sur les appareils mobiles, offrant une expérience utilisateur intuitive et une gestion
                    efficace de l'attribution des véhicules aux salariés de l'entreprise.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#maui">
                            <button data-project-id="maui">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <h5 style="padding: 50px 0px 0px 0px;">Réseaux</h5>

        <div class="customers">
            <div class="item">
                <img class="imgveille" src="assets/img/glpi.png">
                <div class="catveillebox">
                    <div class="catveille sit">GLPI</div>
                </div>
                <p class="imgtexte">
                    GLPI est une application web open source de gestion de parc
                    informatique et de helpdesk. Elle permet de gérer l'inventaire des équipements informatiques
                    (ordinateurs, imprimantes, téléphones, etc.), de suivre les incidents et les demandes de service, et
                    de générer des rapports et des statistiques. GLPI est développé par une communauté de contributeurs
                    et est disponible sous licence GNU General Public License.
                </p>
                <div class="user">
                    <div class="info">
                        <a href="#glpi">
                            <button data-project-id="glpi">En savoir plus</button>
                        </a>
                    </div>
                </div>
            </div>

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