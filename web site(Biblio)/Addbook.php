<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Application de Gestion de Bibliothèque</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <script>
        function fetchAuthors() {
            var authorSelect = document.getElementById("authorSelect");
            if (authorSelect.options.length === 1 && authorSelect.options[0].value === "") {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "Chercher_Auteur.php", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var authors = JSON.parse(xhr.responseText);
                        authors.forEach(function(author) {
                            var option = document.createElement("option");
                            option.value = author.ID;
                            option.textContent = author.Nom + ' ' + author.Prenom;

                            // Create an image element
                            var img = document.createElement('img');
                            img.src = author.ImageSrc;
                            img.width = 30;
                            img.height = 30;

                            // Append the image to the option
                            option.appendChild(img);

                            authorSelect.appendChild(option);
                        });
                    }
                };
                xhr.send();
            }
        }
    </script>


</head>
<style>
    /* Your CSS styles here */
</style>

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
            <span class="SubHead">AJOUTER DES LIVRES</span>
            <br />
            <br />
            <form action="ADDb.php" method="POST">
                <table border="0" class="table" cellpadding="10" cellspacing="10">
                    <tr>
                        <td class="msg" align="center" colspan="2"></td>
                    </tr>
                    <tr>
                        <td class="labels">Ordre: </td>
                        <td><input type="text" id="Ordre" name="Ordre" placeholder="Entrer le nom de livre" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">EAN : </td>
                        <td><input type="text" id="EAN" name="EAN" placeholder="Entre EAN de livre" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">Titre Article : </td>
                        <td><input type="text" id="Titre_Article" name="Titre_Article" placeholder="Entrer le titre de l'article" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">Classe</td>
                        <td>
                            <select id="genre" name='genre'>
                                <option value='Dictionnaire'>Dictionnaire</option>
                                <option value='Informatique'>Informatique</option>
                                <option value='Mathematique'>Mathematique</option>
                                <option value='Physique'>Physique</option>
                                <option value='Chimie'>Chimie</option>
                                <option value='Biologie'>Biologie</option>
                                <option value='Science Appliquee'>Science Appliquee</option>
                                <option value='Ingenierie'>Ingenierie</option>
                                <option value='Gestion et service de lentreprise'>Gestion et service de l'entreprise</option>
                                <option value='Economie'>Economie</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="labels">Categorie: </td>
                        <td><input type="text" id="categorie" name="Categorie" placeholder="Categorie" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">Inventaire: </td>
                        <td><input type="text" id="Inventaire" name="Inventaire" placeholder="Inventaire" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">Disponible: </td>
                        <td><input type="text" id="Disponible" name="Disponible" placeholder="Disponible" size="25" class="fields" required="required" /></td>
                    </tr>
                    <tr>
                        <td class="labels">Auteurs: </td>
                        <td>
                            <div class="custom-dropdown">
                                <select id="authorSelect" name="author_id" class="custom-select" onclick="fetchAuthors()">
                                    <option value="">Select Author</option>
                                </select>
                            </div>
                        </td>




                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="submit" name="submit" class="fields" /></td>
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

<?php

?>