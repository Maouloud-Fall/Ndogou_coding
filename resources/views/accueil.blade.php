<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9;
        }
        .h2 {
            color: #3498db;
            text-align: center;
        }
        /* En-tête */
        header {
            background-color:rgb(128, 130, 131);
            padding: 15px;
            color: white;
            text-align: center;
        }

        header .menu {
            display: flex;
            justify-content: center;
        }

        header .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }

        header .menu ul li {
            display: inline-block;
        }

        header .menu ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        header .menu ul li a:hover {
            background-color: #1d6fa5;
        }
        .menu {
            display: flex;
            justify-content: space-between; /* Espace entre le logo et les liens */
            align-items: center; /* Aligne verticalement les éléments */
            padding: 15px 30px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-right: 20px; /* Espace entre le logo et les liens */
            flex: 1; /* Permet au logo de prendre de l'espace flexible */
        }

        .logo {
            width: 120px; /* Ajuste la taille du logo */
            height: auto; /* Conserve les proportions */
        }

        .menu-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px; /* Ajoute un espacement entre les liens */
        }

        .menu-links li {
            display: inline-block;
        }

        .menu-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-align: center; /* Centre le texte dans le lien */
        }

        .menu-links a:hover {
            background-color: #1d6fa5; /* Couleur au survol */
            transform: scale(1.1); /* Zoom léger au survol */
        }
        

        /* Bannière */
        .banner {
            background-color:rgb(15, 15, 15); /* Couleur de fond */
            color: white; /* Couleur du texte en noir */
            text-align: center; /* Texte centré */
            padding: 20px; /* Espacement intérieur */
            font-size: 1.5rem; /* Taille du texte */
            margin-bottom: 20px; /* Espace sous la bannière */
        }

        /* Section principale avec l'image en arrière-plan */
        .background {
            background-image: url('assets/images/heade.jpg'); /* Chemin vers l'image */
            background-size: cover; /* L'image couvre toute la section */
            background-position: center; /* L'image est centrée */
            background-attachment: fixed; /* Rendre l'image de fond fixe */
            height: 130vh; /* Hauteur de la fenêtre visible */
            color: white; /* Couleur du texte par défaut */
            display: flex; /* Utilisation de flexbox pour centrer le contenu */
            justify-content: center; /* Centre horizontalement le contenu */
            align-items: center; /* Centre verticalement le contenu */
            text-align: center;
        }

        .background a {
            text-decoration: none; /* Supprime la ligne sous le lien */
            color: white; /* Définit la couleur du lien en blanc */
        }

        .background a:hover {
            text-decoration: none; /* Ajoute une ligne au survol (optionnel) */
        }

        .background h1, .background p {
            color: white; /* Assure que le texte, y compris le titre et le paragraphe, reste blanc */
        }


        /* Disposition principale */
        .main-layout {
            display: flex;
            margin: 20px;
        }

        aside {
            width: 25%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
        }

        aside h2 {
            margin-top: 0;
            color: #3498db;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside ul li a:hover {
            color: #3498db;
        }

        .articles {
            width: 75%;
            padding: 20px;
            background-color: white;
        }

        .articles h1 {
            color: #3498db;
        }

        .articles p {
            color: #555555;
            line-height: 1.6;
        }

        /* Conteneur du slider */
        h2 {
            text-align: center;
            color: #3498db;
            margin-top: 20px;
        }

        /* Conteneur du slider */
        .slider-container {
            position: relative;
            max-width: 80%;
            margin: 20px auto;
            overflow: hidden; /* Masque les éléments hors du conteneur */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Images dans le slider */
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out; /* Animation fluide */
        }

        .slider div {
            min-width: 33.33%; /* Chaque slide occupe 1/3 du conteneur */
            box-sizing: border-box;
            padding: 10px;
        }

        .slider img {
            width: 100%;
            height: 250px; /* Hauteur uniforme */
            object-fit: cover; /* Ajuste l'image sans déformation */
            border-radius: 8px;
        }

        /* Boutons de navigation */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 18px;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .prev:hover, .next:hover {
            background-color: #3498db;
        }

        /* Texte sous les images */
        .slider-caption {
            text-align: center;
            margin-top: 5px;
            font-size: 14px;
            color: #555555;
        }
        .slider img:hover {
            transform: scale(1.1); /* Agrandit légèrement l'image au survol */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Renforce l'ombre au survol */
        }

        /* Section de l'équipe */
        .team-container {
            display: flex; /* Organiser en rangées horizontales */
            justify-content: center; /* Centrer horizontalement */
            flex-wrap: wrap; /* Permet le passage à la ligne si nécessaire */
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            flex: 1 1 200px; /* Taille adaptable */
            max-width: 300px;
            margin: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s;
        }

        .team-member:hover {
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .team-member h2 {
            margin: 10px 0;
            color: #3498db;
        }

        .team-member p {
            margin: 5px 0;
            color: #555555;
        }

        /*botons de slider pour les membres de l'equipe*/
        .slick-prev, .slick-next {
            background-color: black; /* Couleur de fond noire */
            color: #0A66C2; /* Couleur du texte (si applicable) */
            border-radius: 50%; /* Pour un style arrondi */
            width: 40px; /* Largeur du bouton */
            height: 40px; /* Hauteur du bouton */
            display: flex; /* Centrer le contenu */
            align-items: center; /* Centrer verticalement */
            justify-content: center; /* Centrer horizontalement */
        }

        .slick-prev:before, .slick-next:before {
            color: white; /* Couleur des flèches */
        }

        .slick-prev {
            left: 10px; /* Positionnement du bouton précédent */
        }

        .slick-next {
            right: 10px; /* Positionnement du bouton suivant */
        }
        /* Section des partenaires */


        .partners-section {
            text-align: center;
            padding: 40px;
            background-color: #f4f4f4; /* Fond clair pour démarquer la section */
        }

        .partners-section h2 {
            font-size: 28px;
            color: #333; /* Couleur de texte sombre */
            margin-bottom: 20px;
        }

        .partners {
            display: flex;
            justify-content: center;
            gap: 30px; /* Espacement entre les partenaires */
            flex-wrap: wrap; /* Permet d'aller à la ligne si nécessaire */
        }

        .partner {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 150px; /* Taille uniforme */
        }

        .partner img {
            max-width: 100%;
            height: auto;
            border-radius: 5px; /* Coins arrondis pour les images */
        }

        .partner p {
            margin-top: 10px;
            font-size: 16px;
            color: #666;
        }
        /* Pied de page */
        footer {
            display: flex;
            flex-direction: column; /* Aligne les éléments verticalement */
            align-items: center; /* Centre les éléments horizontalement */
            background-color: rgb(128, 130, 131); /* Couleur de fond du footer */
            color: white;
            padding: 10px;
        }

        .footer-container {
            display: flex; /* Utilise flexbox pour aligner les sections horizontalement */
            justify-content: space-between; /* Espace entre les sections */
            width: 95%; /* Prend toute la largeur du footer */
        }

        .footer-section {
            margin: 10px; /* Espace entre les sections */
            text-align: left; /* Aligne le texte à gauche par défaut */
        }
        .footer-section i {
            margin-right: 8px; /* Espace entre l'icône et le texte */
            color: red; /* Couleur des icônes */
        }
        .footer-section h4 {
            margin-bottom: 10px; /* Espace sous le titre */
            color: white; /* Couleur du titre */
        }

        .footer-logo {
            max-width: 150px; /* Ajustez la taille du logo */
        }

        .navigation-links ul {
            list-style-type: none;
            padding: 0;
        }

        .navigation-links li {
            margin: 5px 0;
        }

        .navigation-links a {
            color: white;
            text-decoration: none;
        }

        .navigation-links a:hover {
            text-decoration: none; /* Supprime la ligne au survol */
            color:rgb(241, 8, 20); /* Change la couleur au survol */
        }


    </style>
</head>
<body>
    <!-- En-tête -->
    <header>
    <nav class="menu">
        <div class="logo-container">
            <img src="assets/images/logo.png" alt="Logo de Mon Site Web" class="logo">
        </div>
        <ul class="menu-links">
            <li><a href="/accueil">Accueil</a></li>
            <li><a href="/formation">Formation</a></li>
            <li><a href="/about">À propos</a></li>
            <li><a href="/team">Equipe</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    </header>
    <!-- Section principale -->
    <div class="background">
        <div>
            <h1>Bienvenue chez nous !</h1>
            <a href="/about"><p>Découvrez notre notre plateforme.</p></a>
        </div>
    </div>

    <!-- Bannière -->
    <div class="banner">
        <h2>Explorez nos articles et ressources utiles</h2>
    </div>

    <!-- Disposition principale -->
    <div class="main-layout">
        <!-- Aside -->
        <aside>
            <ul>
                <img src="assets/images/img1.jpg" alt="">
            </ul>
        </aside>

        <!-- Articles -->
        <div class="articles">
            <h1>L'importance de la technologie</h1>
            <strong>L'Importance de la Technologie dans le Monde Moderne</strong>
            <p>Depuis les premières inventions humaines, comme la roue et le feu, jusqu’aux merveilles modernes comme l’intelligence artificielle et les systèmes de navigation satellitaire, la technologie a été un pilier fondamental de l'évolution de la société. Elle a façonné chaque aspect de notre vie quotidienne, redéfinissant notre manière de communiquer, de travailler, d'apprendre et même de rêver.
                Au fil des siècles, les innovations technologiques ont marqué des jalons significatifs dans l'histoire de l'humanité. Prenons l'exemple de l'invention de l'imprimerie par Johannes Gutenberg au XVe siècle. Cet événement a révolutionné la diffusion du savoir, rendant les livres accessibles à un plus grand nombre de personnes et posant les bases de la Renaissance. Avant l’imprimerie, les manuscrits étaient copiés à la main, un processus laborieux et réservé à une élite. Avec l’arrivée des livres imprimés, le savoir s’est démocratisé, transformant des sociétés entières.</p>
            <strong>L'Ère Numérique et la Connectivité</strong>
            <p>Le XXe siècle a vu l’émergence de technologies numériques qui ont transformé notre manière de communiquer. L'invention de l'ordinateur personnel, suivie d'Internet, a ouvert des horizons inimaginables. Aujourd'hui, avec les smartphones, les réseaux sociaux et les outils de messagerie instantanée, nous vivons dans un monde où l'information circule à une vitesse vertigineuse. Cette connectivité a rapproché des gens à travers le globe, permettant la collaboration entre cultures, langues et frontières.
                Cependant, cette ère numérique n'est pas sans défis. Les questions liées à la confidentialité des données, aux cyberattaques et à la désinformation montrent que la technologie, bien qu’essentielle, doit être utilisée avec soin et responsabilité. Les géants de la technologie, comme les développeurs de plateformes numériques, jouent un rôle crucial dans l’équilibre entre innovation et éthique.</p>
            <strong>L'Intelligence Artificielle : L'Avenir en Marche</strong>
            <p>Au cœur de l'ère technologique actuelle se trouve l’intelligence artificielle. Ces systèmes, capables d’apprendre, de s’adapter et même de créer, redéfinissent ce que nous considérons comme possible. L’intelligence artificielle est utilisée dans des domaines aussi variés que la médecine, où elle aide à diagnostiquer des maladies, ou les transports, avec les voitures autonomes.</p>
        </div>
    </div>

    <!-- Galerie -->
    <h2>Mes Catégories</h2>
    <div class="slider-container">
        <!-- Slider -->
        <div class="slider">
            <div>
                <a href="/cours"><img src="assets/images/img1.jpg" alt="Image 1"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img2.jpeg" alt="Image 2"></a>
                <p class="slider-caption">Suivez votre cours de réseau telecom</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img3.jpg" alt="Image 3"></a>
                <p class="slider-caption">Cours d'intelligence artificielle</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img5.jpg" alt="Image 5"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img6.jpg" alt="Image 6"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img7.jpg" alt="Image 7"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
        </div>
    </div>
    <!-- Section de l'équipe -->
    <div class="team-container">
        <!-- Membre 1 -->
        <div class="team-member">
            <img src="assets/images/member6.jpg" alt="Photo de M. Ndiaye">
            <h2>Mouhamadou Ndiaye</h2>
            <p>Rôle : PDG de l'IBMS</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/ndiaye" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/ndiaye" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/ndiaye" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@ndiaye" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 2 -->
        <div class="team-member">
            <img src="assets/images/member2.jpg" alt="Photo de M. Ciss">
            <h2>Salif Ciss</h2>
            <p>Responsable du Département IT</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/ciss" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/ciss" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/ciss" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@ciss" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 3 -->
        <div class="team-member">
            <img src="assets/images/member3.jpg" alt="Photo de M. Ndiaye">
            <h2>Amadou Moustapha Deme</h2>
            <p>Spécialité : Développement Mobile</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/deme" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/deme" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/deme" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@deme" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 4 -->
        <div class="team-member">
            <img src="assets/images/member4.jpg" alt="Photo de Deme">
            <h2>Abdou Karim Ciss</h2>
            <p>Spécialité : Stagiaire</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/ciss" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/ciss" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/ciss" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@ciss" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 5 -->
        <div class="team-member">
            <img src="assets/images/member5.jpg" alt="Photo de Amadou Diop">
            <h2>Ababacar Ndiaye</h2>
            <p>Spécialité : Designer</p>
            <div class="social-links" alt="Photo de A" style="margin-top: 10px;">
                <a href="https://www.facebook.com/ndiaye" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/ndiaye" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/ndiaye" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@ndiaye" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 6 -->
        <div class="team-member">
            <img src="assets/images/member1.jpg" alt="Photo de M. Fall">
            <h2>Maouloud Fall</h2>
            <p>Spécialité : Stagiaire</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/profile.php?id=100067023274285" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/maouloud_fall_17/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://www.linkedin.com/in/maouloud-fall-71b433242/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@maouloudfall7" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 7 -->
        <div class="team-member">
            <img src="assets/images/member7.jpg" alt="Photo de Ndeye Touty Sarr">
            <h2>Ndeye Touty Sarr</h2>
            <p>Spécialité : Stagiaire en Secrétariat</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/sarr" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/sarr" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/sarr" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@sarr" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 8 -->
        <div class="team-member">
            <img src="assets/images/member8.jpg" alt="Photo de Diary">
            <h2>Diarry</h2>
            <p>Spécialité : Comunity manager</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/diarry" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/diarry" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/diarry" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@diarry" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 9 -->
        <div class="team-member">
            <img src="assets/images/member9.jpg" alt="Photo de Diary">
            <h2>Tchanee Mbaye</h2>
            <p>Spécialité : Comunity manager</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/mbaye" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/mbaye" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/mbaye" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@mbaye" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 10 -->
        <div class="team-member">
            <img src="assets/images/member10.jpg" alt="Photo de Diary">
            <h2>Issa DIEDHIOU</h2>
            <p>Spécialité : Développeur et consultant en cybersécurité</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/diedhiou" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/diedhiou" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/diedhiou" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@diedhiou" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
        <!-- Membre 11 -->
        <div class="team-member">
            <img src="assets/images/member11.jpg" alt="Photo de Diary">
            <h2>Coumba</h2>
            <p>Spécialité : Comunity manager</p>
            <div class="social-links" style="margin-top: 10px;">
                <a href="https://www.facebook.com/coumba" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/coumba" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/in/coumba" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@coumba" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
    </div>
    <div class="partners-section">
        <h2>Nos Partenaires</h2>
        <div class="partners">
            <div class="partner">
                <a href="https://www.eclosio.ong/country/senegal/" target="_blank">
                    <img src="assets/images/eclosio.png" alt="Logo partenaire 1">
                    <p>Eclosio</p>
                </a>
            </div>
            <div class="partner">
                <a href="https://plan-international.org/senegal/" target="_blank">
                    <img src="assets/images/plan.png" alt="Logo partenaire 2">
                    <p>Plan Intarnational</p>
                </a>
            </div>
            <div class="partner">
                <a href="http://www.ymcasenegal.org/" target="_blank">
                    <img src="assets/images/ymc.png" alt="Logo partenaire 3">
                    <p>YMCA Senegal</p>
                </a>
            </div>
            <div class="partner">
                <a href="https://paradigmhq.org/?lang=fr" target="_blank">
                    <img src="assets/images/para.png" alt="Logo partenaire 4">
                    <p>Paradigm Initiative</p>
                </a>
            </div>
            <div class="partner">
                <a href="#" target="_blank">
                    <img src="assets/images/belg.png" alt="Logo partenaire 5">
                    <p>Belgium </p>
                </a>
            </div>
            <div class="partner">
                <a href="https://anpej.sn/" target="_blank">
                    <img src="assets/images/anp.png" alt="Logo partenaire 6">
                    <p>ANPEJ</p>
                </a>
            </div>
        </div>
    <!-- Fin de la section des partenaires -->
    </div>

    <script>
        const slider = document.querySelector('.slider');
        let sliderIndex = 0;

        function slideContinuously() {
            sliderIndex++;
            if (sliderIndex >= slider.scrollWidth / slider.offsetWidth) {
                sliderIndex = 0; // Réinitialise au début
                slider.style.transition = 'none'; // Supprime la transition pour revenir au début
                slider.style.transform = `translateX(0%)`;
            } else {
                slider.style.transition = 'transform 0.5s linear'; // Réapplique la transition fluide
                slider.style.transform = `translateX(-${sliderIndex * 100 / 3}%)`;
            }
        }

        // Lancer le slider continu
        setInterval(slideContinuously, 2000); // Change toutes les 2 secondes

        $(document).ready(function(){
            $('.team-container').slick({
            slidesToShow: 3, // Nombre de membres affichés en même temps
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
    </script>
</body>
<!-- Pied de page -->
<footer>
    <div class="footer-container">
        <div class="footer-section logo-description">
            <img src="assets/images/logo.png" alt="Logo de Mon Site Web" class="footer-logo">
            <p>
                <i class="fas fa-envelope"></i> 
                <a href="mailto:ibmssenegal@gmail.com">ibmssenegal@gmail.com</a>
            </p>
            <p>
                <i class="fas fa-phone"></i> 
                339520979 | +221773962707
            </p>
            <p>
                <i class=" fas fa-map-marker-alt"></i>
                123 Rond point Angle Serigne Fallou, Thiès, Sénégal
            </p>
        </div>


        <div class="footer-section navigation-links">
            <h4>Menu de Navigation</h4>
            <ul>
                <li><a href="/accueil">Accueil</a></li>
                <li><a href="/formation">Formation</a></li>
                <li><a href="/about">À propos</a></li>
                <li><a href="/team">Equipe</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section social-media">
            <h4>Veillez nous suivre sur les reseaux sociaux</h4>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
                <a href="https://www.instagram.com/ibmssenegal" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
                <a href="https://sn.linkedin.com/company/informatique-business-and-management-skills" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
                <a href="https://www.tiktok.com/@ibmssenegal" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
            </div>
        </div>
    </div>

    <p>© 2025 Mon Site Web. Tous droits réservés.</p>
</footer>

</html>
