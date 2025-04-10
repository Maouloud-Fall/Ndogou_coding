<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Contactez-nous</title>
    <style>
        /* Style global */
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
         /* Style global */
        

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px; /* Espacement entre la carte et le formulaire */
        }

        .map-wrapper,
        .form-wrapper {
            flex: 1; /* Permet aux deux sections d'occuper la même largeur */
            height: 400px; /* Hauteur uniforme */
            box-sizing: border-box;
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
        }

        .form-wrapper {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
            text-align: center;
        }

        form h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            font-size: 14px;
            margin: 10px 0 5px;
            color: #666;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
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

<!-- Contenu principal -->  
<div class="container">
    <!-- Section Carte -->
    <div class="map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23335.743084304136!2d-16.9516021!3d14.7614194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec195590eebab6b%3A0x350740f27a87b582!2sR%C3%A9sidence%20Senghor%20-%20THI%C3%88S!5e0!3m2!1sfr!2ssn!4v1688475123456"
            width="100%"
            height="400"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            aria-label="Votre localisation">
        </iframe>

    </div>

    <!-- Section Formulaire -->
    <div class="form-wrapper">
        <div class="form-section">
            <h1>Veillez nous contacter</h1>
            <form method="post" action="">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

                <button type="submit">S'inscrire</button>
            </form>
        </div>
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
