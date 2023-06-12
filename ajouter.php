<?php 
require_once('index.php');
include"connexion.php";
// Insertion de données en base de données
$requete = "INSERT INTO blog(title_blog, desc_blog, img_blog) VALUES(:title, :description, :img)";

// Préparation de la requête
$data = $db->prepare($requete);


$data->execute(array(
    'title' => "Le Grand Meaulnes",
    'author' => "Alain Fournier",
    'year' => "1913",
    'genre' => "Roman"));
   
$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$genre = $_POST['genre'];


header('Location: index.php');
exit();
?>
?>

 <!-- Add Book Modal -->
 <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Ajouter un livre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Auteur</label>
                            <input type="text" class="form-control" id="author">
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Année</label>
                            <input type="number" class="form-control" id="year">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Sauvegarder</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modifier le livre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="book-title" class="form-label">Titre du livre</label>
                        <input type="text" class="form-control" id="book-title" value="Titre factice">
                    </div>
                    <div class="mb-3">
                        <label for="book-author" class="form-label">Auteur du livre</label>
                        <input type="text" class="form-control" id="book-author" value="Auteur factice">
                    </div>
                    <div class="mb-3">
                        <label for="book-year" class="form-label">Année de publication</label>
                        <input type="number" class="form-control" id="book-year" value="2000">
                    </div>
                    <div class="mb-3">
                        <label for="book-genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="book-genre" value="Genre">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Sauvegarder les modifications</button>
            </div>
        </div>
        </div>
    </div>