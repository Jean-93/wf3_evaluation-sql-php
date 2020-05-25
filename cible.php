<?php
try
{
    // connection a la base de données en local
    $bdd = new PDO('mysql:host=localhost;dbname=immobilier;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    // affichage de l'erreur si il y en a
    die('erreur: ' . $e->getMessage());
}
?>

<?php
//test de vérification d'envoie fichier
if (isset($_FILES['photo'])AND $_FILES['photo']['error'] == 0)
{
    //test poid fichier
    if ($_FILES['photo']['size'] <= 1000000)
    {
        // test si extension autoriser
        $infosfichier = pathinfo($_FILES['photo']['name']);
        $extension_upload = $infosfichier['extension'];
        $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload,$extension_autorisees))
        {
            // Validation du fichier et stockage definitif
            move_uploaded_file($_FILES['photo']['tmp_name'],
            'uploads/' . basename($_FILES['photo']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}

?>