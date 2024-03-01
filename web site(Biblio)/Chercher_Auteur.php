<?php
include("DataBase.php");

// Fetch the list of authors from the database
$query = "SELECT ID, Nom, Prenom, Image FROM Auteurs";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Error fetching authors: ' . mysqli_error($conn));
}

$authors = array();

while ($row = mysqli_fetch_assoc($result)) {
    // Encode image data to base64
    $imageData = $row['Image'];
    // Format image data as a data URL
    $imageSrc = $imageData;

    // Add author data to the array
    $authors[] = array(
        'ID' => $row['ID'],
        'Nom' => $row['Nom'],
        'Prenom' => $row['Prenom'],
        'ImageSrc' => $imageSrc
    );
}

// Close the database connection
mysqli_close($conn);

// Return the list of authors as JSON
header('Content-Type: application/json');
echo json_encode($authors);
