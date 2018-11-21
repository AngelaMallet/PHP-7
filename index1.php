<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <h1>Bienvenue</h1>
    <h2>Commencez-donc par vous inscrire :</h2>
    <form action="user1.php" method="GET">
        <p><label for="lastname">Votre nom : </label><input type="text" name="lastname" id="lastname"/></p>
        <p><label for="firstname">Votre prénom : </label><input type="text" name="firstname"id="firstname"/></p>
        <p><input type="submit" value="envoyer"></p>
    </form>

</html>
