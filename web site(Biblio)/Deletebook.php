<?php


include("DataBase.php");


$sql = 'select * from livres';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <Table>
        <tr>
            <td>EAN</td>
            <td>Titre d'article</td>
            <td>Classe</td>
            <td>Categorie</td>
        </tr>

        <?php



        while ($ligne = mysqli_fetch_array($result)) {
        ?>
            <form action="delete.php" method="post">
                <tr>
                    <td> <?php echo $ligne['EAN'] ?> </td>
                    <td> <?php echo $ligne['Titre_Article'] ?> </td>
                    <td> <?php echo $ligne['Classe'] ?> </td>
                    <td> <?php echo $ligne['Categorie'] ?> </td>


                    <input type="hidden" name="Numero" value="<?php echo $ligne['Numero'] ?>">


                    <td> <button type="submit" name="submit"> Supprimer</button></a></td>

                </tr>
            </form>
        <?php

        } ?>
    </Table>
    <td> <a href="Admin.php"><button> Retour</button></a></td>




</body>

</html>