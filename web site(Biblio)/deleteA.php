<?php
// Include database connection
include("DataBase.php");

// Check if the author ID is provided in the URL parameter
if (isset($_GET['id'])) {
    $author_id = $_GET['id'];

    // Prepare and execute the DELETE query
    $delete_query = "DELETE FROM Auteurs WHERE ID = $author_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        // Author successfully deleted
        header('location:deleteAuteurs.php');
    } else {
        // Error occurred while deleting author
        echo "Error deleting author: " . mysqli_error($conn);
    }
} else {
    // If author ID is not provided in the URL parameter
    echo "Author ID not provided.";
}
