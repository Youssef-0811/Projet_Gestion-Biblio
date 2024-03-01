<?php
include("DataBase.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $Ordre = $_POST['Ordre'];
    $EAN = $_POST['EAN'];
    $Titre = $_POST['Titre_Article'];
    $Classe = $_POST['genre'];
    $categorie = $_POST['Categorie'];
    $Inventaire = $_POST['Inventaire'];
    $Disponible = $_POST['Disponible'];
    $auteur_id = $_POST['author_id'];

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO livres (Ordre, EAN, Titre_Article, Classe, Categorie, Inventaire, Disponible, auteur_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters to the placeholders
    $stmt->bind_param("sssssssi", $Ordre, $EAN, $Titre, $Classe, $categorie, $Inventaire, $Disponible, $auteur_id);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to a success page or do any other actions
        header('location: Addbook.php');
        exit(); // Terminate the script after redirection    
    } else {
        // Print an error message if execution fails
        echo "Erreur: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
} else {
    // Print an error message if the form is not submitted correctly
    echo "Erreur: Le formulaire n'a pas été soumis correctement";
}
