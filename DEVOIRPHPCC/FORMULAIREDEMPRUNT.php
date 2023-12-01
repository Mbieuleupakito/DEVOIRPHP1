<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORMULAIRE D'EMPRUNT</h1>

<!DOCTYPE html>
<html>
<head>
    <title>Gestion de la bibliothèque - Emprunt</title>
</head>
<body>
    <h1>Emprunt d'un livre</h1>
    <form method="POST" action="STOCKAGEDONNEES.php">
        <!-- Champ : Nom du lecteur -->
        <label for="nom_lecteur">Nom du lecteur :</label>
        <input type="text" name="nom_lecteur" id="nom_lecteur" required><br><br>

        <!-- Champ : Code de l'ouvrage -->
        <label for="code_ouvrage">Code de l'ouvrage :</label>
        <input type="text" name="code_ouvrage" id="code_ouvrage" required><br><br>

        <!-- Champ : Titre de l'ouvrage -->
        <label for="titre_ouvrage">Titre de l'ouvrage :</label>
        <input type="text" name="titre_ouvrage" id="titre_ouvrage" required><br><br>

        <!-- Champ : Date d'emprunt -->
        <label for="date_emprunt">Date d'emprunt :</label>
        <input type="date" name="date_emprunt" id="date_emprunt" required><br><br>

        <!-- Champ : Date de retour -->
        <label for="date_retour">Date de retour :</label>
        <input type="date" name="date_retour" id="date_retour" required><br><br>

        <!-- Champ : Nombre de livres empruntés -->
        <label for="nb_livres_empruntes">Nombre de livres empruntés :</label>
        <input type="number" name="nb_livres_empruntes" id="nb_livres_empruntes" required><br><br>

        <!-- Bouton : Enregistrer l'emprunt -->
        <input type="submit" value="ENREGISTRER L'EMPRUNT">
    </form>
    
    <a href="PAGEPRINCIPALE.php"><input type="submit" value="RETOUR"></a>
</body>
</html>


</body>
</html>