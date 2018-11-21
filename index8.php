<?php
if (!empty($_FILES['file']['name'])){
    $fileName = $_FILES['file']['name'];
    $type = pathinfo($fileName)['extension'];
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8 PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <h1>Bienvenue</h1>
    <h2>Commencez-donc par vous inscrire :</h2>

    <?php
    if (!empty($_POST['lastname']) && !empty($_POST['firstname'])) {
        if ($type != 'png'){
            echo 'veuillez télécharger un fichier de type .png';
        } else {
            echo 'Bonjour ' . htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['lastname']) . ' ' . $fileName;
        }
    } else {
        ?>
    <form action="index8.php" method="POST" enctype="multipart/form-data">
            <p><select name="gender">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select></p>
            <p><label for="lastname">Votre nom : </label><input type="text" name="lastname" id="lastname"/></p>
            <p><label for="firstname">Votre prénom : </label><input type="text" name="firstname"id="firstname"/></p>
            <p><label for="file">Votre fichier : </label><input type="file" name="file"</p>
            <p><input name="submit" type="submit" value="Envoyer"></p>
        </form>
        <?php
    }
    ?>
</html>
