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
  <link rel="stylesheet" href="Style.css">
  <title>Document</title>
</head>

<body>



  <header>
    <div class="contenair">
      >
      <h4>Bibliotheque.web
      </h4>

      <div class="posi">
        <nav>
          <ul class="items">
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="Registration.php">Inscription</a></li>
            <li><a href="index.php">Bibliotheque</a></li>
            <li><a href="#">Reglement</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="userLogin.php">Login</a></li>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <br><br><br><br>


  </header>

  <div class="contenu">



    <?php
    if (!$result) {
      echo 'error';
    } else {


    ?>

      <Table class="content-table">
        <thead>
          <tr>
            <th>EAN</th>
            <th>Titre d'article</th>
            <th>Classe</th>
            <th>Categorie</th>
            <th></th>
          </tr>
        </thead>
        <?php



        while ($ligne = mysqli_fetch_array($result)) {
        ?>
          <form action="Empr.php" method="post">
            <tbody>
              <tr>
                <td> <?php echo $ligne['EAN'] ?> </td>
                <td> <?php echo $ligne['Titre_Article'] ?> </td>
                <td> <?php echo $ligne['Classe'] ?> </td>
                <td> <?php echo $ligne['Categorie'] ?> </td>


                <input type="hidden" name="N°" value="<?php echo $ligne['N°'] ?>">
                <input type="hidden" name="ean" value="<?php echo $ligne['EAN'] ?>">
                <input type="hidden" name="titre" value="<?php echo $ligne['Titre_Article'] ?>">
                <input type="hidden" name="classe" value="<?php echo $ligne['Classe'] ?>">
                <input type="hidden" name="categorie" value="<?php echo $ligne['Categorie'] ?>">

                <td> <button type="submit" name="submit"> Empruter</button></a></td>
              </tr>
            </tbody>
          </form>
        <?php

        } ?>

      </Table>
    <?php } ?>


  </div>











</body>

</html>