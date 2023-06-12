<?php 
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=library;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Active la gestion des erreurs
        ]
    );
} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include 'config.php';

    
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $annee = $_POST['annee'];
    $genre = $_POST['genre'];

  

    // Insérer le livre dans la base de données
    $query = "INSERT INTO livres (title, author, year, genre) VALUES ('$titre', '$auteur', '$annee', '$genre')";
    $result = mysqli_query($conn, $query);

    // Vérifier si l'insertion a réussi
    if ($result) {
        // Redirection vers la page d'accueil
        header("Location: index.php");
        exit();
    } else {
        // Gestion de l'erreur (vous pouvez afficher un message d'erreur approprié ou effectuer d'autres actions)
        echo "Erreur lors de l'ajout du livre";
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>

   

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestion de bibliothèque</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">   
            Ajouter un livre
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Année</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Le Grand Meaulnes</td>
                    <td>Alain-Fournier</td>
                    <td>1913</td>
                    <td>Roman</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Modifier</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>1984</td>
                    <td>George Orwell</td>
                    <td>1949</td>
                    <td>Dystopie</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Modifier</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
                    </td>
                </tr>
                <!-- Ajoutez plus de lignes si nécessaire -->
                
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>