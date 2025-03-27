<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "database"; // Remplacez par le nom réel de votre base de données

$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $conn->real_escape_string($_POST['nom']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    $date_envoi = date('Y-m-d H:i:s');

    $sql = "INSERT INTO contact (nom, email, message) VALUES ('$nom', '$email', '$message', '$date_envoi')";

    if ($conn->query($sql) === TRUE) {
        // Message de succès
        $successMessage = "Votre message a bien été envoyé ! Merci de nous avoir contactés.";
    } else {
        // Message d'erreur
        $errorMessage = "Erreur : " . $conn->error;
    }
    $conn->close(); // Fermer la connexion après exécution
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Contactez-nous</title>
    <style>
        /* Style global */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
        }

        /* En-tête */
        header {
            background-color: #3498db;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
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
            gap: 20px;
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

        /* Contenu principal */
        .content-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
            text-align: center;
        }

        h1 {
            color: #3498db;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555555;
        }

        input, textarea {
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
        }

        textarea {
            resize: none;
        }

        button {
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d6fa5;
        }

        .message {
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
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

    <!-- Contenu principal -->
    <div class="content-wrapper">
        <div class="container">
            <h1>Contactez-nous</h1>

            <!-- Afficher les messages de succès ou d'erreur -->
            <?php if (!empty($successMessage)): ?>
                <p class="message success"><?= htmlspecialchars($successMessage); ?></p>
            <?php elseif (!empty($errorMessage)): ?>
                <p class="message error"><?= htmlspecialchars($errorMessage); ?></p>
            <?php endif; ?>

            <!-- Formulaire de contact -->
            <form method="post" action="">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</body>
<!-- Pied de page -->
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
