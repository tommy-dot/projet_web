<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>projet</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <meta name="Author" content="Galet">
	<meta name="description" content="rendu_galet"/>	
  </head>
    <header>
        <h1 class="titre">EXO6</h1>
    </header>
    <body>
    <?php
echo "Numéro de version de PHP : " . PHP_VERSION;
?>
<br>
<?php
echo "Système d'exploitation : " . PHP_OS;
?>
<br>
<?php
echo "Langue du navigateur : " . $_SERVER['HTTP_ACCEPT_LANGUAGE'];
?>

<h2>code brute :  </h2>
<p>
?php
echo "Numéro de version de PHP : " . PHP_VERSION;
?>
<br>
?php
echo "Système d'exploitation : " . PHP_OS;
?>
<br>
?php
echo "Langue du navigateur : " . $_SERVER['HTTP_ACCEPT_LANGUAGE'];
?>
</p>
<a href="../index.php" class="button">Retour</a>         
           </body>
</html>