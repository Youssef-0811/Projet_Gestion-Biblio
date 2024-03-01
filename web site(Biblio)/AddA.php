<?php
include("DataBase.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $Nom = $_POST['nom'];
    $Prenom = $_POST['prenom'];
    $DateNaissance = $_POST['date_naissance'];
    $Bio = $_POST['bio'];

    // File Upload Handling
    $targetDirectory = "images/";
    $Image = $targetDirectory . basename($_FILES["image"]["name"]);

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $Image)) {
        // Inserting data into the database
        $stmt = $conn->prepare("INSERT INTO auteurs (Nom, Prenom, DateNaissance, Bio, Image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $Nom, $Prenom, $DateNaissance, $Bio, $Image);

        if ($stmt->execute()) {
            header('location:AddAuthor.php');
        } else {
            echo "Erreur lors de l'insertion des données: " . $stmt->error;
        }

        $stmt->close(); // Close the prepared statement
    } else {
        echo "Désolé, une erreur s'est produite lors du téléchargement du fichier.";
    }
} else {
    echo "Erreur: Le formulaire n'a pas été soumis correctement.";
}
