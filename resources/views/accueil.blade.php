<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Accueil</title>
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

        /* Bannière */
        .banner {
            background-color: #1d6fa5; /* Couleur de fond */
            color: black; /* Couleur du texte en noir */
            text-align: center; /* Texte centré */
            padding: 20px; /* Espacement intérieur */
            font-size: 1.5rem; /* Taille du texte */
            margin-bottom: 20px; /* Espace sous la bannière */
        }

        /* Section principale avec l'image en arrière-plan */
        .background {
            background-image: url('assets/images/heade.jpg'); /* Chemin vers l'image */
            background-size: cover; /* L'image couvre toute la section */
            background-position: center; /* L'image est centrée */
            height: 70vh; /* Hauteur de la fenêtre visible */
            color: white; /* Couleur du texte par défaut */
            display: flex;
            justify-content: center; /* Centre horizontalement le contenu */
            align-items: center; /* Centre verticalement le contenu */
            text-align: center;
        }

        .background a {
            text-decoration: none; /* Supprime la ligne sous le lien */
            color: white; /* Définit la couleur du lien en blanc */
        }

        .background a:hover {
            text-decoration: underline; /* Ajoute une ligne au survol (optionnel) */
        }

        .background h1, .background p {
            color: white; /* Assure que le texte, y compris le titre et le paragraphe, reste blanc */
        }


        /* Disposition principale */
        .main-layout {
            display: flex;
            margin: 20px;
        }

        aside {
            width: 25%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 6px rgba(0, 0, 0, 0.1);
        }

        aside h2 {
            margin-top: 0;
            color: #3498db;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside ul li a:hover {
            color: #3498db;
        }

        .articles {
            width: 75%;
            padding: 20px;
            background-color: white;
        }

        .articles h1 {
            color: #3498db;
        }

        .articles p {
            color: #555555;
            line-height: 1.6;
        }

        /* Conteneur du slider */
        h2 {
            text-align: center;
            color: #3498db;
            margin-top: 20px;
        }

        /* Conteneur du slider */
        .slider-container {
            position: relative;
            max-width: 80%;
            margin: 20px auto;
            overflow: hidden; /* Masque les éléments hors du conteneur */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Images dans le slider */
        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out; /* Animation fluide */
        }

        .slider div {
            min-width: 33.33%; /* Chaque slide occupe 1/3 du conteneur */
            box-sizing: border-box;
            padding: 10px;
        }

        .slider img {
            width: 100%;
            height: 250px; /* Hauteur uniforme */
            object-fit: cover; /* Ajuste l'image sans déformation */
            border-radius: 8px;
        }

        /* Boutons de navigation */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 18px;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .prev:hover, .next:hover {
            background-color: #3498db;
        }

        /* Texte sous les images */
        .slider-caption {
            text-align: center;
            margin-top: 5px;
            font-size: 14px;
            color: #555555;
        }
        .slider img:hover {
            transform: scale(1.1); /* Agrandit légèrement l'image au survol */
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Renforce l'ombre au survol */
        }

        /* Section de l'équipe */
        .team-container {
            display: flex; /* Organiser en rangées horizontales */
            justify-content: center; /* Centrer horizontalement */
            flex-wrap: wrap; /* Permet le passage à la ligne si nécessaire */
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member {
            flex: 1 1 200px; /* Taille adaptable */
            max-width: 300px;
            margin: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s;
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

        .partners-section {
            text-align: center;
            padding: 40px;
            background-color: #f4f4f4; /* Fond clair pour démarquer la section */
        }

        .partners-section h2 {
            font-size: 28px;
            color: #333; /* Couleur de texte sombre */
            margin-bottom: 20px;
        }

        .partners {
            display: flex;
            justify-content: center;
            gap: 30px; /* Espacement entre les partenaires */
            flex-wrap: wrap; /* Permet d'aller à la ligne si nécessaire */
        }

        .partner {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 150px; /* Taille uniforme */
        }

        .partner img {
            max-width: 100%;
            height: auto;
            border-radius: 5px; /* Coins arrondis pour les images */
        }

        .partner p {
            margin-top: 10px;
            font-size: 16px;
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
    <!-- Section principale -->
    <div class="background">
        <div>
            <h1>Bienvenue chez nous !</h1>
            <a href="/about"><p>Découvrez notre notre plateforme.</p></a>
        </div>
    </div>

    <!-- Bannière -->
    <div class="banner">
        <h2>Explorez nos articles et ressources utiles</h2>
    </div>

    <!-- Disposition principale -->
    <div class="main-layout">
        <!-- Aside -->
        <aside>
            <h2>Réseaux Sociaux</h2>
            <ul>
                <img src="assets/images/img1.jpg" alt="">
            </ul>
        </aside>

        <!-- Articles -->
        <div class="articles">
            <h1>Articles Récents</h1>
            <strong>L'Importance de la Technologie dans le Monde Moderne</strong>
            <p>Depuis les premières inventions humaines, comme la roue et le feu, jusqu’aux merveilles modernes comme l’intelligence artificielle et les systèmes de navigation satellitaire, la technologie a été un pilier fondamental de l'évolution de la société. Elle a façonné chaque aspect de notre vie quotidienne, redéfinissant notre manière de communiquer, de travailler, d'apprendre et même de rêver.
                Au fil des siècles, les innovations technologiques ont marqué des jalons significatifs dans l'histoire de l'humanité. Prenons l'exemple de l'invention de l'imprimerie par Johannes Gutenberg au XVe siècle. Cet événement a révolutionné la diffusion du savoir, rendant les livres accessibles à un plus grand nombre de personnes et posant les bases de la Renaissance. Avant l’imprimerie, les manuscrits étaient copiés à la main, un processus laborieux et réservé à une élite. Avec l’arrivée des livres imprimés, le savoir s’est démocratisé, transformant des sociétés entières.</p>
            <strong>L'Ère Numérique et la Connectivité</strong>
            <p>Le XXe siècle a vu l’émergence de technologies numériques qui ont transformé notre manière de communiquer. L'invention de l'ordinateur personnel, suivie d'Internet, a ouvert des horizons inimaginables. Aujourd'hui, avec les smartphones, les réseaux sociaux et les outils de messagerie instantanée, nous vivons dans un monde où l'information circule à une vitesse vertigineuse. Cette connectivité a rapproché des gens à travers le globe, permettant la collaboration entre cultures, langues et frontières.
                Cependant, cette ère numérique n'est pas sans défis. Les questions liées à la confidentialité des données, aux cyberattaques et à la désinformation montrent que la technologie, bien qu’essentielle, doit être utilisée avec soin et responsabilité. Les géants de la technologie, comme les développeurs de plateformes numériques, jouent un rôle crucial dans l’équilibre entre innovation et éthique.</p>
            <strong>L'Intelligence Artificielle : L'Avenir en Marche</strong>
            <p>Au cœur de l'ère technologique actuelle se trouve l’intelligence artificielle. Ces systèmes, capables d’apprendre, de s’adapter et même de créer, redéfinissent ce que nous considérons comme possible. L’intelligence artificielle est utilisée dans des domaines aussi variés que la médecine, où elle aide à diagnostiquer des maladies, ou les transports, avec les voitures autonomes.</p>
        </div>
    </div>

    <!-- Galerie -->
    <h2>Mes Catégories</h2>
    <div class="slider-container">
        <!-- Slider -->
        <div class="slider">
            <div>
                <a href="/cours"><img src="assets/images/img1.jpg" alt="Image 1"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img2.jpeg" alt="Image 2"></a>
                <p class="slider-caption">Suivez votre cours de réseau telecom</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img3.jpg" alt="Image 3"></a>
                <p class="slider-caption">Cours d'intelligence artificielle</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img5.jpg" alt="Image 5"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img6.jpg" alt="Image 6"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
            <div>
                <a href="cours"><img src="assets/images/img7.jpg" alt="Image 7"></a>
                <p class="slider-caption">Suivez votre cours d'IA</p>
            </div>
        </div>
    </div>
    <!-- Section de l'équipe -->
    <div class="team-container">
        <!-- Membre 1 -->
        <div class="team-member">
            <img src="assets/images/member6.jpg" alt="Photo de M. Ndiaye">
            <h2>Mouhamadou Ndiaye</h2>
            <p>Rôle : PDG de l'IBMS</p>
            <p>Ndiaye dirige l'IBMS avec vision et expertise, mettant à profit ses compétences en développement et gestion pour inspirer l'innovation et l'excellence au sein de l'organisation.</p>
        </div>
        <!-- Membre 2 -->
        <div class="team-member">
            <img src="assets/images/member2.jpg" alt="Photo de M. Ciss">
            <h2>Salif Ciss</h2>
            <p>Responsable du Département IT</p>
            <p>Ciss est un expert en technologies de l'information et en télécommunications, avec une solide expérience dans la gestion d'équipes et le développement de solutions innovantes.</p>
        </div>
        <!-- Membre 3 -->
        <div class="team-member">
            <img src="assets/images/member3.jpg" alt="Photo de M. Ndiaye">
            <h2>Amadou Moustapha Deme</h2>
            <p>Spécialité : Développement Mobile</p>
            <p>Deme est un développeur mobile reconnu pour ses applications innovantes et ses cours interactifs.</p>
        </div>
        <!-- Membre 5 -->
        <div class="team-member">
            <img src="assets/images/member5.jpg" alt="Photo de Amadou Diop">
            <h2>Ababacar Ndiaye</h2>
            <p>Spécialité : Designer</p>
            <p>Ndiaye est un designer innovateur passionné par les nouvelles technologies et le design responsable.</p>
        </div>
        
    </div>
    <div class="partners-section">
        <h2>Nos Partenaires</h2>
        <div class="partners">
            <div class="partner">
                <a href="https://www.eclosio.ong/country/senegal/" target="_blank">
                    <img src="assets/images/eclosio.png" alt="Logo partenaire 1">
                    <p>Eclosio</p>
                </a>
            </div>
            <div class="partner">
                <a href="https://plan-international.org/senegal/" target="_blank">
                    <img src="assets/images/plan.png" alt="Logo partenaire 2">
                    <p>Plan Intarnational</p>
                </a>
            </div>
            <div class="partner">
                <a href="http://www.ymcasenegal.org/" target="_blank">
                    <img src="assets/images/ymc.png" alt="Logo partenaire 3">
                    <p>YMCA Senegal</p>
                </a>
            </div>
            <div class="partner">
                <a href="https://paradigmhq.org/?lang=fr" target="_blank">
                    <img src="assets/images/para.png" alt="Logo partenaire 4">
                    <p>Paradigm Initiative</p>
                </a>
            </div>
            <div class="partner">
                <a href="#" target="_blank">
                    <img src="assets/images/belg.png" alt="Logo partenaire 5">
                    <p>Belgium </p>
                </a>
            </div>
            <div class="partner">
                <a href="https://anpej.sn/" target="_blank">
                    <img src="assets/images/anp.png" alt="Logo partenaire 6">
                    <p>ANPEJ</p>
                </a>
            </div>
        </div>
    <!-- Fin de la section des partenaires -->
    </div>

    <script>
        const slider = document.querySelector('.slider');
        let sliderIndex = 0;

        function slideContinuously() {
            sliderIndex++;
            if (sliderIndex >= slider.scrollWidth / slider.offsetWidth) {
                sliderIndex = 0; // Réinitialise au début
                slider.style.transition = 'none'; // Supprime la transition pour revenir au début
                slider.style.transform = `translateX(0%)`;
            } else {
                slider.style.transition = 'transform 0.5s linear'; // Réapplique la transition fluide
                slider.style.transform = `translateX(-${sliderIndex * 100 / 3}%)`;
            }
        }

        // Lancer le slider continu
        setInterval(slideContinuously, 2000); // Change toutes les 2 secondes
    </script>
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
