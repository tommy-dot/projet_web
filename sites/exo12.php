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
        <h1 class="titre">EXO12</h1>
    </header>
    <body>
    <?php

function inverserChaine($chaine) {
    return strrev($chaine);
}

$maChaine = "Bonjour";
$maChaineInversee = inverserChaine($maChaine);

echo "La chaine originale est : ".$maChaine;
echo "<br>";
echo "La chaine inversée est : ".$maChaineInversee;
?>
   <h2>code brute :  </h2>
    <p>
    ?php<br>
function inverserChaine($chaine) {<br>
    return strrev($chaine);<br>
}<br>

$maChaine = "Bonjour";<br>
$maChaineInversee = inverserChaine($maChaine);<br>
<br>
echo "La chaine originale est : ".$maChaine;<br>
echo "La chaine inversée est : ".$maChaineInversee;<br>
?><br>
    </p>
    <a href="../index.php" class="button">Retour</a>         
           </body>
</html>