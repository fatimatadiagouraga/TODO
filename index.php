
<?php require_once("traitement.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>Todo App</h1>
    </nav>
    <section class="firstsection">
        <form action="traitement.php" class="firstform" method="get">
            <label for=""><strong>Tache à ajouter</strong> </label>
            <input type="text" name="ajout_tache" id="" placeholder="Tache à ajouter">
            <select name="ajout_statut" id="statut">
                <option value="A faire">A faire</option>
                <option value="En cours">En cours</option>
                <option value="Terminé">Terminé</option>
            </select>
            <input type="submit" name="ajout_tache_btn" value="Ajouter" class="ajouter"> 
        </form>
    </section>
    <section class="secondsection">
        <h2>Liste des tâches</h2><br><br>
        <table class="tab">
            <tr>
                <th>N°</th>
                <th>NOM</th>
                <th>STATUT</th>
                <th>MODIFICATION</th>
                <th>SUPPRESSION</th>
            </tr>
            <?php foreach($tuples as $tuple): ?>
            <tr>
                <td><?php echo $tuple ["id_todo"]; ?></td>
                <td><?php echo $tuple ["nom"]; ?></td>
                <td><?php echo $tuple ["statut"]; ?></td>
                <td><a style="text-decoration: none;" href="modifier.php?id_todo_modif=<?php echo$tuple ['id_todo'];?>&nom=<?php echo$tuple ['nom'];?>"> Modifier</a></td>
                <td><a style="text-decoration: none;" href="traitement.php?id_todo_supp=<?php echo$tuple ['id_todo'];?>">Supprimer</a></td>
                
            </tr>

            <?php endforeach; ?>
        </table>
    </section>
</body>
</html>