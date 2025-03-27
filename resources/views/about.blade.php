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
            background-image: url('assets/images/about-banner.jpg');
            background-size: cover;
            background-position: center;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .banner h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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

        /* Section équipe */
        .team {
            background-color: #ffffff;
            padding: 40px 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .team h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 30px;
        }

        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-member {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 15px;
            max-width: 250px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-member h3 {
            font-size: 1.2rem;
            color: #3498db;
            margin: 10px 0;
        }

        .team-member p {
            font-size: 0.9rem;
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
                <li><a href="/about">À propos</a></li>
                <li><a href="/team">Equipe</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Bannière -->
    <div class="banner">
        <h1>À Propos de Nous</h1>
    </div>

    <!-- Contenu principal -->
    <div class="content">
        <h2>Notre Mission</h2>
        <p>
            Nous sommes une entreprise passionnée par la création de solutions technologiques qui simplifient et enrichissent la vie quotidienne. Avec des années d'expérience dans divers domaines, nous nous efforçons de fournir des services de qualité et de répondre aux besoins de nos clients.
        </p>
    </div>

    <!-- Section PDG -->
    <div class="ceo-section">
        <!-- Image du PDG -->
        <div class="ceo-image">
            <img src="assets/images/ceo.jpg" alt="Photo du PDG">
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
            <p>- <strong>Nom du PDG</strong></p>
        </div>
    </div>

    <!-- Section équipe -->
    <div class="team-container">
        <!-- Membre 1 -->
        <div class="team-member">
            <img src="assets/images/member1.jpg" alt="Photo de M. Fall">
            <h2>M. Fall</h2>
            <p>Spécialité : Intelligence Artificielle</p>
            <p>Fall est un expert en IA avec 10 ans d'expérience dans le domaine et une passion pour l'enseignement.</p>
        </div>
        <!-- Membre 2 -->
        <div class="team-member">
            <img src="assets/images/member2.jpg" alt="Photo de M. Ciss">
            <h2>M. Ciss</h2>
            <p>Spécialité : Réseau Telecom</p>
            <p>Ciss est une ingénieure en télécommunications qui aime partager ses connaissances pratiques.</p>
        </div>
        <!-- Membre 3 -->
        <div class="team-member">
            <img src="assets/images/member3.jpg" alt="Photo de M. Ndiaye">
            <h2>M. Ndiaye</h2>
            <p>Spécialité : Développement Mobile</p>
            <p>Ndiaye est un développeur mobile reconnu pour ses applications innovantes et ses cours interactifs.</p>
        </div>
        <!-- Membre 4 -->
        <div class="team-member">
            <img src="assets/images/member4.jpg" alt="Photo de Deme">
            <h2>Deme</h2>
            <p>Spécialité : Bases de Données</p>
            <p>Deme est une spécialiste des bases de données avec une approche méthodique et claire.</p>
        </div>
    </div>
</body>
<!-- Pied de page -->
<footer>
    <p>© 2025 Mon Site Web. Tous droits réservés.</p>
    <p>Contactez-nous : <a href="mailto:contact@monsiteweb.com">contact@monsiteweb.com</a></p>
    
    <!-- Icônes des réseaux sociaux -->
    <div class="social-icons">
        <a href="https://www.facebook.com/p/Maouloud-Fall-lofficiel-100067023274285/?locale=sr_RS" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
        <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter fa-2x" style="color: #1DA1F2;"></i></a>
        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
        <a href="https://sn.linkedin.com/in/maouloud-fall-71b433242" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
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