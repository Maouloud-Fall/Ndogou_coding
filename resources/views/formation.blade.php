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
            background-color: #f0f8ff;
        }
        header {
            background-color: #3498db;
            padding: 15px;
            color: white;
            text-align: center;
        }
        /* Menu */
        .menu {
            display: flex;
            justify-content: center;
        }
        /* Accueil */
        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        .menu ul li {
            display: inline-block;
        }
        .menu ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu ul li a:hover {
            background-color: #1d6fa5;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <!-- Accueil -->
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