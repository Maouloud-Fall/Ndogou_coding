<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
            color: #555555;
        }
        input {
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 14px;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .message {
            margin-bottom: 15px;
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'Inscription</h1>

        <!-- Affichage des messages d'erreur -->
        @if ($errors->any())
            <div class="message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Affichage des messages de succès -->
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <!-- Formulaire -->
        <form action="/inscription" method="POST">
            @csrf
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Créez un mot de passe" required>

            <button type="submit">S'inscrire</button>
            <a href="/login">Se connecter</a>
        </form>
    </div>
</body>
</html>
