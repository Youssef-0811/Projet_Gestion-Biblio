<?php
// Include database connection
include("DataBase.php");

// Retrieve author information including the count of books
$query = "SELECT A.ID, A.Nom, A.Prenom, A.Image, COUNT(L.Numero) AS BookCount
FROM Auteurs A
LEFT JOIN livres L ON A.ID = L.auteur_id
GROUP BY A.ID
";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Authors</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can link your CSS file here -->
</head>

<body>
    <h1>Delete Authors</h1>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Number of Books</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td><img src="' . $row['Image'] . '" width="50" height="50"></td>';
            echo '<td>' . $row['Nom'] . ' ' . $row['Prenom'] . '</td>'; // Display name
            echo '<td>' . $row['BookCount'] . '</td>'; // Display book count
            echo '<td><a href="deleteA.php?id=' . $row['ID'] . '">Delete</a></td>'; // Delete link with author ID
            echo '</tr>';
        }
        ?>
    </table>
    <td> <a href="Admin.php"><button> Retour</button></a></td>
</body>

</html>