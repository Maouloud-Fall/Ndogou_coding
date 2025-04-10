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
</body>
<footer>
    <div class="footer-container">
        <div class="footer-section logo-description">
            <img src="assets/images/logo.jpg" alt="Logo de Mon Site Web" class="footer-logo">
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
