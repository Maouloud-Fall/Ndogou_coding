<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        /* Pied de page */
        footer {
            display: flex;
            justify-content: space-between; /* Espace entre le texte et les icônes */
            align-items: center;
            padding: 5px 10px; /* Réduction de l'espacement interne */
            background-color: #3498db;
            color: white;
        }

        footer p {
            margin: 0;
        }

        footer .social-icons {
            display: flex;
            gap: 10px; /* Réduction de l'espace entre les icônes */
            margin-right: 0;
        }

        footer .social-icons a {
            text-decoration: none;
            transition: transform 0.3s;
        }

        footer .social-icons a:hover {
            transform: scale(1.1); /* Agrandissement au survol */
        }

        footer .map {
            margin-top: 10px; /* Réduction de la marge supérieure */
            border-radius: 10px;
            overflow: hidden; /* Permet d'avoir des bords arrondis pour la carte */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Réduction de l'effet d'ombre */
        }
    </style>
    <title>Document</title>
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
    <div>
        <h2 class="h2">Cours</h2>
        <p>Voici la liste des cours disponibles :</p>
        <div class="map">
            <!-- Carte IFrame -->
            <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=place_id:ChIJy85X-t46d0YR1589u8z-e80" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
                <!-- Carte avec des informations de cours -->
            <div class="course-info">
                <h3>Nom du Cours</h3>
                <p>Description du cours : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Durée : 3 mois</p>
                <p>Prix : 30000 FCFA</p>
                <p>Formateur : John Doe</p>
                <a href="#" class="button">S'inscrire</a>
            </div>
            <div class="course-info">
                <h3>Nom du Cours</h3>
                <p>Description du cours : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Durée : 3 mois</p>
                <p>Prix : 30000 FCFA</p>
                <p>Formateur : John Doe</p>
                <a href="#" class="button">S'inscrire</a>
            </div>
            <div class="course-info">
                <h3>Nom du Cours</h3>
                <p>Description du cours : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Durée : 3 mois</p>
                <p>Prix : 30000 FCFA</p>
                <p>Formateur : John Doe</p>
                <a href="#" class="button">S'inscrire</a>
            </div>
            <div class="course-info">
                <h3>Nom du Cours</h3>
                <p>Description du cours : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Durée : 3 mois</p>
                <p>Prix : 30000 FCFA</p>
                <p>Formateur : John Doe</p>
                <a href="#" class="button">S'inscrire</a>
            </div>
    </div>

</body>
<footer>
    <p>Contactez-nous : <a href="mailto:fallmaouloud249@gmail.com">Contactez-nous:</a></p>
    
    <!-- Icônes des réseaux sociaux -->
    <div class="social-icons">
        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook fa-2x" style="color: #4267B2;"></i></a>
        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fab fa-instagram fa-2x" style="color: #C13584;"></i></a>
        <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin fa-2x" style="color: #0A66C2;"></i></a>
        <a href="https://www.tiktok.com" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok fa-2x" style="color: #69C9D0;"></i></a>
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