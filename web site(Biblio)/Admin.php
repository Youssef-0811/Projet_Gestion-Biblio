<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Application de Gestion de Bibliothèque</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="banner">
        <span class="head">Application de Gestion de Bibliothèque</span><br />
        <marquee class="clg" direction="right" behavior="alternate" scrollamount="1">ECOLE SUPERIEUR DE TECHNOLOGIE</marquee>
    </div>
    <br />

    <div align="center">
        <div id="wrapper">
            <br />
            <br />

            <span class="SubHead">Bienvenue <?php ?></span>
            <br />
            <br />
            <table border="1px" class="table" cellpadding="10" cellspacing="10" width=500px>
                <tr>
                    <th colspan=6>
                        <h3 class='SubHead'><u>Gestion des livres:</u></h3>
                    </th>
                </tr>
                <tr>
                    <td><a href="Addbook.php" class="Command">Ajouter des livres</a></td>
                    <td><a href="bookRequests.php" class="Command">Livres souhaitées</a></td>
                </tr>
                <td><a href="Deletebook.php" class="Command">Supprimer des livres</a></td>
                </tr>
            </table>

            <br />
            <br />
            <table border="1px" class="table" cellpadding="10" cellspacing="10" width=500px>
                <tr>
                    <th colspan=6>
                        <h3 class='SubHead'><u>Gestion des demandes:</u></h3>
                    </th>
                </tr>

                <td><a href="demandes.php" class="Command">Demandes d'emprunts</a></td>
                <td><a href="pret.php" class="Command">Gestion des prêts</a></td>
                </tr>


            </table>
            <br>
            <br>
            <table border="1px" class="table" cellpadding="10" cellspacing="10" width=500px>
                <tr>
                    <th colspan=6>
                        <h3 class='SubHead'><u>Gestion des Auteurs:</u></h3>
                    </th>
                </tr>
                <tr>
                    <td><a href="AddAuthor.php" class="Command">Ajouter des Auteurs</a></td>
                    <td><a href="AuthorsList.php" class="Command">Listes des Auteurs</a></td>
                </tr>
                <td><a href="deleteAuteurs.php" class="Command">Supprimer des Auteurs</a></td>
                </tr>
            </table>
            <br />
            <br />
            <table border="1px" class="table" cellpadding="10" cellspacing="10" width=500px>
                <tr>
                    <th colspan=6>
                        <h3 class='SubHead'><u>Profil:</u></h3>
                    </th>
                </tr>
                <tr>
                    <td><a href="logout.php" class="Command">Se déconecter</a></td>

                    <td><a href="changePasswordAdmin.php" class="Command">Modifier mot de passe</a></td>
                </tr>
            </table>
            <br />
            <br />

        </div>
    </div>
</body>

</html>