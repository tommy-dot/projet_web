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
        <h1 class="titre">EXO13</h1>
    </header>
    <body>
    <?php
function afficherDateHeure() {
    $jour = date('d');
    $mois = date('F');
    $annee = date('Y');
    $heure = date('H:i');
    echo "Nous sommes le : " . $jour . " " . $mois . " " . $annee . "<br>";
    echo "Il est " . $heure;
}
afficherDateHeure();
?>
<p>
    ?php<br>
function afficherDateHeure() {<br>
    $jour = date('d');<br>
    $mois = date('F');<br>
    $annee = date('Y');<br>
    $heure = date('H:i');<br>
    echo "Nous sommes le : " . $jour . " " . $mois . " " . $annee . "";<br>
    echo "Il est " . $heure;<br>
}<br>
afficherDateHeure();<br>
?><br>
    </p>
    <a href="../index.php">retours</a>
         </body>
</html>