<!-- resources/views/blog.blade.php -->
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
    <title>Blog</title>
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

        /* Disposition en grille pour les articles de blog */
        .blog-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Grille responsive */
            gap: 20px; /* Espace entre les articles */
            padding: 20px;
        }

        .blog-post {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Ombre légère */
        }

        .blog-post h3 {
            color: #3498db;
        }

        .blog-post p {
            line-height: 1.5;
        }

        .blog-post a {
            color: #3498db;
            text-decoration: none;
        }

        .blog-post a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(128, 130, 131);
            color: white;
            padding: 10px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            width: 95%;
        }

        .footer-section {
            margin: 10px;
            text-align: left;
        }

        .footer-section i {
            margin-right: 8px;
            color: red;
        }

        .footer-section h4 {
            margin-bottom: 10px;
            color: white;
        }

        .footer-logo {
            max-width: 150px;
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
            color: rgb(241, 8, 20);
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

    <!-- Contenu principal -->
    <main>
        <h2>Bienvenue sur notre blog</h2>

        <!-- Conteneur pour les articles de blog -->
        <div class="blog-container">
            <div class="blog-post">
                <h3><a href="/blog/1">Titre de l'Article 1</a></h3>
                <p>Ceci est un résumé de l'article 1. Il parle de divers sujets intéressants et fournit des informations utiles.</p>
                <p><a href="/blog/1/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/2">Titre de l'Article 2</a></h3>
                <p>Ceci est un résumé de l'article 2. Vous y trouverez des conseils pratiques et des astuces.</p>
                <p><a href="/blog/2/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/3">Titre de l'Article 3</a></h3>
                <p>Ceci est un résumé de l'article 3. Cet article aborde des thèmes d'actualité et des réflexions personnelles.</p>
                <p><a href="/blog/3/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/4">Titre de l'Article 4</a></h3>
                <p>Ceci est un résumé de l'article 4. Découvrez des perspectives nouvelles et des analyses approfondies.</p>
                <p><a href="/blog/4/commentaires">Voir les commentaires</a></p>
            </div>
            <div class="blog-post">
                <h3><a href="/blog/5">Titre de l'Article 5</a></h3>
                <p>Ceci est un résumé de l'article 5. Il parle de divers sujets intéressants et fournit des informations utiles.</p>
                <p><a href="/blog/5/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/6">Titre de l'Article 6</a></h3>
                <p>Ceci est un résumé de l'article 6. Vous y trouverez des conseils pratiques et des astuces.</p>
                <p><a href="/blog/6/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/7">Titre de l'Article 7</a></h3>
                <p>Ceci est un résumé de l'article 7. Cet article aborde des thèmes d'actualité et des réflexions personnelles.</p>
                <p><a href="/blog/7/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/">Titre de l'Article 8</a></h3>
                <p>Ceci est un résumé de l'article 8. Découvrez des perspectives nouvelles et des analyses approfondies.</p>
                <p><a href="/blog/8/commentaires">Voir les commentaires</a></p>
            </div>
            <div class="blog-post">
                <h3><a href="/blog/9">Titre de l'Article 9</a></h3>
                <p>Ceci est un résumé de l'article 9. Il parle de divers sujets intéressants et fournit des informations utiles.</p>
                <p><a href="/blog/9/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/10">Titre de l'Article 10</a></h3>
                <p>Ceci est un résumé de l'article 10. Vous y trouverez des conseils pratiques et des astuces.</p>
                <p><a href="/blog/10/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/11">Titre de l'Article 11</a></h3>
                <p>Ceci est un résumé de l'article 11. Cet article aborde des thèmes d'actualité et des réflexions personnelles.</p>
                <p><a href="/blog/11/commentaires">Voir les commentaires</a></p>
            </div>

            <div class="blog-post">
                <h3><a href="/blog/12">Titre de l'Article 12</a></h3>
                <p>Ceci est un résumé de l'article 12. Découvrez des perspectives nouvelles et des analyses approfondies.</p>
                <p><a href="/blog/12/commentaires">Voir les commentaires</a></p>
            </div>
        </div>
    </main>

    <!-- Footer -->
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
                    <i class="fas fa-map-marker-alt"></i>
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
</body>
</html>
