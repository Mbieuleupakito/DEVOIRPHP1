<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>S'ENREGISTRER</h1>
    <form action ="traitement.php" method = "POST">
    <legend><h1>FORMULAIRE D'INSCRIPTION</h1></legend>
    <div>
        <label for="username">NOM :</label>
        <input type="text" id="username" name="nomutlisateur" >

    </div>
    <div>
        <label for="prenom">PRENOM :</label>
        <input type="text" id="prenom" name="prenomutilisateur" >

    </div>
    <div>
        <label for="email">EMAIL :</label>
        <input type="email" id="email" name="emailutilisateur" >

    </div>
    <div>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="motdepasse">
    </div>
    <div>
    <br>    
        <label>SEXE :</label><br>
        <input type="radio" id="garcon" name="sexe" value="garcon">
        <label for="garcon">Garcon</label><br>
        <input type="radio" id="fille"name="sexe" value="fille">
        <label for="fille">Fille</label><br><br>
    </div>
    <input type="submit" value="ENREGISTRER">
    <a href="PAGEPRINCIPALE.php"><input type="submit" value="suivant"></a>
</body>
</html>