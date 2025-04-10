<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Global styles */
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
        /* Formations */
        .formations {
            padding: 20px;
            background-color: #f0f8ff;
        }

        .formations h2 {
            text-align: center;
            color: #3498db;
        }

        .formations-grid {
            display: grid;
            gap: 15px;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }

        .formation {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .formation h3 {
            color: #3498db;
            margin-bottom: 10px;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <!-- Accueil -->
    <section class="formations">
        <h2>Nos Formations Disponibles</h2>
        <div class="formations-grid">
            <div class="formation">
                <img src="assets/images/burautique.jpg" alt="Formation en Bureautique" style="width: 100%; border-radius: 10px;">
                <h3 style="font-size: 1.8em; color: #2c3e50; margin-top: 10px;">Formation en Bureautique</h3>
                <p style="font-size: 1.1em; color: #34495e; line-height: 1.6;">
                    Maîtrisez les outils essentiels de bureautique pour améliorer votre productivité et travailler avec efficacité.
                </p>
                <div style="margin-top: 20px;">
                    <a href="#" class="button" style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                        En savoir plus
                    </a>
                    <a href="#" class="button" style="background-color: #e74c3c; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        Réserver
                    </a>
                </div>
                <div class="social-icons" style="margin-top: 15px;">
                    <a href="#" style="margin-right: 10px; color: #3b5998;">
                        <i class="fab fa-facebook-square" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #00acee;">
                        <i class="fab fa-twitter" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #833ab4;">
                        <i class="fab fa-instagram" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="color: #0e76a8;">
                        <i class="fab fa-linkedin" style="font-size: 1.5em;"></i>
                    </a>
                </div>
            </div>

            <div class="formation" style="margin-top: 40px;">
                <img src="assets/images/infographie.jpg" alt="Formation en Infographie" style="width: 100%; border-radius: 10px;">
                <h3 style="font-size: 1.8em; color: #2c3e50; margin-top: 10px;">Formation en Infographie</h3>
                <p style="font-size: 1.1em; color: #34495e; line-height: 1.6;">
                    Développez vos compétences en création graphique et concevez des visuels percutants pour tous vos projets.
                </p>
                <div style="margin-top: 20px;">
                    <a href="#" class="button" style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                        En savoir plus
                    </a>
                    <a href="#" class="button" style="background-color: #e74c3c; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        Réserver
                    </a>
                </div>
                <div class="social-icons" style="margin-top: 15px;">
                    <a href="#" style="margin-right: 10px; color: #3b5998;">
                        <i class="fab fa-facebook-square" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #00acee;">
                        <i class="fab fa-twitter" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #833ab4;">
                        <i class="fab fa-instagram" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="color: #0e76a8;">
                        <i class="fab fa-linkedin" style="font-size: 1.5em;"></i>
                    </a>
                </div>
            </div>
            <div class="formation">
                <img src="assets/images/marketing.jpg" alt="Formation en Marketing Digital" style="width: 100%; border-radius: 10px;">
                <h3 style="font-size: 1.8em; color: #2c3e50; margin-top: 10px;">Formation en Marketing Digital</h3>
                <p style="font-size: 1.1em; color: #34495e; line-height: 1.6;">
                    Apprenez à utiliser les outils modernes et à maîtriser les stratégies essentielles pour maximiser la visibilité et l’impact de vos produits en ligne.
                </p>
                <div style="margin-top: 20px;">
                    <a href="#" class="button" style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                        En savoir plus
                    </a>
                    <a href="#" class="button" style="background-color: #e74c3c; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        Réserver
                    </a>
                </div>
                <div class="social-icons" style="margin-top: 15px;">
                    <a href="#" style="margin-right: 10px; color: #3b5998;">
                        <i class="fab fa-facebook-square" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #00acee;">
                        <i class="fab fa-twitter" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #833ab4;">
                        <i class="fab fa-instagram" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="color: #0e76a8;">
                        <i class="fab fa-linkedin" style="font-size: 1.5em;"></i>
                    </a>
                </div>
            </div>
            <div class="formation">
                <img src="assets/images/program.jpg" alt="Formation de Programmation" style="width: 100%; border-radius: 10px;">
                <h3 style="font-size: 1.8em; color: #2c3e50; margin-top: 10px;">Formation en Programmation</h3>
                <p style="font-size: 1.1em; color: #34495e; line-height: 1.6;">
                    Découvrez les bases fondamentales de la programmation et commencez à créer vos propres applications innovantes.
                </p>
                <div style="margin-top: 20px;">
                    <a href="#" class="button" style="background-color: #3498db; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                        En savoir plus
                    </a>
                    <a href="#" class="button" style="background-color: #e74c3c; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                        Réserver
                    </a>
                </div>
                <div class="social-icons" style="margin-top: 15px;">
                    <a href="#" style="margin-right: 10px; color: #3b5998;">
                        <i class="fab fa-facebook-square" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #00acee;">
                        <i class="fab fa-twitter" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="margin-right: 10px; color: #833ab4;">
                        <i class="fab fa-instagram" style="font-size: 1.5em;"></i>
                    </a>
                    <a href="#" style="color: #0e76a8;">
                        <i class="fab fa-linkedin" style="font-size: 1.5em;"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


</body>
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