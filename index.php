<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire de Satisfaction - Forum de Football</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 95%;
            background-color: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin: 2vh auto;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #c1272d;
            margin-bottom: 2rem;
        }

        p {
            text-align: center;
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 2rem;
        }

        label {
            font-size: 1.1rem;
            font-weight: 500;
            color: #333;
            margin-bottom: 0.5rem;
            display: block;
        }

        .emoji-select {
            display: flex;
            justify-content: space-around;
            padding: 1rem 0;
            flex-wrap: wrap;
        }

        .emoji-select input[type="radio"] {
            display: none; /* Masque la case à cocher */
        }

        .emoji-select label {
            cursor: pointer;
            font-size: 5vw;
            transition: transform 0.3s ease, color 0.3s ease, border 0.3s ease;
            text-align: center;
            border: 2px solid transparent;
            padding: 0.5rem;
            border-radius: 50%; /* Ajoute un contour rond autour de l'emoji */
        }

        .emoji-select input[type="radio"]:checked + label {
            border: 2px solid #c1272d; /* Bordure visible lorsqu'un emoji est sélectionné */
            transform: scale(1.2); /* Agrandit légèrement l'emoji sélectionné */
        }

        .emoji-description {
            font-size: 0.9rem;
            color: #555;
            text-align: center;
            margin-top: -0.5rem;
        }

        select, textarea {
            width: 100%;
            padding: 0.8rem;
            margin-top: 0.5rem;
            border: 2px solid #ddd;
            border-radius: 0.5rem;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        select:focus, textarea:focus {
            border-color: #c1272d;
        }

        button {
            background-color: #c1272d;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            width: 100%;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
            margin-top: 1.5rem;
        }

        button:hover {
            background-color: white;
            color: #c1272d;
            border: 2px solid #c1272d;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo img {
            width: 100px;
        }

        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 2rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 1rem;
            text-align: center;
            z-index: 9999;
            border: 2px solid #9d9fa2;
        }

        .popup p {
            font-size: 1.5rem;
            color: #333;
        }

        .popup button {
            background-color: #c1272d;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1.2rem;
            margin-top: 1.5rem;
        }

        .popup button:hover {
            background-color: white;
            color: #c1272d;
            border: 2px solid #c1272d;
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }

            h1 {
                font-size: 2rem;
            }

            .emoji-select label {
                font-size: 6vw;
            }

            button {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding-left: 3rem;
                padding-right: 3rem;
            }

            h1 {
                font-size: 1.8rem;
            }

            .emoji-select label {
                font-size: 8vw;
            }

            button {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/Logo_Fédération_Calédonienne_Football.svg" alt="Logo Fédération Calédonienne de Football">
        </div>
        <h1>Questionnaire de Satisfaction</h1>
        <p>Merci de prendre un moment pour évaluer votre expérience lors de votre visite au forum sur le thème du football.</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="satisfaction1">1. Quel est votre niveau de satisfaction global ?</label><br>
                <div class="emoji-select">
                    <input type="radio" id="satisfaction1" name="satisfaction" value="Très satisfait" required>
                    <label for="satisfaction1">😃<br><span class="emoji-description">Très satisfait</span></label>
                    
                    <input type="radio" id="satisfaction2" name="satisfaction" value="Satisfait">
                    <label for="satisfaction2">😊<br><span class="emoji-description">Satisfait</span></label>
                    
                    <input type="radio" id="satisfaction3" name="satisfaction" value="Neutre">
                    <label for="satisfaction3">😐<br><span class="emoji-description">Neutre</span></label>
                    
                    <input type="radio" id="satisfaction4" name="satisfaction" value="Insatisfait">
                    <label for="satisfaction4">😕<br><span class="emoji-description">Insatisfait</span></label>
                    
                    <input type="radio" id="satisfaction5" name="satisfaction" value="Très insatisfait">
                    <label for="satisfaction5">😠<br><span class="emoji-description">Très insatisfait</span></label>
                </div>
            </div>

            <div class="form-group">
                <label for="organised1">2. Comment évalueriez-vous l'organisation du forum ?</label><br>
                <div class="emoji-select">
                    <input type="radio" id="organised1" name="organisation" value="Très bon" required>
                    <label for="organised1">👍<br><span class="emoji-description">Très bon</span></label>
                    
                    <input type="radio" id="organised2" name="organisation" value="Bon">
                    <label for="organised2">👌<br><span class="emoji-description">Bon</span></label>
                    
                    <input type="radio" id="organised3" name="organisation" value="Moyen">
                    <label for="organised3">🤷‍♂️<br><span class="emoji-description">Moyen</span></label>
                    
                    <input type="radio" id="organised4" name="organisation" value="Mauvais">
                    <label for="organised4">👎<br><span class="emoji-description">Mauvais</span></label>
                </div>
            </div>

            <div class="form-group">
                <label for="suggestions">3. Avez-vous des suggestions pour améliorer l'événement ?</label><br>
                <textarea id="suggestions" name="suggestions" rows="4" placeholder="Vos suggestions..."></textarea>
            </div>

            <div class="form-group">
                <label for="recommendation">4. Recommanderiez-vous cet événement à un ami ?</label><br>
                <select id="recommendation" name="recommendation" required>
                    <option value="oui">Oui 👍</option>
                    <option value="non">Non 👎</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>

    <div id="popup" class="popup">
        <p id="popup-message"></p>
        <button id="popup-ok-btn">OK</button>
    </div>

    <script>
        document.getElementById('popup-ok-btn').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
            window.location.href = window.location.href.split('?')[0];
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost"; // ou l'adresse de votre serveur MySQL
        $username = "votre_utilisateur";
        $password = "votre_mot_de_passe";
        $dbname = "nom_de_la_base_de_donnees";

        // Créer la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            echo "<script>
                    document.getElementById('popup-message').textContent = 'Erreur de connexion à la base de données.';
                    document.getElementById('popup').style.display = 'block';
                  </script>";
            die();
        }

        // Préparer la requête
        $stmt = $conn->prepare("INSERT INTO reponses (satisfaction, organisation, suggestions, recommendation) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $satisfaction, $organisation, $suggestions, $recommendation);

        // Nettoyer les données
        $satisfaction = htmlspecialchars($_POST['satisfaction']);
        $organisation = htmlspecialchars($_POST['organisation']);
        $suggestions = !empty($_POST['suggestions']) ? htmlspecialchars($_POST['suggestions']) : "Aucune suggestion"; // Suggestions optionnelles
        $recommendation = htmlspecialchars($_POST['recommendation']);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "<script>
                    document.getElementById('popup-message').textContent = 'Merci pour votre retour ! Vos réponses ont été enregistrées.';
                    document.getElementById('popup').style.display = 'block';
                  </script>";
        } else {
            echo "<script>
                    document.getElementById('popup-message').textContent = 'Erreur lors de l\'enregistrement des réponses.';
                    document.getElementById('popup').style.display = 'block';
                  </script>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
