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
        <h1 class="titre">EXO11</h1>
    </header>
    <body>
    <?php
$tableau = array(5, 10, 15, 20);
$somme = 0;
foreach ($tableau as $nombre) {
    $somme += $nombre;
}
echo "La somme des nombres dans le tableau est : " . $somme . "<br>";
?>
<?php
function somme($tableau) {
    $somme = 0;
    foreach ($tableau as $nombre) {
        $somme += $nombre;
    }
    return $somme;
}
$tableau = array(5, 10, 15, 20);
echo "La somme des nombres dans le tableau est : " . somme($tableau) . "<br>";
?>

<?php
require_once 'somme.php';
$tableau = array(5, 10, 15, 20);
echo "La somme des nombres dans le tableau est : " . somme($tableau) . "<br>";
?>

<h2>code brute :  </h2>
    <p>
    ?php<br>
$tableau = array(5, 10, 15, 20);<br>
$somme = 0;<br>
foreach ($tableau as $nombre) {<br>
    $somme += $nombre;<br>
}<br>
echo "La somme des nombres dans le tableau est : " . $somme . "";<br>
?><br>
?php<br>
function somme($tableau) {<br>
    $somme = 0;<br>
    foreach ($tableau as $nombre) {<br>
        $somme += $nombre;<br>
    }<br>
    return $somme;<br>
}<br>
$tableau = array(5, 10, 15, 20);<br>
echo "La somme des nombres dans le tableau est : " . somme($tableau) . "";<br>
?><br>
?php<br>
require_once 'somme.php';<br>
$tableau = array(5, 10, 15, 20);<br>
echo "La somme des nombres dans le tableau est : " . somme($tableau) . "";<br>
?><br>

    </p>
    <a href="../index.php" class="button">Retour</a>         
           </body>
</html>