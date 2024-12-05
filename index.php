<?php

    //EXERCICE 1

    //   // Vérification si les paramètres existent
    //   if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    //     // Affichage des paramètres
    //     echo "<p>Nom : " . htmlspecialchars($_GET['lastname']) . "</p>";
    //     echo "<p>Prénom : " . htmlspecialchars($_GET['firstname']) . "</p>";
    // } else {
    //     // Message d'erreur si les paramètres sont absents
    //     echo "<p>Les paramètres 'lastname' et 'firstname' ne sont pas présents dans l'URL.</p>";
    // }

    //EXERCICE 2


    // if (isset($_GET['age'])) {
    //     echo "<p>Age: " . htmlspecialchars($_GET['age']) . "</p>";

    // }else{
    //     echo "<p>Le paramètres 'age'  n'est' pas présent dans l'URL.</p>";
    // }

    //EXERCICE 3

    //   // Vérification si les paramètres existent
    //   if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    //     // Affichage des paramètres
    //     echo  htmlspecialchars($_GET['startDate']) . "</p>";
    //     echo  htmlspecialchars($_GET['endDate']) ;
    // } else {
    //     // Message d'erreur si les paramètres sont absents
    //     echo "<p>Les paramètres 'startDate' et 'endDate' ne sont pas présents dans l'URL.</p>";
    // }

    //EXERCICE 4

    //   // Vérification si les paramètres existent
    //   if (isset($_GET['language']) && isset($_GET['server'])) {
    //     // Affichage des paramètres
    //     echo  htmlspecialchars($_GET['language']) . "</p>";
    //     echo  htmlspecialchars($_GET['server']) ;
    // } else {
    //     // Message d'erreur si les paramètres sont absents
    //     echo "<p>Les paramètres 'language' et 'server' ne sont pas présents dans l'URL.</p>";
    // }

    //EXERCICE 5


    // if (isset($_GET['week'])) {
    //     echo "<p>week: " . htmlspecialchars($_GET['week']) . "</p>";

    // }else{
    //     echo "<p>Le paramètres 'week'  n'est' pas présent dans l'URL.</p>";
    // }


    //EXERCICE 6

    //   // Vérification si les paramètres existent
    //   if (isset($_GET['building']) && isset($_GET['room'])) {
    //     // Affichage des paramètres
    //     echo  htmlspecialchars($_GET['building']) . "</p>";
    //     echo  htmlspecialchars($_GET['room']) ;
    // } else {
    //     // Message d'erreur si les paramètres sont absents
    //     echo "<p>Les paramètres 'building' et 'room' ne sont pas présents dans l'URL.</p>";
    // }

    ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<!-- EXECRICE 3 -->
 
    <!-- <form action="./process/user.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form>-->

<!-- EXECRICE 4 -->

    <!--<form action="./process/user.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>
        <button type="submit">Envoyer</button>
    </form> -->

<!-- EXECRICE 5 -->

    <!-- <form action="index.php" method="POST">
        <label for="civilite">Civilité :</label>
        <select id="civilite" name="civilite" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>

        <button type="submit">Envoyer</button>
    </form> -->

<!-- EXECRICE 6 -->

<?php
    // Vérifier si des données ont été transmises via POST ou GET
    if (!empty($_POST) || !empty($_GET)) {
        // Récupérer les données en fonction de la méthode utilisée
        $method = !empty($_POST) ? $_POST : $_GET;
        $civilite = htmlspecialchars($method['civilite'] ?? '');
        $nom = htmlspecialchars($method['nom'] ?? '');
        $prenom = htmlspecialchars($method['prenom'] ?? '');
        $fichier = htmlspecialchars($method['fichier'] ?? '');
        $extensionFichier = $infoFichier($method['extension'] ?? ''); 
        // Afficher les données transmises
        echo "<h1>Informations reçues :</h1>";
        echo "<p><strong>Civilité :</strong> $civilite</p>";
        echo "<p><strong>Nom :</strong> $nom</p>";
        echo "<p><strong>Prénom :</strong> $prenom</p>";
        echo "<p><strong>Fichier :</strong> $fichier</p>";
        echo "<p><strong>Fichier :</strong> $extensionFichier</p>";
    } else {
        // Si aucune donnée n'est transmise, afficher le formulaire
        ?>
        <h1>Formulaire Civilité</h1>
        <form action="index.php" method="POST">
            <label for="civilite">Civilité :</label>
            <select id="civilite" name="civilite" required>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <br><br>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <br><br>

            <label for="fichier">Choisissez un fichier :</label>
        <input type="file" id="fichier" name="fichier" accept="image/*" required>
        <br><br>

            <button type="submit">Envoyer</button>
        </form>
        <?php
    }
    ?>

</body>
</html>
