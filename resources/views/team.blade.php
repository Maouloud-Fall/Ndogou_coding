<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>L'Équipe de Formation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3498db;
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

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .team-container {
            display: flex; /* Organiser en rangées horizontales */
            justify-content: center; /* Centre le contenu */
            flex-wrap: wrap; /* Les membres passent à la ligne si nécessaire */
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            flex: 1 1 200px; /* Taille adaptable */
            max-width: 300px; /* Largeur maximale */
            margin: 10px; /* Espacement entre les membres */
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
            text-align: center; /* Centre le texte */
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
        <!-- Membre 5 -->
        <div class="team-member">
            <img src="assets/images/member5.jpg" alt="Photo de Amadou Diop">
            <h2>Amadou Diop</h2>
            <p>Spécialité : Cybersécurité</p>
            <p>Amadou est un consultant en cybersécurité qui enseigne comment protéger vos données efficacement.</p>
        </div>
        <!-- Membre 6 -->
        <div class="team-member">
            <img src="assets/images/member6.jpg" alt="Photo de Sophie Ndongue">
            <h2>Sophie Ndongue</h2>
            <p>Spécialité : Gestion de Projets</p>
            <p>Sophie aide les étudiants à organiser leurs idées et à réussir leurs projets avec des méthodes modernes.</p>
        </div>
        <!-- Membre 7 -->
        <div class="team-member">
            <img src="assets/images/member7.jpg" alt="Photo de Fatou Fall">
            <h2>Fatou Fall</h2>
            <p>Spécialité : Développement Web</p>
            <p>Fatou crée des sites interactifs et enseigne les bases du HTML, CSS, et JavaScript.</p>
        </div>
        <!-- Membre 8 -->
        <div class="team-member">
            <img src="assets/images/member8.jpg" alt="Photo de M. Diop">
            <h2>M. Diop</h2>
            <p>Spécialité : Analyse de Données</p>
            <p>Diop travaille avec Python et R pour enseigner les techniques avancées d'analyse de données.</p>
        </div>
    </div>
</body>
<footer>
    <p>© 2025 Mon Site Web. Tous droits réservés.</p>
    <p>Contactez-nous : <a href="mailto:contact@monsiteweb.com">contact@monsiteweb.com</a></p>
    
    <!-- Icônes des réseaux sociaux -->
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
        <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter fa-2x" style="color: #1DA1F2;"></i></a>
        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
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
