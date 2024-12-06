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

<!-- <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
//     // Afficher les données transmises
//     echo "<p>Civilité : " . htmlspecialchars($_POST['civilite'] ?? $_GET['civilite'] ?? '') . "</p>";
//     echo "<p>Nom : " . htmlspecialchars($_POST['nom'] ?? $_GET['nom'] ?? '') . "</p>";
//     echo "<p>Prénom : " . htmlspecialchars($_POST['prenom'] ?? $_GET['prenom'] ?? '') . "</p>";
// } else {
    // Afficher le formulaire
    ?>
    <form action="index.php" method="post">
        <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select><br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <button type="submit">Envoyer</button>
    </form>
    <?php
// }
?> -->

<!-- EXECRICE 7 -->

<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
//     // Afficher les données et informations sur le fichier
//     echo "<p>Civilité : " . htmlspecialchars($_POST['civilite']) . "</p>";
//     echo "<p>Nom : " . htmlspecialchars($_POST['nom']) . "</p>";
//     echo "<p>Prénom : " . htmlspecialchars($_POST['prenom']) . "</p>";
//     echo "<p>Nom du fichier : " . htmlspecialchars($_FILES['fichier']['name']) . "</p>";
//     echo "<p>Extension : " . pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION) . "</p>";
// } else {
    // Afficher le formulaire
    ?>
    <!-- <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select><br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="fichier">Fichier :</label>
        <input type="file" name="fichier" id="fichier" required><br><br>
        <button type="submit">Envoyer</button>
    </form> -->
    <?php
// }
?>


<!-- EXECRICE 8 -->


<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
//     $extension = strtolower(pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION));
//     var_dump($extension);
//     if ($extension === 'pdf' || $extension === 'png' || $extension === 'jpg') {
//         // Afficher les données et le fichier
//         echo "<p>Civilité : " . htmlspecialchars($_POST['civilite']) . "</p>";
//         echo "<p>Nom : " . htmlspecialchars($_POST['nom']) . "</p>";
//         echo "<p>Prénom : " . htmlspecialchars($_POST['prenom']) . "</p>";
//         echo "<p>Nom du fichier : " . htmlspecialchars($_FILES['fichier']['name']) . "</p>";
//         echo "<p>Extension : " . htmlspecialchars($extension) . "</p>";
//     } else {
//         echo "<p>Le fichier envoyé n'est pas un PDF.</p>";
//     }
// } else{ 
    // Afficher le formulaire
    ?>
    <!-- <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select><br><br>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" required><br><br>
        <label for="fichier">Fichier :</label>
        <input type="file" name="fichier" id="fichier" accept=".pdf, .png, .jpg"  required><br><br>
        <button type="submit">Envoyer</button>
    </form> -->
    <?php
// }
?>


</body>
</html>
