<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab30afb513.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Styles/Main.css">
    <link rel="stylesheet" href="Styles/Contact.css">

    <script src="Script/Contact.js" defer></script>

    <title>Contact</title>
</head>
<body id="body_contact">

    <header>
        <div id="back_image">
            <img src="Images/pexels-travis-rupert-1032650.jpg" alt="image de fond header">
        </div>

        <div id="header_bar">
            <div id="logo">
                <img src="Images/site webPlan de travail 1.png" alt="logo de la marque">

            </div>

            
            <nav>
                <ul id="menu">
                    <li><a href="Accueil.html">Accueil</a></li>
                    <li><a href="Produit.html">Produit</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </nav>
            
          
        </div>
    </header>

    <div id="transition">
        <img src="Images/site web transitionPlan de travail 1.png" alt="image de transition">
    </div>

    <main>

        <h1>Nous Contactez</h1>

        <div id="container_form">
            <form action="Contact.php" method="post">

                <label for="Nom">Nom :</label>
                <input type="text" id="Nom" name="Nom">
    
                <label for="Prenom">Prénom :</label>
                <input type="text" id="Prenom" name="Prenom">
    
                <label for="Mail">Mail :</label>
                <input type="email" id="Mail" name="Mail">
    
                <label for="Message">Message :</label>
                <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
    
                <button id="btn_envoie">Envoyer</button>
            </form>
            
        </div>
        
        <div class="container">
        
            <?php
            // Vérification de la soumission du formulaire
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Récupération des données
                $firstName = $_REQUEST['Nom'];
                $lastName = $_REQUEST['Prenom'];
                $email = $_REQUEST['Mail'];
                $message = $_REQUEST['Message'];
                $errors = 0;
                // Vérification des données
                if (empty($firstName)) {
                    echo '<div class="alert alert-erreur">Le prénom est requis !</div>';
                    $errors++;
                }
                if (empty($lastName)) {
                    echo '<div class="alert alert-erreur">Le nom est requis !</div>';
                    $errors++;
                }
                if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<div class="alert alert-erreur">L\'email est invalide !</div>';
                    $errors++;
                }
                if (strlen($message) < 10) {
                    echo '<div class="alert alert-erreur">Le message doit contenir au minimum 10 caractères !</div>';
                    $errors++;
                }
                // Traitement du formulaire
                if (empty($errors)) {
                    // Fonction Email
                    // mail('florian.lacroix@my-digital-school.org', 'Demande de contact', $message);
                    // Suppression des variables
                    unset($firstName);
                    unset($lastName);
                    unset($email);
                    unset($message);
                    echo '<div class="alert alert-succes">Votre message a été envoyé avec succès !</div>';
                }
            }
            ?>


        </div>



    </main>

    <div id="logo_tournant_contact">
        <img src="Images/site web sans texte Plan de travail 1.png" alt="logo géant qui tourne" id="logo_tourne">
    </div>

    <footer id="footer_contact">
        
        <div id="liens_RS">
            <h3>Liens réseaux sociaux</h3>
            <ul>
                <li><a href=""><i class="fa-brands fa-square-instagram fa-2xl"></i></a></li>
                <li><a href=""><i class="fa-brands fa-square-facebook fa-2xl"></i></a></li>
                <li><a href=""><i class="fa-brands fa-square-twitter fa-2xl"></i></a></li>
            </ul>
        </div>

        <div id="liens_page">
            <h3>Liens du site</h3>
            <ul>
                <li><a href="Accueil.html">Accueil</a></li>
                <li><a href="Produit.html">Produit</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </div>


    </footer>
    
</body>
</html>