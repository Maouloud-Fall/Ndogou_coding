<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>À Propos</title>
    <style>
        /* Style général */
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
            background-image: url('assets/images/banner.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .banner h1 {
            font-size: 3rem;
            margin: 0;
        }

        /* Contenu principal */
        .content {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            text-align: center;
        }

        .content h2 {
            font-size: 2rem;
            color: #3498db;
            margin-bottom: 20px;
        }

        .content p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* Section PDG */
        .ceo-section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background-color: #ffffff;
            padding: 40px 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .ceo-image {
            flex: 1 1 200px;
            max-width: 300px;
            text-align: center;
        }

        .ceo-image img {
            width: 200px;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .ceo-content {
            flex: 2 1 400px;
            max-width: 600px;
            text-align: left;
        }

        .ceo-content h2 {
            color: #3498db;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .ceo-content p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .ceo-content p.quote {
            font-style: italic;
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

    <!-- Bannière -->
    <div class="banner">
        <h1>Qui Sommes-Nous</h1>
        <p>
            Nous sommes une entreprise dynamique dédiée à fournir des solutions innovantes qui transforment les défis en opportunités. Avec une équipe d'experts passionnés et une vision tournée vers l'avenir, nous mettons tout en œuvre pour offrir des services de qualité supérieure adaptés aux besoins de nos clients.
        </p>
        <p>
            Notre mission est de repousser les limites de l'innovation tout en restant fidèles à nos valeurs fondamentales : l'intégrité, l'excellence et un engagement profond envers la satisfaction client. Nous croyons en la collaboration, en la créativité et en l'impact positif que la technologie peut avoir sur la société.
        </p>
        <p>
            À travers nos projets et initiatives, nous nous engageons à inspirer confiance, à construire des partenariats solides et à contribuer activement au progrès de nos communautés. Découvrez comment nous apportons des solutions concrètes pour relever ensemble les défis de demain.
        </p>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <h2>Notre Mission</h2>
        <p>
            Nous sommes bien plus qu'une entreprise technologique — nous sommes une communauté unie par une vision commune : simplifier et transformer la vie quotidienne grâce à des solutions innovantes et accessibles. Depuis notre création, nous avons consacré nos efforts à repousser les limites de la technologie tout en restant fidèles à nos valeurs fondamentales : l'intégrité, l'innovation et l'excellence.
        </p>
        <p>
            Forts de plusieurs années d'expertise dans des secteurs diversifiés tels que le développement logiciel, la gestion des données et les services numériques, nous cherchons constamment à comprendre les défis uniques de nos clients afin de leur fournir des solutions sur mesure. Chaque projet que nous entreprenons est guidé par un engagement indéfectible envers la qualité et la satisfaction client.
        </p>
        <p>
            Notre mission repose également sur notre désir de rendre la technologie inclusive. Nous croyons fermement que chacun, indépendamment de ses origines ou de son niveau de compétence, mérite d'accéder aux avantages qu'offre la révolution numérique. C'est pourquoi nous investissons dans des programmes éducatifs, des partenariats stratégiques et des outils adaptés pour garantir une équité d'accès à la technologie.
        </p>
        <p>
            En fin de compte, notre objectif n'est pas seulement de créer des produits et des services, mais de laisser un impact durable sur la société. Nous nous efforçons d'agir comme des catalyseurs du changement, en inspirant les individus et les entreprises à adopter des solutions technologiques qui favorisent un avenir meilleur, durable et connecté pour tous.
        </p>
    </div>

    <!-- Section PDG -->
    <div class="ceo-section">
        <!-- Image du PDG -->
        <div class="ceo-image">
            <img src="assets/images/member6.jpg" alt="Photo du PDG">
        </div>
        <!-- Contenu des mots du PDG -->
        <div class="ceo-content">
            <h2>Message du PDG</h2>
            <p class="quote">
                "Notre mission est d'innover chaque jour, d'inspirer et de créer un impact positif dans le monde. Nous croyons fermement que la technologie, combinée à la passion humaine, peut changer des vies et transformer notre avenir."
            </p>
            <p>
                Avec cette vision, nous nous engageons à fournir des solutions technologiques adaptées à vos besoins. Je suis honoré de diriger une équipe passionnée, dévouée et innovante qui partage cette même ambition.
            </p>
            <p>
                Merci de faire partie de cette aventure. Ensemble, nous construisons demain.
            </p>
            <p>- <strong>Mouhamadou Ndiaye</strong></p>
        </div>
    </div>
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