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
        <h1 class="titre">EXO10</h1>
    </header>
    <body>
    <form action="" method="post">
    <label>Entrez un nombre : <input type="text" name="nbre"></label>
    <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_POST['nbre'])) {
    $nbre = $_POST['nbre'];
    $somme = 0;
    for ($i = 1; $i <= $nbre; $i++) {
        $somme += $i;
    }
    echo "Somme des entiers de 1 à " . $nbre . " : " . $somme . "<br>";
}
?>
<?php
if (isset($_POST['nbre'])) {
    $nbre = $_POST['nbre'];
    $somme = 0;
    for ($i = 1; $i <= $nbre; $i++) {
        $somme += $i;
    }
    echo "Somme des entiers de 1 à " . $nbre . " : " . $somme . "<br>";
}
?>
   <h2>code brute :  </h2>
    <p>
    ?php<br>
if (isset($_POST['nbre'])) {<br>
    $nbre = $_POST['nbre'];<br>
    $somme = 0;<br>
    for ($i = 1; $i <= $nbre; $i++) {<br>
        $somme += $i;<br>
    }<br>
    echo "Somme des entiers de 1 à " . $nbre . " : " . $somme . "";<br>
}<br>
?><br>
?php<br>
if (isset($_POST['nbre'])) {<br>
    $nbre = $_POST['nbre'];<br>
    $somme = 0;<br>
    for ($i = 1; $i <= $nbre; $i++) {<br>
        $somme += $i;<br>
    }<br>
    echo "Somme des entiers de 1 à " . $nbre . " : " . $somme . "";<br>
}<br>
?><br>
    </p>
    <a href="../index.php">retours</a>

         </body>
</html>