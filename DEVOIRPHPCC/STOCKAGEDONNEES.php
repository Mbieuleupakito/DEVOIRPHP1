

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <!-- Le tableau pour afficher les données -->
    <table>
        <tr>
            <th>Nom du lecteur</th>
            <th>Code de l'ouvrage</th>
            <th>Titre de l'ouvrage</th>
            <th>Date d'emprunt</th>
            <th>Date de retour</th>
            <th>Nombre de livre emprunte</th>
            
        </tr>
        <tr>
            <!-- Utilisation de PHP pour afficher les données du formulaire -->
            <td><?php echo isset($_POST['nom_lecteur']) ? $_POST['nom_lecteur'] : ''; ?></td>
            <td><?php echo isset($_POST['code_ouvrage']) ? $_POST['code_ouvrage'] : ''; ?></td>
            <td><?php echo isset($_POST['titre_ouvrage']) ? $_POST['titre_ouvrage'] : ''; ?></td>
            <td><?php echo isset($_POST['date_emprunt']) ? $_POST['date_emprunt'] : ''; ?></td>
            <td><?php echo isset($_POST['date_retour']) ? $_POST['date_retour'] : ''; ?></td>
            <td><?php echo isset($_POST['nb_livres_empruntes']) ? $_POST['nb_livres_empruntes'] : ''; ?></td>
            
            
        </tr>
        
    </table>
    <br>
    <div>