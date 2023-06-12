<?php 
require_once('index.php');
include"connexion.php";
// Supprimer une donnée dans la base de données
$requete = "DELETE FROM library WHERE id = :id";

// On prépare la requête
$data = $db->prepare($requete);

$id = 1;

// On exécute la requête
$data->execute(array(
    'id' => $id
));


if (isset($_GET['id'])) {
    $livreId = $_GET['id'];

    header('Location: index.php');
    exit();
}
?>

?>
  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Supprimer le livre</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Êtes-vous sûr de vouloir supprimer ce livre ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
            <button type="button" class="btn btn-danger">Oui, supprimer</button>
            </div>
        </div>
        </div>
        
    </div>
    