<?php
if(isset($_GET["id_todo_modif"])){
    // var_dump($_GET);
    
    }else{
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>

</head>
<body style="background:url(Liste.jpg) repeat-y; postion:right;">
    <h1 class="text">Modification</h1>
    <form action="traitement.php" method="get" class="formulaire">
        <label for="" class="lab1"><?php echo $_GET["nom"] ?></label>
        <label for=""></label>
        <label for=""></label>
        <select name="modif_statut" id="statut">
            <option value="A faire">A faire</option>
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
        </select>
        <input type="submit" name="mise_en_jour" class="soumettre">
        <input type="hidden" name="id" value="<?php echo $_GET["id_todo_modif"] ?>">

    </form>
    
</body>
</html>