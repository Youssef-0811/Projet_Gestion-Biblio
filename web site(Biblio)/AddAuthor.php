<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Application de Gestion de Bibliothèque</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
</head>

<body>
    <div id="banner">
        <span class="head">Application de Gestion de Bibliothèque</span><br />
        <marquee class="clg" direction="right" behavior="alternate" scrollamount="1">ECOLE SUPERIEUR DE TECHNOLOGIE DE FKIH BEN SALAH</marquee>
    </div>
    <br />
    <div align="center">
        <div id="wrapper">
            <br />
            <br />
            <span class="SubHead">AJOUTER DES AUTEURS</span>
            <br />
            <br />
            <form action="AddA.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="nom">Nom:</label></td>
                        <td><input type="text" id="nom" name="nom" required></td>
                    </tr>
                    <tr>
                        <td><label for="prenom">Prenom:</label></td>
                        <td><input type="text" id="prenom" name="prenom" required></td>
                    </tr>
                    <tr>
                        <td><label for="date_naissance">Date de Naissance:</label></td>
                        <td><input type="date" id="date_naissance" name="date_naissance"></td>
                    </tr>
                    <tr>
                        <td><label for="bio">Bio:</label></td>
                        <td><textarea id="bio" name="bio"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="image">Image:</label></td>
                        <td><input type="file" id="image" name="image" accept="image/*"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" name="submit"></td>
                    </tr>
                </table>
            </form>
            <br />
            <br />
            <a href="Admin.php" class="link">Retour</a>
            <br />
            <br />
        </div>
    </div>
</body>

</html>