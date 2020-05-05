<?php
$bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8', 'root', 'root');
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Logement</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form action="cible.php" method="post" enctype="multipart/form-data">
            
            <br>

            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" required>
            
            <br>

            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" required>

            <br>

            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" required>

            <br>

            <label for="cp">CP</label>
            <input type="text" name="cp" id="cp" required>

            <br>

            <label for="surface">Surface</label>
            <input type="text" name="surface" id="surface" required>

            <br>

            <label for="prix">Prix</label>
            <input type="text" name="prix" id="prix" required>

            <br>
            <br>

            <input type="file" name="photo" /><br>

            <br>

            Est-ce une vente ou une location ?
            <input type="radio" name="genre" value="location" id="location" checked="checked"><label for="location"> location </label>
            <input type="radio" name="genre" value="vente" id="vente" required><label for="vente"> vente </label>
            
            <br>
            
            <textarea name="descriptif" rows="10" cols="50">
            Décrivez le bien immobilier ici.
            </textarea>

            <br>
            <br>

            <label for="envoye"></label>
            <input type="submit" value="Envoyé le formulaire">
        </form>
    </body>
</html>