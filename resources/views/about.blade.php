<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>À Propos</title>
    <style>
        /* Style général */
        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* En-tête */
        header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header .menu ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        header .menu ul li {
            display: inline;
        }

        header .menu ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header .menu ul li a:hover {
            background-color: #1d6fa5;
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
            justify-content: space-between; /* Espace entre le texte et les icônes */
            align-items: center;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
        }

        footer p {
            margin: 0;
        }

        footer .social-icons {
            display: flex;
            gap: 15px; /* Espacement entre les icônes */
            margin-right: 0; /* Pour bien les positionner à droite */
        }

        footer .social-icons a {
            text-decoration: none;
            transition: transform 0.3s;
        }

        footer .social-icons a:hover {
            transform: scale(1.1); /* Agrandissement au survol */
        }
        footer .map {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden; /* Permet d'avoir des bords arrondis pour la carte */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <!-- En-tête -->
    <header>
        <nav class="menu">
            <ul>
                <li><a href="/accueil">Accueil</a></li>
                <li><a href="/formation">Formation</a></li>
                <li><a href="/about">À propos</a></li>
                <li><a href="/team">Equipe</a></li>
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
    <p>© 2025 Mon Site Web. Tous droits réservés.</p>
    <p>Contactez-nous : <a href="mailto:ibmssenegal@gmail.com">ibmssenegal@gmail.com</a></p>
    
    <!-- Icônes des réseaux sociaux -->
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
        <a href="https://www.instagram.com/ibmssenegal" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
        <a href="https://sn.linkedin.com/company/informatique-business-and-management-skills" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
        <a href="https://www.tiktok.com/@ibmssenegal" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
    </div>

    <!-- Carte de localisation -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23335.743084304136!2d-16.9516021!3d14.7614194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec195590eebab6b%3A0x350740f27a87b582!2sR%C3%A9sidence%20Senghor%20-%20THI%C3%88S!5e0!3m2!1sfr!2ssn!4v1688475123456"
            width="100%"
            height="250"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            aria-label="Carte de Résidence Senghor à Thiès">
        </iframe>

    </div>
</footer>

</html>