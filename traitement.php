<?php 
//echo "<pre>";
//vardump est une propriete php qui permet d'afficher les donnees stocker dans la methode get
    //var_dump($_GET);
//echo "</pre>";
//$nom = $_GET["ajout_tache"];
//$statut = $_GET["ajout_statut"];
//echo $nom . "=>" . $statut;

try{
$connecteur = new PDO ("mysql:host=localhost;dbname=todoapp","root","");
echo " ";
}catch(PDOException $e){
echo "echec de la connexion : " .$e->getMessage();
}

$requete = $connecteur->prepare("SELECT * FROM taches");
$requete->execute();
$tuples=$requete->fetchAll(PDO::FETCH_ASSOC);

//verifie l'existance des donnees transmis par get et stocher dans $nom et $statut
if (isset($_GET["ajout_tache_btn"])){
    var_dump($_GET);
    $nom = $_GET["ajout_tache"];
    $statut = $_GET["ajout_statut"];
    if(!empty($nom) and !empty($statut)){
     //proceder a l'insertion si cest pas vide
     $requete = $connecteur->prepare("INSERT INTO taches VALUES(NULL, :nom, :statut)");
     $requete->bindParam(":nom", $nom);
     $requete->bindParam(":statut", $statut);
     $requete->execute();
     header("Location: index.php");
    }else{
       
    }

}
if (isset($_GET["id_todo_supp"])){
    $requete = $connecteur->prepare("DELETE FROM taches WHERE id_todo=:id");
    $requete->bindParam(":id", $_GET["id_todo_supp"]);
    $requete->execute();
    header("Location: index.php");
}else{

}

if (isset($_GET["mise_en_jour"])){
    // var_dump($_GET);
    $requete = $connecteur->prepare("UPDATE taches SET statut=:modif_statut WHERE id_todo=:id ");
    $requete->bindParam(":modif_statut", $_GET["modif_statut"]);
    $requete->bindParam(":id", $_GET["id"]);
    $requete->execute();
    header("Location: index.php");
}



?>