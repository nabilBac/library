<?php

require_once('index.php');
include"connexion.php";


 $requete = "UPDATE library SET livre = :title WHERE id = :id";


 $data = $db->prepare($requete);


 $data->execute(array(
     "title" => "Le grand Meaulnes",
     "id" => 1
 ));


$title = $_POST['titre'];
$author = $_POST['Auteur'];
$year = $_POST['Année'];
$genre = $_POST['genre'];
$bookId = $_POST['1']; 

$sql = "UPDATE livres SET titre = '$title', auteur = '$author', annee = '$year', genre = '$genre' WHERE id = '1'";
$pdo->exec($sql)
('Location: index.php');
exit();
?>

?>